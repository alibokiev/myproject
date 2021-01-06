function myFunction(){
    var x = document.getElementById("mobtopnav");
    if(x.className === "mobile-topnav"){
        x.className+= " responsive";
    }else{
        x.className="mobile-topnav"
    }
}
function myFunction1(){
    var x = document.getElementById("mobtopmenu");
    if(x.className === "mobile-top-menu"){
        x.className+= " responsive";
    }else{
        x.className="mobile-top-menu"
    }
}

jQuery(document).ready(function($){
    let widthslide = $("#slider").first().width();

    $("#banner-container .btn-slider-right").click(function(){
        let left = $("#slider").first().position().left || 0;

        if (left <= Math.floor(-2*widthslide)+1) return false;
        
        $("#slider").animate({"left": left - widthslide}, 1000);
        return false;
    });

    $("#banner-container .btn-slider-left").click(function(){
        let left = $("#slider").first().position().left || 0;
        
        if (left >= 0) return false;
        
        $("#slider").animate({"left": left + widthslide}, 1000);
        return false;
    });
});