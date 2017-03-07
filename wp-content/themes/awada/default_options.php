<?php
/* General Options */
function awada_theme_options()
{
    $awada_theme_options = array(
        '_frontpage' => 1,
        'site_layout' => '',
		'color_scheme'=>'default.css',
        'logo_layout' => 'left',
		'blog_layout' => 'rightsidebar',
        'post_layout' => 'rightsidebar',
		'page_layout' => 'rightsidebar',
		// Topbar
        'topbar' => 1,
        'headersticky' => 1,
        'custom_css' => '',
		'color_scheme' => 'green.css',
		//Slider Settings:
        'home_slider_enabled' => 1,
		// Service
        'home_service_title' => __('Our Services', 'awada'),
		'home_service_description' => __('We provide best solution for your business', 'awada'),
        'home_service_column' => 4,
        'service_title_1' => __("Responsive", 'awada'),
        'service_icon_1' => "fa fa-mobile",
        'service_text_1' => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit ipsum lorem sit amet.", 'awada'),
		'service_link_1' => "#",

        'service_title_2' => __("Retina Ready", 'awada'),
        'service_icon_2' => "fa fa-eye",
        'service_text_2' => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit ipsum lorem sit amet.", 'awada'),
        'service_link_2' => "#",

        'service_title_3' => __("Multi Layout", 'awada'),
        'service_icon_3' => "fa fa-code",
        'service_text_3' => __("Lorem ipsum dolor sit amet, consectetur adipisicing elit ipsum lorem sit amet", 'awada'),
        'service_link_3' => "#",

        'service_title_4' => __('Easy To Customize', 'awada'),
        'service_text_4' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit ipsum lorem sit amet', 'awada'),
        'service_icon_4' => "fa fa-wrench",
        'service_link_4' => "#",
		//Portfolio Settings:
        'portfolio_post' => '',
        /* blog option */
		'home_blog_title' => __('Our Recent Posts', 'awada'),
		'home_blog_description' => __('Etiam sit amet orci eget eros faucibus tincidunt.', 'awada'),
        'blog_post_count' => 3,
		'home_post_cat' => '',
		/* footer callout */
        'home_callout_title' => __('Best Wordpress Resposnive Theme Ever!', 'awada'),
        'home_callout_description' => __('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour of this randomised words which don\'t look even slightly believable If you are going to use a passage of Lorem Ipsum.', 'awada'),
        'callout_btn_text' => __('Purchase Now', 'awada'),
        'callout_btn_link' => 'http://www.example.com',
        /* Social media icons */
        'contact_info_header' => 1,
        'social_media_header' => 1,
        'contact_phone' => '+9999-9999999',
        'contact_email' => 'example@gmail.com',
        'social_facebook_link' => '#',
        'social_twitter_link' => '#',
        'social_dribbble_link' => '#',
        'social_linkedin_link' => '#',
        'social_youtube_link' => '#',
        'social_google_plus_link' => '#',
        'social_skype_link' => '#',
		//Copyright Settings:
		'copyright_text_enabled' => 1,
		'footer_menu_enabled' => 1,
		'show_footer_widget' => 1,
        'footer_copyright' => __('Awada Theme', 'awada'),
        'developed_by_text' => __('Developed By', 'awada'),
        'developed_by_link_text' => __('Webhunt Infotech', 'awada'),
        'developed_by_link' => 'http://www.webhuntinfotech.com/',
        'footer_layout' => 4,
		'home_sections' => array('service', 'portfolio', 'blog', 'callout'),
    );
	//delete_option('awada_theme_options');
    return wp_parse_args(get_option('awada_theme_options', array()), $awada_theme_options);
}
?>