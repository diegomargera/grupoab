<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o código de resposta HTTP 404
http_response_code(404);

// Define o título da página
$page_title = 'Página não encontrada - Erro 404';
$page_description = 'A página que você está procurando não foi encontrada. Visite nossa página inicial para conhecer nossos Sistemas de Armazenagem.';
$page_keywords = 'erro 404, página não encontrada, grupo ab';

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- 404 Section -->
<section class="error-404-section" style="min-height: 80vh; display: flex; align-items: center; padding-top: 100px; padding-bottom: 60px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="error-404-content">
                    <h1 class="error-404-number mb-4" style="font-size: 120px; font-weight: bold; color: var(--cor-azul);">
                        404
                    </h1>
                    <h2 class="error-404-title mb-4" style="font-size: 32px; font-weight: bold; color: var(--cor-azul);">
                        Página Não Encontrada
                    </h2>
                    <p class="error-404-description mb-5" style="font-size: 18px; color: #666;">
                        Desculpe, a página que você está procurando não existe ou foi movida.<br>
                        Vamos ajudá-lo a encontrar o que precisa!
                    </p>

                    <div class="error-404-actions mb-5">
                        <a href="<?php echo BASE_URL; ?>" class="btn btn-primary btn-lg me-3 mb-3">
                            <i class="fas fa-home me-2"></i>Voltar para Home
                        </a>
                        <a href="<?php echo BASE_URL; ?>produtos.php" class="btn btn-outline-primary btn-lg mb-3">
                            <i class="fas fa-box me-2"></i>Ver Produtos
                        </a>
                    </div>

                    <!-- Links Úteis -->
                    <div class="error-404-links">
                        <h4 class="mb-4" style="color: var(--cor-azul);">Links Úteis</h4>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a href="<?php echo BASE_URL; ?>porta-pallets.php" class="d-block p-3 border rounded text-decoration-none hover-shadow">
                                    <i class="fas fa-layer-group fa-2x mb-2" style="color: var(--cor-laranja);"></i>
                                    <h5 style="color: var(--cor-azul);">Porta Pallets</h5>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php echo BASE_URL; ?>estantes-industriais.php" class="d-block p-3 border rounded text-decoration-none hover-shadow">
                                    <i class="fas fa-boxes-stacked fa-2x mb-2" style="color: var(--cor-laranja);"></i>
                                    <h5 style="color: var(--cor-azul);">Estantes Industriais</h5>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php echo BASE_URL; ?>mezaninos.php" class="d-block p-3 border rounded text-decoration-none hover-shadow">
                                    <i class="fas fa-building fa-2x mb-2" style="color: var(--cor-laranja);"></i>
                                    <h5 style="color: var(--cor-azul);">Mezaninos</h5>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php echo BASE_URL; ?>empilhadeira-eletrica.php" class="d-block p-3 border rounded text-decoration-none hover-shadow">
                                    <i class="fas fa-forklift fa-2x mb-2" style="color: var(--cor-laranja);"></i>
                                    <h5 style="color: var(--cor-azul);">Empilhadeira Elétrica</h5>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php echo BASE_URL; ?>institucional.php" class="d-block p-3 border rounded text-decoration-none hover-shadow">
                                    <i class="fas fa-building-user fa-2x mb-2" style="color: var(--cor-laranja);"></i>
                                    <h5 style="color: var(--cor-azul);">Institucional</h5>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php echo BASE_URL; ?>orcamento.php" class="d-block p-3 border rounded text-decoration-none hover-shadow">
                                    <i class="fas fa-file-invoice-dollar fa-2x mb-2" style="color: var(--cor-laranja);"></i>
                                    <h5 style="color: var(--cor-azul);">Solicitar Orçamento</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.hover-shadow {
    transition: all 0.3s ease;
}
.hover-shadow:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transform: translateY(-5px);
}
</style>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
