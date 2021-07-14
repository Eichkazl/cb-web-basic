$(window).on('load', function() {

    $('.div1').hide();
    $('#btnToggle').click(function() {
        // $('.divtoggle').toggle(1000);

        if($('.div1').is(':visible')) {
            $('.div1').toggle(1000 , function(){
                $('.div2').toggle(1000);
            });
        } else {
            $('.div2').toggle(1000 , function(){
                $('.div1').toggle(1000);
            });
        }
    });
});

$(document).ready(function () {

    $("h1").append("headline");
    $("p").append("lorem");

    $('#btn').click(function (){
        $('#p2').text($('#inP').val());
    });


    $(".corali").on("click", function(){ coral(1); });

    $(".corali").on("mouseout", function(){ coral(4); });

    $(".corali").on("dblclick", function(){ coral(2); })

    $(".corali").on("contextmenu", function(){ coral(3); })

    // $('div').click(coral(1));
    // $('div').dblclick(coral(2));
    // $('div').contextmenu(coral(3));
    
});

function coral(i) {
    switch(i) {
        
    case 1:
        $('.corali').text("Clicked");
        break;

    case 2:
        $('.corali').text("Double Clicked");
        break;

    case 3:
        $('.corali').text("Rigth Clicked");
        break;
    case 4:
        $('.corali').text("Mouse Out");
        break;
    }
}
