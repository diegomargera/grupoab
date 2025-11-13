<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Cantilever Estrutural - Armazenagem para Cargas Longas';
$page_description = 'Cantilever Estrutural do Grupo AB: sistema ideal para armazenagem de tubos, perfis, madeiras e materiais longos. Estrutura com braços em balanço e acesso frontal totalmente livre.';
$page_keywords = 'cantilever, porta tubos, armazenagem de perfis, cantilever metálico, estrutura cantilever, armazenagem de barras, cantilever para madeira, sistema para materiais longos';
$page_image = BASE_URL . 'assets/img/produtos/sections/cantilever-section-1.webp';
$page_url = BASE_URL . 'cantilever.php';
$canonical_url = BASE_URL . 'cantilever.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php',
    'Cantilever' => BASE_URL . 'cantilever.php'
];

// Schema de Produto
$product_schema = [
    'name' => 'Cantilever Estrutural',
    'description' => 'Sistema cantilever especialmente projetado para armazenamento de materiais longos e volumosos. Braços em balanço sem colunas frontais oferecem acesso totalmente desobstruído à carga.',
    'image' => BASE_URL . 'assets/img/produtos/sections/cantilever-section-1.webp',
    'category' => 'Sistemas de Armazenagem Especial'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Cantilever -->
<section class="hero-section hero-produto-cantilever" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
    <!-- Background com Animação -->
    <div class="hero-background-cantilever"></div>

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
                    Cantilever <span class="text-laranja">Estrutural</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Sistema ideal para armazenagem de cargas longas e volumosas como tubos, perfis, madeiras, barras e materiais de grande comprimento.
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
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/sections/cantilever-section-1.webp" alt="Cantilever" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Solução Perfeita para</span> <span class="text-laranja">Cargas Longas</span>
                </h2>
                <p class="mb-4">
                    O sistema Cantilever do Grupo AB é especialmente projetado para o armazenamento de materiais longos e volumosos que não se adequam aos sistemas convencionais de armazenagem. Com braços em balanço sem colunas frontais, o cantilever oferece acesso totalmente desobstruído à carga.
                </p>
                <p class="mb-4">
                    Ideal para setores como metalurgia, construção civil, madeireiras, distribuidoras de tubos e perfis, o sistema cantilever proporciona organização eficiente, facilita o manuseio com empilhadeiras e garante a integridade dos materiais armazenados.
                </p>
                <p class="mb-4">
                    Com estrutura robusta e modular, o cantilever pode ser configurado em versões leve, média ou pesada, conforme a capacidade de carga necessária, e permite ajustes de altura dos braços para máxima flexibilidade operacional.
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
                            Acesso frontal totalmente livre sem obstruções
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Carga e descarga rápida com empilhadeiras convencionais
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Reduz risco de danos aos materiais durante manuseio
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-box-branco p-4 h-100">
                    <h4 class="fw-bold mb-4 text-azul">
                        Versatilidade Estrutural
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Braços ajustáveis para diferentes alturas e comprimentos
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Configuração simples ou dupla face conforme necessidade
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Capacidades de carga de leve a extra pesada
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
                        <i class="fas fa-ruler-horizontal fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Ideal para Materiais Longos</h5>
                    <p class="mb-0">
                        Sistema projetado especificamente para armazenar tubos, barras, perfis metálicos, madeiras, chapas e outros materiais de grande comprimento. Braços em balanço permitem acomodar peças de diversos tamanhos.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-unlock fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Acesso Frontal Desobstruído</h5>
                    <p class="mb-0">
                        Sem colunas frontais que impeçam o acesso direto à carga. Facilita significativamente as operações de carga e descarga com empilhadeiras, reduzindo tempo de manuseio e aumentando produtividade.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-compress-arrows-alt fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Máximo Aproveitamento de Espaço</h5>
                    <p class="mb-0">
                        Estrutura vertical que otimiza o uso do pé-direito disponível. Possibilidade de configuração dupla face para dobrar a capacidade de armazenagem em um único corredor de movimentação.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-adjust fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Flexibilidade de Ajuste</h5>
                    <p class="mb-0">
                        Braços facilmente reposicionáveis permitem ajustar a altura conforme necessidade. Sistema modular que pode ser expandido ou reconfigurado para acompanhar mudanças no mix de produtos armazenados.
                    </p>
                </div>
            </div>

            <!-- Vantagem 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-weight-hanging fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Alta Capacidade de Carga</h5>
                    <p class="mb-0">
                        Estrutura robusta dimensionada para suportar cargas pesadas com total segurança. Disponível em versões leve, média e pesada para atender diferentes necessidades operacionais e tipos de materiais.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-search fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Organização e Visibilidade</h5>
                    <p class="mb-0">
                        Armazenamento organizado que facilita a identificação e localização de materiais. Melhora controle de estoque, agiliza separação de pedidos e reduz tempo de busca na operação diária.
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
            <p class="text-muted">Conheça as principais aplicações para Cantilever</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-industry fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Siderúrgicas</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-tree fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Madeireiras</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-building fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Construção Civil</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-tools fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Distribuidoras</h5>
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
            renderGaleria('assets/img/produtos/cantilever/', 'cantilever');
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
