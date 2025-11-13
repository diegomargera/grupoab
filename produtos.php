<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Produtos - Sistemas de Armazenagem e Equipamentos';
$page_description = 'Conheça todos os produtos do Grupo AB: Porta Pallets, Estantes Industriais, Mezaninos Metálicos, Cantilever, Porta Bobina, Empilhadeiras e Paleteiras Elétricas. Soluções completas para armazenagem.';
$page_keywords = 'produtos armazenagem, catálogo porta pallets, produtos grupo ab, equipamentos armazenagem, sistemas de armazenagem completos';
$page_image = BASE_URL . 'assets/img/logo/logo-grupo-ab.svg';
$page_url = BASE_URL . 'produtos.php';
$canonical_url = BASE_URL . 'produtos.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Produtos -->
<section class="hero-section" style="min-height: 60vh; padding-top: 100px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-3 fw-bold mb-4">
                    Sistemas de <span class="text-laranja">Armazenagem</span>
                </h1>
                <p class="lead mb-4">
                    Soluções completas e personalizadas para otimizar seu espaço e maximizar resultados.
                    <br>Tecnologia, qualidade e segurança para sua operação logística.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/produtos-armazenagem.php'; ?>

<?php include 'includes/projeto-personalizado.php'; ?>

<!-- Section Benefícios -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title mb-4">
                Benefícios dos Nossos <span class="text-laranja">Sistemas</span>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-shield-alt fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Segurança Garantida</h5>
                    <p class="text-muted">
                        Estruturas certificadas e testadas que garantem máxima segurança para suas operações.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-tools fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Instalação Profissional</h5>
                    <p class="text-muted">
                        Equipe técnica especializada para instalação rápida e eficiente.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-cogs fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Projetos Personalizados</h5>
                    <p class="text-muted">
                        Soluções sob medida que atendem perfeitamente suas necessidades específicas.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4">
                    <div class="mb-3">
                        <i class="fas fa-headset fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Suporte Contínuo</h5>
                    <p class="text-muted">
                        Assistência técnica e manutenção permanente para sua tranquilidade.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
