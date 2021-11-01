            $("section.realtors .owl-carousel").owlCarousel({
                items:4,
                margin: 10,
                loop: false,
                nav: false,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    450:{
                        items:2,
                        nav:false
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                },
                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
            });





