$(document).ready(function () {
    $("h1").append("headline");
    $("p").append("lorem");

    $('#btn').click(function (){
        console.log($('#inP').val());
        $('#p2').text($('#inP').val());
    });


  // $("div").on("click", function(){
   //    coral(1);
   //});
    $("div").on("dblclick", function(){
        coral(2);
    })
    //$('div').click(coral(1));
    //$('div').dblclick(coral(2));
    //$('div').contextmenu(coral(3));
    
});

function coral(i) {
    switch(i) {
        
    case 1:
        alert("Clicked")
        break;

    case 2:
        alert("Double Clicked")
        break;

    case 3:
        alert("Context Menu")
        break;
    }
}