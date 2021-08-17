/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});

function cart(cart){
	$(".modal-ajax").html(cart);
	$("#card").modal();
	}
	$(".add-to-cart").click(function(e){
	e.preventDefault();
	var id = $(this).data("id");
	$.ajax({
	url:"?view=ajax",
	data:{id:id},
	type:"GET",
	success:function(res){
	cart(res);
	},
	error:function(){
	}
	});
	});
	function plus_cart(id){
		$.ajax({
			url:"?view=plus_cart",
			data:{id:id},
			type:"GET",
			success:function(res){
				cart(res);
			},
			error:function(){
			}
		});
	}
	function minus_cart(id){
		$.ajax({
			url:"?view=minus_cart",
			data:{id:id},
			type:"GET",
			success:function(res){
				cart(res);
			},
			error:function(){
			}
		});
	}
	function dell_all(id){
		$.ajax({
			url:"?view=dell_all",
			data:{id:id},
			type:"GET",
			success:function(res){
				cart(res);
			},
			error:function(){
			}
		});
	}

	function index_send_email(id){	
		$.ajax({
			url:"?view=index_send_email",
			data:{id:id},
			type:"GET",
			success:function(res){
				if(res){
// it comes from index class there is col class //		
			$(".modal-ajax").hide();
			$(".box").html(res).hide().show(1000);
				}

			},
		error:function(){
		}
		});
	
	}
	function sendEmail(){
		var code_product = document.getElementById("code_product").value;
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var subject = document.getElementById("subject").value;
		var body = document.getElementById("body").value;
		
		$.ajax({
			url:"?view=index_send_email",
			data:{code_product:code_product,name:name,email:email,subject:subject,body:body},
			type:"GET",
			success:function(res){
				if(res){
					$(".box").hide();
					$(".png").fadeIn();
					alert("Заказ принято");
					
		
				}	
			},
			error:function(){

				circle
			}
		});
	}