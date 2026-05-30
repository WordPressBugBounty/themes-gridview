<?php
/**
* Social profiles options
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_social_profiles($wp_customize) {

    $wp_customize->add_section( 'gridview_section_social', array( 'title' => esc_html__( 'Social Links Options', 'gridview' ), 'panel' => 'gridview_main_options_panel', 'priority' => 240, ));

    $wp_customize->add_setting( 'gridview_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_twitterlink_control', array( 'label' => esc_html__( 'X URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[threadslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_threadslink_control', array( 'label' => esc_html__( 'Threads URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[threadslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'gridview_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_vklink_control', array( 'label' => esc_html__( 'VK Link', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[messengerlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_messengerlink_control', array( 'label' => esc_html__( 'Messenger URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[messengerlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[whatsapplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_whatsapplink_control', array( 'label' => esc_html__( 'WhatsApp URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[whatsapplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[tiktoklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_tiktoklink_control', array( 'label' => esc_html__( 'TikTok URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[tiktoklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[mediumlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_mediumlink_control', array( 'label' => esc_html__( 'Medium URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[mediumlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_githublink_control', array( 'label' => esc_html__( 'Github URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[mixlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_mixlink_control', array( 'label' => esc_html__( 'Mix URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[mixlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_redditlink_control', array( 'label' => esc_html__( 'Reddit URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[flipboardlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_flipboardlink_control', array( 'label' => esc_html__( 'Flipboard URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[flipboardlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[bloggerlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_bloggerlink_control', array( 'label' => esc_html__( 'Blogger URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[bloggerlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[etsylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_etsylink_control', array( 'label' => esc_html__( 'Etsy URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[etsylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_behancelink_control', array( 'label' => esc_html__( 'Behance URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[amazonlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_amazonlink_control', array( 'label' => esc_html__( 'Amazon URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[amazonlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[meetuplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_meetuplink_control', array( 'label' => esc_html__( 'Meetup URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[meetuplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[mixcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_mixcloudlink_control', array( 'label' => esc_html__( 'Mixcloud URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[mixcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[slacklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_slacklink_control', array( 'label' => esc_html__( 'Slack URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[slacklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[snapchatlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_snapchatlink_control', array( 'label' => esc_html__( 'Snapchat URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[snapchatlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[spotifylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_spotifylink_control', array( 'label' => esc_html__( 'Spotify URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[spotifylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[yelplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_yelplink_control', array( 'label' => esc_html__( 'Yelp URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[yelplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[wordpresslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_wordpresslink_control', array( 'label' => esc_html__( 'WordPress URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[wordpresslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[twitchlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_twitchlink_control', array( 'label' => esc_html__( 'Twitch URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[twitchlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[telegramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_telegramlink_control', array( 'label' => esc_html__( 'Telegram URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[telegramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[bandcamplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_bandcamplink_control', array( 'label' => esc_html__( 'Bandcamp URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[bandcamplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[quoralink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_quoralink_control', array( 'label' => esc_html__( 'Quora URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[quoralink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[foursquarelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_foursquarelink_control', array( 'label' => esc_html__( 'Foursquare URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[foursquarelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[deviantartlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_deviantartlink_control', array( 'label' => esc_html__( 'DeviantArt URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[deviantartlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[imdblink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_imdblink_control', array( 'label' => esc_html__( 'IMDB URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[imdblink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_codepenlink_control', array( 'label' => esc_html__( 'Codepen URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_bsalink_control', array( 'label' => esc_html__( 'BuySellAds URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[web500pxlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_web500pxlink_control', array( 'label' => esc_html__( '500px URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[web500pxlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[ellolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_ellolink_control', array( 'label' => esc_html__( 'Ello URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[ellolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[discordlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_discordlink_control', array( 'label' => esc_html__( 'Discord URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[discordlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[goodreadslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_goodreadslink_control', array( 'label' => esc_html__( 'Goodreads URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[goodreadslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[odnoklassnikilink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_odnoklassnikilink_control', array( 'label' => esc_html__( 'Odnoklassniki URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[odnoklassnikilink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[houzzlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_houzzlink_control', array( 'label' => esc_html__( 'Houzz URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[houzzlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[pocketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_pocketlink_control', array( 'label' => esc_html__( 'Pocket URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[pocketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[xinglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_xinglink_control', array( 'label' => esc_html__( 'XING URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[xinglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[mastodonlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_mastodonlink_control', array( 'label' => esc_html__( 'Mastodon URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[mastodonlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[blueskylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_blueskylink_control', array( 'label' => esc_html__( 'Bluesky URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[blueskylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[googleplaylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_googleplaylink_control', array( 'label' => esc_html__( 'Google Play URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[googleplaylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[dropboxlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_dropboxlink_control', array( 'label' => esc_html__( 'Dropbox URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[dropboxlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[paypallink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_paypallink_control', array( 'label' => esc_html__( 'PayPal URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[paypallink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[viadeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_viadeolink_control', array( 'label' => esc_html__( 'Viadeo URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[viadeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[wikipedialink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_wikipedialink_control', array( 'label' => esc_html__( 'Wikipedia URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[wikipedialink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'gridview_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridview_sanitize_email' ) );

    $wp_customize->add_control( 'gridview_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridview_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridview_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'gridview' ), 'section' => 'gridview_section_social', 'settings' => 'gridview_options[rsslink]', 'type' => 'text' ) );

}