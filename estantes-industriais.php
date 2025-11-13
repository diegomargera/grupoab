<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Estantes Industriais - Prateleiras Metálicas de Alta Resistência';
$page_description = 'Estantes Industriais e prateleiras metálicas do Grupo AB: sistema de armazenagem manual para cargas leves e médias. Estruturas modulares ajustáveis ideais para picking e organização de estoque.';
$page_keywords = 'estantes industriais, prateleiras metálicas, estantes de aço, armazenagem manual, prateleiras ajustáveis, estantes para picking, longarina, sistema de armazenagem leve';
$page_image = BASE_URL . 'assets/img/produtos/sections/estantes-industriais-section-1.webp';
$page_url = BASE_URL . 'estantes-industriais.php';
$canonical_url = BASE_URL . 'estantes-industriais.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php',
    'Estantes Industriais' => BASE_URL . 'estantes-industriais.php'
];

// Schema de Produto
$product_schema = [
    'name' => 'Estantes Industriais',
    'description' => 'Estantes industriais e prateleiras metálicas ajustáveis para armazenagem manual de cargas leves e médias. Sistema modular com bandejas removíveis, ideal para picking e organização de estoque.',
    'image' => BASE_URL . 'assets/img/produtos/sections/estantes-industriais-section-1.webp',
    'category' => 'Sistemas de Armazenagem Manual'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Estantes Industriais -->
<section class="hero-section hero-produto-estantes-industriais" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
    <!-- Background com Animação -->
    <div class="hero-background-estante-industrial"></div>

    <!-- Overlay -->
    <div class="hero-overlay"></div>
</section>

<!-- Título e Descrição do Produto -->
<section class="produto-info-section" style="background-color: var(--cor-azul); min-height: 200px; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Lado Esquerdo - Título -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h1 class="fw-bold text-white">
                    Estantes <span class="text-laranja">Industriais</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Solução versátil e robusta para armazenagem de produtos médios e pequenos, com alta capacidade de organização e acesso direto aos itens.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Descrição do Produto -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/sections/estantes-industriais-section-1.webp" alt="Estantes Industriais" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Organização Eficiente para</span> <span class="text-laranja">Produtos Variados</span>
                </h2>
                <p class="mb-4">
                    As estantes industriais do Grupo AB são projetadas para proporcionar máxima eficiência no armazenamento de produtos de médio e pequeno porte. Ideais para almoxarifados, depósitos e áreas de armazenagem que necessitam de acesso rápido e organização impecável.
                </p>
                <p class="mb-4">
                    Com estrutura modular e versátil, nossas estantes permitem configurações personalizadas de acordo com as necessidades específicas de cada operação. O sistema oferece fácil montagem, alta resistência e excelente relação custo-benefício.
                </p>
                <p class="mb-4">
                    Fabricadas com materiais de alta qualidade e acabamento que garante durabilidade, as estantes industriais são a solução ideal para empresas que buscam otimizar o espaço e melhorar a produtividade operacional.
                </p>
            </div>
        </div>

        <!-- Vantagens Operacionais e Versatilidade -->
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="info-box-branco p-4 h-100">
                    <h4 class="fw-bold mb-4 text-azul">
                        Vantagens Operacionais
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Montagem simples e rápida sem necessidade de ferramentas especiais
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Prateleiras ajustáveis para diferentes alturas de produtos
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Sistema de encaixe que permite expansão e reconfiguração
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-box-branco p-4 h-100">
                    <h4 class="fw-bold mb-4 text-azul">
                        Versatilidade em Armazenagem
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Adequada para diversos tipos de produtos e mercadorias
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Capacidade de carga ajustável por prateleira
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Facilita inventário e controle visual do estoque
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Principais Vantagens -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">
                <span class="text-azul">Principais</span> <span class="text-laranja">Vantagens</span>
            </h2>
        </div>

        <div class="row g-4">
            <!-- Vantagem 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-layer-group fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Organização Modular Inteligente</h5>
                    <p class="mb-0">
                        Sistema modular que permite configurações personalizadas conforme o tipo de produto e necessidade de armazenamento. Prateleiras ajustáveis garantem máximo aproveitamento do espaço vertical.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-hand-holding-box fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Acesso Rápido e Prático</h5>
                    <p class="mb-0">
                        Acesso direto a todos os itens armazenados facilita operações de picking e reposição. Sistema ideal para ambientes que exigem alta movimentação e localização rápida de produtos.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-tools fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Montagem Descomplicada</h5>
                    <p class="mb-0">
                        Sistema de encaixe inteligente permite montagem rápida sem necessidade de parafusos ou ferramentas especiais. Estrutura pode ser desmontada e remontada facilmente quando necessário.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-balance-scale fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Alta Capacidade de Carga</h5>
                    <p class="mb-0">
                        Estrutura robusta suporta cargas pesadas com segurança. Cada prateleira é dimensionada para suportar o peso necessário, garantindo estabilidade e durabilidade do sistema.
                    </p>
                </div>
            </div>

            <!-- Vantagem 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-dollar-sign fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Excelente Custo-Benefício</h5>
                    <p class="mb-0">
                        Solução econômica que oferece alta performance e durabilidade. Baixo custo de manutenção e possibilidade de expansão gradual conforme crescimento da operação.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Versatilidade Total</h5>
                    <p class="mb-0">
                        Adaptável para diversos segmentos industriais e comerciais. Sistema permite armazenar desde pequenas peças até caixas e produtos de médio porte com total eficiência.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aplicação Frequente -->
<section class="py-5 bg-light" style="min-height: 400px; display: flex; align-items: center;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">
                <span class="text-azul">Aplicação</span> <span class="text-laranja">Frequente</span>
            </h2>
            <p class="text-muted">Conheça as principais aplicações para Estantes Industriais</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-toolbox fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Almoxarifados</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-store fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Comércio Varejista</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-boxes fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Depósitos</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Áreas de Produção</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galeria de Imagens -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">
                <span class="text-azul">Galeria de</span> <span class="text-laranja">Projetos</span>
            </h2>
        </div>

        <div class="row g-4">
            <?php
            include 'includes/galeria-helper.php';
            renderGaleria('assets/img/produtos/estantes-industriais/', 'Estantes Industriais');
            ?>
        </div>
    </div>
</section>

<!-- Modal para Zoom de Imagens -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="imageModalLabel">Imagem do Projeto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="modalImage" src="" alt="" class="img-fluid" style="max-height: 80vh; width: auto;">
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
        imageModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const imageSrc = button.getAttribute('data-image');
            const imageAlt = button.getAttribute('data-alt');

            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('imageModalLabel');

            modalImage.src = imageSrc;
            modalImage.alt = imageAlt;
            modalTitle.textContent = imageAlt;
        });
    }
});
</script>

<!-- CTA Orçamento -->
<?php include 'includes/orcamento-cta.php'; ?>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
