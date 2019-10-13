declare var $: any;
declare var jQuery:any;
declare var window:Window;

class CTABoxes{
    constructor(){
        this.init(); 
    }

    private init(){
        $=jQuery;
        $('.cta-box').each(function(index,element){
            $(element).hover(function(e){
                e.preventDefault();
                if(!$(this).hasClass('active')){
                    $(this).closest('.cta-boxes-inner').find('.active').removeClass('active');
                    $(this).addClass('active');
                }
                
            });  
        });
    }
}