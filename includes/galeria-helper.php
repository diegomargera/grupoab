<?php
/**
 * Helper para gerar galeria dinâmica de imagens
 *
 * @param string $galeria_dir Diretório relativo das imagens (ex: 'assets/img/produtos/porta-pallets/')
 * @param string $produto_nome Nome do produto para o texto alternativo (ex: 'Porta Pallets')
 * @param array $colunas_responsivas Array com classes de colunas Bootstrap (padrão: col-md-6 col-lg-3)
 */
function renderGaleria($galeria_dir, $produto_nome, $colunas_responsivas = 'col-md-6 col-lg-3') {
    // Extensões de imagem permitidas
    $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

    // Caminho completo do diretório
    $galeria_path = $_SERVER['DOCUMENT_ROOT'] . '/grupoab/' . $galeria_dir;

    // Verificar se o diretório existe
    if (!is_dir($galeria_path)) {
        echo '<div class="col-12"><div class="alert alert-warning text-center">';
        echo '<i class="fas fa-folder-open"></i> Diretório de galeria não encontrado: ' . htmlspecialchars($galeria_dir);
        echo '</div></div>';
        return;
    }

    // Ler arquivos do diretório
    $arquivos = scandir($galeria_path);
    $imagens = [];

    // Filtrar apenas arquivos de imagem
    foreach ($arquivos as $arquivo) {
        if ($arquivo === '.' || $arquivo === '..') continue;

        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
        if (in_array($extensao, $extensoes_permitidas)) {
            // Pegar informações do arquivo
            $file_path = $galeria_path . $arquivo;
            $imagens[] = [
                'nome' => $arquivo,
                'modificado' => filemtime($file_path)
            ];
        }
    }

    // Ordenar imagens por nome (você pode mudar para 'modificado' se quiser por data)
    usort($imagens, function($a, $b) {
        return strcmp($a['nome'], $b['nome']);
    });

    // Verificar se há imagens
    if (empty($imagens)) {
        echo '<div class="col-12"><div class="alert alert-info text-center">';
        echo '<i class="fas fa-images"></i> Nenhuma imagem encontrada nesta galeria.';
        echo '<br><small class="text-muted">Adicione imagens em: ' . htmlspecialchars($galeria_dir) . '</small>';
        echo '</div></div>';
        return;
    }

    // Renderizar imagens
    $contador = 1;
    foreach ($imagens as $imagem) {
        $imagem_url = BASE_URL . $galeria_dir . $imagem['nome'];
        $alt_text = $produto_nome . " - Imagem " . $contador;
        ?>
        <div class="<?php echo $colunas_responsivas; ?>">
            <div class="galeria-item" style="cursor: pointer;"
                 data-bs-toggle="modal"
                 data-bs-target="#imageModal"
                 data-image="<?php echo htmlspecialchars($imagem_url); ?>"
                 data-alt="<?php echo htmlspecialchars($alt_text); ?>">
                <img src="<?php echo htmlspecialchars($imagem_url); ?>"
                     alt="<?php echo htmlspecialchars($alt_text); ?>"
                     class="img-fluid rounded shadow"
                     loading="lazy">
            </div>
        </div>
        <?php
        $contador++;
    }
}
?>
