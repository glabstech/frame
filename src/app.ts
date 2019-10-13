declare var $: any;
declare var jQuery:any;
declare var window:Window;

class Frame{
    
    constructor(){
        this.init();
    }

    public init(){
        //initialize HERO section for homepage
        jQuery(document).ready(function($){
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
        })
    }

}
new Frame();