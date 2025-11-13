    <!-- Footer -->
    <footer class="footer-section py-5">
        <div class="container">
            <div class="row">
                <!-- Logo e Informações -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-logo mb-3">
                        <img src="<?php echo BASE_URL; ?>assets/img/logos/logo.svg" alt="<?php echo SITE_NAME; ?>" class="img-fluid" style="max-height: 42px;">
                    </div>
                    <div class="footer-info">
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Rua Michele Christina Bartel, 230<br>
                            <span class="ms-4">Vieira, Jaraguá do Sul - SC</span><br>
                            <span class="ms-4">89257-100</span>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:contato@grupoab.net">contato@grupoab.net</a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <a href="tel:+554730545400">(47) 3054-5400</a>
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-globe me-2"></i>
                            <a href="https://www.grupoab.net" target="_blank">www.grupoab.net</a>
                        </p>
                    </div>
                </div>

                <!-- Links Rápidos -->
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                    <h5 class="footer-title mb-3">Institucional</h5>
                    <ul class="footer-links list-unstyled">
                        <li><a href="<?php echo BASE_URL; ?>">Início</a></li>
                        <li><a href="<?php echo BASE_URL; ?>institucional.php">Institucional</a></li>
                        <li><a href="<?php echo BASE_URL; ?>produtos.php">Produtos</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>

                <!-- Produtos -->
                <div class="col-lg-3 col-md-4 mb-4 mb-lg-0">
                    <h5 class="footer-title mb-3">Nossos Produtos</h5>
                    <ul class="footer-links list-unstyled">
                        <li><a href="<?php echo BASE_URL; ?>porta-pallets.php">Porta Pallets</a></li>
                        <li><a href="<?php echo BASE_URL; ?>estantes-industriais.php">Estantes Industriais</a></li>
                        <li><a href="<?php echo BASE_URL; ?>mezaninos.php">Mezaninos</a></li>
                        <li><a href="<?php echo BASE_URL; ?>porta-bobina.php">Porta Bobina</a></li>
                        <li><a href="<?php echo BASE_URL; ?>cantilever.php">Cantilever</a></li>
                        <li><a href="<?php echo BASE_URL; ?>empilhadeira-eletrica.php">Empilhadeira Elétrica</a></li>
                        <li><a href="<?php echo BASE_URL; ?>paleteira-eletrica.php">Paleteira Elétrica</a></li>
                    </ul>
                </div>

                <!-- Redes Sociais -->
                <div class="col-lg-3 col-md-4">
                    <h5 class="footer-title mb-3">Redes Sociais</h5>
                    <div class="footer-social">
                        <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo SOCIAL_WHATSAPP; ?>" target="_blank" class="social-icon">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="footer-divider my-4">

            <!-- Copyright -->
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start mb-2 mb-md-0">
                    <p class="footer-copyright mb-0">&copy; <?php echo CURRENT_YEAR; ?> <?php echo SITE_NAME; ?>. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-4 text-center mb-2 mb-md-0">
                    <p class="footer-developed mb-0">
                        <span class="me-2">Desenvolvido por</span>
                        <img src="<?php echo BASE_URL; ?>assets/img/logos/studiowa.svg" alt="StudioWA" class="studiowa-logo">
                    </p>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <a href="<?php echo BASE_URL; ?>politica-privacidade.php" class="footer-link me-3">Política de Privacidade</a>
                    <a href="<?php echo BASE_URL; ?>termos-uso.php" class="footer-link">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>

    <?php include 'cookie-consent.php'; ?>

    <!-- Schema.org Structured Data -->
    <?php
    // Schema Organização (aparece em todas as páginas)
    generate_organization_schema();

    // Schema LocalBusiness (apenas na home ou páginas de contato)
    if (basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == 'orcamento.php') {
        generate_local_business_schema();
    }

    // Schema de Breadcrumb (se definido na página)
    if (isset($breadcrumb_items)) {
        generate_breadcrumb_schema($breadcrumb_items);
    }

    // Schema de Produto (se definido na página)
    if (isset($product_schema)) {
        generate_product_schema(
            $product_schema['name'],
            $product_schema['description'],
            $product_schema['image'],
            isset($product_schema['category']) ? $product_schema['category'] : 'Sistemas de Armazenagem'
        );
    }
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Customizado -->
    <script src="<?php echo JS_URL; ?>script.js"></script>
</body>
</html>
