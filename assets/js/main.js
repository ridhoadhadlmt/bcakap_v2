$(document).ready(function(){
    $(window).scroll(function(){
        let scroll = $(window).scrollTop();
        if(scroll > 50){
            $('.navbar').addClass('navbar-fixed');
        }
        else{
            $('.navbar').removeClass('navbar-fixed');   
        }
    });
});

AOS.init({
	offset: 200,
	duration: 600,
	easing: 'ease-in-sine',
	delay: 100,
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    navText:[
    '<i class="ion ion-ios-arrow-back"></i>',
    '<i class="ion ion-ios-arrow-forward"></i>'
    ],
    responsive:{
        0:{
            items:2,
            nav: false
        },
        600:{
            items:3,
            nav: false
        },
        1000:{
            items:4
        }
    }
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    navText:[
    '<i class="ion ion-ios-arrow-back"></i>',
    '<i class="ion ion-ios-arrow-forward"></i>'
    ],
    responsive:{
        0:{
            items:2,
            nav: false
        },
        600:{
            items:3,
            nav: false
        },
        1000:{
            items:3
        }
    }
})
// $(document).ready(function(){
// 	$('.bckp-hero').particleground({
// 		dotColor: '#b40d00',
//     	lineColor: '#fff0ad'
// 	});
// });