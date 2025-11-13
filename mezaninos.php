<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Mezaninos Metálicos - Amplie sua Área Útil Verticalmente';
$page_description = 'Mezaninos Metálicos do Grupo AB: estruturas modulares para criar andares intermediários e multiplicar área útil. Solução inteligente sem obras civis para armazenagem e escritórios elevados.';
$page_keywords = 'mezanino metálico, mezanino industrial, estrutura mezanino, piso mezanino, mezanino para armazém, mezanino modular, ampliação vertical, estrutura metálica';
$page_image = BASE_URL . 'assets/img/produtos/sections/mezaninos-section-1.webp';
$page_url = BASE_URL . 'mezaninos.php';
$canonical_url = BASE_URL . 'mezaninos.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php',
    'Mezaninos' => BASE_URL . 'mezaninos.php'
];

// Schema de Produto
$product_schema = [
    'name' => 'Mezaninos Metálicos',
    'description' => 'Mezaninos metálicos modulares projetados para criar andares intermediários e multiplicar a área útil. Estrutura em aço de alta resistência, ideal para armazenagem, escritórios ou setores produtivos.',
    'image' => BASE_URL . 'assets/img/produtos/sections/mezaninos-section-1.webp',
    'category' => 'Estruturas Metálicas'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Mezaninos -->
<section class="hero-section hero-produto-mezaninos" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
    <!-- Background com Animação -->
    <div class="hero-background-mezaninos"></div>

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
                    Mezaninos <span class="text-laranja">Metálicos</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Multiplique sua área útil sem obras civis. Solução inteligente para otimização vertical do espaço, criando novos níveis de armazenagem e operação.
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
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/sections/mezaninos-section-1.webp" alt="Mezaninos" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Amplie seu Espaço de Forma</span> <span class="text-laranja">Inteligente</span>
                </h2>
                <p class="mb-4">
                    Os mezaninos metálicos do Grupo AB são estruturas projetadas para criar andares intermediários, possibilitando a multiplicação da área útil sem a necessidade de ampliação física do galpão ou obras civis complexas.
                </p>
                <p class="mb-4">
                    Ideais para operações que necessitam aumentar a capacidade de armazenagem ou criar áreas administrativas, escritórios, salas de reunião ou até mesmo novos setores produtivos. O mezanino aproveita o pé-direito disponível, transformando espaço vertical ocioso em área útil produtiva.
                </p>
                <p class="mb-4">
                    Com estrutura modular em aço de alta resistência, nossos mezaninos são projetados sob medida para cada necessidade, considerando carga, dimensões, acessos e funcionalidade específica de cada operação.
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
                            Instalação rápida sem necessidade de obras civis complexas
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Estrutura desmontável e relocável para nova instalação
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Possibilidade de integração com sistemas de armazenagem
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-box-branco p-4 h-100">
                    <h4 class="fw-bold mb-4 text-azul">
                        Versatilidade de Uso
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Diversos tipos de piso: chapa xadrez, madeira, MDF ou steel deck
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Múltiplas opções de acesso: escadas, elevadores, monta-cargas
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Projeto customizado para diferentes cargas e utilizações
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
                        <i class="fas fa-chart-area fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Máximo Aproveitamento de Espaço</h5>
                    <p class="mb-0">
                        Duplica ou triplica a área útil disponível aproveitando o pé-direito do galpão. Solução que elimina a necessidade de expansão horizontal ou mudança de instalações, gerando economia significativa.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-hard-hat fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Instalação Rápida e Sem Obras</h5>
                    <p class="mb-0">
                        Estrutura modular de montagem rápida que dispensa obras civis complexas. Instalação limpa, organizada e com mínima interferência nas operações existentes da empresa.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-drafting-compass fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Projeto Sob Medida</h5>
                    <p class="mb-0">
                        Cada mezanino é projetado especificamente para as necessidades do cliente, considerando dimensões, capacidade de carga, tipo de piso, acessos e funcionalidade desejada.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-recycle fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Estrutura Relocável</h5>
                    <p class="mb-0">
                        Sistema totalmente desmontável que pode ser removido e reinstalado em outro local. Proporciona flexibilidade para acompanhar mudanças e crescimento da empresa sem perda de investimento.
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
                        Estrutura robusta dimensionada para suportar cargas elevadas com total segurança. Permite instalação de sistemas de armazenagem no nível superior, maximizando ainda mais a capacidade.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-puzzle-piece fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Múltiplas Aplicações</h5>
                    <p class="mb-0">
                        Versátil para diversos usos: armazenagem adicional, áreas administrativas, escritórios, salas de reunião, showrooms, áreas de produção ou qualquer necessidade de expansão vertical.
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
            <p class="text-muted">Conheça as principais aplicações para Mezaninos</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-warehouse fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Armazenagem Vertical</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-building fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Escritórios Elevados</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-users fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Salas de Reunião</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-shopping-cart fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Showrooms</h5>
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
            renderGaleria('assets/img/produtos/mezaninos/', 'Mezaninos');
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
