# Grupo AB - Site Institucional

Site institucional modular desenvolvido em PHP com Bootstrap, Tailwind CSS e JavaScript.

## 📁 Estrutura de Arquivos

```
grupoab/
├── config.php                  # Configurações gerais do site
├── index.php                   # Página principal
├── processa_contato.php        # Processamento do formulário de contato
│
├── includes/                   # Arquivos modulares
│   ├── header.php             # <head> e meta tags
│   ├── navbar.php             # Menu de navegação
│   └── footer.php             # Rodapé e scripts JS
│
├── css/                        # Estilos
│   └── style.css              # CSS customizado
│
├── js/                         # Scripts
│   └── script.js              # JavaScript customizado
│
├── images/                     # Imagens do site
└── assets/                     # Outros recursos
```

## 🚀 Como Usar

### Pré-requisitos
- XAMPP, WAMP ou qualquer servidor PHP
- PHP 7.4 ou superior

### Instalação

1. Coloque os arquivos na pasta `htdocs` do XAMPP
2. Acesse: `http://localhost/grupoab/`
3. Pronto! O site está funcionando

## ⚙️ Configurações

Todas as configurações do site estão centralizadas no arquivo `config.php`:

### Informações do Site
```php
define('SITE_NAME', 'Grupo AB');
define('SITE_DESCRIPTION', 'Soluções inovadoras para o seu negócio');
```

### Informações de Contato
```php
define('CONTACT_EMAIL', 'contato@grupoab.com.br');
define('CONTACT_PHONE', '(11) 9999-9999');
define('CONTACT_ADDRESS', 'São Paulo, SP - Brasil');
```

### Redes Sociais
```php
define('SOCIAL_FACEBOOK', '#');
define('SOCIAL_INSTAGRAM', '#');
define('SOCIAL_LINKEDIN', '#');
define('SOCIAL_WHATSAPP', '#');
```

## 📄 Como Criar Novas Páginas

Para criar uma nova página, siga este modelo:

```php
<?php
// Inclui o arquivo de configuração
require_once 'config.php';

// Define o título da página
$page_title = 'Nome da Página';

// Inclui o header
include 'includes/header.php';

// Inclui a navbar
include 'includes/navbar.php';
?>

<!-- Seu conteúdo aqui -->
<section class="py-5">
    <div class="container">
        <h1>Conteúdo da Nova Página</h1>
    </div>
</section>

<?php
// Inclui o footer
include 'includes/footer.php';
?>
```

## 🎨 Estrutura Modular

### header.php
- Meta tags
- Título dinâmico
- Links para CSS (Bootstrap, Tailwind, Font Awesome)
- Google Fonts

### navbar.php
- Menu de navegação responsivo
- Link ativo automático baseado na página atual
- Logo e nome do site dinâmicos

### footer.php
- Rodapé com ano dinâmico
- Links para políticas
- Scripts JavaScript (Bootstrap e customizado)

## 📧 Formulário de Contato

O formulário está configurado para:
- Validação de campos obrigatórios
- Sanitização de dados
- Salvamento em arquivo de log (`contatos.log`)
- Página de confirmação personalizada

### Para ativar envio de e-mail:

Edite o arquivo `processa_contato.php` e descomente a seção de envio de e-mail:

```php
// Descomente estas linhas:
$para = CONTACT_EMAIL;
$assunto = "Novo contato do site - " . SITE_NAME;
// ... resto do código de envio
```

## 🎯 Recursos

### CSS
- ✅ Animações suaves
- ✅ Efeitos hover
- ✅ Scroll suave
- ✅ Scrollbar customizada
- ✅ Totalmente responsivo

### JavaScript
- ✅ Navbar com efeito de scroll
- ✅ Smooth scroll para seções
- ✅ Animações ao rolar a página
- ✅ Validação de formulário
- ✅ Sistema de alertas
- ✅ Botão voltar ao topo
- ✅ Efeito parallax

## 🛠️ Tecnologias Utilizadas

- **PHP** - Backend
- **Bootstrap 5.3.2** - Framework CSS
- **Tailwind CSS** - Utilitários CSS
- **JavaScript Vanilla** - Interatividade
- **Font Awesome 6** - Ícones
- **Google Fonts (Poppins)** - Tipografia

## 📱 Responsividade

O site é totalmente responsivo e funciona perfeitamente em:
- 📱 Smartphones
- 📱 Tablets
- 💻 Desktops
- 🖥️ Telas grandes

## 🔒 Segurança

- Sanitização de inputs com `filter_input()`
- Proteção contra XSS
- Validação de e-mail
- Headers de segurança

## 📝 Personalização

### Cores
Edite o arquivo `css/style.css` para alterar as cores:
```css
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
```

### Conteúdo
Todo o conteúdo pode ser editado diretamente no `index.php` ou através de arrays PHP para facilitar a manutenção.

## 🆘 Suporte

Para suporte ou dúvidas, entre em contato:
- E-mail: <?php echo CONTACT_EMAIL; ?>
- Telefone: <?php echo CONTACT_PHONE; ?>

## 📄 Licença

Este projeto está sob a licença MIT. Sinta-se livre para usar e modificar.

---

**Desenvolvido com ❤️ para o Grupo AB**
