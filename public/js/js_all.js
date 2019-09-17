/* JS header start*/
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("header3");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
/* menu responsive*/
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
/* slide*/

/* slide */
   

/*JS header end*/
/*-------------------------------------------------------*/
/*JS footer start*/


/*JS footer end*/
/*-------------------------------------------------------*/
/*JS home start*/
jQuery(document).ready(function($) {
		var position = $(window).scrollTop();
		$(window).scroll(function() {
			console.log(position);
		    var scroll = $(window).scrollTop();
			    if (scroll>450	) {
			    	$('.number').each(function () {
					    $(this).prop('Counter',0).animate({
					        Counter: $(this).text()
					    }, {
					        duration: 3000,
					        easing: 'linear',
					        step: function (now) {
					            $(this).text(Math.ceil(now));
					        }
					    });
					});
					$(window).off('scroll');	
				}
		    position = scroll;
		});
	    if (position>450	) {
		$('.number').each(function () {
		    $(this).prop('Counter',0).animate({
		        Counter: $(this).text()
		    }, {
		        duration: 3000,
		        easing: 'linear',
		        step: function (now) {
		            $(this).text(Math.ceil(now));
		        }
		    });
		});
		$(window).off('scroll');	
	}
	});
/* slick images*/
	jQuery(document).ready(function($) {
$('.text-kh').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
});

jQuery(document).ready(function($) {
$('.doitac').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 5,
  slidesToScroll: 3,
  autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
});
/* tab- linhkien*/
function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
/*JS home end*/
/*-------------------------------------------------------*/
/*JS about-us start*/


/*JS about-us end*/
/*-------------------------------------------------------*/
/*JS products start*/


/*JS products end*/
/*-------------------------------------------------------*/
/*JS product-detail start*/


/*JS product-detail end*/
/*-------------------------------------------------------*/
/*JS news start*/


/*JS news end*/
/*-------------------------------------------------------*/
/*JS new-detail start*/


/*JS new-detail end*/
/*-------------------------------------------------------*/
/*JS contact start*/


/*JS contact end*/
/*------------------------------------------------------- */