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


        var ajaxpagination = {"ajaxurl":"\/wp-admin\/admin-ajax.php"};

        console.log("inside");

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'ajax_pagination',
                num: 1
            },
            success: function( result ) {

               if(result == 'false')
               {
                  $(".add-ajax").hide();
               }else{
                   $("#new-ajax").append(result)
               }
                console.log(
                    typeof result);
                console.log(result);
              //  alert( result );
            }
        })
    });


})(jQuery);
