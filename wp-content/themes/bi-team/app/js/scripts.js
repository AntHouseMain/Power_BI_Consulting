(function ($) {
    $(function () {
        $('.header-main-menu a').each(function () {
            var location = window.location.href;
            var link = this.href;
            var result = location.match(link);
            if (result != null) {
                $(this).addClass('current-menu-link-item');
            }
        });
    });


    $(document).on("click", ".add-new-rew", function() {
        event.preventDefault();

        var num = $(".reviews-item-product").length ;
        var ajaxpagination = {"ajaxurl":"\/wp-admin\/admin-ajax.php"};

        console.log(num);

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'ajax_pagination',
                num: num
            },
            success: function( result ) {

               if(result == '')
               {
                  $(".add-ajax").hide();
               }else{
                   $("#new-ajax").append(result)
               }

            }
        })
    });



    $(document).on("click", ".inform-tab", function() {
        var tab =  $(".tab-content");
        var img =  $(".content-media-b");

        tab.each(function(i,elem) {

            if (!($(elem).hasClass('no-display')))
            {
                $(elem).addClass('no-display')
            }
        });

        img.each(function(i,elem) {

                    if (!($(elem).hasClass('no-display')))
                    {
                        $(elem).addClass('no-display')
                    }
                });

        var number = $(this).data('block');
        $("#collapse"+number+"").removeClass("no-display");
        $("#image-b-"+number+"").removeClass("no-display");

        event.preventDefault();


    });

})(jQuery);
