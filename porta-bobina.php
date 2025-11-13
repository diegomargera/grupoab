<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Porta Bobina - Sistema Especializado para Bobinas e Rolos';
$page_description = 'Porta Bobina do Grupo AB: sistema especializado para armazenagem de bobinas, rolos de papel, plástico, tecido e materiais cilíndricos. Estrutura com braços em balanço e acesso seletivo.';
$page_keywords = 'porta bobina, armazenagem de bobinas, porta rolos, sistema para bobinas, armazenagem de papel, porta bobina metálico, estrutura para rolos, bobineira';
$page_image = BASE_URL . 'assets/img/produtos/sections/porta-bobina-section-1.webp';
$page_url = BASE_URL . 'porta-bobina.php';
$canonical_url = BASE_URL . 'porta-bobina.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php',
    'Porta Bobina' => BASE_URL . 'porta-bobina.php'
];

// Schema de Produto
$product_schema = [
    'name' => 'Porta Bobina',
    'description' => 'Sistema porta bobina projetado com braços em balanço para apoio adequado de bobinas em diferentes diâmetros e pesos. Ideal para empresas que trabalham com papel, plástico, tecido e materiais cilíndricos.',
    'image' => BASE_URL . 'assets/img/produtos/sections/porta-bobina-section-1.webp',
    'category' => 'Sistemas de Armazenagem Especial'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Porta Bobina -->
<section class="hero-section hero-produto-porta-bobina" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
    <!-- Background com Animação -->
    <div class="hero-background-porta-bobina"></div>

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
                    Porta <span class="text-laranja">Bobina</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Sistema especializado para armazenagem de bobinas, rolos e materiais cilíndricos com segurança, organização e máxima eficiência operacional.
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
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/sections/porta-bobina-section-1.webp" alt="Porta Bobina" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Armazenagem Especializada para</span> <span class="text-laranja">Bobinas</span>
                </h2>
                <p class="mb-4">
                    O sistema Porta Bobina do Grupo AB é a solução ideal para empresas que trabalham com bobinas de papel, plástico, tecido, arame, chapas metálicas e outros materiais em formato cilíndrico que exigem armazenamento específico.
                </p>
                <p class="mb-4">
                    Projetado com braços em balanço que permitem o apoio adequado das bobinas em diferentes diâmetros e pesos, o sistema garante estabilidade, facilita o manuseio e preserva a integridade dos materiais armazenados.
                </p>
                <p class="mb-4">
                    Com estrutura robusta e configuração modular, nossos porta bobinas oferecem acesso facilitado para empilhadeiras, otimizam o espaço vertical disponível e proporcionam organização visual de todo o estoque de materiais cilíndricos.
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
                            Acesso individual a cada bobina sem necessidade de movimentar outras
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Estrutura que evita deformação e danos às bobinas
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Compatível com diversos tipos de empilhadeiras
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-box-branco p-4 h-100">
                    <h4 class="fw-bold mb-4 text-azul">
                        Versatilidade de Aplicação
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Adaptável para diferentes diâmetros e pesos de bobinas
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Configuração personalizada conforme tipo de material
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Possibilidade de armazenamento vertical e horizontal
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
                        <i class="fas fa-circle-notch fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Design Especializado para Bobinas</h5>
                    <p class="mb-0">
                        Sistema com braços projetados especificamente para suportar cargas cilíndricas. Geometria que distribui uniformemente o peso da bobina, evitando deformações e mantendo a qualidade do material armazenado.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-hand-pointer fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Acesso Direto e Seletivo</h5>
                    <p class="mb-0">
                        Cada bobina pode ser acessada individualmente sem necessidade de movimentar outras. Sistema que agiliza operações de picking e reposição, reduzindo tempo de manuseio e aumentando produtividade.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Proteção e Preservação do Material</h5>
                    <p class="mb-0">
                        Estrutura que mantém as bobinas suspensas e protegidas do contato com o solo. Sistema que evita amassamentos, rasgos, umidade e outros danos que comprometem a qualidade do produto.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-arrows-alt-v fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Otimização Vertical do Espaço</h5>
                    <p class="mb-0">
                        Aproveita ao máximo o pé-direito disponível através de múltiplos níveis de armazenagem. Solução que multiplica a capacidade de estocagem sem necessidade de expansão da área física.
                    </p>
                </div>
            </div>

            <!-- Vantagem 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Configuração Personalizada</h5>
                    <p class="mb-0">
                        Sistema totalmente adaptável às dimensões e pesos das bobinas. Braços ajustáveis ou customizáveis para diferentes comprimentos, permitindo armazenar desde pequenos rolos até bobinas de grande porte.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-eye fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Visibilidade e Controle de Estoque</h5>
                    <p class="mb-0">
                        Armazenamento organizado que facilita a identificação visual de cada bobina. Melhora significativamente o controle de estoque, rastreabilidade e gestão do inventário de materiais.
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
            <p class="text-muted">Conheça as principais aplicações para Porta Bobina</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-newspaper fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Papel e Celulose</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-tshirt fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Têxtil</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-recycle fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Plásticos</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-industry fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Siderurgia</h5>
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
            renderGaleria('assets/img/produtos/porta-bobina/', 'porta-bobina');
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
