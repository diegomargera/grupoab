// ==========================================
// Grupo AB - JavaScript Principal
// ==========================================

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // ==========================================
    // Navbar - Scroll Effect
    // ==========================================
    const navbar = document.querySelector('.navbar');

    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
                navbar.style.boxShadow = '0 4px 20px rgba(9, 68, 144, 0.3)';
                // NÃO altera cores, apenas sombra
            } else {
                navbar.classList.remove('scrolled');
                navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            }
        });
    }

    // ==========================================
    // Smooth Scroll para Links de Navegação
    // ==========================================
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            // Verifica se é um link interno (começa com #)
            if (href.startsWith('#')) {
                e.preventDefault();

                const target = document.querySelector(href);
                if (target) {
                    const offsetTop = target.offsetTop - 70; // 70px para compensar a navbar

                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });

                    // Fecha o menu mobile após clicar
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }

                    // Atualiza link ativo
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }
            }
        });
    });

    // ==========================================
    // Scroll Animation - Elementos aparecem ao rolar
    // ==========================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Adiciona animação aos cards
    const animatedElements = document.querySelectorAll('.card, .service-card, .portfolio-card');
    animatedElements.forEach(el => {
        el.classList.add('scroll-animate');
        observer.observe(el);
    });

    // ==========================================
    // Formulário de Contato
    // ==========================================
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Pega os valores do formulário
            const formData = new FormData(contactForm);
            const nome = contactForm.querySelector('input[type="text"]').value;
            const email = contactForm.querySelector('input[type="email"]').value;
            const telefone = contactForm.querySelector('input[type="tel"]').value;
            const mensagem = contactForm.querySelector('textarea').value;

            // Validação simples
            if (!nome || !email || !mensagem) {
                showAlert('Por favor, preencha todos os campos obrigatórios.', 'warning');
                return;
            }

            // Validação de email
            if (!validateEmail(email)) {
                showAlert('Por favor, insira um e-mail válido.', 'warning');
                return;
            }

            // Simula envio do formulário
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="loading me-2"></span>Enviando...';

            // Simula delay de envio
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;

                // Mostra mensagem de sucesso
                showAlert('Mensagem enviada com sucesso! Entraremos em contato em breve.', 'success');

                // Limpa o formulário
                contactForm.reset();
            }, 2000);
        });
    }

    // ==========================================
    // Função de Validação de Email
    // ==========================================
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // ==========================================
    // Sistema de Alertas
    // ==========================================
    function showAlert(message, type = 'info') {
        // Remove alertas anteriores
        const existingAlert = document.querySelector('.custom-alert');
        if (existingAlert) {
            existingAlert.remove();
        }

        // Cria novo alerta
        const alert = document.createElement('div');
        alert.className = `custom-alert alert alert-${type} alert-dismissible fade show`;
        alert.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            animation: slideInRight 0.5s ease-out;
        `;

        alert.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        document.body.appendChild(alert);

        // Remove após 5 segundos
        setTimeout(() => {
            alert.classList.remove('show');
            setTimeout(() => alert.remove(), 300);
        }, 5000);
    }

    // ==========================================
    // Counter Animation (Números que contam)
    // ==========================================
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);

        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start);
            }
        }, 16);
    }

    // ==========================================
    // Atualiza Link Ativo no Scroll
    // ==========================================
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id]');
        const scrollY = window.pageYOffset;

        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 100;
            const sectionId = section.getAttribute('id');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });

    // ==========================================
    // Animação de Digitação no Hero (Opcional)
    // ==========================================
    function typeWriter(element, text, speed = 100) {
        let i = 0;
        element.textContent = '';

        function type() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }

        type();
    }

    // ==========================================
    // Efeito Parallax Simples (Opcional)
    // ==========================================
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.hero-image');

        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // ==========================================
    // Preloader (Opcional)
    // ==========================================
    window.addEventListener('load', function() {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        }
    });

    // ==========================================
    // Proteção de Click Direito (Opcional - Descomente se necessário)
    // ==========================================
    /*
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        showAlert('Conteúdo protegido!', 'warning');
    });
    */

    // ==========================================
    // Console Welcome Message
    // ==========================================
    console.log('%c Bem-vindo ao Grupo AB! ',
                'background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-size: 20px; padding: 10px; border-radius: 5px;');
    console.log('%c Desenvolvido com Bootstrap, Tailwind CSS e JavaScript',
                'color: #667eea; font-size: 14px;');

    // ==========================================
    // Upload de Arquivos - Drag and Drop
    // ==========================================
    const uploadArea = document.getElementById('uploadArea');
    const fileInput = document.getElementById('fileInput');
    const fileList = document.getElementById('fileList');
    let selectedFiles = [];

    if (uploadArea && fileInput && fileList) {
        // Prevenir comportamento padrão do navegador
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, preventDefaults, false);
            document.body.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        // Destacar área ao arrastar arquivo
        ['dragenter', 'dragover'].forEach(eventName => {
            uploadArea.addEventListener(eventName, () => {
                uploadArea.classList.add('dragover');
            });
        });

        ['dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, () => {
                uploadArea.classList.remove('dragover');
            });
        });

        // Lidar com arquivos soltos
        uploadArea.addEventListener('drop', handleDrop);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }

        // Lidar com seleção de arquivos via botão
        fileInput.addEventListener('change', function(e) {
            handleFiles(this.files);
        });

        function handleFiles(files) {
            files = [...files];

            // Limitar a 5 arquivos
            if (selectedFiles.length + files.length > 5) {
                alert('Você pode enviar no máximo 5 arquivos.');
                return;
            }

            // Validar tamanho máximo (20MB)
            const maxSize = 20 * 1024 * 1024; // 20MB em bytes
            const validFiles = files.filter(file => {
                if (file.size > maxSize) {
                    alert(`O arquivo ${file.name} excede o tamanho máximo de 20MB.`);
                    return false;
                }
                return true;
            });

            selectedFiles = selectedFiles.concat(validFiles);
            displayFiles();
        }

        function displayFiles() {
            fileList.innerHTML = '';

            selectedFiles.forEach((file, index) => {
                const fileItem = document.createElement('div');
                fileItem.className = 'file-item';

                fileItem.innerHTML = `
                    <div class="file-item-info">
                        <i class="fas fa-file"></i>
                        <span class="file-item-name">${file.name}</span>
                        <span class="file-item-size">(${formatFileSize(file.size)})</span>
                    </div>
                    <button type="button" class="file-item-remove" data-index="${index}">
                        <i class="fas fa-times"></i>
                    </button>
                `;

                fileList.appendChild(fileItem);
            });

            // Adicionar evento de remover arquivo
            document.querySelectorAll('.file-item-remove').forEach(btn => {
                btn.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    removeFile(index);
                });
            });
        }

        function removeFile(index) {
            selectedFiles.splice(index, 1);
            displayFiles();

            // Atualizar DataTransfer do input
            const dt = new DataTransfer();
            selectedFiles.forEach(file => {
                dt.items.add(file);
            });
            fileInput.files = dt.files;
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
        }
    }

    // ==========================================
    // Máscara para Telefone
    // ==========================================
    const telefoneInput = document.getElementById('telefone');
    if (telefoneInput) {
        telefoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');

            if (value.length <= 10) {
                value = value.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
            } else {
                value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
            }

            e.target.value = value;
        });
    }

    // ==========================================
    // Máscara para CNPJ
    // ==========================================
    const cnpjInput = document.getElementById('cnpj');
    if (cnpjInput) {
        cnpjInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            value = value.replace(/^(\d{2})(\d)/, '$1.$2');
            value = value.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
            value = value.replace(/\.(\d{3})(\d)/, '.$1/$2');
            value = value.replace(/(\d{4})(\d)/, '$1-$2');
            e.target.value = value;
        });
    }

});

// ==========================================
// Adiciona CSS para animações
// ==========================================
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
`;
document.head.appendChild(style);
