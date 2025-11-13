<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Porta Pallets - Sistemas de Armazenagem Vertical';
$page_description = 'Porta Pallets seletivo do Grupo AB: sistemas de armazenagem vertical robustos para otimizar espaço em centros de distribuição. Estruturas metálicas certificadas com acesso direto aos paletes.';
$page_keywords = 'porta pallets, porta paletes, estrutura porta pallets, armazenagem vertical, porta pallet seletivo, sistema de armazenagem, estruturas metálicas, rack porta pallets, armazenagem industrial';
$page_image = BASE_URL . 'assets/img/produtos/sections/porta-pallets-section-1.webp';
$page_url = BASE_URL . 'porta-pallets.php';
$canonical_url = BASE_URL . 'porta-pallets.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php',
    'Porta Pallets' => BASE_URL . 'porta-pallets.php'
];

// Schema de Produto
$product_schema = [
    'name' => 'Porta Pallets Seletivo',
    'description' => 'Sistema de armazenagem vertical porta pallets seletivo, ideal para centros de distribuição que necessitam acesso direto aos paletes. Estrutura robusta em aço com capacidades de carga personalizáveis.',
    'image' => BASE_URL . 'assets/img/produtos/sections/porta-pallets-section-1.webp',
    'category' => 'Sistemas de Armazenagem Vertical'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Porta Pallets -->
<section class="hero-section hero-produto-porta-pallets" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
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
                    Porta <span class="text-laranja">Pallet</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Sistema amplamente utilizado no mundo, o Porta Pallet oferece acesso direto e individual a cada pallet ou tipo de carga.
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
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/sections/porta-pallets-section-1.webp" alt="Porta Pallets" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Verticalização Inteligente do</span> <span class="text-laranja">Espaço</span>
                </h2>
                <p class="mb-4">
                    No Grupo AB, cada projeto é desenvolvido de forma personalizada, levando em consideração as necessidades específicas e as características operacionais de cada empresa. Nosso objetivo é claro: maximizar o uso do espaço, otimizar fluxos logísticos e elevar a produtividade em todos os níveis da operação.
                </p>
                <p class="mb-4">
                    Os sistemas de armazenagem tipo pallets são soluções indispensáveis para empresas que buscam organização, agilidade e controle total do estoque. Amplamente utilizados em centros de distribuição, armazéns e operações de grande escala, os sistemas do Grupo AB oferecem flexibilidade, robustez e escalabilidade — adaptando-se com precisão ao crescimento da sua estrutura.
                </p>
                <p class="mb-4">
                    Com design modular e características técnicas avançadas, os porta pallets proporcionam excelente desempenho na separação de pedidos, operam com média a alta rotatividade de produtos e podem ser expandidos para estruturas de grande porte, adequando-se a qualquer tipo de layout.
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
                            Compatível com todos os modelos de empilhadeiras disponíveis no mercado
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Suporta diferentes dimensões, pesos e volumes de carga
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Permite operações manuais (picking) ao nível do solo ou integração com sistemas automatizados
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
                            Armazenamento de pallets em qualquer sentido de posicionamento
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Excelente desempenho em operações com alta diversidade de produtos
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Possibilidade de expansão e customização conforme a evolução do negócio
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
                        <i class="fas fa-boxes fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Organização Inteligente para sua Empresa</h5>
                    <p class="mb-0">
                        Soluções que maximizam o aproveitamento do espaço e garantem a melhor organização no armazenamento de mercadorias. Estruturas modulares e verticalizadas, projetadas para receber produtos de diferentes tamanhos, volumes e pesos, com total eficiência e segurança.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Integração e Controle Eficiente de Estoque</h5>
                    <p class="mb-0">
                        Desenvolvido com tecnologia de ponta e engenharia precisa, o sistema oferece operação simples, ágil e intuitiva. Facilita o acesso, a localização e o controle das mercadorias, otimizando o fluxo logístico e a gestão de estoque.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Alta Resistência e Manutenção Simplificada</h5>
                    <p class="mb-0">
                        Com perfis desmontáveis e estrutura parafusada, o sistema garante fácil transporte, montagem rápida e baixo custo de manutenção. A resistência à corrosão assegura maior durabilidade e desempenho mesmo em ambientes industriais exigentes.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-sync-alt fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Armazenamento Otimizado e de Alto Desempenho</h5>
                    <p class="mb-0">
                        Projetado para garantir excelente rotatividade de produtos, o sistema otimiza o uso do espaço e melhora o fluxo de entrada e saída de mercadorias, contribuindo para uma gestão mais eficiente dos prazos de validade e giro de estoque.
                    </p>
                </div>
            </div>

            <!-- Vantagem 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-user-shield fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Segurança Máxima nas Operações</h5>
                    <p class="mb-0">
                        Cumprindo rigorosamente as normas técnicas de segurança, o sistema foi projetado para proteger operadores e mercadorias em todas as etapas de movimentação e armazenagem, reduzindo riscos e aumentando a confiabilidade operacional.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-sliders-h fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Flexibilidade Total de Configuração</h5>
                    <p class="mb-0">
                        Altamente versátil, o sistema se adapta às necessidades específicas de cada operação. Permite configurações personalizadas conforme o tipo de carga, altura de armazenagem e dinâmica logística da empresa.
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
            <p class="text-muted">Conheça as principais aplicações para o Porta Palete</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-box-open fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Separação de Produtos</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-industry fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Pulmão de Produção</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-warehouse fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Estoque</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-truck-loading fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Centros de Distribuição</h5>
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
            // Incluir helper de galeria
            include 'includes/galeria-helper.php';

            // Renderizar galeria dinamicamente
            renderGaleria('assets/img/produtos/porta-pallets/', 'Porta Pallets');
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
