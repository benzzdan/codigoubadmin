$(".ninja-btn").click(function() {
    $(this).toggleClass("active");
});
$(".ninja2-btn").click(function() {
    $(this).toggleClass("active");
});

function openNav() {
    document.getElementById("mySidenav").style.width = "390px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


//for the menu 


function handler1() {
    openNav();
    $(this).one("click", handler2);
}

function handler2() {
    closeNav();
    $(this).one("click", handler1);
}


$(".ninja-btn").one("click", handler1);
$(".ninja2-btn").one("click", handler1);


$(document).ready(function() {
    $('.sidenav a').hover(function() {
        $(this).children('span').show();
    }, function() {
        $(this).children('span').hide();
    });
});