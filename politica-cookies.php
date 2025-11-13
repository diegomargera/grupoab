<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Política de Cookies';

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Header da Página -->
<section class="page-header py-5" style="background: linear-gradient(135deg, var(--cor-azul) 0%, #0a2f5f 100%); min-height: 300px; padding-top: 200px !important;">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="text-white text-center">
            <h1 class="display-4 fw-bold mb-3">Política de Cookies</h1>
            <p class="lead">Última atualização: 11/11/2025</p>
        </div>
    </div>
</section>

<!-- Conteúdo da Política -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="content-box bg-white p-5 rounded shadow-sm">

                    <h2 class="mb-4 text-azul">O que são Cookies?</h2>
                    <p class="mb-4">
                        Cookies são pequenos arquivos de texto que são armazenados no seu dispositivo (computador,
                        tablet ou smartphone) quando você visita um site. Eles são amplamente utilizados para fazer
                        os sites funcionarem de forma mais eficiente e fornecer informações aos proprietários do site.
                    </p>

                    <h2 class="mb-4 text-azul">Como Usamos Cookies</h2>
                    <p class="mb-4">
                        O Grupo AB utiliza cookies para melhorar sua experiência de navegação, analisar o tráfego do
                        site e personalizar conteúdo. Os cookies nos ajudam a entender como você usa nosso site e
                        como podemos melhorá-lo.
                    </p>

                    <h2 class="mb-4 text-azul">Tipos de Cookies que Utilizamos</h2>

                    <div class="mb-4">
                        <h4 class="text-laranja mb-3">1. Cookies Essenciais</h4>
                        <p>
                            Estes cookies são necessários para o funcionamento básico do site. Eles permitem que você
                            navegue pelo site e use recursos essenciais. Sem esses cookies, alguns serviços não podem
                            ser fornecidos.
                        </p>
                        <ul>
                            <li>Cookies de sessão do usuário</li>
                            <li>Cookies de segurança</li>
                            <li>Cookies de consentimento de cookies</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-laranja mb-3">2. Cookies de Desempenho</h4>
                        <p>
                            Estes cookies coletam informações sobre como os visitantes usam nosso site, como quais
                            páginas são mais visitadas. Todos os dados coletados são anônimos e usados apenas para
                            melhorar o funcionamento do site.
                        </p>
                        <ul>
                            <li>Google Analytics</li>
                            <li>Cookies de análise de tráfego</li>
                            <li>Cookies de monitoramento de erros</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-laranja mb-3">3. Cookies de Funcionalidade</h4>
                        <p>
                            Estes cookies permitem que o site se lembre de escolhas que você faz (como seu nome de
                            usuário, idioma ou região) e forneçam recursos aprimorados e mais personalizados.
                        </p>
                        <ul>
                            <li>Preferências de idioma</li>
                            <li>Configurações de interface</li>
                            <li>Histórico de navegação</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-laranja mb-3">4. Cookies de Marketing/Publicidade</h4>
                        <p>
                            Estes cookies são usados para rastrear visitantes em diferentes sites. A intenção é
                            exibir anúncios que sejam relevantes e atraentes para o usuário individual.
                        </p>
                        <ul>
                            <li>Cookies de remarketing</li>
                            <li>Cookies de redes sociais (Facebook, Instagram, LinkedIn)</li>
                            <li>Cookies de análise de campanhas</li>
                        </ul>
                    </div>

                    <h2 class="mb-4 text-azul">Cookies de Terceiros</h2>
                    <p class="mb-3">
                        Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis.
                        Estes incluem:
                    </p>
                    <ul class="mb-4">
                        <li><strong>Google Analytics:</strong> Para entender como você usa o site e melhorar sua experiência</li>
                        <li><strong>Google Tag Manager:</strong> Para gerenciar tags de marketing e análise</li>
                        <li><strong>Facebook Pixel:</strong> Para medir a eficácia da publicidade</li>
                        <li><strong>Redes Sociais:</strong> Botões de compartilhamento e widgets sociais</li>
                    </ul>

                    <h2 class="mb-4 text-azul">Como Controlar Cookies</h2>
                    <p class="mb-3">
                        Você tem o direito de decidir se aceita ou recusa cookies. Você pode exercer suas preferências
                        de cookies através do banner de cookies que aparece quando você acessa nosso site pela primeira vez.
                    </p>
                    <p class="mb-4">
                        Além disso, a maioria dos navegadores web permite algum controle da maioria dos cookies através
                        das configurações do navegador. Para saber mais sobre cookies, incluindo como ver quais cookies
                        foram configurados e como gerenciá-los e excluí-los, visite:
                    </p>
                    <ul class="mb-4">
                        <li><strong>Google Chrome:</strong> Configurações > Privacidade e segurança > Cookies</li>
                        <li><strong>Mozilla Firefox:</strong> Opções > Privacidade e Segurança > Cookies</li>
                        <li><strong>Safari:</strong> Preferências > Privacidade > Cookies</li>
                        <li><strong>Microsoft Edge:</strong> Configurações > Privacidade > Cookies</li>
                    </ul>

                    <h2 class="mb-4 text-azul">Duração dos Cookies</h2>
                    <div class="mb-4">
                        <p><strong>Cookies de Sessão:</strong> São temporários e expiram quando você fecha o navegador.</p>
                        <p><strong>Cookies Persistentes:</strong> Permanecem no seu dispositivo até expirarem ou serem excluídos manualmente. A duração varia de acordo com o tipo de cookie.</p>
                    </div>

                    <h2 class="mb-4 text-azul">Atualizações desta Política</h2>
                    <p class="mb-4">
                        Podemos atualizar esta Política de Cookies periodicamente para refletir mudanças em nossas
                        práticas ou por outros motivos operacionais, legais ou regulatórios. Recomendamos que você
                        revise esta página regularmente para se manter informado.
                    </p>

                    <h2 class="mb-4 text-azul">Contato</h2>
                    <p class="mb-2">
                        Se você tiver dúvidas sobre o uso de cookies em nosso site, entre em contato conosco:
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><strong>E-mail:</strong> contato@grupoab.net</li>
                        <li><strong>Telefone:</strong> (47) 3054-5400</li>
                        <li><strong>Endereço:</strong> Rua Michele Christina Bartel, 230 - Vieira, Jaraguá do Sul - SC, 89257-100</li>
                    </ul>

                    <div class="alert alert-info mt-5">
                        <i class="fas fa-cookie-bite me-2"></i>
                        <strong>Importante:</strong> Ao continuar a usar nosso site sem alterar suas configurações de
                        cookies, você concorda com o uso de cookies conforme descrito nesta política.
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
