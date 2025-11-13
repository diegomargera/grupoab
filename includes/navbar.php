<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="<?php echo BASE_URL; ?>">
            <img src="<?php echo BASE_URL; ?>assets/img/logos/logo.svg" alt="<?php echo SITE_NAME; ?>" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Menu Centralizado -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>index.php">Início</a>
                </li>

                <!-- Dropdown Sistemas de Armazenagem -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="armazenagemDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sistemas de Armazenagem
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="armazenagemDropdown">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>porta-pallets.php">
                            <i class="fas fa-pallet me-2"></i>Porta Pallets
                        </a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>estantes-industriais.php">
                            <i class="fas fa-boxes-stacked me-2"></i>Estantes Industriais
                        </a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>mezaninos.php">
                            <i class="fas fa-layer-group me-2"></i>Mezaninos
                        </a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>porta-bobina.php">
                            <i class="fas fa-circle-notch me-2"></i>Porta Bobina
                        </a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>cantilever.php">
                            <i class="fas fa-warehouse me-2"></i>Cantilever
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>produtos.php">
                            <i class="fas fa-th me-2"></i>Todos os Produtos
                        </a></li>
                    </ul>
                </li>

                <!-- Dropdown Empilhadeiras -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="empilhadeirasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Empilhadeiras
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="empilhadeirasDropdown">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>empilhadeira-eletrica.php">
                            <img src="<?php echo BASE_URL; ?>assets/img/icones/empilhadeira.svg" alt="Empilhadeira" class="dropdown-icon me-2">Empilhadeira Elétrica 2500kg
                        </a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>paleteira-eletrica.php">
                            <img src="<?php echo BASE_URL; ?>assets/img/icones/paleteira.svg" alt="Paleteira" class="dropdown-icon me-2">Paleteira Elétrica
                        </a></li>
                    </ul>
                </li>

                <!-- Institucional -->
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'institucional.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>institucional.php">Institucional</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>index.php#contato">Contato</a>
                </li>
            </ul>

            <!-- Botão Orçamento (Direita) -->
            <div class="d-flex align-items-center">
                <a href="<?php echo BASE_URL; ?>orcamento.php" class="btn btn-orcamento">
                    <i class="fas fa-calculator me-2"></i>Orçamento
                </a>
            </div>
        </div>
    </div>
</nav>
