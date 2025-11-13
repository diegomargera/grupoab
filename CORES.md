# 🎨 Paleta de Cores - Grupo AB

## Cores Principais

### Azul (Primária)
- **Variável CSS**: `var(--cor-azul)` ou `var(--cor-primaria)`
- **Hexadecimal**: `#094490`
- **Uso**: Logo, botões principais, destaques

### Laranja (Secundária)
- **Variável CSS**: `var(--cor-laranja)` ou `var(--cor-secundaria)`
- **Hexadecimal**: `#FF7621`
- **Uso**: CTAs, elementos de destaque, hover states

### Amarelo (Destaque)
- **Variável CSS**: `var(--cor-amarelo)` ou `var(--cor-destaque)`
- **Hexadecimal**: `#FFC800`
- **Uso**: Ícones, badges, alertas positivos

### Cinza (Neutro)
- **Variável CSS**: `var(--cor-cinza)`
- **Hexadecimal**: `#EDEDED`
- **Uso**: Backgrounds, bordas, textos secundários

### Preto (Texto)
- **Variável CSS**: `var(--cor-preto)`
- **Hexadecimal**: `#1C1C1C`
- **Uso**: Textos principais, footer, navbar

---

## Como Usar as Cores

### No CSS:

```css
/* Usando a variável diretamente */
.meu-elemento {
    background-color: var(--cor-azul);
    color: var(--cor-branco);
}

/* Usando cor primária */
.botao-principal {
    background-color: var(--cor-primaria);
    border: 2px solid var(--cor-secundaria);
}

/* Hover com cor laranja */
.botao:hover {
    background-color: var(--cor-laranja);
}
```

### No HTML com classes Tailwind:

```html
<!-- Nota: Para usar com Tailwind, adicione as cores no config -->
<div class="bg-[#094490] text-white">
    Conteúdo com fundo azul
</div>
```

### Inline Style (quando necessário):

```html
<div style="background-color: var(--cor-azul); color: var(--cor-branco);">
    Conteúdo
</div>
```

---

## Combinações Sugeridas

### 1. Hero Section
- **Fundo**: Azul (`#094490`)
- **Texto**: Branco
- **Botão CTA**: Laranja (`#FF7621`)

### 2. Cards de Serviço
- **Fundo**: Branco
- **Ícone**: Azul ou Laranja
- **Borda Hover**: Amarelo (`#FFC800`)

### 3. Footer
- **Fundo**: Preto (`#1C1C1C`)
- **Texto**: Cinza (`#EDEDED`)
- **Links**: Laranja (`#FF7621`)

### 4. Navbar
- **Fundo**: Azul (`#094490`)
- **Texto**: Branco
- **Hover**: Amarelo (`#FFC800`)

---

## Acessibilidade (Contraste)

### Texto Escuro em Fundo Claro ✅
- Preto sobre Branco: **AAA**
- Preto sobre Cinza: **AA**

### Texto Claro em Fundo Escuro ✅
- Branco sobre Azul: **AAA**
- Branco sobre Preto: **AAA**

### Combinações a Evitar ⚠️
- Amarelo sobre Branco (contraste insuficiente)
- Cinza sobre Branco (use preto para textos)

---

## Variações de Tom

Se precisar de variações mais claras ou escuras:

```css
/* Azul Claro (adicionar ao :root se necessário) */
--cor-azul-claro: #0d5cb8;

/* Azul Escuro */
--cor-azul-escuro: #063166;

/* Laranja Claro */
--cor-laranja-claro: #ff8f4a;

/* Laranja Escuro */
--cor-laranja-escuro: #e65d0a;
```

---

## Gradientes Sugeridos

### Gradiente Azul para Laranja
```css
background: linear-gradient(135deg, var(--cor-azul) 0%, var(--cor-laranja) 100%);
```

### Gradiente Azul com Transparência
```css
background: linear-gradient(to right, var(--cor-azul), rgba(9, 68, 144, 0.7));
```

---

## Referência Rápida

| Cor | Hexadecimal | Variável CSS |
|-----|-------------|--------------|
| Azul | `#094490` | `var(--cor-azul)` |
| Laranja | `#FF7621` | `var(--cor-laranja)` |
| Amarelo | `#FFC800` | `var(--cor-amarelo)` |
| Cinza | `#EDEDED` | `var(--cor-cinza)` |
| Preto | `#1C1C1C` | `var(--cor-preto)` |
| Branco | `#FFFFFF` | `var(--cor-branco)` |

---

**Paleta definida para o Grupo AB - Sistemas de Armazenagem**
