<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'LGPD - Lei Geral de Proteção de Dados';

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Header da Página -->
<section class="page-header py-5" style="background: linear-gradient(135deg, var(--cor-azul) 0%, #0a2f5f 100%); min-height: 300px; padding-top: 200px !important;">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="text-white text-center">
            <h1 class="display-4 fw-bold mb-3">LGPD - Lei Geral de Proteção de Dados</h1>
            <p class="lead">Última atualização: 11/11/2025</p>
        </div>
    </div>
</section>

<!-- Conteúdo LGPD -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="content-box bg-white p-5 rounded shadow-sm">

                    <h2 class="mb-4 text-azul">Nosso Compromisso com a LGPD</h2>
                    <p class="mb-4">
                        O Grupo AB está comprometido em proteger a privacidade e os dados pessoais de nossos clientes,
                        parceiros e visitantes, em conformidade com a Lei Geral de Proteção de Dados Pessoais
                        (Lei nº 13.709/2018 - LGPD).
                    </p>

                    <div class="alert alert-primary">
                        <i class="fas fa-shield-alt me-2"></i>
                        A LGPD estabelece regras sobre coleta, armazenamento, tratamento e compartilhamento de dados
                        pessoais, visando proteger os direitos fundamentais de liberdade e privacidade.
                    </div>

                    <h2 class="mb-4 text-azul mt-5">Seus Direitos sob a LGPD</h2>
                    <p class="mb-3">
                        De acordo com a LGPD, você possui os seguintes direitos em relação aos seus dados pessoais:
                    </p>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-check-circle me-2"></i>Confirmação e Acesso
                                    </h5>
                                    <p class="mb-0">
                                        Confirmar a existência de tratamento e acessar seus dados pessoais que
                                        mantemos em nossos registros.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-edit me-2"></i>Correção
                                    </h5>
                                    <p class="mb-0">
                                        Solicitar a correção de dados incompletos, inexatos ou desatualizados.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-ban me-2"></i>Anonimização, Bloqueio ou Eliminação
                                    </h5>
                                    <p class="mb-0">
                                        Solicitar a anonimização, bloqueio ou eliminação de dados desnecessários,
                                        excessivos ou tratados em desconformidade com a LGPD.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-exchange-alt me-2"></i>Portabilidade
                                    </h5>
                                    <p class="mb-0">
                                        Solicitar a portabilidade de seus dados a outro fornecedor de serviço ou
                                        produto, mediante requisição expressa.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-trash-alt me-2"></i>Eliminação
                                    </h5>
                                    <p class="mb-0">
                                        Solicitar a eliminação dos dados pessoais tratados com o seu consentimento,
                                        exceto nas hipóteses previstas em lei.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-info-circle me-2"></i>Informação sobre Compartilhamento
                                    </h5>
                                    <p class="mb-0">
                                        Obter informações sobre as entidades públicas e privadas com as quais
                                        compartilhamos seus dados.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-times-circle me-2"></i>Revogação do Consentimento
                                    </h5>
                                    <p class="mb-0">
                                        Revogar o consentimento para o tratamento de seus dados pessoais a qualquer
                                        momento.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="text-laranja mb-3">
                                        <i class="fas fa-user-shield me-2"></i>Oposição ao Tratamento
                                    </h5>
                                    <p class="mb-0">
                                        Opor-se a um tratamento realizado com base em uma das hipóteses de dispensa
                                        de consentimento.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mb-4 text-azul">Bases Legais para Tratamento de Dados</h2>
                    <p class="mb-3">
                        O Grupo AB realiza o tratamento de dados pessoais com base nas seguintes hipóteses legais
                        previstas na LGPD:
                    </p>
                    <ul class="mb-4">
                        <li><strong>Consentimento:</strong> Quando você nos fornece autorização expressa para tratar seus dados</li>
                        <li><strong>Execução de contrato:</strong> Para cumprimento de obrigações contratuais</li>
                        <li><strong>Exercício regular de direitos:</strong> Em processos judiciais, administrativos ou arbitrais</li>
                        <li><strong>Legítimo interesse:</strong> Para atividades comerciais legítimas</li>
                        <li><strong>Cumprimento de obrigação legal:</strong> Quando exigido por lei ou regulamento</li>
                    </ul>

                    <h2 class="mb-4 text-azul">Como Exercer Seus Direitos</h2>
                    <p class="mb-4">
                        Para exercer qualquer um dos seus direitos previstos na LGPD ou esclarecer dúvidas sobre o
                        tratamento de seus dados pessoais, você pode entrar em contato com nosso Encarregado de
                        Proteção de Dados (DPO):
                    </p>

                    <div class="card bg-light border-0 mb-5">
                        <div class="card-body p-4">
                            <h5 class="text-azul mb-3">Canais de Contato - DPO</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="fas fa-envelope text-laranja me-2"></i>
                                    <strong>E-mail:</strong> dpo@grupoab.net
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-phone text-laranja me-2"></i>
                                    <strong>Telefone:</strong> (47) 3054-5400
                                </li>
                                <li class="mb-0">
                                    <i class="fas fa-map-marker-alt text-laranja me-2"></i>
                                    <strong>Endereço:</strong> Rua Michele Christina Bartel, 230 - Vieira, Jaraguá do Sul - SC, 89257-100
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="mb-4 text-azul">Medidas de Segurança</h2>
                    <p class="mb-3">
                        O Grupo AB implementa medidas técnicas e organizacionais adequadas para proteger seus dados
                        pessoais, incluindo:
                    </p>
                    <ul class="mb-4">
                        <li>Criptografia de dados sensíveis</li>
                        <li>Controles de acesso restrito</li>
                        <li>Monitoramento contínuo de segurança</li>
                        <li>Treinamento regular de colaboradores</li>
                        <li>Políticas internas de proteção de dados</li>
                        <li>Backup e recuperação de dados</li>
                    </ul>

                    <h2 class="mb-4 text-azul">Incidentes de Segurança</h2>
                    <p class="mb-4">
                        Em caso de incidente de segurança que possa acarretar risco ou dano relevante aos titulares
                        de dados, o Grupo AB comunicará à Autoridade Nacional de Proteção de Dados (ANPD) e aos
                        titulares afetados, em conformidade com a legislação vigente.
                    </p>

                    <h2 class="mb-4 text-azul">Atualização desta Política</h2>
                    <p class="mb-4">
                        Esta página é atualizada regularmente para refletir mudanças em nossas práticas de proteção
                        de dados ou alterações na legislação. A data da última atualização está indicada no topo
                        desta página.
                    </p>

                    <div class="alert alert-success mt-5">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Compromisso Contínuo:</strong> O Grupo AB está comprometido com a melhoria contínua
                        de suas práticas de proteção de dados e transparência no tratamento de informações pessoais.
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
