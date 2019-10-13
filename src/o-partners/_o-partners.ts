declare var $: any;
declare var jQuery:any;
declare var window:Window;

class Partners{
    constructor(){
        this.init(); 
    }

    private init(){
        $=jQuery;
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
    }
}