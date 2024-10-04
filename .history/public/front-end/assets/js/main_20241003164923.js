// Redirect submenu

document.addEventListener("DOMContentLoaded", function() {
    const submenuLinks = document.querySelectorAll('.about-redirect');

    document.querySelectorAll('.about-redirect').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
    
            const section = this.getAttribute('data-section');
            const currentUrl = window.location.href;

            if (currentUrl.includes('/gioi-thieu')) {

                const targetElement = document.getElementById(section);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            } else {
                sessionStorage.setItem('scrollToSection', section);
                window.location.href = this.href;
            }

        });
    });
});
