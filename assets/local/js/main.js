$(document).ready(function(e){
	alert('test');
	$(document).on('click', '#addRecipe', function(e){
		e.preventDefault();
		alert("clicked!");
	});
});