$(document).ready(function(){
	$(".mail").hover(function(){
		var id=$(this).attr('id');
		var env="#"+id+"Env";
		var em="#"+id+"E";
		$(env).hide();
		$(em).fadeIn();

	});
});