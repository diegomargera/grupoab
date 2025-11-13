<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Termos de Uso';

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Header da Página -->
<section class="page-header py-5" style="background: linear-gradient(135deg, var(--cor-azul) 0%, #0a2f5f 100%); min-height: 300px; padding-top: 200px !important;">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="text-white text-center">
            <h1 class="display-4 fw-bold mb-3">Termos de Uso</h1>
            <p class="lead">Última atualização: 11/11/2025</p>
        </div>
    </div>
</section>

<!-- Conteúdo dos Termos -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="content-box bg-white p-5 rounded shadow-sm">

                    <h2 class="mb-4 text-azul">1. Aceitação dos Termos</h2>
                    <p class="mb-4">
                        Ao acessar e usar o site do Grupo AB, você concorda em cumprir e estar sujeito aos seguintes
                        termos e condições de uso. Se você não concordar com qualquer parte destes termos, não deverá
                        usar nosso site.
                    </p>

                    <h2 class="mb-4 text-azul">2. Uso do Site</h2>
                    <p class="mb-3">Você concorda em usar o site apenas para fins legais e de maneira que não:</p>
                    <ul class="mb-4">
                        <li>Infrinja os direitos de terceiros ou viole qualquer lei local, estadual ou nacional</li>
                        <li>Comprometa, danifique ou interfira no uso de outros usuários</li>
                        <li>Transmita vírus, malware ou qualquer código de natureza destrutiva</li>
                        <li>Colete ou armazene dados pessoais de outros usuários sem consentimento</li>
                        <li>Use o site para spam, publicidade não solicitada ou fraude</li>
                    </ul>

                    <h2 class="mb-4 text-azul">3. Propriedade Intelectual</h2>
                    <p class="mb-4">
                        Todo o conteúdo presente neste site, incluindo textos, gráficos, logos, imagens, vídeos e
                        software, é propriedade do Grupo AB ou de seus fornecedores de conteúdo e está protegido
                        pelas leis brasileiras e internacionais de direitos autorais e propriedade intelectual.
                    </p>

                    <h2 class="mb-4 text-azul">4. Produtos e Serviços</h2>
                    <p class="mb-4">
                        As informações sobre produtos e serviços apresentadas no site são fornecidas para fins
                        informativos. O Grupo AB reserva-se o direito de modificar especificações, preços e
                        disponibilidade de produtos sem aviso prévio. Todos os orçamentos estão sujeitos a confirmação.
                    </p>

                    <h2 class="mb-4 text-azul">5. Orçamentos e Propostas</h2>
                    <p class="mb-4">
                        Solicitações de orçamento através do site não constituem uma oferta vinculativa. Todas as
                        propostas comerciais serão formalizadas através de documentação específica e estão sujeitas
                        a análise técnica e comercial.
                    </p>

                    <h2 class="mb-4 text-azul">6. Links para Sites de Terceiros</h2>
                    <p class="mb-4">
                        Nosso site pode conter links para sites de terceiros. Esses links são fornecidos apenas para
                        conveniência e não implicam endosso. Não nos responsabilizamos pelo conteúdo ou práticas de
                        privacidade de sites de terceiros.
                    </p>

                    <h2 class="mb-4 text-azul">7. Limitação de Responsabilidade</h2>
                    <p class="mb-4">
                        O Grupo AB não será responsável por quaisquer danos diretos, indiretos, incidentais ou
                        consequenciais resultantes do uso ou incapacidade de usar este site, mesmo que tenhamos sido
                        avisados da possibilidade de tais danos.
                    </p>

                    <h2 class="mb-4 text-azul">8. Isenção de Garantias</h2>
                    <p class="mb-4">
                        Este site é fornecido "como está" e "conforme disponível". Não garantimos que o site estará
                        disponível ininterruptamente ou livre de erros. Reservamo-nos o direito de suspender, retirar
                        ou modificar qualquer parte do site sem aviso prévio.
                    </p>

                    <h2 class="mb-4 text-azul">9. Indenização</h2>
                    <p class="mb-4">
                        Você concorda em indenizar e isentar o Grupo AB de qualquer reivindicação, perda, dano,
                        responsabilidade e despesa resultante do seu uso do site ou violação destes termos.
                    </p>

                    <h2 class="mb-4 text-azul">10. Modificações dos Termos</h2>
                    <p class="mb-4">
                        O Grupo AB reserva-se o direito de modificar estes termos a qualquer momento. As alterações
                        entrarão em vigor imediatamente após a publicação no site. É sua responsabilidade revisar
                        periodicamente estes termos.
                    </p>

                    <h2 class="mb-4 text-azul">11. Lei Aplicável e Jurisdição</h2>
                    <p class="mb-4">
                        Estes termos são regidos pelas leis da República Federativa do Brasil. Qualquer disputa
                        relacionada a estes termos será submetida à jurisdição exclusiva dos tribunais da comarca
                        de Jaraguá do Sul - SC.
                    </p>

                    <h2 class="mb-4 text-azul">12. Contato</h2>
                    <p class="mb-2">
                        Para questões sobre estes Termos de Uso, entre em contato conosco:
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li><strong>E-mail:</strong> contato@grupoab.net</li>
                        <li><strong>Telefone:</strong> (47) 3054-5400</li>
                        <li><strong>Endereço:</strong> Rua Michele Christina Bartel, 230 - Vieira, Jaraguá do Sul - SC, 89257-100</li>
                    </ul>

                    <div class="alert alert-warning mt-5">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>Atenção:</strong> O uso contínuo deste site após a publicação de alterações nos
                        Termos de Uso constitui sua aceitação dessas alterações.
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
