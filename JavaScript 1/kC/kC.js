$('#button1').click(function (){

// // Exercise 1
    // $("input[value='Red']").next().text("Red");

// // Exercise 2
    // $("input[name!='color']").next().append("color");

// // Exercise 3
//     $("input[name^='P']").val("Starts with P");

// // Exercise 4
    // $("p").prepend("Prepended Text ");

// // Exercise 5
    // $("<div>The DIV</div>").insertBefore("p");

// // Exercise 6
//     $("div").children().css("background-color", "yellow");
});

// Exercise 7
 $('#input_field1').focusout(function () {
//     $('#input_field1').val("Focus Removed");
 });

 // Exercise 8
 $('div').click(function () {
    // $('p').text($(this).css("background-color"));
 });

 // Exercise 9
 $('#hide').click(function () {
    // $('p').hide(5000);
 });
 
 $('#show').click(function () {
    //  $('p').show(5000);
 });

//  $( "#clickAnimation" ).click(function() {
//   $( "#divAnimation" ).animate({
      
//     background: "red",
//     left: "+=50",
//     height: "toggle"
//   }, 5000 );
// });

$("#clickAnimation").click(function(){
  var div = $("div");
  div.animate({height: '300px', opacity: '0.4'}, 1000, null, function () { 
      randomColors ()});

  div.animate({width: '300px', opacity: '0.8'}, 1000, null, function () { 
      randomColors ()});

  div.animate({height: '100px', opacity: '0.4'}, 1000, null, function () { 
      randomColors ()});

  div.animate({width: '100px', opacity: '0.8'}, 1000, null, function () { 
      randomColors ()});
});  

function randomColors () {
  var colors = ["blue","green","yellow", "orange", "red", "cyan", "purpel"];
  var randomColor = colors[Math.floor(Math.random() * colors.length)];
  $('div').css('background',randomColor);
}







     	
