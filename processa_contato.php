<?php
/**
 * Processa o formulário de contato
 * Grupo AB - Site Institucional
 */

// Inclui o arquivo de configuração
require_once 'config.php';

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Recebe e sanitiza os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Validação básica
    $erros = [];

    if (empty($nome)) {
        $erros[] = "O nome é obrigatório.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "E-mail inválido.";
    }

    if (empty($mensagem)) {
        $erros[] = "A mensagem é obrigatória.";
    }

    // Se não houver erros, processa o envio
    if (empty($erros)) {

        // Aqui você pode:
        // 1. Enviar um e-mail
        // 2. Salvar no banco de dados
        // 3. Integrar com um CRM
        // 4. Etc.

        // Exemplo de envio de e-mail (descomente para usar)
        /*
        $para = CONTACT_EMAIL;
        $assunto = "Novo contato do site - " . SITE_NAME;
        $corpo = "
            <html>
            <head>
                <title>Novo Contato</title>
            </head>
            <body>
                <h2>Novo contato recebido</h2>
                <p><strong>Nome:</strong> {$nome}</p>
                <p><strong>E-mail:</strong> {$email}</p>
                <p><strong>Telefone:</strong> {$telefone}</p>
                <p><strong>Mensagem:</strong></p>
                <p>{$mensagem}</p>
            </body>
            </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: {$email}" . "\r\n";

        if (mail($para, $assunto, $corpo, $headers)) {
            $sucesso = true;
        } else {
            $erros[] = "Erro ao enviar o e-mail. Tente novamente.";
        }
        */

        // Por enquanto, apenas simula sucesso
        $sucesso = true;

        // Salva em arquivo de log (opcional)
        $log = date('Y-m-d H:i:s') . " - Nome: {$nome}, E-mail: {$email}, Telefone: {$telefone}, Mensagem: {$mensagem}\n";
        file_put_contents('contatos.log', $log, FILE_APPEND);

    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - <?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5 text-center">
                        <?php if (isset($sucesso) && $sucesso): ?>
                            <!-- Mensagem de Sucesso -->
                            <div class="mb-4">
                                <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                            </div>
                            <h2 class="fw-bold mb-3">Mensagem Enviada!</h2>
                            <p class="text-muted mb-4">
                                Obrigado por entrar em contato, <strong><?php echo htmlspecialchars($nome); ?></strong>!<br>
                                Recebemos sua mensagem e retornaremos em breve.
                            </p>
                            <a href="<?php echo BASE_URL; ?>" class="btn btn-primary btn-lg">
                                <i class="fas fa-home me-2"></i>Voltar para o Site
                            </a>
                        <?php else: ?>
                            <!-- Mensagem de Erro -->
                            <div class="mb-4">
                                <i class="fas fa-exclamation-circle text-danger" style="font-size: 4rem;"></i>
                            </div>
                            <h2 class="fw-bold mb-3">Ops! Algo deu errado</h2>
                            <div class="alert alert-danger text-start">
                                <ul class="mb-0">
                                    <?php foreach ($erros as $erro): ?>
                                        <li><?php echo htmlspecialchars($erro); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <a href="<?php echo BASE_URL; ?>index.php#contato" class="btn btn-primary btn-lg">
                                <i class="fas fa-arrow-left me-2"></i>Tentar Novamente
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
