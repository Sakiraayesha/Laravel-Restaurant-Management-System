$(document).ready(function (){

    $(function() {
        var scrollTop = $(window).scrollTop();
        var bannerHeight = $("#topSection").height();
    
        if(scrollTop > bannerHeight){
            $(".appHeader").addClass("headerFixed");
        }
        else{
            $(".appHeader").removeClass("headerFixed");
        }
    });

    if($(".navSm").length){
        $(".navSm").on("click", function(){
            $(".appHeader .nav").slideToggle(200);
            $(".submenu").removeClass("submenuLg");
        })

        $(".submenu").on("click", function(){
            $(".submenu ul").slideToggle(200);
        })
    }

    $(".carouseInner").slick({
	    autoplay:true,
	    autoplaySpeed:10000,
	    speed:600,
	    slidesToShow:1,
	    slidesToScroll:1,
	    pauseOnHover:true,
	    dots:true,
	    pauseOnDotsHover:true,
	    cssEase:'linear',
	    draggable:false,
	    prevArrow:'<button class="PrevArrow"></button>',
	    nextArrow:'<button class="NextArrow"></button>', 
	  });

    $('.menuCarousel').owlCarousel({
	    items:4,
		loop:true,
		dots: true,
		nav: true,
		autoPlay: true,
		margin:30,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:5
			  }
		  }
	}); 

    $('.datepicker').datepicker({format: "dd.mm.yyyy"});

    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        var bannerHeight = $("#topSection").height();

        if(scrollTop > bannerHeight){
            $(".appHeader").addClass("headerFixed");
        }
        else{
            $(".appHeader").removeClass("headerFixed");
        }
    });

    $(document).on("scroll", onScroll);

    function onScroll(){
	    var scrollTop = $(document).scrollTop();

        $(".scrollNavItem").each(function(){
            var currentSection = $(this).attr("href");

            if($(currentSection).position().top <= scrollTop && $(currentSection).position().top + $(currentSection).height() > scrollTop){
                $(".scrollNavItem").removeClass("selected");
                $(this).addClass("selected");
            }
            else{
                $(this).removeClass("selected");
            }
        })
    }

    $(function() {
        $("#tabs").tabs();
    });

    $("#feature1").on("click", function(){
        $("#ui-id-1").click();
    });
    $("#feature2").on("click", function(){
        $("#ui-id-2").click();
    });
    $("#feature3").on("click", function(){
        $("#ui-id-3").click();
    });

    $(window).resize(function(){
        
        if($(window).width() > 767){
            $(".appHeader .nav").css("display", "flex");
            $(".submenu").addClass("submenuLg");
            $(".submenu ul").css("display", "block");
        }
        else{
            $(".appHeader .nav").css("display", "none");
            $(".submenu ul").css("display", "none");
        }
    })

})