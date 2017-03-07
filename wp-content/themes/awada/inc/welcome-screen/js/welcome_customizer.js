jQuery(document).ready(function() {
    var Awada_aboutpage = awadaLiteWelcomeScreenCustomizerObject.aboutpage;
    var Awada_nr_actions_required = awadaLiteWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof Awada_aboutpage !== 'undefined') && (typeof Awada_nr_actions_required !== 'undefined') && (Awada_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + Awada_aboutpage + '"><span class="awada-lite-actions-count">' + Awada_nr_actions_required + '</span></a>');
    }

    /* Upsell in Customizer (Link to Welcome page) */
    if ( !jQuery( ".awada-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section awada-upsells">');
    }
    if (typeof Awada_aboutpage !== 'undefined') {
        jQuery('.awada-upsells').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="' + Awada_aboutpage + '" class="button" target="_blank">{themeinfo}</a>'.replace('{themeinfo}', awadaLiteWelcomeScreenCustomizerObject.themeinfo));
    }
    if ( !jQuery( ".awada-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('</li>');
    }
});