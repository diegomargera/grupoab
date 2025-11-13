<?php
/**
 * Funções de SEO - Meta Tags e Schema.org
 * Grupo AB - Site Institucional
 */

/**
 * Gera meta tags Open Graph
 */
function generate_og_tags($title, $description, $image = '', $url = '') {
    $image = $image ?: BASE_URL . 'assets/img/logo/logo-grupo-ab.svg';
    $url = $url ?: BASE_URL;

    echo '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . "\n";
    echo '    <meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '    <meta property="og:image" content="' . htmlspecialchars($image) . '">' . "\n";
    echo '    <meta property="og:url" content="' . htmlspecialchars($url) . '">' . "\n";
    echo '    <meta property="og:type" content="website">' . "\n";
    echo '    <meta property="og:locale" content="pt_BR">' . "\n";
    echo '    <meta property="og:site_name" content="' . SITE_NAME . '">' . "\n";
}

/**
 * Gera meta tags Twitter Card
 */
function generate_twitter_tags($title, $description, $image = '') {
    $image = $image ?: BASE_URL . 'assets/img/logo/logo-grupo-ab.svg';

    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '    <meta name="twitter:title" content="' . htmlspecialchars($title) . '">' . "\n";
    echo '    <meta name="twitter:description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '    <meta name="twitter:image" content="' . htmlspecialchars($image) . '">' . "\n";
}

/**
 * Gera Schema.org para Organização
 */
function generate_organization_schema() {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => BASE_URL,
        'logo' => BASE_URL . 'assets/img/logo/logo-grupo-ab.svg',
        'description' => SITE_DESCRIPTION,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => CONTACT_ADDRESS,
            'addressLocality' => CONTACT_CITY,
            'addressRegion' => CONTACT_STATE,
            'postalCode' => CONTACT_ZIPCODE,
            'addressCountry' => 'BR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => CONTACT_LATITUDE,
            'longitude' => CONTACT_LONGITUDE
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+' . CONTACT_WHATSAPP,
            'contactType' => 'Sales',
            'email' => CONTACT_EMAIL,
            'availableLanguage' => 'Portuguese'
        ],
        'sameAs' => [
            SOCIAL_FACEBOOK,
            SOCIAL_INSTAGRAM
        ]
    ];

    echo '<script type="application/ld+json">' . "\n";
    echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo "\n" . '    </script>' . "\n";
}

/**
 * Gera Schema.org para Produto
 */
function generate_product_schema($product_name, $description, $image, $category = 'Sistemas de Armazenagem') {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => $product_name,
        'description' => $description,
        'image' => $image,
        'brand' => [
            '@type' => 'Brand',
            'name' => SITE_NAME
        ],
        'category' => $category,
        'manufacturer' => [
            '@type' => 'Organization',
            'name' => SITE_NAME,
            'url' => BASE_URL
        ],
        'offers' => [
            '@type' => 'AggregateOffer',
            'priceCurrency' => 'BRL',
            'availability' => 'https://schema.org/InStock',
            'seller' => [
                '@type' => 'Organization',
                'name' => SITE_NAME
            ]
        ]
    ];

    echo '<script type="application/ld+json">' . "\n";
    echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo "\n" . '    </script>' . "\n";
}

/**
 * Gera Schema.org para LocalBusiness
 */
function generate_local_business_schema() {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => SITE_NAME,
        'image' => BASE_URL . 'assets/img/logo/logo-grupo-ab.svg',
        'description' => SITE_DESCRIPTION,
        '@id' => BASE_URL,
        'url' => BASE_URL,
        'telephone' => CONTACT_PHONE,
        'email' => CONTACT_EMAIL,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => CONTACT_ADDRESS,
            'addressLocality' => CONTACT_CITY,
            'addressRegion' => CONTACT_STATE,
            'postalCode' => CONTACT_ZIPCODE,
            'addressCountry' => 'BR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => CONTACT_LATITUDE,
            'longitude' => CONTACT_LONGITUDE
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday'
            ],
            'opens' => '08:00',
            'closes' => '18:00'
        ],
        'sameAs' => [
            SOCIAL_FACEBOOK,
            SOCIAL_INSTAGRAM
        ]
    ];

    echo '<script type="application/ld+json">' . "\n";
    echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo "\n" . '    </script>' . "\n";
}

/**
 * Gera Schema.org para Breadcrumb
 */
function generate_breadcrumb_schema($items) {
    $itemListElement = [];
    $position = 1;

    foreach ($items as $name => $url) {
        $itemListElement[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => $name,
            'item' => $url
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $itemListElement
    ];

    echo '<script type="application/ld+json">' . "\n";
    echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo "\n" . '    </script>' . "\n";
}

/**
 * Gera todas as meta tags necessárias
 */
function generate_seo_tags($config) {
    $defaults = [
        'title' => SITE_NAME,
        'description' => SITE_DESCRIPTION,
        'keywords' => SITE_KEYWORDS,
        'image' => BASE_URL . 'assets/img/logo/logo-grupo-ab.svg',
        'url' => BASE_URL,
        'type' => 'website',
        'canonical' => null
    ];

    $config = array_merge($defaults, $config);

    // Title e Meta Description
    echo '<meta name="description" content="' . htmlspecialchars($config['description']) . '">' . "\n";
    echo '    <meta name="keywords" content="' . htmlspecialchars($config['keywords']) . '">' . "\n";
    echo '    <meta name="author" content="' . SITE_AUTHOR . '">' . "\n";

    // Canonical URL
    if ($config['canonical']) {
        echo '    <link rel="canonical" href="' . htmlspecialchars($config['canonical']) . '">' . "\n";
    }

    // Robots
    echo '    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">' . "\n";

    // Open Graph
    echo '    ' . "\n";
    generate_og_tags($config['title'], $config['description'], $config['image'], $config['url']);

    // Twitter Card
    echo '    ' . "\n";
    generate_twitter_tags($config['title'], $config['description'], $config['image']);
}
?>
