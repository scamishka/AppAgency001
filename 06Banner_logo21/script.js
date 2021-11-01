
            $("section#partners21 .owl-carousel").owlCarousel({
                items:5,
                margin: 10,
                loop: true,
                nav: true,
                autoplay: true,
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
                        items:4,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:false
                    }
                },
                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
            });





