<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Flow Rack - Sistemas de Armazenagem';

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Flow Rack -->
<section class="hero-section hero-produto-flow-rack" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
    <!-- Background com Animação -->
    <div class="hero-background-animated"></div>

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
                    Flow <span class="text-laranja">Rack</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Sistema dinâmico de armazenagem com fluxo gravitacional, ideal para operações com alta rotatividade e método FIFO (First In, First Out).
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
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/section-1.webp" alt="Flow Rack" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Armazenagem Dinâmica com</span> <span class="text-laranja">Fluxo Contínuo</span>
                </h2>
                <p class="mb-4">
                    O sistema Flow Rack do Grupo AB é uma solução inovadora de armazenagem dinâmica que utiliza a força da gravidade para movimentar produtos automaticamente da área de reposição para a área de picking, garantindo o método FIFO (primeiro a entrar, primeiro a sair).
                </p>
                <p class="mb-4">
                    Com pistas inclinadas equipadas com rolos ou rodízios, os produtos deslizam suavemente da parte traseira para a frente da estrutura, mantendo sempre os itens mais antigos na posição de retirada. Ideal para operações que exigem alta velocidade de separação e controle rigoroso de validade.
                </p>
                <p class="mb-4">
                    O sistema é especialmente eficiente para centros de distribuição, e-commerce, supermercados, indústria farmacêutica e qualquer operação que necessite de picking ágil, organizado e com rotação garantida de estoque.
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
                            Reposição por trás e retirada pela frente (FIFO automático)
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Reduz tempo de picking em até 50%
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Elimina necessidade de organização manual de produtos
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
                            Configurável para diferentes tamanhos de caixas e produtos
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Integração perfeita com sistemas de picking e WMS
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Ajuste de inclinação e velocidade de deslizamento
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
                        <i class="fas fa-sort-amount-down fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">FIFO Automático Garantido</h5>
                    <p class="mb-0">
                        O fluxo gravitacional garante que o primeiro produto a entrar seja sempre o primeiro a sair, sem necessidade de controle manual. Essencial para produtos com prazo de validade como alimentos, medicamentos e cosméticos.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Máxima Velocidade de Picking</h5>
                    <p class="mb-0">
                        Produtos sempre posicionados na frente para fácil acesso. Operadores de picking trabalham com máxima ergonomia e velocidade, sem necessidade de buscar produtos no fundo da estrutura.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-people-arrows fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Separação de Fluxos Operacionais</h5>
                    <p class="mb-0">
                        Reposição realizada por um lado e picking pelo outro, evitando interferência entre operações. Melhora fluxo de trabalho, aumenta segurança e otimiza produtividade de ambas as equipes.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-boxes fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Densidade de Armazenagem</h5>
                    <p class="mb-0">
                        Armazena múltiplas unidades de cada SKU em profundidade, maximizando uso do espaço disponível. Reduz necessidade de reposição frequente e mantém maior quantidade de produtos acessíveis.
                    </p>
                </div>
            </div>

            <!-- Vantagem 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Aumento de Produtividade</h5>
                    <p class="mb-0">
                        Redução significativa do tempo de separação de pedidos e eliminação de deslocamentos desnecessários. Sistema que pode aumentar produtividade do picking em até 50% comparado a métodos convencionais.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-cog fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Sistema Totalmente Customizável</h5>
                    <p class="mb-0">
                        Configuração sob medida para diferentes tipos de produtos, embalagens e volumes. Pistas ajustáveis em largura, comprimento e inclinação para atender necessidades específicas de cada operação.
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
            <p class="text-muted">Conheça as principais aplicações para Flow Rack</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-truck-loading fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Centros de Distribuição</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-shopping-cart fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">E-commerce</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-prescription-bottle-alt fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Farmacêuticas</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-store fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Supermercados</h5>
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
            <div class="col-md-6 col-lg-3">
                <div class="galeria-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-1.webp" data-alt="Flow Rack Projeto 1">
                    <img src="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-1.webp" alt="Flow Rack Projeto 1" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="galeria-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-2.webp" data-alt="Flow Rack Projeto 2">
                    <img src="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-2.webp" alt="Flow Rack Projeto 2" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="galeria-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-3.webp" data-alt="Flow Rack Projeto 3">
                    <img src="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-3.webp" alt="Flow Rack Projeto 3" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="galeria-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-4.webp" data-alt="Flow Rack Projeto 4">
                    <img src="<?php echo BASE_URL; ?>assets/img/produtos/flow-rack/galeria-4.webp" alt="Flow Rack Projeto 4" class="img-fluid rounded shadow">
                </div>
            </div>
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
