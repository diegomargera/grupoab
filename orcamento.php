<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Solicite seu Orçamento - Sistemas de Armazenagem';
$page_description = 'Solicite orçamento para Sistemas de Armazenagem do Grupo AB. Porta Pallets, Estantes Industriais, Mezaninos, Empilhadeiras e Paleteiras Elétricas. Projetos personalizados em todo Brasil.';
$page_keywords = 'orçamento armazenagem, cotação porta pallets, orçamento estantes industriais, preço mezanino, orçamento empilhadeira, solicitar orçamento';
$page_image = BASE_URL . 'assets/img/logo/logo-grupo-ab.svg';
$page_url = BASE_URL . 'orcamento.php';
$canonical_url = BASE_URL . 'orcamento.php';

// Breadcrumb para SEO
$breadcrumb_items = [
    'Início' => BASE_URL,
    'Orçamento' => BASE_URL . 'orcamento.php'
];

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Hero Section Orçamento -->
<section class="hero-section" style="min-height: 50vh; padding-top: 100px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="fw-bold mb-4">
                    Solicite seu <span class="text-laranja">Orçamento</span>
                </h1>
                <p class="lead mb-4">
                    Preencha o formulário abaixo e nossa equipe entrará em contato<br> com a melhor solução para seu negócio.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Formulário de Orçamento -->
<section id="formulario-orcamento" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="orcamento-form-wrapper p-4 p-lg-5">
                    <form id="formOrcamento" class="orcamento-form" method="POST" enctype="multipart/form-data">
                        <div class="row g-4">
                            <!-- Nome -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                </div>
                            </div>

                            <!-- Telefone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                                </div>
                            </div>

                            <!-- Empresa -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" required>
                                </div>
                            </div>

                            <!-- CNPJ -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
                                </div>
                            </div>

                            <!-- Segmento de Atuação -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-select" id="segmento" name="segmento" required>
                                        <option value="" selected disabled>Segmento de Atuação</option>
                                        <option value="alimentos">Indústria de Alimentos</option>
                                        <option value="frio">Cadeia do Frio e Frigoríficos</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="farma">Farma e Distribuidor Farma</option>
                                        <option value="departamento">Departamento</option>
                                        <option value="logistica">Logística Distribuição Geral</option>
                                        <option value="automotivo">Automotivo, Montadoras e Autopeças</option>
                                        <option value="servicos">Serviços</option>
                                        <option value="industria">Indústria Geral</option>
                                        <option value="outros">Outros</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Selecione o Produto -->
                            <div class="col-12">
                                <div class="form-group">
                                    <select class="form-select" id="produto" name="produto" required>
                                        <option value="" selected disabled>Selecione o Produto</option>
                                        <optgroup label="Sistemas de Armazenagem">
                                            <option value="porta-pallets">Porta Pallets</option>
                                            <option value="estantes">Estantes Industriais</option>
                                            <option value="mezaninos">Mezaninos</option>
                                            <option value="porta-bobina">Porta Bobina</option>
                                            <option value="cantilever">Cantilever</option>
                                            <option value="flow-rack">Flow Rack</option>
                                        </optgroup>
                                        <optgroup label="Empilhadeiras">
                                            <option value="empilhadeira-2500kg">Empilhadeira Elétrica 2500kg</option>
                                            <option value="paleteira-1500kg">Paleteira Elétrica 1500kg</option>
                                            <option value="paleteira-1600kg">Paleteira Elétrica 1600kg</option>
                                        </optgroup>
                                        <option value="projeto-personalizado">Projeto Personalizado</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Upload de Arquivos -->
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="upload-area" id="uploadArea">
                                        <div class="upload-content">
                                            <i class="fas fa-cloud-upload-alt upload-icon text-azul mb-3"></i>
                                            <p class="mb-2">Solte arquivos aqui ou</p>
                                            <button type="button" class="btn btn-laranja" onclick="document.getElementById('fileInput').click()">Selecione os arquivos</button>
                                            <input type="file" id="fileInput" name="arquivos[]" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" style="display: none;">
                                            <p class="upload-info mt-3 mb-0">
                                                Tipos de arquivo aceitos: jpg, jpeg, png, pdf, doc, docx. Máx. tamanho do arquivo: 20 MB, Máx. arquivos: 5.
                                            </p>
                                        </div>
                                        <div id="fileList" class="file-list mt-3"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mensagem -->
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Fale um pouco sobre a sua necessidade" required></textarea>
                                </div>
                            </div>

                            <!-- Política de Privacidade -->
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacidade" name="privacidade" required>
                                    <label class="form-check-label" for="privacidade">
                                        Eu concordo com a <a href="<?php echo BASE_URL; ?>politica-privacidade.php" target="_blank" class="text-laranja">Política de Privacidade.</a><span class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Botão Enviar -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-enviar w-100">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
