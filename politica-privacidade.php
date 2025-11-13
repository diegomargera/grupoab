<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Política de Privacidade';

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Header da Página -->
<section class="page-header py-5" style="background: linear-gradient(135deg, var(--cor-azul) 0%, #0a2f5f 100%); min-height: 300px; padding-top: 200px !important;">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="text-white text-center">
            <h1 class="display-4 fw-bold mb-3">Política de Privacidade</h1>
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

                    <h2 class="mb-4 text-azul">1. Informações que Coletamos</h2>
                    <p class="mb-4">
                        O Grupo AB coleta informações que você nos fornece diretamente quando utiliza nossos serviços,
                        incluindo nome, e-mail, telefone e informações da empresa ao preencher formulários de contato ou
                        solicitar orçamentos.
                    </p>

                    <h2 class="mb-4 text-azul">2. Como Usamos suas Informações</h2>
                    <p class="mb-3">Utilizamos as informações coletadas para:</p>
                    <ul class="mb-4">
                        <li>Responder às suas solicitações e fornecer atendimento ao cliente</li>
                        <li>Processar orçamentos e propostas comerciais</li>
                        <li>Enviar informações sobre nossos produtos e serviços</li>
                        <li>Melhorar nossos produtos, serviços e experiência do usuário</li>
                        <li>Cumprir obrigações legais e regulatórias</li>
                    </ul>

                    <h2 class="mb-4 text-azul">3. Compartilhamento de Informações</h2>
                    <p class="mb-4">
                        Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros para fins de
                        marketing. Podemos compartilhar informações apenas quando necessário para prestação de serviços,
                        cumprimento de obrigações legais ou com seu consentimento explícito.
                    </p>

                    <h2 class="mb-4 text-azul">4. Cookies</h2>
                    <p class="mb-4">
                        Utilizamos cookies e tecnologias similares para melhorar sua experiência de navegação,
                        analisar o tráfego do site e personalizar conteúdo. Você pode configurar seu navegador para
                        recusar cookies, mas isso pode afetar a funcionalidade do site.
                    </p>

                    <h2 class="mb-4 text-azul">5. Segurança</h2>
                    <p class="mb-4">
                        Implementamos medidas de segurança técnicas e organizacionais adequadas para proteger suas
                        informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição.
                        No entanto, nenhum método de transmissão pela internet é 100% seguro.
                    </p>

                    <h2 class="mb-4 text-azul">6. Seus Direitos</h2>
                    <p class="mb-3">De acordo com a LGPD (Lei Geral de Proteção de Dados), você tem direito a:</p>
                    <ul class="mb-4">
                        <li>Acessar suas informações pessoais</li>
                        <li>Corrigir dados incompletos, inexatos ou desatualizados</li>
                        <li>Solicitar a exclusão de dados pessoais</li>
                        <li>Revogar seu consentimento</li>
                        <li>Solicitar a portabilidade de dados</li>
                    </ul>

                    <h2 class="mb-4 text-azul">7. Retenção de Dados</h2>
                    <p class="mb-4">
                        Mantemos suas informações pessoais apenas pelo tempo necessário para cumprir as finalidades
                        descritas nesta política, a menos que um período de retenção mais longo seja exigido por lei.
                    </p>

                    <h2 class="mb-4 text-azul">8. Alterações nesta Política</h2>
                    <p class="mb-4">
                        Podemos atualizar esta Política de Privacidade periodicamente. A versão mais recente estará
                        sempre disponível em nosso site com a data da última atualização.
                    </p>

                    <h2 class="mb-4 text-azul">9. Contato</h2>
                    <p class="mb-2">
                        Para exercer seus direitos ou esclarecer dúvidas sobre esta Política de Privacidade,
                        entre em contato conosco:
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><strong>E-mail:</strong> contato@grupoab.net</li>
                        <li><strong>Telefone:</strong> (47) 3054-5400</li>
                        <li><strong>Endereço:</strong> Rua Michele Christina Bartel, 230 - Vieira, Jaraguá do Sul - SC, 89257-100</li>
                    </ul>

                    <div class="alert alert-info mt-5">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Importante:</strong> Ao utilizar nosso site e serviços, você concorda com os termos
                        desta Política de Privacidade.
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
