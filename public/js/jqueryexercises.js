// var contents = $('#mainH1').html();
// alert(contents);

// // $('.fancy').css('border', '1px solid red')

// $('li').css('font-size', '20px')
// $('h1,p,li').css('background-color', '#FF0');

$('h1').click(function(){
	$(this).css("background-color", "orange")
});
$('p').dblclick(function(){
	$(this).css("font-size", "20px")
});
$('li').hover(
	function() {
		$(this).css("color", "red")
	},
	function(){
		$(this).css("color", "black")
	});
