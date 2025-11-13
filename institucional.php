<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Institucional - Conheça o Grupo AB';
$page_description = 'Conheça o Grupo AB: mais de 10 anos de experiência em Sistemas de Armazenagem. Oferecemos tecnologia, qualidade e soluções personalizadas para otimizar seu centro de distribuição.';
$page_keywords = 'grupo ab institucional, sobre o grupo ab, empresa armazenagem, história grupo ab, sistemas de armazenagem santa catarina, soluções logísticas';
$page_image = BASE_URL . 'assets/img/empresa/foto-grupo-ab-institucional-empresa.webp';
$page_url = BASE_URL . 'institucional.php';
$canonical_url = BASE_URL . 'institucional.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Institucional' => BASE_URL . 'institucional.php'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Institucional -->
<section class="hero-section" style="min-height: 60vh; padding-top: 100px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-3 fw-bold mb-4">
                    Conheça o <span class="text-laranja">Grupo AB</span>
                </h1>
                <p class="lead mb-4">
                    Tecnologia, inovação e excelência em sistemas de armazenagem.<br>
                    Construindo soluções que transformam negócios.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section Sobre o Grupo AB -->
<section class="institutional-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="institutional-image-wrapper">
                    <div class="institutional-decoration">
                        <div class="decoration-stripes"></div>
                    </div>
                    <div class="institutional-image">
                        <img src="<?php echo BASE_URL; ?>assets/img/empresa/foto-grupo-ab-institucional-empresa.webp" alt="Grupo AB" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="institutional-content">
                    <span class="text-sistemas-armazenagem">SISTEMAS DE ARMAZENAGEM GRUPO AB</span>
                    <h2 class="institutional-title mb-4">
                        Conheça o Grupo AB
                    </h2>
                    <p class="institutional-text mb-3">
                        O Grupo AB construiu, ao longo de sua trajetória, uma sólida relação com clientes e
                        fornecedores, oferecendo tecnologia e desenvolvendo soluções nos segmentos de
                        Sistemas de Armazenagem.
                    </p>
                    <p class="institutional-text mb-4">
                        Nosso objetivo é atuar com eficiência no fornecimento de produtos de qualidade,
                        entregando soluções eficazes e contribuindo para a maximização dos resultados de
                        nossos clientes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Localização Jaraguá do Sul Section -->
<section id="localizacao" class="py-5 position-relative" style="min-height: 600px; overflow: hidden;">
    <!-- Background Image -->
    <div class="localizacao-background"></div>

    <!-- Overlay -->
    <div class="localizacao-overlay"></div>

    <!-- Content -->
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <!-- Coluna Esquerda - Textos e Endereço -->
            <div class="col-lg-7 text-white mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4">
                    Estamos localizados em<br>
                    <span class="text-laranja">Jaraguá do Sul</span>
                </h2>
                <p class="mb-4">
                    Jaraguá do Sul é um dos principais polos industriais de Santa Catarina e do Brasil,
                    reconhecida por sua forte vocação industrial e excelência em produção. A cidade abriga
                    empresas de diversos setores, com destaque para o metal-mecânico, têxtil, alimentício
                    e tecnológico, consolidando-se como um importante centro econômico do Sul do país.
                </p>
                <p class="mb-4">
                    Estrategicamente localizada entre as capitais Curitiba e Florianópolis, Jaraguá do Sul
                    oferece infraestrutura logística privilegiada, conectando eficientemente as principais
                    rotas do país. Essa posição estratégica permite ao Grupo AB atender com agilidade
                    clientes em todo o território nacional.
                </p>

                <!-- Endereço -->
                <div class="endereco-box mt-4 p-4" style="background: rgba(9, 68, 144, 0.9); border-radius: 15px; backdrop-filter: blur(10px);">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-map-marker-alt text-laranja me-2"></i>
                        Nosso Endereço
                    </h5>
                    <p class="mb-2">
                        <strong>Rua Michele Christina Bartel, 230</strong>
                    </p>
                    <p class="mb-2">
                        Bairro Vieira
                    </p>
                    <p class="mb-0">
                        Jaraguá do Sul - SC | CEP: 89257-100
                    </p>
                </div>
            </div>

            <!-- Coluna Direita - Tabela de Proximidade -->
            <div class="col-lg-5">
                <div class="proximidade-box p-4" style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; backdrop-filter: blur(10px);">
                    <h4 class="fw-bold mb-4 text-azul">
                        <i class="fas fa-plane text-laranja me-2"></i>
                        Proximidade aos Aeroportos
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-borderless proximidade-table">
                            <tbody>
                                <tr>
                                    <td class="py-3">
                                        <i class="fas fa-location-dot text-laranja me-2"></i>
                                        <strong>Aeroporto de Joinville</strong>
                                    </td>
                                    <td class="text-end py-3">
                                        <span class="badge-distancia">50 km</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">
                                        <i class="fas fa-location-dot text-laranja me-2"></i>
                                        <strong>Aeroporto de Navegantes</strong>
                                    </td>
                                    <td class="text-end py-3">
                                        <span class="badge-distancia">80 km</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">
                                        <i class="fas fa-location-dot text-laranja me-2"></i>
                                        <strong>Aeroporto de Curitiba</strong>
                                    </td>
                                    <td class="text-end py-3">
                                        <span class="badge-distancia">180 km</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3">
                                        <i class="fas fa-location-dot text-laranja me-2"></i>
                                        <strong>Aeroporto de Florianópolis</strong>
                                    </td>
                                    <td class="text-end py-3">
                                        <span class="badge-distancia">200 km</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Segmentos que Atuamos Section -->
<section id="segmentos" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <span class="section-badge">Nossos Segmentos</span>
                <h2 class="section-title mb-4">
                    Segmentos<br> <span class="text-laranja"> que Atuamos</span>
                </h2>
                <p class="segmentos-text mb-4">
                    O Grupo AB atende diversos segmentos do mercado, oferecendo soluções personalizadas
                    em sistemas de armazenagem para cada tipo de negócio. Nossa expertise permite
                    desenvolver projetos específicos que atendem às necessidades de diferentes indústrias
                    e operações logísticas.
                </p>
                <p class="segmentos-text">
                    Com mais de 10 anos de experiência, dominamos as particularidades de cada segmento,
                    garantindo soluções eficientes e adequadas para sua operação.
                </p>
            </div>

            <div class="col-lg-7">
                <div class="row g-3">
                    <!-- Indústria de Alimentos -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h5 class="segmento-title">Indústria de<br>Alimentos</h5>
                        </div>
                    </div>

                    <!-- Cadeia do Frio e Frigoríficos -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-snowflake"></i>
                            </div>
                            <h5 class="segmento-title">Cadeia do Frio e<br>Frigoríficos</h5>
                        </div>
                    </div>

                    <!-- E-commerce -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-cart-shopping"></i>
                            </div>
                            <h5 class="segmento-title">E-commerce</h5>
                        </div>
                    </div>

                    <!-- Farma e Distribuidor Farma -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <h5 class="segmento-title">Farma e<br>Distribuidor Farma</h5>
                        </div>
                    </div>

                    <!-- Departamento -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <h5 class="segmento-title">Departamento</h5>
                        </div>
                    </div>

                    <!-- Logística Distribuição Geral -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-truck-fast"></i>
                            </div>
                            <h5 class="segmento-title">Logística<br>Distribuição Geral</h5>
                        </div>
                    </div>

                    <!-- Automotivo, Montadoras e Autopeças -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <h5 class="segmento-title">Automotivo, Montadoras<br>e Autopeças</h5>
                        </div>
                    </div>

                    <!-- Logística Distribuição Geral 2 -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-boxes-packing"></i>
                            </div>
                            <h5 class="segmento-title">Logística<br>Distribuição Geral</h5>
                        </div>
                    </div>

                    <!-- Serviços -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h5 class="segmento-title">Serviços</h5>
                        </div>
                    </div>

                    <!-- Indústria Geral -->
                    <div class="col-md-6">
                        <div class="segmento-card">
                            <div class="segmento-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <h5 class="segmento-title">Indústria<br>Geral</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nossos Valores Section -->
<section id="valores" class="py-5 bg-light" style="padding-top: 80px !important; padding-bottom: 80px !important;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Nossa Essência</span>
            <h2 class="section-title mb-4">
                Nossos <span class="text-laranja">Valores</span>
            </h2>
            <p class="section-description" style="line-height: 1.6;">
                Princípios que guiam nossas ações e definem nossa cultura organizacional
            </p>
        </div>

        <div class="row g-4">
            <!-- Companhia Humana -->
            <div class="col-md-6 col-lg-4">
                <div class="valor-card">
                    <div class="valor-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="valor-title">Companhia Humana</h4>
                    <p class="valor-text">
                        Valorizamos cada contribuição individual para o nosso sucesso e promovemos um
                        ambiente baseado na integridade, na ética e no incentivo ao desenvolvimento pessoal.
                    </p>
                </div>
            </div>

            <!-- Trabalho em Equipe -->
            <div class="col-md-6 col-lg-4">
                <div class="valor-card">
                    <div class="valor-icon">
                        <i class="fas fa-people-group"></i>
                    </div>
                    <h4 class="valor-title">Trabalho em Equipe</h4>
                    <p class="valor-text">
                        Acreditamos na força do coletivo para unir conhecimento, inteligência e habilidade,
                        aprimorando continuamente nossos processos e fortalecendo a entrega de valor aos clientes.
                    </p>
                </div>
            </div>

            <!-- Eficiência -->
            <div class="col-md-6 col-lg-4">
                <div class="valor-card">
                    <div class="valor-icon">
                        <i class="fas fa-gauge-high"></i>
                    </div>
                    <h4 class="valor-title">Eficiência</h4>
                    <p class="valor-text">
                        A eficiência está no centro de tudo o que fazemos — dos produtos que desenvolvemos aos
                        processos que executamos — sempre com foco em resultados concretos.
                    </p>
                </div>
            </div>

            <!-- Flexibilidade -->
            <div class="col-md-6 col-lg-4">
                <div class="valor-card">
                    <div class="valor-icon">
                        <i class="fas fa-arrows-spin"></i>
                    </div>
                    <h4 class="valor-title">Flexibilidade</h4>
                    <p class="valor-text">
                        Nossa agilidade na entrega é um diferencial competitivo. Adaptamos nossos serviços e
                        volumes conforme a demanda específica de cada cliente, garantindo soluções no tempo certo.
                    </p>
                </div>
            </div>

            <!-- Inovação -->
            <div class="col-md-6 col-lg-4">
                <div class="valor-card">
                    <div class="valor-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="valor-title">Inovação</h4>
                    <p class="valor-text">
                        Estimulamos a inovação como caminho para a sustentabilidade e o crescimento. Incentivamos
                        ideias que antecipem o futuro e impulsionem a evolução da empresa.
                    </p>
                </div>
            </div>

            <!-- Liderança -->
            <div class="col-md-6 col-lg-4">
                <div class="valor-card">
                    <div class="valor-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h4 class="valor-title">Liderança</h4>
                    <p class="valor-text">
                        Atuamos com protagonismo em nosso setor, guiando com responsabilidade, visão estratégica
                        e compromisso com a excelência.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Números do Grupo AB -->
<section id="numeros" class="py-5" style="background-color: var(--cor-azul); padding-top: 80px !important; padding-bottom: 80px !important;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge" style="background: rgba(255, 255, 255, 0.2); color: var(--cor-branco);">Nossos Resultados</span>
            <h2 class="section-title mb-4" style="color: var(--cor-branco);">
                Números do <span class="text-laranja">Grupo AB</span>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-laranja">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="numero-value">+1000</h3>
                    <p class="numero-label">Sistemas Instalados</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-amarelo">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="numero-value">+500</h3>
                    <p class="numero-label">Clientes Atendidos</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-laranja">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="numero-value">+10</h3>
                    <p class="numero-label">Anos de Mercado</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-amarelo">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="numero-value">100%</h3>
                    <p class="numero-label">Qualidade Garantida</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-laranja">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 class="numero-value">BR</h3>
                    <p class="numero-label">Atuação Nacional</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-amarelo">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="numero-value">+10</h3>
                    <p class="numero-label">Segmentos Atendidos</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-laranja">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="numero-value">100%</h3>
                    <p class="numero-label">Compromisso</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="numero-card">
                    <div class="numero-icon bg-amarelo">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="numero-value">100%</h3>
                    <p class="numero-label">Segurança</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
