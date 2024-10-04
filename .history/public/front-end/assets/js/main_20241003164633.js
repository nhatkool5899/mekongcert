// Redirect submenu

document.addEventListener("DOMContentLoaded", function() {
    const submenuLinks = document.querySelectorAll('.about-redirect');

    // submenuLinks.forEach(link => {
    //     link.addEventListener('click', function(e) {
    //         e.preventDefault();

    //         const section = this.getAttribute('data-section');
    //         window.location.href = this.href;

            
    //         setTimeout(() => {
    //             const targetElement = document.getElementById(section);
    //             console.log(targetElement);
    //             if (targetElement) {
    //                 targetElement.scrollIntoView({ behavior: 'smooth' });
    //             }
    //         }, 3000); 
    //     });
    // });

    document.querySelectorAll('.about-redirect').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
    
            const section = this.getAttribute('data-section');
            sessionStorage.setItem('scrollToSection', section);
            window.location.href = this.href;
        });
    });
});
