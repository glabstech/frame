declare var $: any;
declare var jQuery:any;
// declare var window:Window;

class MobileDrawer{
    constructor(){
        this.init(); 
    }

    private init(){
        $=jQuery;
        $('.frame-navbar-toggler.navbar-toggler').on('click', function(e){
            e.preventDefault();
            $(this).closest('.navbar').toggleClass('open');
        });
    }
}