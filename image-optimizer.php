<?php
/**
 * Image Optimizer - Resize e Conversão para WebP
 *
 * Este script processa imagens (JPG, JPEG, PNG) e:
 * - Redimensiona mantendo proporção
 * - Converte para formato WebP
 * - Otimiza qualidade e tamanho
 *
 * Uso: Acesse via navegador: http://localhost/grupoab/image-optimizer.php
 */

// Configurações
$config = [
    'source_dir' => __DIR__ . '/assets/img/original/', // Pasta de origem (crie esta pasta e coloque as imagens aqui)
    'output_dir' => __DIR__ . '/assets/img/optimized/', // Pasta de saída
    'max_width' => 1920,  // Largura máxima
    'max_height' => 1080, // Altura máxima
    'quality' => 85,      // Qualidade WebP (0-100, 85 é recomendado)
    'allowed_types' => ['jpg', 'jpeg', 'png', 'gif'],
];

// Criar diretórios se não existirem
if (!file_exists($config['source_dir'])) {
    mkdir($config['source_dir'], 0777, true);
}
if (!file_exists($config['output_dir'])) {
    mkdir($config['output_dir'], 0777, true);
}

// Processar imagens
$results = [];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['process'])) {
    $files = scandir($config['source_dir']);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $file_path = $config['source_dir'] . $file;
        $file_info = pathinfo($file_path);
        $extension = strtolower($file_info['extension']);

        // Verificar se é um tipo permitido
        if (!in_array($extension, $config['allowed_types'])) {
            continue;
        }

        try {
            // Carregar imagem baseado no tipo
            switch ($extension) {
                case 'jpg':
                case 'jpeg':
                    $image = imagecreatefromjpeg($file_path);
                    break;
                case 'png':
                    $image = imagecreatefrompng($file_path);
                    break;
                case 'gif':
                    $image = imagecreatefromgif($file_path);
                    break;
                default:
                    continue 2;
            }

            if (!$image) {
                $errors[] = "Erro ao carregar: $file";
                continue;
            }

            // Obter dimensões originais
            $original_width = imagesx($image);
            $original_height = imagesy($image);

            // Calcular novas dimensões mantendo proporção
            $ratio = min(
                $config['max_width'] / $original_width,
                $config['max_height'] / $original_height,
                1 // Não aumentar imagens menores
            );

            $new_width = (int)($original_width * $ratio);
            $new_height = (int)($original_height * $ratio);

            // Criar nova imagem redimensionada
            $new_image = imagecreatetruecolor($new_width, $new_height);

            // Preservar transparência para PNG
            if ($extension === 'png') {
                imagealphablending($new_image, false);
                imagesavealpha($new_image, true);
                $transparent = imagecolorallocatealpha($new_image, 255, 255, 255, 127);
                imagefilledrectangle($new_image, 0, 0, $new_width, $new_height, $transparent);
            }

            // Redimensionar
            imagecopyresampled(
                $new_image, $image,
                0, 0, 0, 0,
                $new_width, $new_height,
                $original_width, $original_height
            );

            // Salvar como WebP
            $output_filename = $file_info['filename'] . '.webp';
            $output_path = $config['output_dir'] . $output_filename;

            imagewebp($new_image, $output_path, $config['quality']);

            // Calcular tamanhos
            $original_size = filesize($file_path);
            $new_size = filesize($output_path);
            $reduction = round((1 - ($new_size / $original_size)) * 100, 2);

            $results[] = [
                'original' => $file,
                'output' => $output_filename,
                'original_dimensions' => "{$original_width}x{$original_height}",
                'new_dimensions' => "{$new_width}x{$new_height}",
                'original_size' => formatBytes($original_size),
                'new_size' => formatBytes($new_size),
                'reduction' => $reduction . '%',
            ];

            // Liberar memória
            imagedestroy($image);
            imagedestroy($new_image);

        } catch (Exception $e) {
            $errors[] = "Erro ao processar $file: " . $e->getMessage();
        }
    }
}

// Função para formatar bytes
function formatBytes($bytes, $precision = 2) {
    $units = ['B', 'KB', 'MB', 'GB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= (1 << (10 * $pow));
    return round($bytes, $precision) . ' ' . $units[$pow];
}

// Contar arquivos nas pastas
$source_files = array_diff(scandir($config['source_dir']), ['.', '..']);
$output_files = array_diff(scandir($config['output_dir']), ['.', '..']);
$source_count = count(array_filter($source_files, function($file) use ($config) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    return in_array($ext, $config['allowed_types']);
}));
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Optimizer - Grupo AB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            border-bottom: 3px solid #094490;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .config-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .stats {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-card {
            flex: 1;
            background: linear-gradient(135deg, #094490 0%, #0a5ab5 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
        .stat-card.orange {
            background: linear-gradient(135deg, #FF7621 0%, #ff9651 100%);
        }
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 10px 0;
        }
        .btn-process {
            background: #094490;
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .btn-process:hover {
            background: #FF7621;
            transform: translateY(-2px);
        }
        .result-table {
            margin-top: 30px;
        }
        .badge-reduction {
            background: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-images"></i> Image Optimizer</h1>
            <p class="text-muted mb-0">Redimensione e converta imagens para WebP com otimização automática</p>
        </div>

        <div class="config-box">
            <h5><i class="fas fa-cog"></i> Configurações Atuais</h5>
            <div class="row mt-3">
                <div class="col-md-6">
                    <p><strong>Pasta de Origem:</strong> <code><?php echo $config['source_dir']; ?></code></p>
                    <p><strong>Pasta de Saída:</strong> <code><?php echo $config['output_dir']; ?></code></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Dimensões Máximas:</strong> <?php echo $config['max_width']; ?>x<?php echo $config['max_height']; ?>px</p>
                    <p><strong>Qualidade WebP:</strong> <?php echo $config['quality']; ?>%</p>
                    <p><strong>Formatos Aceitos:</strong> <?php echo strtoupper(implode(', ', $config['allowed_types'])); ?></p>
                </div>
            </div>
        </div>

        <div class="stats">
            <div class="stat-card">
                <i class="fas fa-folder-open fa-2x"></i>
                <div class="stat-number"><?php echo $source_count; ?></div>
                <div>Imagens para Processar</div>
            </div>
            <div class="stat-card orange">
                <i class="fas fa-check-circle fa-2x"></i>
                <div class="stat-number"><?php echo count($output_files); ?></div>
                <div>Imagens Processadas</div>
            </div>
        </div>

        <div class="alert alert-info">
            <i class="fas fa-info-circle"></i> <strong>Como usar:</strong>
            <ol class="mb-0 mt-2">
                <li>Coloque suas imagens originais na pasta: <code><?php echo $config['source_dir']; ?></code></li>
                <li>Clique no botão "Processar Imagens" abaixo</li>
                <li>As imagens otimizadas estarão em: <code><?php echo $config['output_dir']; ?></code></li>
            </ol>
        </div>

        <form method="POST" class="text-center mb-4">
            <button type="submit" name="process" class="btn-process">
                <i class="fas fa-magic"></i> Processar Imagens
            </button>
        </form>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <h5><i class="fas fa-exclamation-triangle"></i> Erros:</h5>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($results)): ?>
            <div class="result-table">
                <h4 class="mb-3"><i class="fas fa-check-circle text-success"></i> Resultados do Processamento</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Arquivo Original</th>
                                <th>Arquivo WebP</th>
                                <th>Dimensões Originais</th>
                                <th>Novas Dimensões</th>
                                <th>Tamanho Original</th>
                                <th>Novo Tamanho</th>
                                <th>Redução</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($result['original']); ?></td>
                                    <td><strong><?php echo htmlspecialchars($result['output']); ?></strong></td>
                                    <td><?php echo $result['original_dimensions']; ?></td>
                                    <td><?php echo $result['new_dimensions']; ?></td>
                                    <td><?php echo $result['original_size']; ?></td>
                                    <td><?php echo $result['new_size']; ?></td>
                                    <td><span class="badge-reduction"><?php echo $result['reduction']; ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="alert alert-success mt-3">
                    <i class="fas fa-check-circle"></i> <strong>Sucesso!</strong>
                    <?php echo count($results); ?> imagem(ns) processada(s) com sucesso!
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
