// Redirect submenu

document.addEventListener("DOMContentLoaded", function() {
    const submenuLinks = document.querySelectorAll('.about-redirect');
    const submenu = document.querySelector('.submenu');

    document.querySelectorAll('.about-redirect').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
    
            const section = this.getAttribute('data-section');
            const currentUrl = window.location.href;

            if (currentUrl.includes('/gioi-thieu')) {

                submenu.style.opacity = '0';
                submenu.style.visibility = 'hidden';

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
