jQuery(document).ready(function() {
	
	/* If there are required actions, add an icon with the number of required actions in the About awada page -> Actions required tab */
    var Awada_nr_actions_required = awadaLiteWelcomeScreenObject.nr_actions_required;

    if ( (typeof Awada_nr_actions_required !== 'undefined') && (Awada_nr_actions_required != '0') ) {
        jQuery('li.awada-lite-w-red-tab a').append('<span class="awada-lite-actions-count">' + Awada_nr_actions_required + '</span>');
    }

    /* Dismiss required actions */
    jQuery(".awada-dismiss-required-action").click(function(){

        var id= jQuery(this).attr('id');
        console.log(id);
        jQuery.ajax({
            type       : "GET",
            data       : { action: 'Awada_lite_dismiss_required_action',dismiss_id : id },
            dataType   : "html",
            url        : awadaLiteWelcomeScreenObject.ajaxurl,
            beforeSend : function(data,settings){
				jQuery('.awada-lite-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + awadaLiteWelcomeScreenObject.template_directory + '/inc/admin/welcome-screen/img/ajax-loader.gif" /></div>');
            },
            success    : function(data){
				jQuery("#temp_load").remove(); /* Remove loading gif */
                jQuery('#'+ data).parent().remove(); /* Remove required action box */

                var Awada_lite_actions_count = jQuery('.awada-lite-actions-count').text(); /* Decrease or remove the counter for required actions */
                if( typeof Awada_lite_actions_count !== 'undefined' ) {
                    if( Awada_lite_actions_count == '1' ) {
                        jQuery('.awada-lite-actions-count').remove();
                        jQuery('.awada-lite-tab-pane#actions_required').append('<p>' + awadaLiteWelcomeScreenObject.no_required_actions_text + '</p>');
                    }
                    else {
                        jQuery('.awada-lite-actions-count').text(parseInt(Awada_lite_actions_count) - 1);
                    }
                }
            },
            error     : function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });
	
	/* Tabs in welcome page */
	function Awada_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".awada-lite-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}
	
	var Awada_actions_anchor = location.hash;
	
	if( (typeof Awada_actions_anchor !== 'undefined') && (Awada_actions_anchor != '') ) {
		Awada_welcome_page_tabs('a[href="'+ Awada_actions_anchor +'"]');
	}
	
    jQuery(".awada-lite-nav-tabs a").click(function(event) {
        event.preventDefault();
		Awada_welcome_page_tabs(this);
    });

});