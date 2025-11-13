<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Paleteira Elétrica 1500kg e 1600kg - Modelos Desembarcado e Vertical';
$page_description = 'Paleteiras Elétricas do Grupo AB: modelo 1500kg desembarcado e 1600kg vertical. Bateria lítio 24V, elevação até 5500mm. Equipamentos eficientes para movimentação de paletes em armazéns.';
$page_keywords = 'paleteira elétrica, paleteira 1500kg, paleteira 1600kg, paleteira vertical, paleteira desembarcado, transpalete elétrico, paleteira bateria lítio, equipamento de movimentação';
$page_image = BASE_URL . 'assets/img/produtos/sections/paleteira-section-1.webp';
$page_url = BASE_URL . 'paleteira-eletrica.php';
$canonical_url = BASE_URL . 'paleteira-eletrica.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Produtos' => BASE_URL . 'produtos.php',
    'Paleteira Elétrica' => BASE_URL . 'paleteira-eletrica.php'
];

// Schema de Produto
$product_schema = [
    'name' => 'Paleteira Elétrica',
    'description' => 'Paleteiras elétricas disponíveis em dois modelos: 1500kg desembarcado com elevação 3500mm e 1600kg vertical com elevação 5500mm. Ambos com bateria de lítio 24V para máxima eficiência operacional.',
    'image' => BASE_URL . 'assets/img/produtos/sections/paleteira-section-1.webp',
    'category' => 'Equipamentos de Movimentação'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Paleteira Elétrica -->
<section class="hero-section hero-produto-paleteira-eletrica" style="min-height: 80vh; padding-top: 100px; position: relative; overflow: hidden;">
    <!-- Background com Animação -->
    <div class="hero-background-paleteira"></div>

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
                    Paleteira <span class="text-laranja">Elétrica</span>
                </h1>
            </div>

            <!-- Lado Direito - Descrição -->
            <div class="col-lg-7">
                <p class="text-white mb-0">
                    Solução eficiente para movimentação horizontal de pallets, com tecnologia elétrica que garante agilidade, economia e máximo desempenho operacional.
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
                <img src="<?php echo BASE_URL; ?>assets/img/produtos/sections/paleteira-section-1.webp" alt="Paleteira Elétrica" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">
                    <span class="text-azul">Agilidade e Eficiência na</span> <span class="text-laranja">Movimentação de Cargas</span>
                </h2>
                <p class="mb-4">
                    A Paleteira Elétrica do Grupo AB é o equipamento ideal para operações que exigem movimentação constante de pallets em ambientes internos. Com motor elétrico de alta eficiência, este equipamento oferece desempenho superior, economia de energia e operação sustentável.
                </p>
                <p class="mb-4">
                    Projetada para maximizar a produtividade em centros de distribuição, armazéns e áreas de produção, a paleteira elétrica elimina o esforço físico do operador, reduz o tempo de movimentação e aumenta significativamente a eficiência operacional. Disponível em modelos com capacidade de 1500kg e 1600kg.
                </p>
                <p class="mb-4">
                    Com controles ergonômicos, sistema de direção assistida e bateria de longa duração, este equipamento proporciona operação confortável durante toda a jornada de trabalho, garantindo máxima produtividade com mínimo esforço.
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
                            Operação elétrica elimina esforço físico do operador
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Aumenta produtividade em até 50% comparado a modelos manuais
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Sistema de frenagem regenerativa economiza energia
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
                            Capacidade: 1500kg a 1600kg conforme modelo
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Bateria de íon-lítio com autonomia estendida
                        </li>
                        <li class="mb-0">
                            <i class="fas fa-check-circle text-laranja me-2"></i>
                            Timão ergonômico com controles integrados
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
                        <i class="fas fa-bolt fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Alta Produtividade</h5>
                    <p class="mb-0">
                        Motor elétrico potente proporciona movimentação rápida e eficiente de pallets. Reduz tempo de transporte e aumenta o número de ciclos por hora, maximizando a produtividade da operação logística.
                    </p>
                </div>
            </div>

            <!-- Vantagem 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-battery-full fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Bateria de Longa Duração</h5>
                    <p class="mb-0">
                        Equipada com bateria de íon-lítio de alta capacidade que garante operação durante todo o turno de trabalho. Sistema de recarga rápida permite uso contínuo em operações de múltiplos turnos.
                    </p>
                </div>
            </div>

            <!-- Vantagem 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-hand-holding-heart fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Ergonomia Avançada</h5>
                    <p class="mb-0">
                        Timão ergonômico com altura ajustável e controles integrados reduz fadiga do operador. Plataforma opcional para operador em pé aumenta conforto em longas distâncias e operações intensivas.
                    </p>
                </div>
            </div>

            <!-- Vantagem 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-dollar-sign fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Economia Operacional</h5>
                    <p class="mb-0">
                        Custo operacional significativamente inferior a modelos a combustão. Sistema de frenagem regenerativa recupera energia, otimizando autonomia da bateria e reduzindo custos com energia elétrica.
                    </p>
                </div>
            </div>

            <!-- Vantagem 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-tools fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Manutenção Reduzida</h5>
                    <p class="mb-0">
                        Construção robusta com componentes de alta qualidade minimiza necessidade de manutenção. Motor elétrico sem escovas elimina desgaste e garante maior vida útil do equipamento com menor custo de manutenção.
                    </p>
                </div>
            </div>

            <!-- Vantagem 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="vantagem-card h-100 p-4 text-center">
                    <div class="vantagem-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Segurança Integrada</h5>
                    <p class="mb-0">
                        Sistema de freio eletromagnético automático, sensor de peso e proteções laterais garantem máxima segurança. Controle de velocidade automático proporciona operação segura em corredores e áreas congestionadas.
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
            <p class="text-muted">Compare os modelos e escolha a paleteira ideal para sua operação</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr class="bg-azul text-white">
                                        <th class="py-3 ps-4" style="width: 35%;">
                                            <i class="fas fa-cogs me-2"></i>Especificação
                                        </th>
                                        <th class="py-3 text-center">
                                            <i class="fas fa-dolly me-2"></i>Modelo 1500kg
                                        </th>
                                        <th class="py-3 text-center">
                                            <i class="fas fa-dolly me-2"></i>Modelo 1600kg
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-palette me-2 text-laranja"></i><span class="fw-bold text-azul">Cor</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">Laranja</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">Laranja</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-tag me-2 text-laranja"></i><span class="fw-bold text-azul">Tipo</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">Desembarcado</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">Vertical</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-weight-hanging me-2 text-laranja"></i><span class="fw-bold text-azul">Capacidade de Carga Nominal</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;"><span class="fw-bold text-azul">1.500 kg</span></td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;"><span class="fw-bold text-azul">1.600 kg</span></td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-crosshairs me-2 text-laranja"></i><span class="fw-bold text-azul">Centro de Carga</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">500 mm</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">500 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-arrow-up me-2 text-laranja"></i><span class="fw-bold text-azul">Altura de Elevação</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">3.500 mm</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">5.500 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-arrows-alt-v me-2 text-laranja"></i><span class="fw-bold text-azul">Mastro</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">2 estágios de 3.500 mm</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">3 estágios de 5.500 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-ruler-horizontal me-2 text-laranja"></i><span class="fw-bold text-azul">Comprimento do Garfo</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">1.150 mm</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">1.150 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-arrows-alt-h me-2 text-laranja"></i><span class="fw-bold text-azul">Largura do Garfo</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">560 mm</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">680 mm</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-engine me-2 text-laranja"></i><span class="fw-bold text-azul">Motor</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">CA completo</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">CA completo</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-battery-full me-2 text-laranja"></i><span class="fw-bold text-azul">Bateria</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">Lítio 24V / 50 Ah</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">Lítio 24V / 150 Ah</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-plug me-2 text-laranja"></i><span class="fw-bold text-azul">Carregador de Bateria</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">24V / 30A</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">24V / 50A</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-calendar-alt me-2 text-laranja"></i><span class="fw-bold text-azul">Ano de Fabricação</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;">2025</td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;">2025</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 ps-4" style="background-color: #f8f9fa;">
                                            <i class="fas fa-building me-2 text-laranja"></i><span class="fw-bold text-azul">Marca</span>
                                        </td>
                                        <td class="py-3 text-center" style="background-color: #ffffff;"><span class="fw-bold text-azul">Grupo AB</span></td>
                                        <td class="py-3 text-center" style="background-color: #f0f0f0;"><span class="fw-bold text-azul">Grupo AB</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mt-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-dolly fa-3x text-laranja mb-3"></i>
                                <h5 class="fw-bold text-azul mb-2">Modelo 1500kg - Desembarcado</h5>
                                <p class="text-muted mb-0">Ideal para operações com altura de elevação até 3.5m e cargas de até 1.500kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-dolly fa-3x text-azul mb-3"></i>
                                <h5 class="fw-bold text-azul mb-2">Modelo 1600kg - Vertical</h5>
                                <p class="text-muted mb-0">Perfeito para operações com altura de elevação até 5.5m e cargas de até 1.600kg</p>
                            </div>
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
            <p class="text-muted">Conheça as principais aplicações para a Paleteira Elétrica</p>
        </div>

        <div class="row g-4">
            <!-- Aplicação 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-truck-loading fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Carga e Descarga</h5>
                </div>
            </div>

            <!-- Aplicação 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-warehouse fa-3x text-azul"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Movimentação Interna</h5>
                </div>
            </div>

            <!-- Aplicação 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-boxes-stacked fa-3x text-amarelo"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Centros de Distribuição</h5>
                </div>
            </div>

            <!-- Aplicação 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="aplicacao-card h-100 p-4 text-center">
                    <div class="aplicacao-icon mb-3">
                        <i class="fas fa-industry fa-3x text-laranja"></i>
                    </div>
                    <h5 class="fw-bold mb-0">Áreas de Produção</h5>
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
            renderGaleria('assets/img/produtos/paleteiras/', 'Paleteira Elétrica');
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
