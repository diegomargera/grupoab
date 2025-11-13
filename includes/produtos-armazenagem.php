<!-- Produtos Section - Modern Cards -->
<section id="servicos" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Soluções em <span class="text-laranja">Sistemas de Armazenagem</span></h2>
            <p class="section-description">
                Tecnologia e qualidade para otimizar seu espaço e maximizar resultados
            </p>
        </div>

        <div class="row g-4">
            <?php
            // Array de produtos
            $produtos = [
                [
                    'image' => 'assets/img/produtos/porta-pallets.webp',
                    'title' => 'Porta Pallets',
                    'description' => 'Estruturas robustas para armazenamento vertical de paletes. Alta capacidade de carga e máxima segurança operacional.',
                    'features' => ['Alta Resistência', 'Fácil Montagem', 'Versátil'],
                    'link' => 'porta-pallets.php'
                ],
                [
                    'image' => 'assets/img/produtos/estantes-industriais.webp',
                    'title' => 'Estantes Industriais',
                    'description' => 'Soluções versáteis para organização eficiente do estoque. Ideal para picking e armazenagem de produtos diversos.',
                    'features' => ['Modulares', 'Ajustáveis', 'Econômicas'],
                    'link' => 'estantes-industriais.php'
                ],
                [
                    'image' => 'assets/img/produtos/mezaninos.webp',
                    'title' => 'Mezaninos',
                    'description' => 'Aproveitamento vertical do espaço disponível. Estruturas robustas e personalizadas para cada necessidade.',
                    'features' => ['Sob Medida', 'Expansível', 'Seguro'],
                    'link' => 'mezaninos.php'
                ],
                [
                    'image' => 'assets/img/produtos/porta-bobina.webp',
                    'title' => 'Porta Bobina',
                    'description' => 'Solução especializada para armazenamento de bobinas e rolos. Estrutura robusta com sistema de rotação e fácil acesso.',
                    'features' => ['Rotação Fácil', 'Alta Capacidade', 'Seguro'],
                    'link' => 'porta-bobina.php'
                ],
                [
                    'image' => 'assets/img/produtos/cantilever.webp',
                    'title' => 'Cantilever',
                    'description' => 'Perfeito para armazenagem de produtos longos. Tubos, perfis, madeiras e materiais de grande comprimento.',
                    'features' => ['Acesso Fácil', 'Sem Colunas', 'Flexível'],
                    'link' => 'cantilever.php'
                ]
            ];

            // Loop pelos produtos
            foreach ($produtos as $produto) {
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo BASE_URL . $produto['image']; ?>" alt="<?php echo $produto['title']; ?>" class="img-fluid">
                        </div>
                        <h4 class="product-title"><?php echo $produto['title']; ?></h4>
                        <p class="product-description"><?php echo $produto['description']; ?></p>

                        <div class="product-features">
                            <?php foreach ($produto['features'] as $feature): ?>
                                <span class="feature-badge">
                                    <i class="fas fa-check"></i><?php echo $feature; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <a href="<?php echo BASE_URL . $produto['link']; ?>" class="product-link">
                            Saiba Mais <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
