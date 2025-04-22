// Facebook reviews 
var switch_brb = false;
var check_ofs = $('#brb_collection_11329');
if (check_ofs.length) {
    $(window).scroll(function() {
        if (!switch_brb && $(this).scrollTop() > (check_ofs.offset().top - 1000)) {
            ! function(e) {
                var c = document.createElement("script");
                c.src = e;
                document.body.appendChild(c)
            }("/wp-content/plugins/business-reviews-bundle/assets/js/wpac-time.js?ver=1.6");

            ! function(e) {
                var c = document.createElement("script");
                c.src = e;
                document.body.appendChild(c)
            }("/wp-content/plugins/business-reviews-bundle/assets/js/blazy.min.js?ver=1.6");

            ! function(e) {
                var c = document.createElement("script");
                c.src = e;
                document.body.appendChild(c)
            }("/wp-content/plugins/business-reviews-bundle/assets/js/rplg.js?ver=1.6");

            ! function(e) {
                var c = document.createElement("script");
                c.src = e;
                document.body.appendChild(c)
            }("/?cf_action=brb_embed&brb_collection_id=11329&brb_callback=brb_" + (new Date).getTime());
            switch_brb = true;
        }
    });
}