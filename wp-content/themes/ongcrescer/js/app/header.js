window.onload = function(){ 
$(document).ready(function (){
$('#dash').click(function(){
$('#menu').toggle();

$('div.nav-menu li').click(function(){
$(this).children('.sub-menu').toggle();
});
});
});


};