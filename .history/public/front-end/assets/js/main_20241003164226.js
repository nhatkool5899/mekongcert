// Redirect submenu

document.addEventListener("DOMContentLoaded", function() {
    const submenuLinks = document.querySelectorAll('.about-redirect');

    submenuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const section = this.getAttribute('data-section');
            // window.location.href = this.href;

            console.log(section);

            setTimeout(() => {
                const targetElement = document.getElementById(section);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }, 3000); 
        });
    });
});