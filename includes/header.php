<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P7Z7NQBL');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME . ' - ' . SITE_DESCRIPTION; ?></title>

    <?php
    // Inclui funções SEO
    require_once __DIR__ . '/seo-functions.php';

    // Configuração de SEO padrão ou específica da página
    if (!isset($seo_config)) {
        $seo_config = [
            'title' => isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME,
            'description' => isset($page_description) ? $page_description : SITE_DESCRIPTION,
            'keywords' => isset($page_keywords) ? $page_keywords : SITE_KEYWORDS,
            'image' => isset($page_image) ? $page_image : BASE_URL . 'assets/img/logo/logo-grupo-ab.svg',
            'url' => isset($page_url) ? $page_url : BASE_URL,
            'canonical' => isset($canonical_url) ? $canonical_url : null
        ];
    }

    // Gera todas as meta tags SEO
    generate_seo_tags($seo_config);
    ?>

    <!-- Meta Tags Adicionais -->
    <meta name="language" content="pt-BR">
    <meta name="geo.region" content="BR-SC">
    <meta name="geo.placename" content="<?php echo CONTACT_CITY; ?>">
    <meta name="geo.position" content="<?php echo CONTACT_LATITUDE; ?>;<?php echo CONTACT_LONGITUDE; ?>">
    <meta name="ICBM" content="<?php echo CONTACT_LATITUDE; ?>, <?php echo CONTACT_LONGITUDE; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo BASE_URL; ?>assets/img/favicon/favicon.svg">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>assets/img/favicon/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>assets/img/favicon/favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Customizado -->
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>style.css?v=<?php echo time(); ?>">

    <!-- CSS Inline para garantir cores da navbar -->
    <style>
        /* Navbar Background - SEMPRE AZUL */
        .navbar {
            background-color: #094490 !important;
            background: #094490 !important;
        }

        /* Textos da Navbar - SEMPRE BRANCO */
        .navbar-nav .nav-link,
        .navbar-nav .dropdown-toggle,
        .nav-item .nav-link,
        a.nav-link {
            color: #FFFFFF !important;
            font-size: 16px !important;
            font-weight: 600 !important;
            opacity: 1 !important;
            visibility: visible !important;
            display: inline-block !important;
        }

        /* Hover - SEMPRE LARANJA */
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus,
        .navbar-nav .dropdown-toggle:hover,
        .nav-item .nav-link:hover,
        a.nav-link:hover {
            color: #FF7621 !important;
        }

        /* Logo SVG */
        .navbar-brand img {
            height: 50px;
            max-height: 50px;
            width: auto;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        /* Ícone do Logo - SEMPRE LARANJA */
        .navbar-brand i {
            color: #FF7621 !important;
        }

        /* Seta do Dropdown - SEMPRE BRANCO */
        .dropdown-toggle::after {
            color: #FFFFFF !important;
            border-top-color: #FFFFFF !important;
        }

        /* Link Ativo */
        .navbar-nav .nav-link.active {
            color: #FF7621 !important;
        }

        /* Garantir que não haja estilos escondendo elementos */
        .navbar * {
            visibility: visible !important;
        }
    </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7Z7NQBL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include 'loading.php'; ?>
