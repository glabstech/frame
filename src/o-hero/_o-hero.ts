declare var $: any;
declare var jQuery:any;
// declare var window:Window;

class Hero{
    constructor(){
        this.init(); 
    }

    private init(){
        $=jQuery;
        // if($(window).width() <= 767){
        //     if($('.hero').length > 0){
        //         var hero = $('.hero')[0];
        //         $(hero).css('backgroundImage','url('+$(hero).attr('data-background-mobile')+')'); 
        //     }
        // }
        $(window).on('resize',function(){
            if($(window).width() <= 767){
                if($('.hero').length > 0){
                    var hero = $('.hero')[0];
                    $(hero).css('backgroundImage','url('+$(hero).attr('data-background-mobile')+')'); 
                }
            }
        });
        $(window).trigger('resize');

    }
}