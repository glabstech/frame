declare var $: any;
declare var jQuery:any;
declare var window:Window;

class BlogPostsBoxes{
    constructor(){
        this.init(); 
    }

    private init(){
        $=jQuery;
        $('.blog-post').each(function(index,element){
            $(element).hover(function(e){
                e.preventDefault();
                if(!$(this).hasClass('active')){
                    $(this).closest('.blog-posts').find('.active').removeClass('active');
                    $(this).addClass('active');
                }
                
            });  
        });
    }
}