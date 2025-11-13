# 🎨 Personalização da Navbar - Grupo AB

## Alterações Realizadas

### 1. **Cores Aplicadas**

#### Background (Fundo)
- **Cor**: Azul `#094490` (var(--cor-azul))
- **Aplicação**: Fundo sólido da navbar

#### Textos dos Links
- **Cor Padrão**: Cinza `#EDEDED` (var(--cor-cinza))
- **Cor Hover**: Laranja `#FF7621` (var(--cor-laranja))
- **Cor Link Ativo**: Laranja `#FF7621` (var(--cor-laranja))

#### Logo/Brand
- **Texto**: Cinza `#EDEDED`
- **Ícone**: Laranja `#FF7621`
- **Hover**: Laranja `#FF7621`

---

## 📝 Arquivos Modificados

### 1. `includes/navbar.php`
```php
// Removido: navbar-dark bg-dark
// Agora: navbar navbar-expand-lg fixed-top shadow-lg
```

### 2. `css/style.css`
```css
/* Navbar com cor azul de fundo */
.navbar {
    background-color: var(--cor-azul) !important;
}

/* Links em cinza */
.nav-link {
    color: var(--cor-cinza) !important;
}

/* Hover em laranja */
.nav-link:hover {
    color: var(--cor-laranja) !important;
}

/* Link ativo em laranja */
.nav-link.active {
    color: var(--cor-laranja) !important;
}

/* Linha animada sob os links */
.nav-link::after {
    background: var(--cor-laranja);
}
```

### 3. `js/script.js`
```javascript
// Efeito de sombra ao scrollar
window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        navbar.style.boxShadow = '0 4px 20px rgba(9, 68, 144, 0.3)';
    }
});
```

---

## ✨ Efeitos Implementados

### 1. **Hover nos Links**
- Transição suave de cor (cinza → laranja)
- Linha animada na parte inferior
- Duração: 0.3s

### 2. **Link Ativo**
- Cor laranja permanente
- Fonte em negrito (weight: 600)
- Linha inferior visível

### 3. **Logo/Brand**
- Ícone sempre laranja
- Texto muda de cinza para laranja no hover
- Efeito de escala sutil (scale: 1.05)

### 4. **Scroll Effect**
- Sombra aumenta ao rolar a página
- Transição suave
- Destaque visual maior

### 5. **Mobile (Hamburger)**
- Ícone adaptado para cor cinza
- Borda cinza
- Focus com borda laranja

---

## 🎯 Resultado Visual

```
┌────────────────────────────────────────┐
│  🏢 Grupo AB    Início Sobre Serviços  │  ← Fundo Azul #094490
│                 ~~~~~~                  │  ← Linha Laranja no hover
└────────────────────────────────────────┘
   ↑         ↑
Ícone     Texto Cinza #EDEDED
Laranja   Hover → Laranja #FF7621
```

---

## 💻 Como Funciona

### Estado Normal
- Background: Azul
- Links: Cinza
- Logo: Cinza (ícone laranja)

### Estado Hover
- Link hover: Laranja
- Linha animada aparece
- Logo: Laranja completo

### Estado Ativo
- Link ativo: Laranja
- Linha visível
- Negrito

### Estado Scrolled
- Sombra mais pronunciada
- Mesmas cores mantidas

---

## 📱 Responsividade

### Desktop
- Links horizontais
- Espaçamento de 10px entre links
- Linha animada em 80% da largura

### Mobile
- Menu hamburger
- Ícone cinza (adaptado)
- Links verticais ao expandir
- Mesmas cores e efeitos

---

## 🔧 Customizações Futuras

### Se quiser adicionar logo:
```php
<!-- Em navbar.php -->
<a class="navbar-brand fw-bold" href="<?php echo BASE_URL; ?>">
    <img src="<?php echo IMAGES_URL; ?>logo.png" alt="Grupo AB" height="40">
    <?php echo SITE_NAME; ?>
</a>
```

### Se quiser mudar a transparência:
```css
.navbar {
    background-color: rgba(9, 68, 144, 0.95) !important;
    backdrop-filter: blur(10px);
}
```

### Se quiser sticky navbar diferente:
```css
.navbar.scrolled {
    background-color: var(--cor-preto) !important;
}
```

---

## ✅ Checklist de Personalização

- [x] Background azul (#094490)
- [x] Textos cinza (#EDEDED)
- [x] Hover laranja (#FF7621)
- [x] Link ativo laranja
- [x] Linha animada laranja
- [x] Logo/ícone laranja
- [x] Efeito de scroll
- [x] Menu mobile adaptado
- [x] Transições suaves
- [x] Responsivo

---

**Navbar personalizada com as cores oficiais do Grupo AB** 🎨
