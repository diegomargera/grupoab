# 📋 Navbar com Dropdowns - Grupo AB

## 🎯 Estrutura Adicionada

### 1. **Dropdown Produtos**
Menu com 5 categorias de produtos:
- Porta Pallets
- Estantes Industriais
- Mezaninos
- Drive-In / Drive-Through
- Cantilever
- Todos os Produtos (link especial)

### 2. **Dropdown Institucional**
Menu com páginas institucionais:
- Sobre o Grupo AB
- Missão e Visão
- Qualidade
- Projetos Realizados

### 3. **Link Contato**
Link direto para a seção de contato

---

## 🎨 Personalização Visual

### Cores Aplicadas:

#### Menu Principal
- **Texto**: Cinza `#EDEDED`
- **Hover**: Laranja `#FF7621`
- **Ícone dropdown**: Cinza → Laranja no hover

#### Dropdown
- **Background**: Azul `#094490`
- **Borda**: Laranja `#FF7621` (2px)
- **Items**: Cinza `#EDEDED`
- **Items Hover**: Laranja `#FF7621`
- **Ícones**: Laranja permanente

---

## ✨ Efeitos Implementados

### 1. **Animação de Abertura**
```css
/* Slide down suave */
@keyframes slideDown {
    from: opacity 0, translateY(-10px)
    to: opacity 1, translateY(0)
}
```

### 2. **Hover nos Items**
- Mudança de cor para laranja
- Movimento para direita (padding-left aumenta)
- Ícone aumenta de tamanho (scale 1.2)
- Background laranja transparente

### 3. **Separadores**
- Divisores entre grupos de items
- Cor cinza com transparência

---

## 📝 Estrutura do HTML

```html
<!-- Dropdown Produtos -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle">Produtos</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item">
            <i class="fas fa-pallet"></i>Porta Pallets
        </a></li>
        <!-- mais items... -->
    </ul>
</li>
```

---

## 🔧 Funcionalidades

### Desktop
- Hover para abrir dropdown
- Click no link principal também funciona
- Animação suave de abertura
- Fecha ao clicar fora

### Mobile
- Click para expandir/recolher
- Items empilhados verticalmente
- Mesmos estilos e cores
- Touch-friendly

---

## 🎯 Links dos Dropdowns

### Produtos
Todos os links apontam para: `produtos.php?cat=categoria`

Exemplo:
- `produtos.php?cat=porta-pallets`
- `produtos.php?cat=estantes`
- `produtos.php?cat=mezaninos`
- `produtos.php?cat=drive-in`
- `produtos.php?cat=cantilever`
- `produtos.php` (todos os produtos)

### Institucional
Links para páginas específicas:
- `sobre.php` (já existe)
- `missao-visao.php` (criar)
- `qualidade.php` (criar)
- `projetos.php` (criar)

---

## 💡 Ícones Utilizados

### Produtos
| Produto | Ícone |
|---------|-------|
| Porta Pallets | `fa-pallet` |
| Estantes | `fa-boxes-stacked` |
| Mezaninos | `fa-layer-group` |
| Drive-In | `fa-cubes` |
| Cantilever | `fa-warehouse` |
| Todos | `fa-th` |

### Institucional
| Página | Ícone |
|--------|-------|
| Sobre | `fa-building` |
| Missão e Visão | `fa-bullseye` |
| Qualidade | `fa-award` |
| Projetos | `fa-project-diagram` |

---

## 📱 Responsividade

### Desktop (> 992px)
```
Início | Produtos ▼ | Institucional ▼ | Contato
              ↓
         [Dropdown Menu]
```

### Mobile (< 992px)
```
☰ (Hamburger)
  ↓
├─ Início
├─ Produtos ▼
│  ├─ Porta Pallets
│  ├─ Estantes
│  └─ ...
├─ Institucional ▼
│  ├─ Sobre
│  └─ ...
└─ Contato
```

---

## 🎨 Visual do Dropdown

```
┌────────────────────────────────┐
│ Produtos                    ▼  │ ← Cinza, hover Laranja
└────────────────────────────────┘
         ↓ (ao hover/click)
┌────────────────────────────────┐
│ 📦 Porta Pallets              │ ← Fundo Azul
│ 📦 Estantes Industriais       │   Borda Laranja
│ 📦 Mezaninos                  │   Texto Cinza
├────────────────────────────────┤   Hover → Laranja
│ 🧱 Drive-In / Drive-Through   │
│ 🏭 Cantilever                 │
├────────────────────────────────┤
│ 📋 Todos os Produtos          │
└────────────────────────────────┘
```

---

## ⚙️ Configurações CSS Principais

```css
/* Background do menu */
.dropdown-menu {
    background-color: var(--cor-azul);
    border: 2px solid var(--cor-laranja);
}

/* Items do menu */
.dropdown-item {
    color: var(--cor-cinza) !important;
}

/* Hover dos items */
.dropdown-item:hover {
    color: var(--cor-laranja) !important;
    background-color: rgba(255, 118, 33, 0.1);
    padding-left: 25px; /* efeito slide */
}

/* Ícones */
.dropdown-item i {
    color: var(--cor-laranja);
}
```

---

## 🚀 Próximos Passos

### Páginas a Criar:

1. **produtos.php**
   - Catálogo completo de produtos
   - Filtro por categoria via GET
   - Layout com cards
   - Botão "Solicitar Orçamento"

2. **missao-visao.php**
   - Missão, Visão e Valores
   - História da empresa

3. **qualidade.php**
   - Certificações
   - Normas e padrões
   - Processos de qualidade

4. **projetos.php**
   - Galeria de projetos
   - Cases de sucesso
   - Depoimentos

---

## ✅ Checklist

- [x] Dropdown Produtos com 6 items
- [x] Dropdown Institucional com 4 items
- [x] Link Contato
- [x] Cores personalizadas (Azul, Cinza, Laranja)
- [x] Hover nos items
- [x] Animação de abertura
- [x] Ícones em todos os items
- [x] Separadores (dividers)
- [x] Efeito de movimento no hover
- [x] Responsivo para mobile

---

**Menu dropdown totalmente personalizado com as cores do Grupo AB!** 🎨
