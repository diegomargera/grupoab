<!-- Loading Screen -->
<div id="loadingScreen" class="loading-screen">
    <div class="loading-content">
        <div class="loading-animation">
            <img id="loadingFrame" src="<?php echo BASE_URL; ?>assets/img/loading/0.svg" alt="Loading">
        </div>
        <p class="loading-text">Carregando<span class="loading-dots">...</span></p>
    </div>
</div>

<style>
.loading-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
}

.loading-screen.hidden {
    opacity: 0;
    visibility: hidden;
}

.loading-content {
    text-align: center;
}

.loading-animation {
    margin-bottom: 20px;
}

.loading-animation img {
    width: 200px;
    height: 200px;
    object-fit: contain;
    display: block;
    margin: 0 auto;
}

.loading-text {
    font-size: 1.5rem;
    font-weight: 600;
    color: #094490;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.loading-dots {
    display: inline-block;
    width: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .loading-animation img {
        width: 150px;
        height: 150px;
    }

    .loading-text {
        font-size: 1.25rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loadingScreen = document.getElementById('loadingScreen');
    const loadingFrame = document.getElementById('loadingFrame');
    const baseUrl = '<?php echo BASE_URL; ?>';

    // Configuração da animação
    const totalFrames = 6; // 0 até 5 = 6 frames
    let currentFrame = 0;

    // Função para animar os frames
    function animateFrames() {
        currentFrame = (currentFrame + 1) % totalFrames;
        loadingFrame.src = `${baseUrl}assets/img/loading/${currentFrame}.svg`;
    }

    // Iniciar animação dos frames (trocar a cada 150ms)
    const frameInterval = setInterval(animateFrames, 150);

    // Simular carregamento da página
    window.addEventListener('load', function() {
        // Aguardar um pouco antes de esconder (mínimo de 500ms para garantir que a página carregou)
        setTimeout(function() {
            loadingScreen.classList.add('hidden');

            // Limpar o intervalo de animação
            clearInterval(frameInterval);

            // Remover o elemento do DOM após a transição
            setTimeout(function() {
                if (loadingScreen.parentNode) {
                    loadingScreen.parentNode.removeChild(loadingScreen);
                }
            }, 500);
        }, 500);
    });

    // Fallback: esconder após 5 segundos mesmo se a página não carregar completamente
    setTimeout(function() {
        if (!loadingScreen.classList.contains('hidden')) {
            loadingScreen.classList.add('hidden');
            clearInterval(frameInterval);
        }
    }, 5000);
});
</script>
