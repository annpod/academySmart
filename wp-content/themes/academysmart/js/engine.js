// JavaScript Document
$(document).ready(function () {
    /*searchform*/
    $('#searchform').submit(function(){
        search_value =$.trim($('#searchform #s').val());
        if(search_value == ""){
            return false; // You can also pop a notification here to inform to user.
        }
    });
    /*slider*/
 
    $('.bxmainslider').bxSlider({
        mode: 'fade',
        pager: true,
        controls:false,
        responsive:true,
        pause: 3000,
        auto: true,
        //autoControls: true,
});
    /*carousel*/
    $('.bxcarousel').bxSlider({
        pager: false,
        controls: true,
        responsive: true,
        minSlides: 6,
        maxSlides: 6,
        moveSlides: 1,
        slideWidth: 195
    });
    
    /*project gallary*/
    $('.bxgallary').bxSlider({
        pager: false,
        controls: true,
        responsive: true,
        minSlides: 5,
        maxSlides: 5,
        moveSlides: 1,
        slideWidth: 240
    });

    /*pop up*/
    $(function () {
        //script for popups
        $('.show_popup').click(function () {
            $('div.' + $(this).attr("class")).fadeIn(500);
            $("body").append("<div id='overlay'></div>");
            $('#overlay').show().css({'filter': 'alpha(opacity=80)'});
            return false;
        });
        $('a.close').click(function () {
            $(this).parent().fadeOut(100);
            $('#overlay').remove('#overlay');
            return false;
        });
    });
    
    /*project menu*/
    $(".project-item-link").hover(
            function () {
                $(this).next(".description-project").show("slow");
            },
            function () {
                $(this).next(".description-project").hide("slow");
            }
    );

    /*portfolio scroll*/
    $(".link-item").click(function () {        
        $(this).siblings(".link-item").next(".project-holder").hide();
        $(this).next(".project-holder").toggle("slow");
        $('html, body').animate({
            scrollTop: parseInt($(this).offset().top)
        }, 0);
        return false;
    });
      
    $(".sub-menu").parents("li").addClass("with-sub-menu");

    $(".main-nav>.nav>li.with-sub-menu").hover(
        function () {
            $("#sub-menu-bg").toggleClass("active");
            $(".main-nav>.nav>li.with-sub-menu").toggleClass("active");
            return false;
        },
        function () {
           $("#sub-menu-bg").toggleClass("active");
          $(".main-nav>.nav>li.with-sub-menu").toggleClass("active");
            return false;
        }
    );
/**/
    if (location.hash && location.hash != '#') {
            $(location.hash).next(".project-holder").toggle("slow");
            $('html, body').animate({
                scrollTop: parseInt($(location.hash).offset().top)
            },
        1000);
    }

    if (location.hash && location.hash != '#') {
        $(location.hash).next("#direction").toggle("slow");
        $('html, body').animate({
            scrollTop: parseInt($(location.hash).offset().top)
        },
    1000);
}
 /**/   

    addProjectSlider();
   // setEqualHeight4blocks('.project-info #project-images', '.project-info #project-description');    
    mobileMenu();


});

function addProjectSlider(){
    var realSlider= $("ul#bxslider").bxSlider({
        speed:1000,
        pager:false,
        nextText:'',
        prevText:'',
        infiniteLoop:false,
        hideControlOnEnd:true,
        onSlideBefore:function($slideElement, oldIndex, newIndex){
          changeRealThumb(realThumbSlider,newIndex);        
        }

        });

        var realThumbSlider=$("ul#bxslider-pager").bxSlider({
          minSlides: 3,
          maxSlides: 3,
          slideWidth: 70,
          slideMargin: 12,
          moveSlides: 1,
          pager:false,
          speed:1000,
          infiniteLoop:false,
          hideControlOnEnd:true,
          nextText:'<span></span>',
          prevText:'<span></span>',
          onSlideBefore:function($slideElement, oldIndex, newIndex){
            /*$j("#sliderThumbReal ul .active").removeClass("active");
            $slideElement.addClass("active"); */
          }
        });

        linkRealSliders(realSlider,realThumbSlider);

        if($("#bxslider-pager li").length<4){
          $("#bxslider-pager .bx-next").hide();
        }

    function linkRealSliders(bigS,thumbS){

      $("ul#bxslider-pager").on("click","a",function(event){
        event.preventDefault();
        var newIndex=$(this).parent().attr("data-slide-index");
            bigS.goToSlide(newIndex);
      });
    }

    function changeRealThumb(slider,newIndex){  
      var $thumbS=$("#bxslider-pager");
      $thumbS.find('.active').removeClass("active");
      $thumbS.find('li[data-slide-index="'+newIndex+'"]').addClass("active");

      if(slider.getSlideCount()-newIndex>=3)slider.goToSlide(newIndex);
      else slider.goToSlide(slider.getSlideCount()-3);
    }
}
/**/
//function setEqualHeight4blocks(block1, block2){
  //  var height1 = $(block1).height();
  //  $(block2).height(height1);
//}
function mobileMenu(){
   
    $("#open-close").click(
        function () {
            $(".hide-background").addClass("active");
            $(".nav").animate({  "right": "0px" }, {duration: 1000} );
            return false;
        }   
    );
    $(".hide-background").click(function() {
        $(".nav").animate({  "right": "-250px"}, {duration: 1000});
        $(".hide-background").removeClass("active");

    });    
 }
/**/
$(window).resize(function(){    
    // setEqualHeight4blocks('.project-info #project-images', '.project-info #project-description');
    //addProjectSlider();
});







