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
                
                submenu.classList.add = "hidden";

                const targetElement = document.getElementById(section);
                if (targetElement) {
                    const headerHeight = 210;
                    const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
                    const offsetPosition = elementPosition - headerHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            } else {
                sessionStorage.setItem('scrollToSection', section);
                window.location.href = this.href;
            }

        });
    });
});


document.querySelectorAll('.about-tab-item').forEach(item => {
    item.addEventListener('click', function() {
        
        this.classList.add = "active";
        const target = this.getAttribute('data-title');
        
        document.querySelectorAll('.wraptext').forEach(wrap => {
            wrap.classList.remove = 'active';
        });
        
        document.querySelector('.' + target).classList.add = 'active';
    });
});
