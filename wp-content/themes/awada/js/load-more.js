jQuery(document).ready(function () {
    var count1 = (load_more_posts_variable1.counts_posts1);
    var count2 = (load_more_posts_variable1.blog_post_count);
    var $container = jQuery('.masonry2');
    var totalPosts = parseInt(count1);
    var view_post = parseInt(count2);
    var show_after = 1 + parseInt(view_post);
    var j;
    var i;
    var totPost = totalPosts;
    j = i = totalPosts - view_post; //  Show only 3 posts
    for (totalPosts; i >= 1; i--, totalPosts--) {
        jQuery('#roww-' + totalPosts).hide();
    }
    if (totPost <= view_post) {
        jQuery('.post-btn2').hide();
    } else if (totPost >= show_after) {
        jQuery('.post-btn2').show();
    }
    jQuery(".append-button1").click(function () {
        var showPosts = view_post;
        while (!showPosts == 0 && totalPosts < totPost) {
            var plusOne = totalPosts + 1;
            jQuery('#roww-' + plusOne).show();
            showPosts--;
            totalPosts++;
        }
        if (totPost == totalPosts) {
            jQuery('.post-btn2').hide();
        }
    });
});