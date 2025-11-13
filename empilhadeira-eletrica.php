<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Empilhadeira Elétrica 2500kg - Bateria Lítio 80V';
$page_description = 'Empilhadeira Elétrica 2500kg do Grupo AB com bateria de lítio 80V/230Ah. Mastro triplo 4800mm, motor de tração 12kW. Equipamento elétrico eficiente para centros de distribuição e armazéns.';
$page_keywords = 'empilhadeira elétrica, empilhadeira 2500kg, empilhadeira bateria lítio, empilhadeira elétrica 2.5 toneladas, mastro triplo, equipamento de movimentação, empilhadeira retrátil';
$page_image = BASE_URL . 'assets/img/produtos/sections/empilhadeira-section-1.webp';
$page_url = BASE_URL . 'empilhadeira-eletrica.php';
$canonical_url = BASE_URL . 'empilhadeira-eletrica.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php',
    'Empilhadeira Elétrica' => BASE_URL . 'empilhadeira-eletrica.php'
];

// Schema de Produto
$product_schema = [
    'name' => 'Empilhadeira Elétrica 2500kg',
    'description' => 'Empilhadeira elétrica de alta performance com capacidade de 2500kg, bateria de lítio 80V/230Ah, mastro triplo de 4800mm e motor de tração de 12kW. Ideal para operações intensivas em centros de distribuição.',
    'image' => BASE_URL . 'assets/img/produtos/sections/empilhadeira-section-1.webp',
    'category' => 'Equipamentos de Movimentação'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Empilhadeira Elétrica -->
<section class="hero-section hero-produto-empilhadeira-eletrica" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
    <!-- Background com Animação -->
    <div class="hero-background-empilhadeira"></div>

    <!-- Overlay -->
    <div class="hero-overlay"></div>
</section>

<!-- Título e Descrição do Produto -->
<section class="produto-info-section" style="background-color: var(--cor-azul); min-height: 200px; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Lado Esquerdo - Título -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h1 class="fw-bold text-white">
                    Empilhadeira <span class="text-laranja">Elétrica 2500kg</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Equipamento robusto e eficiente para movimentação de cargas pesadas, com tecnologia elétrica que garante operação silenciosa, econômica e sustentável.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Descrição do Produto -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/sections/empilhadeira-section-1.webp" alt="Empilhadeira Elétrica 2500kg" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Potência e Eficiência para</span> <span class="text-laranja">sua Operação</span>
                </h2>
                <p class="mb-4">
                    A Empilhadeira Elétrica de 2500kg do Grupo AB é a solução ideal para operações que exigem alta performance, baixo custo operacional e responsabilidade ambiental. Com tecnologia de ponta e design ergonômico, este equipamento proporciona máxima produtividade em ambientes internos.
                </p>
                <p class="mb-4">
                    Desenvolvida para atender às mais diversas necessidades de movimentação vertical e horizontal de cargas, a empilhadeira elétrica oferece operação suave, precisa e segura. Seu motor elétrico proporciona torque constante, eliminação de emissões e redução significativa nos custos de manutenção.
                </p>
                <p class="mb-4">
                    Com capacidade para 2500kg, altura de elevação variável e controles intuitivos, este equipamento se adapta perfeitamente a centros de distribuição, armazéns, indústrias e operações logísticas de médio e grande porte.
                </p>
            </div>
        </div>

        <!-- Vantagens Operacionais e Versatilidade -->
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="info-box-branco p-4 h-100">
                    <h4 class="fw-bold mb-4 text-azul">
                        Vantagens Operacionais
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Operação 100% elétrica - zero emissões de gases poluentes
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Funcionamento silencioso, ideal para ambientes internos
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Baixo custo de manutenção comparado a modelos a combustão
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-box-branco p-4 h-100">
                    <h4 class="fw-bold mb-4 text-azul">
                        Especificações Técnicas
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Capacidade de carga: 2500kg
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Sistema de direção elétrica assistida de alta precisão
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Bateria de longa duração com sistema de recarga inteligente
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Principais Vantagens -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">
                <span class="text-azul">Principais</span> <span class="text-laranja">Vantagens</span>
            </h2>
        </div>

        <div class="row g-4">
            <!-- Vantagem 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-leaf fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Sustentabilidade e Economia</h5>
                    <p class="mb-0">
                        Sistema 100% elétrico elimina emissões de gases poluentes e reduz drasticamente os custos operacionais. Bateria de alta eficiência com recarga rápida e ciclo de vida prolongado, garantindo máximo retorno sobre o investimento.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-volume-mute fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Operação Silenciosa e Confortável</h5>
                    <p class="mb-0">
                        Motor elétrico proporciona funcionamento extremamente silencioso, ideal para ambientes fechados e operações em múltiplos turnos. Redução de ruído melhora o conforto do operador e do ambiente de trabalho.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Manutenção Simplificada</h5>
                    <p class="mb-0">
                        Menos peças móveis e ausência de motor a combustão resultam em manutenção simplificada e custos reduzidos. Sistema de diagnóstico inteligente facilita identificação preventiva de necessidades de manutenção.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Segurança Operacional Máxima</h5>
                    <p class="mb-0">
                        Equipado com sistemas de segurança avançados incluindo freios automáticos, sensor de carga, limitador de velocidade e proteção contra tombamento. Cabine ergonômica com excelente visibilidade e controles intuitivos.
                    </p>
                </div>
            </div>

            <!-- Vantagem 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Alta Performance e Produtividade</h5>
                    <p class="mb-0">
                        Motor elétrico oferece torque constante e resposta imediata, garantindo movimentações rápidas e precisas. Aceleração suave e controlada aumenta a produtividade sem comprometer a segurança.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-user-check fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Ergonomia e Conforto do Operador</h5>
                    <p class="mb-0">
                        Cabine projetada para máximo conforto com assento ajustável, painel de controle intuitivo e excelente visibilidade. Direção assistida e controles ergonômicos reduzem fadiga do operador em longas jornadas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Especificações Técnicas Detalhadas -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">
                <span class="text-azul">Especificações</span> <span class="text-laranja">Técnicas</span>
            </h2>
            <p class="text-muted">Confira todos os detalhes técnicos da Empilhadeira Elétrica 2500kg</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <td class="py-3 ps-4" style="width: 40%; background-color: #f8f9fa;">
                                            <i class="fas fa-palette me-2 text-laranja"></i><span class="fw-bold text-azul">Cor</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">Laranja</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-weight-hanging me-2 text-laranja"></i><span class="fw-bold text-azul">Capacidade de Carga Nominal</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">2.500 kg</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-battery-full me-2 text-laranja"></i><span class="fw-bold text-azul">Bateria</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">Lítio 80V / 230 Ah com carregador</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-arrows-alt-v me-2 text-laranja"></i><span class="fw-bold text-azul">Mastro</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">3 estágios de 4.800 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-ruler-horizontal me-2 text-laranja"></i><span class="fw-bold text-azul">Comprimento do Garfo</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">1.070 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-cogs me-2 text-laranja"></i><span class="fw-bold text-azul">Recursos de Operação</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">Alavanca de mudança lateral</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-circle me-2 text-laranja"></i><span class="fw-bold text-azul">Pneus</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">Equipamento com pneus</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-shield-alt me-2 text-laranja"></i><span class="fw-bold text-azul">Segurança</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Assento com trava de segurança</li>
                                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Alarme sonoro</li>
                                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Luzes de trabalho</li>
                                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Luz de alarme de ré</li>
                                                <li class="mb-0"><i class="fas fa-check text-success me-2"></i>Espelhos retrovisores</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-calendar-alt me-2 text-laranja"></i><span class="fw-bold text-azul">Ano de Fabricação</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;">2025</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-building me-2 text-laranja"></i><span class="fw-bold text-azul">Marca</span>
                                        </td>
                                        <td class="py-3" style="background-color: #ffffff;"><span class="fw-bold text-azul">Grupo AB</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aplicação Frequente -->
<section class="py-5 bg-light" style="min-height: 400px; display: flex; align-items: center;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">
                <span class="text-azul">Aplicação</span> <span class="text-laranja">Frequente</span>
            </h2>
            <p class="text-muted">Conheça as principais aplicações para a Empilhadeira Elétrica</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-warehouse fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Centros de Distribuição</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-industry fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Indústrias</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-boxes fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Armazéns Gerais</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-truck-loading fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Operações Logísticas</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galeria de Imagens -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">
                <span class="text-azul">Galeria de</span> <span class="text-laranja">Imagens</span>
            </h2>
        </div>

        <div class="row g-4">
            <?php
            include 'includes/galeria-helper.php';
            renderGaleria('assets/img/produtos/empilhadeiras/', 'Empilhadeira Elétrica');
            ?>
        </div>
    </div>
</section>

<!-- Modal para Zoom de Imagens -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="imageModalLabel">Imagem do Produto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="modalImage" src="" alt="" class="img-fluid" style="max-height: 80vh; width: auto;">
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
        imageModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const imageSrc = button.getAttribute('data-image');
            const imageAlt = button.getAttribute('data-alt');

            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('imageModalLabel');

            modalImage.src = imageSrc;
            modalImage.alt = imageAlt;
            modalTitle.textContent = imageAlt;
        });
    }
});
</script>

<!-- CTA Orçamento -->
<?php include 'includes/orcamento-cta.php'; ?>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
