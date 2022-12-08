// Hameburger Menu 
function openNav() {
  document.getElementById("mySidenav").style.width = "315px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";

}

// Add active class to the current button (highlight it)
var header = document.getElementById("mySidenav");
var btns = header.getElementsByClassName("span");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}





$('.clients-slider').slick({
  slidesToShow: 5,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows:true,
  dots:false,
  pauseOnHover:false,	
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },

    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },

    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },

  ]
  });


  $('.portfolio-slider').slick({
    slidesToShow: 3,
     slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows:true,
    dots:false,
    pauseOnHover:false,	
    variableWidth: true,
    responsive: [

      {
        breakpoint: 0,
        settings: {
          slidesToShow: 1,
            slidesToScroll: 1,
             variableWidth: false,
  
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          variableWidth: false,
        }
      },

      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
  
    ]
    });



    $('.review-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows:false,
      dots:false,
      pauseOnHover:false,	
      responsive: [

        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
    
      ]
      });

  //checkboxes
  $(document).ready(function(){		
		
		$('.panel-1 .form-check-input[type=checkbox]').change(function(){
    if($(this).is(":checked")) {
        $('.panel-1').addClass("panel-border");
    } else {
        $('.panel-1').removeClass("panel-border");
    }
});

$('.panel-2 .form-check-input[type=checkbox]').change(function(){
  if($(this).is(":checked")) {
      $('.panel-2').addClass("panel-border");
  } else {
      $('.panel-2').removeClass("panel-border");
  }
});


$('.panel-3 .form-check-input[type=checkbox]').change(function(){
  if($(this).is(":checked")) {
      $('.panel-3').addClass("panel-border");
  } else {
      $('.panel-3').removeClass("panel-border");
  }
});

$('.panel-4 .form-check-input[type=checkbox]').change(function(){
  if($(this).is(":checked")) {
      $('.panel-4').addClass("panel-border");
  } else {
      $('.panel-4').removeClass("panel-border");
  }
});

$('.panel-5 .form-check-input[type=checkbox]').change(function(){
  if($(this).is(":checked")) {
      $('.panel-5').addClass("panel-border");
  } else {
      $('.panel-5').removeClass("panel-border");
  }
});

});






$('.counter-count').each(function () {
  $(this).prop('Counter',0).animate({
      Counter: $(this).text()
  }, {
      duration: 1000,
      easing: 'swing',
      step: function (now) {
          $(this).text(Math.ceil(now));
      }
  });
});