<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Início';
$page_description = 'Grupo AB - Soluções completas em Sistemas de Armazenagem: Porta Pallets, Estantes Industriais, Mezaninos, Cantilever, Empilhadeiras e Paleteiras Elétricas. Projetos personalizados em todo Brasil.';
$page_keywords = 'grupo ab, sistemas de armazenagem, porta pallets, estantes industriais, mezaninos metálicos, cantilever, empilhadeira elétrica, paleteira elétrica, armazenagem industrial, estruturas metálicas, centro de distribuição';
$page_image = BASE_URL . 'assets/img/logo/logo-grupo-ab.svg';
$page_url = BASE_URL;
$canonical_url = BASE_URL;

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section - Carousel -->
<section id="home" class="hero-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner h-100">
            <!-- Slide 1 -->
            <div class="carousel-item active h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 text-white">
                            <h1 class="display-3 fw-bold mb-4">
                                Sistemas de Armazenagem de Alta Performance
                            </h1>
                            <p class="lead mb-4">
                                Oferecemos tecnologia e desenvolvemos soluções completas em Sistemas de Armazenagem,
                                maximizando os resultados do seu negócio.
                            </p>
                            <div>
                                <a href="<?php echo BASE_URL; ?>orcamento.php" class="btn btn-primary btn-lg me-3">
                                    Solicite um Orçamento
                                </a>
                                <a href="#servicos" class="btn btn-outline-light btn-lg">
                                    Nossas Soluções
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block text-center">
                           
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 text-white">
                            <h1 class="display-3 fw-bold mb-4">
                                Porta Pallets e Estruturas Metálicas
                            </h1>
                            <p class="lead mb-4">
                                Soluções robustas e seguras para armazenamento vertical,
                                otimizando o espaço do seu centro de distribuição.
                            </p>
                            <div>
                                <a href="<?php echo BASE_URL; ?>porta-pallets.php" class="btn btn-primary btn-lg me-3">
                                    Ver Produtos
                                </a>
                                <a href="<?php echo BASE_URL; ?>orcamento.php" class="btn btn-outline-light btn-lg">
                                    Fale Conosco
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block text-center">
                          
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7 text-white">
                            <h1 class="display-3 fw-bold mb-4">
                                Projetos Personalizados
                            </h1>
                            <p class="lead mb-4">
                                Desenvolvemos soluções sob medida para atender as necessidades
                                específicas da sua operação logística.
                            </p>
                            <div>
                                <a href="<?php echo BASE_URL; ?>institucional.php" class="btn btn-primary btn-lg me-3">
                                    Conheça o Grupo AB
                                </a>
                                <a href="#portfolio" class="btn btn-outline-light btn-lg">
                                    Ver Projetos
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block text-center">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>

<!-- Section Institucional - Centro Tecnológico -->
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
                    <a href="<?php echo BASE_URL; ?>institucional.php" class="btn-institutional">
                        <i class="fas fa-arrow-right me-2"></i>SAIBA MAIS
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Soluções Integradas Section -->
<section id="solucoes" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="section-badge">Soluções Completas</span>
                <h2 class="section-title mb-4">
                    Transforme seu<br><span class="text-laranja">Centro de Distribuição</span>
                </h2>
                <p class="text-muted mb-4">
                    Oferecemos soluções integradas que vão além da simples venda de produtos. Nossa
                    equipe especializada acompanha todo o processo, desde o planejamento até a
                    instalação e manutenção.
                </p>

                <div class="solution-steps">
                    <div class="solution-step">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h5>Análise e Planejamento</h5>
                            <p>Avaliação completa do espaço e necessidades operacionais</p>
                        </div>
                    </div>
                    <div class="solution-step">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h5>Projeto Personalizado</h5>
                            <p>Desenvolvimento de solução sob medida para seu negócio</p>
                        </div>
                    </div>
                    <div class="solution-step">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h5>Instalação Profissional</h5>
                            <p>Equipe técnica especializada e certificada</p>
                        </div>
                    </div>
                    <div class="solution-step">
                        <div class="step-number">04</div>
                        <div class="step-content">
                            <h5>Suporte Contínuo</h5>
                            <p>Manutenção e assistência técnica permanente</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-azul">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="stat-number">+1000</h3>
                            <p class="stat-label">Sistemas Instalados</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-laranja">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="stat-number">+500</h3>
                            <p class="stat-label">Clientes Atendidos</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-amarelo">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3 class="stat-number">+10</h3>
                            <p class="stat-label">Anos de Mercado</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-azul">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="stat-number">100%</h3>
                            <p class="stat-label">Qualidade Garantida</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-laranja">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h3 class="stat-number">BR</h3>
                            <p class="stat-label">Atuação em todo território nacional</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-amarelo">
                                <i class="fas fa-industry"></i>
                            </div>
                            <h3 class="stat-number">+10</h3>
                            <p class="stat-label">Segmentos que atuamos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Presença Nacional Section -->
<section id="presenca-nacional" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="section-badge">Nossa Atuação</span>
                <h2 class="section-title mb-4">
                    Presentes em todo o<br>
                    <span class="text-laranja">Território Nacional</span>
                </h2>
                <p class="presenca-text mb-3">
                    O Grupo AB leva tecnologia e inovação em sistemas de armazenagem para todos os
                    cantos do Brasil. Com uma estrutura logística robusta e equipes especializadas,
                    atendemos empresas de todos os portes em qualquer região do país.
                </p>
                <p class="presenca-text mb-3">
                    Nossa experiência e compromisso nos permitem desenvolver e implementar projetos
                    personalizados, garantindo soluções eficientes e adequadas às necessidades específicas
                    de cada cliente, independentemente de sua localização.
                </p>
                <p class="presenca-text mb-4">
                    Do Sul ao Norte, do Leste ao Oeste, estamos prontos para transformar seu centro de
                    distribuição com as melhores soluções em armazenagem, sempre com a qualidade e
                    excelência que são a marca do Grupo AB.
                </p>
            </div>

            <div class="col-lg-6">
                <div class="mapa-brasil-container">
                    <img src="<?php echo BASE_URL; ?>assets/img/mapa/mapa-do-brasil.svg" alt="Mapa do Brasil - Atuação Grupo AB" class="mapa-brasil-img">
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

<?php include 'includes/cta-projeto.php'; ?>

<?php include 'includes/orcamento-cta.php'; ?>

<?php include 'includes/produtos-armazenagem.php'; ?>

<?php include 'includes/empilhadeiras.php'; ?>

<?php include 'includes/paleteira-eletrica.php'; ?>

<?php include 'includes/clientes.php'; ?>

<!-- Contato Section -->
<section id="contato" class="py-5" style="background-color: var(--cor-azul);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-info-text">
                    <h2 class="contact-main-title mb-4">
                        Entre em<br>
                        <span class="text-laranja">contato conosco</span>
                    </h2>
                    <p class="contact-description">
                        Agradecemos sua visita! Estamos aqui para ajudar você a encontrar as melhores
                        soluções em sistemas de armazenagem.
                    </p>
                    <p class="contact-description">
                        Fique à vontade para falar conosco, tirar suas dúvidas e solicitar cotações.
                        Nossa equipe está pronta para atender você!
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-box">
                    <form id="contactForm" method="POST" action="processa_contato.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="nome" class="form-control-contact" placeholder="Nome Completo *" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control-contact" placeholder="E-mail *" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="telefone" class="form-control-contact" placeholder="Telefone *" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="empresa" class="form-control-contact" placeholder="Empresa">
                            </div>
                            <div class="col-12">
                                <textarea name="mensagem" class="form-control-contact" rows="5" placeholder="Sua mensagem..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-contact-form">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
