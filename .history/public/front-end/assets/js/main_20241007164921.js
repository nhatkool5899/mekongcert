$('.nav-link').filter(function(){
    return this.href == location.href.replace(/#.*/,"");
  }).addClass('active');

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
        
        const target = this.getAttribute('data-title');

        document.querySelectorAll('.about-tab-item').forEach(tab => {
            tab.classList.remove('active');
        });
        document.querySelectorAll('.wraptext').forEach(wrap => {
            wrap.classList.remove('active');
        });

        this.classList.add('active');
        document.querySelector('.' + target).classList.add('active');
    });
});


// question

$('.item-question').click(function(){
    $(this).find('.show-answer').toggleClass('active');
    $(this).find('.hide-answer').toggleClass('active');

    var answer = $(this).find('.item-answer');
    
    if (answer.is(':visible')) {
    answer.stop().slideUp();
    } else {
    $('.item-answer').stop().slideUp();

    answer.stop().slideDown();
    }
});

$('.item-answer').click(function(event){
    event.stopPropagation();
});



// Search

$('.search-icon').click(function(){
    $('.search-body').addClass('active');
  })
  
  $('.btn-search-close').click(function(){
    $('.search-body').removeClass('active');
  })
