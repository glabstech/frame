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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiLi4vLi4vc3JjL2FwcC50cyIsIi4uLy4uL3NyYy9vLWJsb2ctcG9zdHMvX28tYmxvZy1wb3N0cy50cyIsIi4uLy4uL3NyYy9vLWN0YS1ib3hlcy9fby1jdGEtYm94ZXMudHMiLCIuLi8uLi9zcmMvby1wYXJ0bmVycy9fby1wYXJ0bmVycy50cyIsIi4uLy4uL3NyYy9vLXRlc3RpbW9uaWFscy9fby10ZXN0aW1vbmlhbC1ib3hlcy50cyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFJQTtJQUVJO1FBQ0ksSUFBSSxDQUFDLElBQUksRUFBRSxDQUFDO0lBQ2hCLENBQUM7SUFFTSxvQkFBSSxHQUFYO1FBQ0ksc0NBQXNDO1FBQ3RDLE1BQU0sQ0FBQyxRQUFRLENBQUMsQ0FBQyxLQUFLLENBQUMsVUFBUyxDQUFDO1lBQzdCLGFBQWE7WUFDYixJQUFJLFFBQVEsRUFBRSxDQUFDO1lBQ2YsSUFBSSxnQkFBZ0IsRUFBRSxDQUFDO1lBQ3ZCLElBQUksY0FBYyxFQUFFLENBQUM7WUFDckIsSUFBSSxRQUFRLEVBQUUsQ0FBQztZQUVmLHFDQUFxQztZQUNyQyx1REFBdUQ7WUFDdkQsMEJBQTBCO1lBQzFCLDJCQUEyQjtZQUMzQiwrREFBK0Q7WUFDL0QsTUFBTTtRQUNWLENBQUMsQ0FBQyxDQUFBO0lBQ04sQ0FBQztJQUVMLFlBQUM7QUFBRCxDQUFDLEFBeEJELElBd0JDO0FBQ0QsSUFBSSxLQUFLLEVBQUUsQ0FBQztBQ3pCWjtJQUNJO1FBQ0ksSUFBSSxDQUFDLElBQUksRUFBRSxDQUFDO0lBQ2hCLENBQUM7SUFFTyw2QkFBSSxHQUFaO1FBQ0ksQ0FBQyxHQUFDLE1BQU0sQ0FBQztRQUNULENBQUMsQ0FBQyxZQUFZLENBQUMsQ0FBQyxJQUFJLENBQUMsVUFBUyxLQUFLLEVBQUMsT0FBTztZQUN2QyxDQUFDLENBQUMsT0FBTyxDQUFDLENBQUMsS0FBSyxDQUFDLFVBQVMsQ0FBQztnQkFDdkIsQ0FBQyxDQUFDLGNB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