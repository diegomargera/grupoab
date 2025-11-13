<?php
/**
 * Configurações Gerais do Site
 * Grupo AB - Site Institucional
 */

// Configurações do Site
define('SITE_NAME', 'Grupo AB');
define('SITE_DESCRIPTION', 'Soluções em Sistemas de Armazenagem com tecnologia e qualidade');
define('SITE_KEYWORDS', 'sistemas de armazenagem, porta pallets, estruturas metálicas, armazenagem industrial, logística, estantes industriais, mezaninos, prateleiras');
define('SITE_AUTHOR', 'Grupo AB');

// URLs
define('BASE_URL', 'http://localhost/grupoab/');
define('ASSETS_URL', BASE_URL . 'assets/');
define('CSS_URL', BASE_URL . 'css/');
define('JS_URL', BASE_URL . 'js/');
define('IMAGES_URL', BASE_URL . 'images/');

// Informações de Contato e Localização
define('CONTACT_EMAIL', 'contato@grupoab.com.br');
define('CONTACT_PHONE', '(47) 3054-5400');
define('CONTACT_WHATSAPP', '554730545400');
define('CONTACT_ADDRESS', 'Rua Maestro Valdir Maia, 410');
define('CONTACT_CITY', 'Balneário Camboriú');
define('CONTACT_STATE', 'SC');
define('CONTACT_ZIPCODE', '88339-045');
define('CONTACT_COUNTRY', 'Brasil');
define('CONTACT_LATITUDE', '-26.9904');
define('CONTACT_LONGITUDE', '-48.6359');

// Redes Sociais
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/grupoabsistemasdearmazenagen');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/grupoabarmazenagem?igsh=MTV0Y21yOWxrN2NzNQ==');
define('SOCIAL_LINKEDIN', '#');
define('SOCIAL_WHATSAPP', 'https://wa.me/554730545400');

// Configurações de Timezone
date_default_timezone_set('America/Sao_Paulo');

// Ano atual para o footer
define('CURRENT_YEAR', date('Y'));

// Configurações de Erro (Desenvolvimento)
// Em produção, altere para false
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
