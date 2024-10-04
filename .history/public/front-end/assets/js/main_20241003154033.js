// Redirect submenu

document.addEventListener("DOMContentLoaded", function() {
    const submenuLinks = document.querySelectorAll('.submenu-link');

    submenuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const section = this.getAttribute('data-section');
            window.location.href = this.href;

            setTimeout(() => {
                const targetElement = document.getElementById(section);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }, 100); 
        });
    });
});