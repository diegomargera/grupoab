# 🔧 Troubleshooting - Navbar não aparece

## Problema: Menu todo azul, textos invisíveis

### Solução Aplicada:

1. **CSS Inline adicionado no header.php**
   - Garante que as cores sejam aplicadas mesmo se houver conflito
   - Usa `!important` para sobrescrever outros estilos

2. **Cache busting**
   - Adicionado `?v=<?php echo time(); ?>` no link do CSS
   - Força o navegador a recarregar o CSS a cada atualização

3. **Estilos específicos para dropdown**
   - `.nav-link` e `.nav-link.dropdown-toggle` agora têm cores específicas

---

## ✅ Checklist de Verificação

### Se os botões ainda não aparecerem:

1. **Limpar cache do navegador**
   - Chrome/Edge: `Ctrl + Shift + Delete`
   - Firefox: `Ctrl + Shift + Delete`
   - Ou use: `Ctrl + F5` para forçar reload

2. **Verificar se o arquivo CSS está sendo carregado**
   - Abra o DevTools (`F12`)
   - Vá em "Network" ou "Rede"
   - Recarregue a página
   - Procure por `style.css` - deve estar com status 200

3. **Inspecionar elemento**
   - Clique com botão direito no menu
   - "Inspecionar elemento"
   - Verifique se as classes estão aplicadas:
     - `.navbar` deve ter `background-color: #094490`
     - `.nav-link` deve ter `color: #EDEDED`

4. **Verificar JavaScript do Bootstrap**
   - Abra o Console (`F12` > Console)
   - Não deve haver erros vermelhos
   - Bootstrap JS deve estar carregado

---

## 🎨 Cores que devem aparecer:

```css
/* Fundo da Navbar */
background: #094490 (Azul)

/* Textos dos Links */
color: #EDEDED (Cinza)

/* Hover dos Links */
color: #FF7621 (Laranja)

/* Ícone do Logo */
color: #FF7621 (Laranja)
```

---

## 🔍 Verificação Visual

### Como deve aparecer:

```
┌─────────────────────────────────────────────────┐
│  🏢 Grupo AB    Início  Produtos▼  Institucional▼  Contato  │
│  (Laranja)     (Cinza)  (Cinza)    (Cinza)       (Cinza)   │
└─────────────────────────────────────────────────┘
    ← Fundo Azul (#094490)
```

### Se aparecer assim (ERRADO):
```
┌─────────────────────────────────────────────────┐
│                                                  │
│  (Tudo azul, sem textos visíveis)              │
└─────────────────────────────────────────────────┘
```

**Solução**: Limpe o cache e force o reload com `Ctrl + F5`

---

## 💻 Teste Rápido no Console

Cole isso no console do navegador (F12):

```javascript
// Verificar cor da navbar
console.log(getComputedStyle(document.querySelector('.navbar')).backgroundColor);
// Deve retornar: rgb(9, 68, 144) que é #094490

// Verificar cor dos links
console.log(getComputedStyle(document.querySelector('.nav-link')).color);
// Deve retornar: rgb(237, 237, 237) que é #EDEDED
```

---

## 🚀 Solução Definitiva Aplicada

### Arquivo: `includes/header.php`

Adicionado CSS inline ANTES do style.css customizado:

```html
<style>
    .navbar {
        background-color: #094490 !important;
    }
    .navbar-brand,
    .navbar-nav .nav-link {
        color: #EDEDED !important;
    }
    .navbar-brand:hover,
    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus {
        color: #FF7621 !important;
    }
    .navbar-brand i {
        color: #FF7621 !important;
    }
</style>
```

Isso garante que as cores sejam aplicadas independentemente de qualquer conflito.

---

## 📱 Teste em Diferentes Navegadores

- [x] Chrome/Edge
- [x] Firefox
- [x] Safari
- [x] Opera

Se funcionar em um mas não em outro, limpe o cache do navegador problemático.

---

## 🔄 Forçar Atualização

### Método 1: Hard Refresh
- Windows: `Ctrl + F5`
- Mac: `Cmd + Shift + R`

### Método 2: Limpar Cache
1. Abra Configurações do navegador
2. Privacidade e Segurança
3. Limpar dados de navegação
4. Marque "Imagens e arquivos em cache"
5. Clique em "Limpar dados"

### Método 3: Modo Anônimo
- Abra uma janela anônima/privada
- Teste o site lá
- Se funcionar, o problema é cache

---

## ✅ Confirmação de Funcionamento

A navbar está funcionando corretamente quando você vê:

1. ✅ Fundo azul escuro
2. ✅ Logo "Grupo AB" visível em cinza
3. ✅ Ícone de prédio em laranja
4. ✅ Links "Início", "Produtos", "Institucional", "Contato" visíveis em cinza
5. ✅ Ao passar o mouse, links ficam laranja
6. ✅ Dropdowns abrem com fundo azul e borda laranja
7. ✅ Items dos dropdowns em cinza, hover laranja

---

**Problema resolvido!** 🎉

Se ainda persistir, entre em contato ou verifique se o servidor Apache está rodando corretamente.
