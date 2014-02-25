$(document).ready(function() {
    // $('.fancybox').fancybox({
    //     height: 450,
    //     width: 600
    // });
    $(".left>ul>li>a").click(function(){
        $(".left>ul>li>a").removeClass('selected');
        $(this).addClass('selected');   
        if($(this).hasClass('t_teacher')){      
            $("#t_teacher").show()
            $("#t_lesson").hide();
        }else{
            $("#t_lesson").show();
            $("#t_teacher").hide();
        }
    });
});