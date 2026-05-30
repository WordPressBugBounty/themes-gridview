<?php
/**
* Social buttons
*
* @package GridView WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridview_sticky_social_buttons() { ?>

<div class='gridview-sticky-social-icons'>
    <?php if ( gridview_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('twitterlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-twitter" aria-label="<?php esc_attr_e('X Button','gridview'); ?>"><i class="fab fa-x-twitter" aria-hidden="true" title="<?php esc_attr_e('X','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('facebooklink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button','gridview'); ?>"><i class="fab fa-facebook-f" aria-hidden="true" title="<?php esc_attr_e('Facebook','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('threadslink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('threadslink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-threads" aria-label="<?php esc_attr_e('Threads Button','gridview'); ?>"><i class="fab fa-threads" aria-hidden="true" title="<?php esc_attr_e('Threads','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('pinterestlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button','gridview'); ?>"><i class="fab fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('linkedinlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button','gridview'); ?>"><i class="fab fa-linkedin-in" aria-hidden="true" title="<?php esc_attr_e('Linkedin','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('instagramlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button','gridview'); ?>"><i class="fab fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('flickrlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-flickr" aria-label="<?php esc_attr_e('Flickr Button','gridview'); ?>"><i class="fab fa-flickr" aria-hidden="true" title="<?php esc_attr_e('Flickr','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('youtubelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button','gridview'); ?>"><i class="fab fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('vimeolink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-vimeo" aria-label="<?php esc_attr_e('Vimeo Button','gridview'); ?>"><i class="fab fa-vimeo-v" aria-hidden="true" title="<?php esc_attr_e('Vimeo','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('soundcloudlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-soundcloud" aria-label="<?php esc_attr_e('SoundCloud Button','gridview'); ?>"><i class="fab fa-soundcloud" aria-hidden="true" title="<?php esc_attr_e('SoundCloud','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('messengerlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('messengerlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-messenger" aria-label="<?php esc_attr_e('Messenger Button','gridview'); ?>"><i class="fab fa-facebook-messenger" aria-hidden="true" title="<?php esc_attr_e('Messenger','gridview'); ?>"></i></a><?php endif; ?>
   <?php if ( gridview_get_option('whatsapplink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('whatsapplink') ); ?>" target="_blank" rel="nofollow" class="gridview-social-icon-whatsapp" aria-label="<?php esc_attr_e('WhatsApp Button','gridview'); ?>"><i class="fab fa-whatsapp" aria-hidden="true" title="<?php esc_attr_e('WhatsApp','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('tiktoklink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('tiktoklink') ); ?>" target="_blank" rel="nofollow" class="gridview-social-icon-tiktok" aria-label="<?php esc_attr_e('TikTok Button','gridview'); ?>"><i class="fab fa-tiktok" aria-hidden="true" title="<?php esc_attr_e('TikTok','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('lastfmlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-lastfm" aria-label="<?php esc_attr_e('Lastfm Button','gridview'); ?>"><i class="fab fa-lastfm" aria-hidden="true" title="<?php esc_attr_e('Lastfm','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('mediumlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('mediumlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-medium" aria-label="<?php esc_attr_e('Medium Button','gridview'); ?>"><i class="fab fa-medium-m" aria-hidden="true" title="<?php esc_attr_e('Medium','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('githublink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-github" aria-label="<?php esc_attr_e('Github Button','gridview'); ?>"><i class="fab fa-github" aria-hidden="true" title="<?php esc_attr_e('Github','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('bitbucketlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-bitbucket" aria-label="<?php esc_attr_e('Bitbucket Button','gridview'); ?>"><i class="fab fa-bitbucket" aria-hidden="true" title="<?php esc_attr_e('Bitbucket','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('tumblrlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-tumblr" aria-label="<?php esc_attr_e('Tumblr Button','gridview'); ?>"><i class="fab fa-tumblr" aria-hidden="true" title="<?php esc_attr_e('Tumblr','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('digglink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-digg" aria-label="<?php esc_attr_e('Digg Button','gridview'); ?>"><i class="fab fa-digg" aria-hidden="true" title="<?php esc_attr_e('Digg','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('deliciouslink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-delicious" aria-label="<?php esc_attr_e('Delicious Button','gridview'); ?>"><i class="fab fa-delicious" aria-hidden="true" title="<?php esc_attr_e('Delicious','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('stumblelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-stumbleupon" aria-label="<?php esc_attr_e('Stumbleupon Button','gridview'); ?>"><i class="fab fa-stumbleupon" aria-hidden="true" title="<?php esc_attr_e('Stumbleupon','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('mixlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('mixlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-mix" aria-label="<?php esc_attr_e('Mix Button','gridview'); ?>"><i class="fab fa-mix" aria-hidden="true" title="<?php esc_attr_e('Mix','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('redditlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-reddit" aria-label="<?php esc_attr_e('Reddit Button','gridview'); ?>"><i class="fab fa-reddit" aria-hidden="true" title="<?php esc_attr_e('Reddit','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('dribbblelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-dribbble" aria-label="<?php esc_attr_e('Dribbble Button','gridview'); ?>"><i class="fab fa-dribbble" aria-hidden="true" title="<?php esc_attr_e('Dribbble','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('flipboardlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('flipboardlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-flipboard" aria-label="<?php esc_attr_e('Flipboard Button','gridview'); ?>"><i class="fab fa-flipboard" aria-hidden="true" title="<?php esc_attr_e('Flipboard','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('bloggerlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('bloggerlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-blogger" aria-label="<?php esc_attr_e('Blogger Button','gridview'); ?>"><i class="fab fa-blogger" aria-hidden="true" title="<?php esc_attr_e('Blogger','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('etsylink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('etsylink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-etsy" aria-label="<?php esc_attr_e('Etsy Button','gridview'); ?>"><i class="fab fa-etsy" aria-hidden="true" title="<?php esc_attr_e('Etsy','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('behancelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-behance" aria-label="<?php esc_attr_e('Behance Button','gridview'); ?>"><i class="fab fa-behance" aria-hidden="true" title="<?php esc_attr_e('Behance','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('amazonlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('amazonlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-amazon" aria-label="<?php esc_attr_e('Amazon Button','gridview'); ?>"><i class="fab fa-amazon" aria-hidden="true" title="<?php esc_attr_e('Amazon','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('meetuplink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('meetuplink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-meetup" aria-label="<?php esc_attr_e('Meetup Button','gridview'); ?>"><i class="fab fa-meetup" aria-hidden="true" title="<?php esc_attr_e('Meetup','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('mixcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('mixcloudlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-mixcloud" aria-label="<?php esc_attr_e('Mixcloud Button','gridview'); ?>"><i class="fab fa-mixcloud" aria-hidden="true" title="<?php esc_attr_e('Mixcloud','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('slacklink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('slacklink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-slack" aria-label="<?php esc_attr_e('Slack Button','gridview'); ?>"><i class="fab fa-slack" aria-hidden="true" title="<?php esc_attr_e('Slack','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('snapchatlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('snapchatlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-snapchat" aria-label="<?php esc_attr_e('Snapchat Button','gridview'); ?>"><i class="fab fa-snapchat" aria-hidden="true" title="<?php esc_attr_e('Snapchat','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('spotifylink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('spotifylink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-spotify" aria-label="<?php esc_attr_e('Spotify Button','gridview'); ?>"><i class="fab fa-spotify" aria-hidden="true" title="<?php esc_attr_e('Spotify','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('yelplink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('yelplink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-yelp" aria-label="<?php esc_attr_e('Yelp Button','gridview'); ?>"><i class="fab fa-yelp" aria-hidden="true" title="<?php esc_attr_e('Yelp','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('wordpresslink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('wordpresslink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-wordpress" aria-label="<?php esc_attr_e('WordPress Button','gridview'); ?>"><i class="fab fa-wordpress" aria-hidden="true" title="<?php esc_attr_e('WordPress','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('twitchlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('twitchlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-twitch" aria-label="<?php esc_attr_e('Twitch Button','gridview'); ?>"><i class="fab fa-twitch" aria-hidden="true" title="<?php esc_attr_e('Twitch','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('telegramlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('telegramlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-telegram" aria-label="<?php esc_attr_e('Telegram Button','gridview'); ?>"><i class="fab fa-telegram" aria-hidden="true" title="<?php esc_attr_e('Telegram','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('bandcamplink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('bandcamplink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-bandcamp" aria-label="<?php esc_attr_e('Bandcamp Button','gridview'); ?>"><i class="fab fa-bandcamp" aria-hidden="true" title="<?php esc_attr_e('Bandcamp','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('quoralink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('quoralink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-quora" aria-label="<?php esc_attr_e('Quora Button','gridview'); ?>"><i class="fab fa-quora" aria-hidden="true" title="<?php esc_attr_e('Quora','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('foursquarelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('foursquarelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-foursquare" aria-label="<?php esc_attr_e('Foursquare Button','gridview'); ?>"><i class="fab fa-foursquare" aria-hidden="true" title="<?php esc_attr_e('Foursquare','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('deviantartlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('deviantartlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-deviantart" aria-label="<?php esc_attr_e('DeviantArt Button','gridview'); ?>"><i class="fab fa-deviantart" aria-hidden="true" title="<?php esc_attr_e('DeviantArt','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('imdblink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('imdblink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-imdb" aria-label="<?php esc_attr_e('IMDB Button','gridview'); ?>"><i class="fab fa-imdb" aria-hidden="true" title="<?php esc_attr_e('IMDB','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('vklink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-vk" aria-label="<?php esc_attr_e('VK Button','gridview'); ?>"><i class="fab fa-vk" aria-hidden="true" title="<?php esc_attr_e('VK','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('codepenlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-codepen" aria-label="<?php esc_attr_e('Codepen Button','gridview'); ?>"><i class="fab fa-codepen" aria-hidden="true" title="<?php esc_attr_e('Codepen','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('jsfiddlelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-jsfiddle" aria-label="<?php esc_attr_e('JSFiddle Button','gridview'); ?>"><i class="fab fa-jsfiddle" aria-hidden="true" title="<?php esc_attr_e('JSFiddle','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('stackoverflowlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-stackoverflow" aria-label="<?php esc_attr_e('Stack Overflow Button','gridview'); ?>"><i class="fab fa-stack-overflow" aria-hidden="true" title="<?php esc_attr_e('Stack Overflow','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('stackexchangelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-stackexchange" aria-label="<?php esc_attr_e('Stack Exchange Button','gridview'); ?>"><i class="fab fa-stack-exchange" aria-hidden="true" title="<?php esc_attr_e('Stack Exchange','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('bsalink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-buysellads" aria-label="<?php esc_attr_e('BuySellAds Button','gridview'); ?>"><i class="fab fa-buysellads" aria-hidden="true" title="<?php esc_attr_e('BuySellAds','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('web500pxlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('web500pxlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-web500px" aria-label="<?php esc_attr_e('500px Button','gridview'); ?>"><i class="fab fa-500px" aria-hidden="true" title="<?php esc_attr_e('500px','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('ellolink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('ellolink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-ello" aria-label="<?php esc_attr_e('Ello Button','gridview'); ?>"><i class="fab fa-ello" aria-hidden="true" title="<?php esc_attr_e('Ello','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('discordlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('discordlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-discord" aria-label="<?php esc_attr_e('Discord Button','gridview'); ?>"><i class="fab fa-discord" aria-hidden="true" title="<?php esc_attr_e('Discord','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('goodreadslink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('goodreadslink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-goodreads" aria-label="<?php esc_attr_e('Goodreads Button','gridview'); ?>"><i class="fab fa-goodreads" aria-hidden="true" title="<?php esc_attr_e('Goodreads','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('odnoklassnikilink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('odnoklassnikilink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-odnoklassniki" aria-label="<?php esc_attr_e('Odnoklassniki Button','gridview'); ?>"><i class="fab fa-odnoklassniki" aria-hidden="true" title="<?php esc_attr_e('Odnoklassniki','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('houzzlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('houzzlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-houzz" aria-label="<?php esc_attr_e('Houzz Button','gridview'); ?>"><i class="fab fa-houzz" aria-hidden="true" title="<?php esc_attr_e('Houzz','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('pocketlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('pocketlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-pocket" aria-label="<?php esc_attr_e('Pocket Button','gridview'); ?>"><i class="fab fa-get-pocket" aria-hidden="true" title="<?php esc_attr_e('Pocket','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('xinglink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('xinglink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-xing" aria-label="<?php esc_attr_e('XING Button','gridview'); ?>"><i class="fab fa-xing" aria-hidden="true" title="<?php esc_attr_e('XING','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('mastodonlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('mastodonlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-mastodon" aria-label="<?php esc_attr_e('Mastodon Button','gridview'); ?>"><i class="fab fa-mastodon" aria-hidden="true" title="<?php esc_attr_e('Mastodon','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('blueskylink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('blueskylink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-bluesky" aria-label="<?php esc_attr_e('Bluesky Button','gridview'); ?>"><i class="fab fa-bluesky" aria-hidden="true" title="<?php esc_attr_e('Bluesky','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('googleplaylink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('googleplaylink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-googleplay" aria-label="<?php esc_attr_e('Google Play Button','gridview'); ?>"><i class="fab fa-google-play" aria-hidden="true" title="<?php esc_attr_e('Google Play','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('slidesharelink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-slideshare" aria-label="<?php esc_attr_e('SlideShare Button','gridview'); ?>"><i class="fab fa-slideshare" aria-hidden="true" title="<?php esc_attr_e('SlideShare','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('dropboxlink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('dropboxlink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-dropbox" aria-label="<?php esc_attr_e('Dropbox Button','gridview'); ?>"><i class="fab fa-dropbox" aria-hidden="true" title="<?php esc_attr_e('Dropbox','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('paypallink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('paypallink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-paypal" aria-label="<?php esc_attr_e('PayPal Button','gridview'); ?>"><i class="fab fa-paypal" aria-hidden="true" title="<?php esc_attr_e('PayPal','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('viadeolink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('viadeolink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-viadeo" aria-label="<?php esc_attr_e('Viadeo Button','gridview'); ?>"><i class="fab fa-viadeo" aria-hidden="true" title="<?php esc_attr_e('Viadeo','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('wikipedialink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('wikipedialink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-wikipedia" aria-label="<?php esc_attr_e('Wikipedia Button','gridview'); ?>"><i class="fab fa-wikipedia-w" aria-hidden="true" title="<?php esc_attr_e('Wikipedia','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( gridview_get_option('skypeusername') ); ?>?chat" class="gridview-sticky-social-icon-skype" aria-label="<?php esc_attr_e('Skype Button','gridview'); ?>"><i class="fab fa-skype" aria-hidden="true" title="<?php esc_attr_e('Skype','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( gridview_get_option('emailaddress') ); ?>" class="gridview-sticky-social-icon-email" aria-label="<?php esc_attr_e('Email Us Button','gridview'); ?>"><i class="far fa-envelope" aria-hidden="true" title="<?php esc_attr_e('Email Us','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( gridview_get_option('rsslink') ); ?>" target="_blank" rel="nofollow" class="gridview-sticky-social-icon-rss" aria-label="<?php esc_attr_e('RSS Button','gridview'); ?>"><i class="fas fa-rss" aria-hidden="true" title="<?php esc_attr_e('RSS','gridview'); ?>"></i></a><?php endif; ?>
    <?php if ( gridview_get_option('show_header_login_button') ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Logout Button', 'gridview' ); ?>" class="gridview-sticky-social-icon-login"><i class="fas fa-sign-out-alt" aria-hidden="true" title="<?php esc_attr_e('Logout','gridview'); ?>"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Login / Register Button', 'gridview' ); ?>" class="gridview-sticky-social-icon-login"><i class="fas fa-sign-in-alt" aria-hidden="true" title="<?php esc_attr_e('Login / Register','gridview'); ?>"></i></a><?php endif;?><?php } ?>
    <?php if ( !(gridview_get_option('hide_header_search_button')) ) { ?><a href="<?php echo esc_url( '#' ); ?>" aria-label="<?php esc_attr_e('Search Button','gridview'); ?>" class="gridview-sticky-social-icon-search"><i class="fas fa-search" aria-hidden="true" title="<?php esc_attr_e('Search','gridview'); ?>"></i></a><?php } ?>
</div>

<?php }