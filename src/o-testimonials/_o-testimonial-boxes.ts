declare var $: any;
declare var jQuery:any;
declare var window:Window;

class TestimonialBoxes{
    constructor(){
        this.init(); 
    }

    private init(){
        $=jQuery;
        $('.testimonial-box').each(function(index,element){
            $(element).hover(function(e){
                e.preventDefault();
                if(!$(this).hasClass('active')){
                    $(this).closest('.testimonials-boxes').find('.active').removeClass('active');
                    $(this).addClass('active');
                }
                
            });  
        });
    }
}