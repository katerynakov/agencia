
  // кнопка страницу наверх 

  jQuery(document).ready(function() {
    var btn = $('#buttontothetop');  
    $(window).scroll(function() {     
      if ($(window).scrollTop() > 60) {
          btn.addClass('show');
        } else {
          btn.removeClass('show');
        }
      });
      btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '60');
      });
    });
  
  
  // мобильное меню - показать
  
  $(function() {
    $('#menu-mobile__header_btn').on('click', function() {
      
      $('#menu-mobile__open_body').toggleClass('show');
    })
    });
    
    
    // мобильное меню - спрятать
    $(function() {
    $('#menu-mobile__open_btn-close').on('click', function() {
      
      $('#menu-mobile__open_body').removeClass('show');
    })
    });
   