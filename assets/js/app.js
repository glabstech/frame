// declare var window:Window;
var Frame = /** @class */ (function () {
    function Frame() {
        this.init();
    }
    Frame.prototype.init = function () {
        //initialize HERO section for homepage
        jQuery(document).ready(function ($) {
            //new Hero();
            new CTABoxes();
            new TestimonialBoxes();
            new BlogPostsBoxes();
            new Partners();
            new MobileDrawer();
            new Hero();
            /* custom dropdown toggler trigger */
            // $('.dropdown-extra-trigger').on('click',function(e){
            //     e.preventDefault();
            //     e.stopPropagation();
            //     $(this).parent().find('ul.dropdown-menu').slideToggle();
            // });
        });
    };
    return Frame;
}());
new Frame();
// declare var window:Window;
var BlogPostsBoxes = /** @class */ (function () {
    function BlogPostsBoxes() {
        this.init();
    }
    BlogPostsBoxes.prototype.init = function () {
        $ = jQuery;
        $('.blog-post').each(function (index, element) {
            $(element).hover(function (e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    $(this).closest('.blog-posts').find('.active').removeClass('active');
                    $(this).addClass('active');
                }
            });
        });
    };
    return BlogPostsBoxes;
}());
// declare var window:Window;
var CTABoxes = /** @class */ (function () {
    function CTABoxes() {
        this.init();
    }
    CTABoxes.prototype.init = function () {
        $ = jQuery;
        $('.cta-box').each(function (index, element) {
            $(element).hover(function (e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    $(this).closest('.cta-boxes-inner').find('.active').removeClass('active');
                    $(this).addClass('active');
                }
            });
        });
    };
    return CTABoxes;
}());
// declare var window:Window;
var Hero = /** @class */ (function () {
    function Hero() {
        this.init();
    }
    Hero.prototype.init = function () {
        $ = jQuery;
        // if($(window).width() <= 767){
        //     if($('.hero').length > 0){
        //         var hero = $('.hero')[0];
        //         $(hero).css('backgroundImage','url('+$(hero).attr('data-background-mobile')+')'); 
        //     }
        // }
        $(window).on('resize', function () {
            if ($(window).width() <= 767) {
                if ($('.hero').length > 0) {
                    var hero = $('.hero')[0];
                    $(hero).css('backgroundImage', 'url(' + $(hero).attr('data-background-mobile') + ')');
                }
            }
        });
        $(window).trigger('resize');
    };
    return Hero;
}());
// declare var window:Window;
var MobileDrawer = /** @class */ (function () {
    function MobileDrawer() {
        this.init();
    }
    MobileDrawer.prototype.init = function () {
        $ = jQuery;
        $('.frame-navbar-toggler.navbar-toggler').on('click', function (e) {
            e.preventDefault();
            $(this).closest('.navbar').toggleClass('open');
        });
    };
    return MobileDrawer;
}());
// declare var window:Window;
var Partners = /** @class */ (function () {
    function Partners() {
        this.init();
    }
    Partners.prototype.init = function () {
        $ = jQuery;
        // $('.owl-partners').owlCarousel({
        //     margin:30,
        //     loop:true,
        //     autoWidth:true,
        //     items:7,
        //     autoplay: true,
        //     nav: true 
        // })
        $('.owl-partners').slick({
            dots: false,
            infinite: true,
            edgeFriction: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: false,
            variableWidth: true
        });
    };
    return Partners;
}());
// declare var window:Window;
var TestimonialBoxes = /** @class */ (function () {
    function TestimonialBoxes() {
        this.init();
    }
    TestimonialBoxes.prototype.init = function () {
        $ = jQuery;
        $('.testimonial-box').each(function (index, element) {
            $(element).hover(function (e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    $(this).closest('.testimonials-boxes').find('.active').removeClass('active');
                    $(this).addClass('active');
                }
            });
        });
    };
    return TestimonialBoxes;
}());
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiLi4vLi4vc3JjL2FwcC50cyIsIi4uLy4uL3NyYy9vLWJsb2ctcG9zdHMvX28tYmxvZy1wb3N0cy50cyIsIi4uLy4uL3NyYy9vLWN0YS1ib3hlcy9fby1jdGEtYm94ZXMudHMiLCIuLi8uLi9zcmMvby1oZXJvL19vLWhlcm8udHMiLCIuLi8uLi9zcmMvby1uYXYvX28tbW9iaWxlLWRyYXdlci50cyIsIi4uLy4uL3NyYy9vLXBhcnRuZXJzL19vLXBhcnRuZXJzLnRzIiwiLi4vLi4vc3JjL28tdGVzdGltb25pYWxzL19vLXRlc3RpbW9uaWFsLWJveGVzLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBLDZCQUE2QjtBQUU3QjtJQUVJO1FBQ0ksSUFBSSxDQUFDLElBQUksRUFBRSxDQUFDO0lBQ2hCLENBQUM7SUFFTSxvQkFBSSxHQUFYO1FBQ0ksc0NBQXNDO1FBQ3RDLE1BQU0sQ0FBQyxRQUFRLENBQUMsQ0FBQyxLQUFLLENBQUMsVUFBUyxDQUFDO1lBQzdCLGFBQWE7WUFDYixJQUFJLFFBQVEsRUFBRSxDQUFDO1lBQ2YsSUFBSSxnQkFBZ0IsRUFBRSxDQUFDO1lBQ3ZCLElBQUksY0FBYyxFQUFFLENBQUM7WUFDckIsSUFBSSxRQUFRLEVBQUUsQ0FBQztZQUNmLElBQUksWUFBWSxFQUFFLENBQUM7WUFDbkIsSUFBSSxJQUFJLEVBQUUsQ0FBQztZQUVYLHFDQUFxQztZQUNyQyx1REFBdUQ7WUFDdkQsMEJBQTBCO1lBQzFCLDJCQUEyQjtZQUMzQiwrREFBK0Q7WUFDL0QsTUFBTTtRQUNWLENBQUMsQ0FBQyxDQUFBO0lBQ04sQ0FBQztJQUVMLFlBQUM7QUFBRCxDQUFDLEFBMUJELElBMEJDO0FBQ0QsSUFBSSxLQUFLLEVBQUUsQ0FBQztBQzdCWiw2QkFBNkI7QUFFN0I7SUFDSTtRQUNJLElBQUksQ0FBQyxJQUFJLEVBQUUsQ0FBQztJQUNoQixDQUFDO0lBRU8sNkJBQUksR0FBWjtRQUNJLENBQUMs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