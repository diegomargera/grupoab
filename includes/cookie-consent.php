<!-- Cookie Consent Banner -->
<div id="cookieConsent" class="cookie-consent">
    <div class="cookie-consent-content">
        <div class="cookie-consent-text">
            <i class="fas fa-cookie-bite me-2"></i>
            <span>Este site utiliza cookies para melhorar sua experiência de navegação.<br> Ao continuar navegando, você concorda com nossa <a href="<?php echo BASE_URL; ?>politica-privacidade.php" class="cookie-link">Política de Privacidade</a>.</span>
        </div>
        <div class="cookie-consent-buttons">
            <button id="acceptCookies" class="btn-cookie-accept">
                <i class="fas fa-check me-2"></i>Aceitar
            </button>
            <button id="declineCookies" class="btn-cookie-decline">
                <i class="fas fa-times me-2"></i>Recusar
            </button>
        </div>
    </div>
</div>

<script>
// Cookie Consent Logic
document.addEventListener('DOMContentLoaded', function() {
    const cookieConsent = document.getElementById('cookieConsent');
    const acceptBtn = document.getElementById('acceptCookies');
    const declineBtn = document.getElementById('declineCookies');

    // Check if user has already made a choice
    if (!getCookie('cookieConsent')) {
        setTimeout(() => {
            cookieConsent.classList.add('show');
        }, 1000);
    }

    // Accept cookies
    acceptBtn.addEventListener('click', function() {
        setCookie('cookieConsent', 'accepted', 365);
        cookieConsent.classList.remove('show');
    });

    // Decline cookies
    declineBtn.addEventListener('click', function() {
        setCookie('cookieConsent', 'declined', 365);
        cookieConsent.classList.remove('show');
    });

    // Cookie functions
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
});
</script>
