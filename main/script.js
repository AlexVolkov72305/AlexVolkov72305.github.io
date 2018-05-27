
var lnk1 = document.getElementsByClassName("lnk1-collps");
var lnk2 = document.getElementsByClassName("lnk2-collps");
var lnk3 = document.getElementsByClassName("lnk3-collps");
var i;

for (i = 0; i < lnk1.length; i++) {
	lnk1[i].onclick = function () {
		
		$('.open_btn1').fadeIn();
		$('.btn1_open').fadeOut();
		$('.btn1_close').fadeIn();
	}
}

for (i = 0; i < lnk2.length; i++) {
	lnk2[i].onclick = function () {
		
		$('.open_btn2').fadeIn();
		$('.btn2_open').fadeOut();
		$('.btn2_close').fadeIn();
	}
}

for (i = 0; i < lnk3.length; i++) {
	lnk3[i].onclick = function () {
		
		$('.open_btn3').fadeIn();
		$('.btn3_open').fadeOut();
		$('.btn3_close').fadeIn();
	}
}

var used;

$(".lnk1-collps").on("click", function(e){
    if( used !== this) {
			used = this; 
			e.preventDefault();
		}
});

$(".lnk2-collps").on("click", function(e){
    if( used !== this) {
			used = this; 
			e.preventDefault();
		}
});

$(".lnk3-collps").on("click", function(e){
    if( used !== this) {
			used = this; 
			e.preventDefault();
		}
});

$(document).ready(function(a){
	$('.btn1_close').on('click', function(event) {
		event.preventDefault();
		$('.open_btn1').fadeOut();
		$('.btn1_close').fadeOut();
		$('.btn1_open').fadeIn();
	});
});

$(document).ready(function(b){
	$('.btn2_close').on('click', function(event) {
		event.preventDefault();
		$('.open_btn2').fadeOut();
		$('.btn2_close').fadeOut();
		$('.btn2_open').fadeIn();
	});
});

$(document).ready(function(c){
	$('.btn3_close').on('click', function(event) {
		event.preventDefault();
		$('.open_btn3').fadeOut();
		$('.btn3_close').fadeOut();
		$('.btn3_open').fadeIn();
	});
});
