$(document).ready(function(){
"use strict";
var cheese = "";
var catpheus = $("#firstSprite");
var codeuparrow = $('.codeuparrowdiv');
var catpheusimg = $("#firstSpriteImg");
catpheus.addClass("hidden")
codeuparrow.addClass("hidden")





        $(document).keyup(function(event){
            // console.log(event.keyCode);
            cheese += event.keyCode;
            // console.log(cheese);
            if (event.keyCode == 13 && cheese == "3838404037393739666513" ) {
            		catpheus.removeClass("hidden");
            		codeuparrow.removeClass("hidden");
            		$("body").css("background-color", "black");
    				catpheus.animate({height: '50px', opacity: '0.4'}, "slow");
    				catpheus.animate({width: '50px', opacity: '0.8'}, "slow");
    				catpheus.animate({height: '364px', opacity: '0.4'}, "slow");
    				catpheus.animate({width: '445px', opacity: '0.8'}, "slow");
    				console.log("you entered the konami code")
    				codeuparrow.animate({left: '500px'});
    				codeuparrow.animate({left: '-500px'});
    				codeuparrow.animate({left: '500px'});
    				codeuparrow.animate({left: '-500px'});
    				setTimeout(function(){
    				catpheusimg.attr('src', "img/dealwithit.jpg");
    					
    				},5000);


            } else {
            	// console.log("no secret code")
            }
   
         });


});

        // $(firstSprite).animate({left: '450px'})
        // $(codeuparrowdiv).animate({left: '2000px'})



        // ↑ ↑ ↓ ↓ ← → ← → b a enter" (the return key)

        // 38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13 <matching keycodes 