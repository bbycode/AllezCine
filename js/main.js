<<<<<<< HEAD

//carrousel
$('#add_right').children().click(function () {
	$('#add_right').children(".active_jumbotron").removeClass("active_jumbotron");
	$(this).addClass("active_jumbotron");
})
//show hide section featured movies.
$(document).ready(function(){

	/*$("#show-hide").click(function(){
	$("div.shown").removeClass("shown").addClass("to-hide");
	var bouton = document.createElement("BUTTON");
	var t = document.createTextNode("PLUS DE FILMS");
	bouton.appendChild(t);
	bouton.addClass("btn");
	document.getElementById("moviesfeatured").appendChild(bouton);
	});*/
//show hide section featured movies.
$(document).ready(function(){
	Arrow_elm();
$("#show-hide").click(function()
{
	var txt = $("#show-hide a").text();
	$('#cacher_les_deux').addClass("col-md-12");
	$("#cacher_les_deux").slideToggle("slow", function () {
		$('#cacher_les_deux').removeClass("col-md-12");
	});
	if (txt==="PLUS DE FILMS")
	{
		$("#show-hide a").text("MOINS DE FILMS");
	} else
	{
		$("#show-hide a").text("PLUS DE FILMS");
	}
});
$("#show-hide_series").click(function()
{
	var txt = $("#show-hide_series a").text();
	$('#cacher_les_deux_series').addClass("col-md-12");
	$("#cacher_les_deux_series").slideToggle("slow", function () {
		$('#cacher_les_deux_series').removeClass("col-md-12");
	});
	if (txt==="PLUS DE SERIES")
	{
		$("#show-hide_series a").text("MOINS DE SERIES");
	} else
	{
		$("#show-hide_series a").text("PLUS DE SERIES");
	}
});
}
);
// arrow scroll
function Arrow_elm() {
	var arrow = document.createElement("div");
	arrow.setAttribute('id', 'arrow_style');
	arrow.setAttribute('onClick', 'scrollTopAnimated(500);');
	arrow.innerHTML="<span class='glyphicon glyphicon-arrow-up'></span>";
	document.body.appendChild(arrow);
	if (document.body.scrollTop <= 630) {
		arrow.style.display = "none";
	} else {
		arrow.style.display = "flex";
	}
}
document.addEventListener("scroll", function(){
if (document.body.scrollTop <= 630) {
	document.getElementById("arrow_style").style.display = "none";
} else {
	document.getElementById("arrow_style").style.display = "flex";
}
});

var stepTime = 20;
var docBody = document.body;
var focElem = document.documentElement;

var scrollAnimationStep = function (initPos, stepAmount) {
    var newPos = initPos - stepAmount > 0 ? initPos - stepAmount : 0;

    docBody.scrollTop = focElem.scrollTop = newPos;

    newPos && setTimeout(function () {
        scrollAnimationStep(newPos, stepAmount);
    }, stepTime);
}

var scrollTopAnimated = function (speed) {
    var topOffset = docBody.scrollTop || focElem.scrollTop;
    var stepAmount = topOffset;

    speed && (stepAmount = (topOffset * stepTime)/speed);

    scrollAnimationStep(topOffset, stepAmount);
};

$(document).ready(function(){
      var percent = 0, bar = $('.transition-timer-carousel-progress-bar'), crsl = $('#myCarousel');
			function progressBarCarousel() {
			  bar.css({width:percent+'%'});
			 	percent = percent +0.10;
			  if (percent>=100) {
			  	  percent=0;
			  	  bar.css({width:'0%'});
			      crsl.carousel('next');
			  }
			}
			var barInterval = setInterval(progressBarCarousel, 1);
			$('.prev_it').click(function () {
					percent=0;
			  	  	bar.css({width:'0%'});
			  });
			$('.next_it').click(function () {
					percent=0;
			  	  	bar.css({width:'0%'});
			  });
			$('#add_right li').click(function () {
					percent=0;
			  	  	bar.css({width:'0%'});
			});
			$('#myCarousel').on('slide.bs.carousel', function (event) {
				clearInterval(barInterval);
				$(".active_jumbotron").removeClass("active_jumbotron");
  				$('#add_right [data-slide-to=' + $(event.relatedTarget).index() + ']').addClass('active_jumbotron');
  			$('#add_right').children().click(function () {
			$('#add_right').children(".active_jumbotron").removeClass("active_jumbotron");
			$(this).addClass("active_jumbotron");
})

  })
			$('#myCarousel').on('slid.bs.carousel', function () {
				barInterval = setInterval(progressBarCarousel, 1);
			})
    });
$('.f_all').click(function () {
	$("#show-hide a").text("PLUS DE FILMS");
	$('#cacher_les_deux').hide();
	$('#featured_movies .col-md-2').show();
	$('#show-hide').show();
});
$('.f_comedie').click(function () {
	$('#cacher_les_deux').show();
	$('#featured_movies .col-md-2').hide();
	$('#featured_movies .comedie').show();
	$('#show-hide').hide();
});
$('.f_aventure').click(function () {
	$('#cacher_les_deux').show();
	$('#featured_movies .col-md-2').hide();
	$('#featured_movies .aventure').show();
	$('#show-hide').hide();
});
$('.f_sci-fi').click(function () {
	$('#cacher_les_deux').show();
	$('#featured_movies .col-md-2').hide();
	$('#featured_movies .sci-fi').show();
	$('#show-hide').hide();
});
$('.f_thriller').click(function () {
	$('#cacher_les_deux').show();
	$('#featured_movies .col-md-2').hide();
	$('#featured_movies .thriller').show();
	$('#show-hide').hide();
});

$('.s_all').click(function () {
	$("#show-hide_series a").text("PLUS DE SERIES");
	$('#cacher_les_deux_series').hide();
	$('#featured_tv_series .col-md-2').show();
	$('#show-hide_series').show();
});
$('.s_comedie').click(function () {
	$('#cacher_les_deux_series').hide();
	$('#featured_tv_series .col-md-2').hide();
	$('#featured_tv_series .comedie').show();
	$('#show-hide_series').hide();
});
$('.s_aventure').click(function () {
	$('#cacher_les_deux_series').show();
	$('#featured_tv_series .col-md-2').hide();
	$('#featured_tv_series .aventure').show();
	$('#show-hide_series').hide();
});
$('.s_sci-fi').click(function () {
	$('#cacher_les_deux_series').show();
	$('#featured_tv_series .col-md-2').hide();
	$('#featured_tv_series .sci-fi').show();
	$('#show-hide_series').hide();
});
$('.s_thriller').click(function () {
	$('#cacher_les_deux_series').show();
	$('#featured_tv_series .col-md-2').hide();
	$('#featured_tv_series .thriller').show();
	$('#show-hide_series').hide();
});

(function(){
  $('.carousel-showsixmoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<6;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());

$('#shop_content #shop_1').click(function () {
	$('#trailer_shop').html("<embed src='https://www.youtube.com/embed/J4YV2_TcCoE'>");
	$('#title_shop').text("SE7EN");
	$('#texte_shop').text("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
	$('#date_shop').text("Mai 05, 1995.");
	$('#gender_shop').text("Thriller");
	$('#price_shop').text("7.95 €");
});
