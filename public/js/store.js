var imgs = ["img/p1.jpg",
"img/p2.png",
"img/p3.jpg",
"img/p4.jpg",
"img/p5.png",
"img/p6.png",
"img/p7.jpg",
"img/p8.jpg",
"img/p9.jpg",
"img/p10.jpg",
"img/p11.jpg",
"img/p12.jpg",
"img/p13.jpg",
"img/p14.jpg",
"img/p15.jpg",];

$(document).ready(function() {
	
	var $imgs = $(".store_img > img");
	$imgs.each(function(index, el) {
		$(el).attr('src', imgs[index]);
	});
	
	var $description = $(".description");
	$description.each(function(index, el) {
		$(el).html( "Welcome to the testing e-commerce website. All of this product is counting!");
	});

	var $price = $(".price");
	$price.each(function(index, el) {
		$(el).html("$2200");
	});
	
	

	$(".stores").on('click', '.store', function(event) {
		// var value = $(event.target).attr('src');
		var url = $(event.target).attr('src').split('.',2)[0];
		console.log(event)
		console.log(event.target)
		//url = url.split('/',2)[1];
		console.log(url);
		// window.location.href = url;
	});
});