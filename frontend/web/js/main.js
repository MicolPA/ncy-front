function obtenerRegiones(id){
	console.log(id);
	console.log($(".bg-blue").removeClass('bg-blue'));
	console.log($("#"+id).addClass('bg-blue'));

	$('.regiones').show();
	$('.menu-item').hide();
	$(".region-"+id).show();

	// window.scrollBy(0, 250);
	$('html, body').animate({
	 scrollTop: $(".regiones-d").offset().top
	 }, 0);
}
console.log($(window). width() );
if ($(window). width() < 500) {
	$("mine").html("Máster Educativo <br> Y Algo Más");
}