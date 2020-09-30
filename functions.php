<?php
/*

 It's not recommended to add functions to this file, as it will be lost if you ever update this child theme.
 Instead, consider adding your function into a plugin using Pluginception: https://wordpress.org/plugins/pluginception/
 
 */

if ( function_exists( 'generate_blog_get_defaults' ) ) :
	if ( !function_exists( 'forefront_new_blog_defaults' ) ) :
		add_filter( 'generate_blog_option_defaults','forefront_new_blog_defaults' );
		function forefront_new_blog_defaults( $new_defaults )
		{
			$new_defaults[ 'excerpt_length' ] = '55';
			$new_defaults[ 'read_more' ] = __('Read more...','generate-blog');
			$new_defaults[ 'masonry' ] = 'false';
			$new_defaults[ 'masonry_width' ] = 'width2';
			$new_defaults[ 'masonry_most_recent_width' ] = 'width4';
			$new_defaults[ 'masonry_load_more' ] = __('+ More','generate-blog');
			$new_defaults[ 'masonry_loading' ] = 'Loading...';
			$new_defaults[ 'post_image' ] = 'true';
			$new_defaults[ 'post_image_position' ] = 'post-image-above-header';
			$new_defaults[ 'post_image_alignment' ] = 'post-image-aligned-center';
			$new_defaults[ 'post_image_width' ] = '';
			$new_defaults[ 'post_image_height' ] = '';
			$new_defaults[ 'date' ] = 'true';
			$new_defaults[ 'author' ] = 'true';
			$new_defaults[ 'categories' ] = 'true';
			$new_defaults[ 'tags' ] = 'true';
			$new_defaults[ 'comments' ] = 'true';
			$new_defaults[ 'column_layout' ] = 0;
			$new_defaults[ 'columns' ] = '50';
			$new_defaults[ 'featured_column' ] = 0;
			return $new_defaults;
		}
	endif;
endif;

add_action('wp_head', function () {
    ?>
    <div class="wrapper">
        <div class="header__address">
            <div class="address__map">
                <div class="map__img">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/mape.svg" alt="map">
                </div>
                <div class="map__text">
                    <p class="p">634050, Томск, пр.Ленина, 55, оф. 510</p>
                </div>
            </div>
            <div class="address__mail">
                <div class="mail__img">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 22.68 22.68" style="enable-background:new 0 0 22.68 22.68;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #3A3A3A;
    }
</style>
                        <g>
                            <path class="mail" d="M22.68,8.96c0,4.57,0,9.15,0,13.72c-7.56,0-15.12,0-22.68,0c0-4.59,0-9.18,0-13.78
		c0.09-0.09,0.18-0.19,0.27-0.28C3.23,6.02,6.18,3.41,9.14,0.8c0.43-0.38,0.93-0.63,1.51-0.73c0.08-0.01,0.16-0.05,0.24-0.07
		c0.3,0,0.6,0,0.91,0c0.03,0.02,0.06,0.04,0.1,0.05c0.7,0.09,1.28,0.42,1.8,0.88c2.9,2.57,5.8,5.12,8.7,7.69
		C22.5,8.71,22.58,8.84,22.68,8.96z M0.91,21.74c6.97,0,13.91,0,20.86,0c0-0.29-0.01-0.55,0-0.82c0.01-0.19-0.06-0.31-0.21-0.43
		c-2.86-2.23-5.71-4.47-8.57-6.7c-1.12-0.87-2.19-0.87-3.31,0C8.84,14.46,8,15.12,7.16,15.77c-2.02,1.58-4.03,3.15-6.05,4.73
		c-0.09,0.07-0.19,0.2-0.2,0.31C0.89,21.11,0.91,21.41,0.91,21.74z M19.05,11.44c0.94-0.75,1.83-1.44,2.72-2.16
		c-0.08-0.07-0.13-0.12-0.17-0.16c-2.88-2.54-5.76-5.09-8.65-7.63c-0.89-0.79-2.33-0.79-3.23,0C6.96,3.93,4.2,6.36,1.44,8.8
		C1.27,8.95,1.1,9.11,0.9,9.29c0.91,0.72,1.79,1.41,2.72,2.15c0-1.07,0-2.06,0-3.05c0-0.53,0.14-0.68,0.67-0.68
		c4.69,0,9.39,0,14.08,0c0.53,0,0.67,0.14,0.67,0.68C19.05,9.38,19.05,10.37,19.05,11.44z M13.73,13.15c0,0.02-0.01,0.04-0.01,0.06
		c0.45,0.35,0.91,0.7,1.36,1.07c0.14,0.12,0.24,0.12,0.38,0c0.82-0.66,1.66-1.32,2.49-1.97c0.14-0.11,0.2-0.22,0.2-0.4
		c-0.01-1,0-2,0-3c0-0.09-0.01-0.18-0.02-0.27c-4.54,0-9.05,0-13.55,0C4.56,8.68,4.54,8.7,4.54,8.71c0,1.11-0.01,2.21,0,3.32
		c0,0.08,0.06,0.18,0.13,0.23c0.86,0.69,1.73,1.38,2.6,2.06c0.05,0.04,0.18,0.08,0.21,0.05c0.5-0.38,0.99-0.77,1.54-1.19
		c-0.13-0.01-0.18-0.01-0.24-0.01c-0.63,0-1.27,0-1.9,0c-0.32,0-0.54-0.2-0.53-0.47c0.01-0.26,0.22-0.44,0.56-0.44
		c0.65,0,1.3,0,1.96,0c2.29,0,4.57,0,6.86,0c0.36,0,0.58,0.17,0.58,0.44c0.01,0.28-0.22,0.46-0.59,0.47c-0.07,0-0.13,0-0.2,0
		C14.93,13.15,14.33,13.15,13.73,13.15z M0.93,10.47c0,3.04,0,6.01,0,9.03c1.93-1.51,3.82-2.99,5.74-4.49
		C4.75,13.49,2.86,11.99,0.93,10.47z M16,15.01c1.93,1.51,3.82,2.99,5.74,4.49c0-3.03,0-6.01,0-9.03
		C19.81,11.99,17.92,13.49,16,15.01z"/>
                            <path class="mail" d="M11.37,9.98c1.43,0,2.85,0,4.28,0c0.11,0,0.23,0,0.34,0.03c0.22,0.05,0.34,0.22,0.33,0.44
		c-0.01,0.21-0.12,0.36-0.33,0.41c-0.1,0.02-0.21,0.03-0.31,0.03c-2.9,0-5.8,0-8.7,0c-0.08,0-0.17,0-0.25-0.02
		c-0.23-0.06-0.36-0.21-0.36-0.45C6.37,10.2,6.5,10.05,6.72,10c0.11-0.02,0.22-0.02,0.34-0.02C8.5,9.98,9.93,9.98,11.37,9.98z"/>
                        </g>
</svg>
                </div>
                <div class="mail__txt">
                    <a href="mailto:avtoprokat-tomsk@yandex.ru">avtoprokat-tomsk@yandex.ru</a>
                </div>
            </div>
            <div class="address__social">
                <a class="twitter" href="https://twitter.com/prokat_tomsk" target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 604.8 504" style="enable-background:new 0 0 604.8 504;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #404241;
    }
</style>
                        <path class="twitter" d="M604.8,59.63c-22.26,10.12-46.15,16.98-71.24,20.05c25.63-15.74,45.24-40.71,54.54-70.37
	c-24.03,14.58-50.57,25.16-78.84,30.9C486.62,15.43,454.42,0,418.7,0c-68.52,0-124.08,57-124.08,127.25c0,9.97,1.1,19.7,3.21,29
	c-103.1-5.31-194.52-55.98-255.7-132.98c-10.7,18.76-16.78,40.63-16.78,63.97c0,44.16,21.92,83.13,55.18,105.93
	c-20.33-0.69-39.45-6.44-56.2-15.97v1.59c0,61.65,42.78,113.1,99.51,124.81c-10.39,2.87-21.35,4.46-32.69,4.46
	c-8.01,0-15.76-0.82-23.35-2.37c15.79,50.6,61.6,87.39,115.87,88.4c-42.44,34.12-95.96,54.4-154.08,54.4
	c-10.01,0-19.88-0.62-29.59-1.75C54.91,482.91,120.11,504,190.17,504c228.23,0,352.99-193.94,352.99-362.13l-0.42-16.48
	C567.12,107.55,588.21,85.14,604.8,59.63z"/>
</svg>
                </a>
                <a class="insta" itemscope itemtype="https://schema.org/LocalBusiness" href="tel:+793822325005"
                   target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 504.36 504" style="enable-background:new 0 0 504.36 504;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #404241;
    }
</style>
                        <g>
                            <g>
                                <path class="insta" d="M360.81,0H143.55C64.39,0,0,64.36,0,143.45v217.1C0,439.67,64.39,504,143.55,504h217.26
			c79.15,0,143.55-64.33,143.55-143.45v-217.1C504.36,64.36,439.97,0,360.81,0z M461.13,360.55c0,55.29-45,100.27-100.32,100.27
			H143.55c-55.32,0-100.32-44.97-100.32-100.27v-217.1c0-55.29,45-100.24,100.32-100.24h217.26c55.32,0,100.32,44.95,100.32,100.24
			V360.55z M252.18,122.96c-71.2,0-129.13,57.9-129.13,129.06c0,71.16,57.93,129.03,129.13,129.03
			c71.21,0,129.14-57.88,129.14-129.03C381.32,180.85,323.39,122.96,252.18,122.96z M252.18,337.87c-47.36,0-85.9-38.53-85.9-85.85
			c0-47.34,38.54-85.85,85.9-85.85c47.38,0,85.91,38.51,85.91,85.85C338.09,299.34,299.56,337.87,252.18,337.87z M386.86,84.58
			c-17.14,0-31.04,13.86-31.04,31c0,17.11,13.9,31.02,31.04,31.02s31.04-13.91,31.04-31.02C417.9,98.44,404,84.58,386.86,84.58z"/>
                            </g>
                        </g>
</svg>
                </a>
                <a class="vk" href="https://vk.com/avtoprokat_tomsk" target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 870.44 504" style="enable-background:new 0 0 870.44 504;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #404241;
    }
</style>
                        <path class="vk" d="M865.82,455.17c-1.05-2.31-2.04-4.22-2.95-5.75c-15.1-27.61-43.96-61.49-86.56-101.66l-0.9-0.92l-0.45-0.45
	l-0.46-0.46h-0.46c-19.33-18.7-31.58-31.28-36.7-37.72c-9.38-12.27-11.48-24.68-6.36-37.26c3.62-9.51,17.23-29.58,40.79-60.25
	c12.39-16.25,22.21-29.28,29.46-39.09c52.27-70.53,74.93-115.6,67.98-135.22l-2.7-4.58c-1.82-2.76-6.5-5.29-14.04-7.59
	c-7.56-2.3-17.23-2.67-29.01-1.14l-130.52,0.91c-2.12-0.76-5.14-0.69-9.07,0.23c-3.93,0.92-5.9,1.39-5.9,1.39l-2.27,1.15l-1.8,1.39
	c-1.51,0.91-3.17,2.52-4.99,4.82c-1.8,2.29-3.31,4.98-4.52,8.05c-14.21,37.1-30.37,71.6-48.5,103.48
	c-11.18,19.01-21.45,35.49-30.83,49.45c-9.36,13.95-17.22,24.22-23.56,30.81c-6.35,6.59-12.08,11.88-17.23,15.87
	c-5.14,3.99-9.06,5.68-11.78,5.06c-2.72-0.62-5.29-1.23-7.71-1.84c-4.23-2.76-7.63-6.52-10.19-11.27
	c-2.58-4.75-4.31-10.73-5.21-17.94c-0.9-7.21-1.44-13.41-1.59-18.63c-0.14-5.21-0.08-12.57,0.23-22.08
	c0.31-9.51,0.45-15.94,0.45-19.32c0-11.65,0.23-24.3,0.68-37.94c0.46-13.65,0.82-24.46,1.14-32.43c0.31-7.97,0.45-16.4,0.45-25.3
	c0-8.89-0.53-15.86-1.59-20.93c-1.04-5.06-2.64-9.96-4.75-14.72c-2.12-4.75-5.22-8.43-9.29-11.04c-4.08-2.6-9.15-4.67-15.18-6.21
	c-16.01-3.68-36.41-5.67-61.19-5.98c-56.19-0.61-92.3,3.07-108.32,11.04c-6.34,3.37-12.09,7.97-17.22,13.8
	c-5.44,6.75-6.2,10.43-2.27,11.04c18.13,2.75,30.97,9.35,38.52,19.77l2.72,5.52c2.12,3.99,4.23,11.04,6.35,21.16
	c2.11,10.12,3.48,21.31,4.08,33.56c1.51,22.39,1.51,41.55,0,57.49c-1.51,15.95-2.94,28.36-4.31,37.26c-1.36,8.9-3.4,16.1-6.12,21.62
	c-2.72,5.52-4.54,8.89-5.44,10.12c-0.9,1.23-1.66,2-2.26,2.3c-3.93,1.53-8.01,2.3-12.24,2.3c-4.23,0-9.37-2.14-15.41-6.44
	c-6.04-4.3-12.31-10.2-18.81-17.71c-6.5-7.52-13.82-18.02-21.98-31.51c-8.15-13.49-16.62-29.43-25.38-47.83l-7.25-13.34
	c-4.53-8.58-10.72-21.08-18.58-37.48c-7.86-16.41-14.81-32.28-20.85-47.61c-2.42-6.44-6.04-11.34-10.87-14.72l-2.27-1.38
	c-1.51-1.23-3.93-2.53-7.25-3.91c-3.32-1.38-6.79-2.37-10.42-2.98L29.01,23.05c-12.69,0-21.3,2.92-25.83,8.74l-1.81,2.75
	C0.46,36.08,0,38.53,0,41.91c0,3.37,0.91,7.51,2.72,12.41c18.13,43.24,37.84,84.94,59.14,125.1s39.81,72.52,55.51,97.04
	c15.71,24.53,31.72,47.69,48.04,69.45c16.32,21.77,27.12,35.72,32.4,41.85c5.29,6.14,9.45,10.73,12.47,13.8l11.33,11.04
	c7.25,7.36,17.9,16.18,31.95,26.45c14.05,10.27,29.61,20.39,46.68,30.36c17.07,9.96,36.94,18.08,59.6,24.37
	c22.66,6.29,44.71,8.81,66.17,7.6h52.12c10.57-0.93,18.58-4.3,24.02-10.12l1.8-2.31c1.21-1.83,2.35-4.67,3.4-8.5
	c1.06-3.84,1.59-8.06,1.59-12.65c-0.31-13.18,0.68-25.06,2.94-35.64s4.83-18.55,7.71-23.92c2.88-5.36,6.12-9.89,9.74-13.56
	c3.62-3.68,6.2-5.91,7.72-6.67c1.51-0.77,2.71-1.29,3.61-1.61c7.25-2.45,15.78-0.08,25.61,7.14c9.82,7.2,19.03,16.1,27.65,26.68
	c8.61,10.58,18.96,22.46,31.04,35.64c12.09,13.19,22.67,22.99,31.72,29.44l9.06,5.52c6.05,3.69,13.91,7.06,23.58,10.12
	c9.65,3.06,18.11,3.83,25.37,2.3l116.01-1.84c11.48,0,20.4-1.93,26.74-5.76c6.34-3.83,10.11-8.05,11.33-12.64
	c1.21-4.6,1.28-9.82,0.23-15.65C867.94,461.54,866.88,457.47,865.82,455.17z"/>
</svg>
                </a>
                <a class="whatsapp" title="WhatsApp" href="whatsapp://send?phone=+79832325005"
                   target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 504 504" style="enable-background:new 0 0 504 504;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #404241;
    }
</style>
                        <g>
                            <g>
                                <path class="whatsapp" d="M377.6,0H126C56.8,0,0,56.8,0,126.4V378c0,69.2,56.8,126,126,126h251.6c69.6,0,126.4-56.8,126.4-126.4V126.4
			C504,56.8,447.2,0,377.6,0z M238.4,103.6c0.8-12.4,12.4-8,18.4-8.8c75.2,2.4,140,70,139.2,142.8c0,7.2,2.4,17.6-8.4,17.6
			c-10.4,0-7.6-10.8-8.8-18c-10-77.2-46-113.6-124.4-125.6C248,110.8,238,112,238.4,103.6z M350.8,240.8c-12,1.6-9.6-8.8-10.8-15.6
			c-8-47.2-24.8-64.4-73.2-74.8c-7.2-1.6-18.4-0.4-16.4-11.2c1.6-10.4,11.6-6.8,19.2-6c48.4,5.6,88,46.8,87.6,92
			C356.4,230,359.6,239.2,350.8,240.8z M320.8,216c0,6.4-0.8,12.4-8,13.2c-5.2,0.8-8.4-3.6-9.2-8.8c-2-19.2-12.4-30.8-32.4-34
			c-6-0.8-11.6-2.8-8.8-10.8c2-5.2,6.8-6,12-6C296,169.2,320.8,194.4,320.8,216z M396.8,363.6c-8.4,22.8-36.8,46-61.2,45.6
			c-3.6-0.8-10.4-2-16.4-4.4C212,359.6,134,285.2,90,178.8c-14.8-35.6,0.8-66,38-78c6.8-2.4,13.2-2.4,20,0
			c16,5.6,56.4,60.4,57.2,76.4c0.8,12.4-8,19.2-16.4,24.8c-16.4,10.8-16.4,24.4-9.2,40c15.6,34.4,42.4,58.4,77.2,73.6
			c12.4,5.6,24.8,5.2,33.2-7.6c15.2-22.8,34-21.6,54.4-7.6c10.4,7.2,20.8,14,30.4,21.6C388,332.8,404.8,341.6,396.8,363.6z"/>
                            </g>
                        </g>
</svg>
                </a>
                <a class="viber" title="Viber" href="viber://add?number=79832325005" href="tel:+73822325005"
                   target="_blank">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 504 504" style="enable-background:new 0 0 504 504;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #404241;
    }
</style>
                        <g>
                            <g>
                                <path class="viber" d="M252.06,0h-0.13C112.99,0,0,113.02,0,252c0,55.13,17.77,106.22,47.97,147.7l-31.41,93.62l96.86-30.96
			c39.85,26.4,87.38,41.64,138.63,41.64C391.01,504,504,390.95,504,252S391.01,0,252.06,0z M398.7,355.86
			c-6.08,17.17-30.21,31.41-49.45,35.56c-13.17,2.8-30.37,5.04-88.26-18.96c-74.06-30.68-121.75-105.93-125.46-110.82
			c-3.56-4.88-29.93-39.85-29.93-76.01s18.36-53.77,25.77-61.33c6.08-6.21,16.13-9.04,25.77-9.04c3.12,0,5.92,0.16,8.44,0.28
			c7.4,0.32,11.12,0.76,16,12.44c6.08,14.65,20.88,50.81,22.65,54.53c1.8,3.72,3.59,8.76,1.07,13.64
			c-2.36,5.04-4.44,7.28-8.16,11.56c-3.72,4.28-7.25,7.56-10.96,12.16c-3.4,4-7.24,8.28-2.96,15.69
			c4.28,7.24,19.09,31.41,40.89,50.81c28.13,25.04,50.94,33.04,59.09,36.45c6.08,2.52,13.32,1.92,17.77-2.8
			c5.64-6.08,12.6-16.16,19.69-26.08c5.04-7.12,11.4-8,18.08-5.48c6.8,2.36,42.81,20.16,50.21,23.85c7.4,3.72,12.29,5.48,14.08,8.6
			C404.78,324.01,404.78,338.66,398.7,355.86z"/>
                            </g>
                        </g>
</svg>
                </a>
            </div>
        </div>
        <div class="header__logo">
            <div class="logo__top">
                <div class="logo__car-rental">
                    <div class="car-rental__img">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo bloginfo('template_url'); ?>/img/logo.svg" alt="logo"></a>
                    </div>
                </div>
                <div class="logo__tell">
                    <div class="tell__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/tell.svg" alt="tell">
                    </div>
                    <div class="tell__tell">
                        <div class="tell__1" itemscope itemtype="https://schema.org/LocalBusiness">
                            <span class="span" itemprop="telephone"><a href="tel:+79832325005"><p class="p">+7-983-232-5005</p></a></span>
                        </div>
                        <div class="tell__2" itemscope itemtype="https://schema.org/LocalBusiness">
                            <span class="span" itemprop="telephone"><a href="tel:+73822325005"><p class="p">+7(3822)325-005</p></a></span>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener( 'wpcf7mailsent', function( event ) {
                        jQuery('#contactform').hide();
                    }, false );
                </script>
                <div class="logo__button">
                    <div class="contact-us"><a href="#contact_form_pop_up" class="fancybox-inline">Заказать звонок</a>
                    </div>
                    <div style="display:none" class="fancybox-hidden">
                        <div id="contact_form_pop_up">
                            <?php echo do_shortcode('[contact-form-7 id="332" title="Контактная форма 1"]'); ?>
                        </div>
                    </div>
                </div>
                <a href="#call" class="modalbox call"><span>ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</span></a>
            </div>

        </div>
    </div>
    <?php
});

add_action( 'wpcf7_before_send_mail', 'form_to_crm' );
function form_to_crm( $cf7 ) {
    $wpcf7 = WPCF7_ContactForm::get_current();

    /* Uw naam   => first_name    */ $first_name            = $_POST["your-name"];
    /* Bedrijf   => company_name  */ $company               = $_POST["bedrijf"];
    /* Email     => email         */ $email                 = $_POST["email"];
    /* Adres     => address       */ $address               = $_POST["adres"];
    /* Nummer*   => number        */ $number                = $_POST["huisnummer"];
    /* Postcode  => postcode      */ $postcode              = $_POST["postcode"];
    /* Woonplts* => city          */ $city                  = $_POST["woonplaats"];
    /* Tel       => telephone     */ $telephone             = $_POST["telefoonnummer"];

    if(!empty( $first_name )){          $post_items['first_name']           =  $first_name; }
    if(!empty( $company )){             $post_items['company_name']         =  $company; }
    if(!empty( $email )){               $post_items['email']                =  $email; }
    if(!empty( $address )){             $post_items['address']              =  $address; }
    if(!empty( $number )){              $post_items['number']               =  $number; }
    if(!empty( $postcode )){            $post_items['postcode']             =  $postcode; }
    if(!empty( $city )){                $post_items['city']                 =  $city; }
    if(!empty( $telephone )){           $post_items['telephone']            =  $telephone; }

    if(!empty($postcode) && !empty($number))
    {
        $ch             = curl_init();

        if ( curl_error($ch) != "" )
        {
            return;
        }

        $post_string    = json_encode($post_items);

        $con_url        = 'valid api url';

        curl_setopt($ch, CURLOPT_URL, $con_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Token XXX (censored)"
        ));
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

        $output = curl_exec($ch);

        file_put_contents("curlerror.txt", $output);
        curl_close($ch);
    }
    return $output;
}

add_action('wp','forefront_setup');
function forefront_setup()
{

	if ( !function_exists( 'generate_blog_get_defaults' ) ) :
		remove_action( 'generate_after_entry_header', 'generate_post_image' );

		if ( function_exists('generate_page_header') ) :
			remove_action( 'generate_after_entry_header', 'generate_page_header_post_image' );
			add_action( 'generate_before_content', 'generate_page_header_post_image' );
		endif;
	endif;

}

/**
 * Add dynamic CSS
 * @since 0.6
 */
function forefront_custom_css()
{

	if ( function_exists( 'generate_spacing_get_defaults' ) ) :

		$spacing_settings = wp_parse_args(
			get_option( 'generate_spacing_settings', array() ),
			generate_spacing_get_defaults()
		);

	endif;

	if ( function_exists( 'generate_blog_get_defaults' ) ) :

		$blog_settings = wp_parse_args(
			get_option( 'generate_blog_settings', array() ),
			generate_blog_get_defaults()
		);

	endif;

	if ( function_exists('generate_spacing_get_defaults') ) :
		$top_padding = $spacing_settings['content_top'];
		$right_padding = $spacing_settings['content_right'];
		$bottom_padding = $spacing_settings['content_bottom'];
		$left_padding = $spacing_settings['content_left'];
	else :
		$top_padding = 40;
		$right_padding = 40;
		$bottom_padding = 40;
		$left_padding = 40;
	endif;

	$return = '';

	if ( function_exists( 'generate_blog_get_defaults' ) ) :
		if ( '' == $blog_settings['post_image_position'] ) :
			$return .= '.separate-containers .post-image, .separate-containers .inside-article .page-header-image-single, .separate-containers .inside-article .page-header-image, .separate-containers .inside-article .page-header-content-single, .no-sidebar .inside-article .page-header-image-single, .no-sidebar .inside-article .page-header-image, article .inside-article .page-header-post-image { margin: ' . $bottom_padding . 'px -' . $right_padding . 'px ' . $bottom_padding . 'px -' . $left_padding . 'px }';
		else :
			$return .= '.separate-containers .post-image, .separate-containers .inside-article .page-header-image-single, .separate-containers .inside-article .page-header-image, .separate-containers .inside-article .page-header-content-single, .no-sidebar .inside-article .page-header-image-single, .no-sidebar .inside-article .page-header-image, article .inside-article .page-header-post-image { margin: -' . $top_padding . 'px -' . $right_padding . 'px ' . $bottom_padding . 'px -' . $left_padding . 'px }';
		endif;
	else :
		$return .= '.separate-containers .post-image, .separate-containers .inside-article .page-header-image-single, .separate-containers .inside-article .page-header-image, .separate-containers .inside-article .page-header-content-single, .no-sidebar .inside-article .page-header-image-single, .no-sidebar .inside-article .page-header-image, article .inside-article .page-header-post-image { margin: -' . $top_padding . 'px -' . $right_padding . 'px ' . $bottom_padding . 'px -' . $left_padding . 'px }';
	endif;

	return $return;
}

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'forefront_scripts', 50 );
function forefront_scripts() {
	wp_add_inline_style( 'generate-style', forefront_custom_css() );
}

/**
 * Reset customizer settings so the child theme shows up
 */
add_action( 'admin_notices', 'forefront_reset_customizer_settings' );
function forefront_reset_customizer_settings() {
	global $pagenow;
	$generate_settings = get_option('generate_settings');

	if ( empty($generate_settings) )
		return;

	if ( is_admin() && $pagenow == "themes.php" && isset( $_GET['activated'] ) ) {
		?>
		<div class="updated settings-error notice is-dismissible">
			<p>
				<?php printf( __( '<strong>Almost done!</strong> Previous GeneratePress options detected in your database. Please <a href="%s">click here</a> to delete your current options for Forefront to take full effect.','forefront' ), admin_url('themes.php?page=generate-options#gen-delete') ); ?>
			</p>
		</div>
		<?php
	}
}
if ( !function_exists( 'forefront_new_defaults' ) ) :
add_filter( 'generate_option_defaults','forefront_new_defaults' );
function forefront_new_defaults( $new_defaults )
{
	$new_defaults[ 'hide_title' ] = '';
	$new_defaults[ 'hide_tagline' ] = '';
	$new_defaults[ 'logo' ] = '';
	$new_defaults[ 'container_width' ] = '1200';
	$new_defaults[ 'header_layout_setting' ] = 'contained-header';
	$new_defaults[ 'center_header' ] = 'true';
	$new_defaults[ 'center_nav' ] = 'true';
	$new_defaults[ 'nav_alignment_setting' ] = 'center';
	$new_defaults[ 'header_alignment_setting' ] = 'center';
	$new_defaults[ 'nav_layout_setting' ] = 'contained-nav';
	$new_defaults[ 'nav_position_setting' ] = 'nav-below-header';
	$new_defaults[ 'nav_search' ] = 'disable';
	$new_defaults[ 'nav_dropdown_type' ] = 'hover';
	$new_defaults[ 'content_layout_setting' ] = 'separate-containers';
	$new_defaults[ 'layout_setting' ] = 'both-sidebars';
	$new_defaults[ 'blog_layout_setting' ] = 'both-sidebars';
	$new_defaults[ 'single_layout_setting' ] = 'both-sidebars';
	$new_defaults[ 'post_content' ] = 'full';
	$new_defaults[ 'footer_layout_setting' ] = 'contained-footer';
	$new_defaults[ 'footer_widget_setting' ] = '3';
	$new_defaults[ 'back_to_top' ] = '';
	$new_defaults[ 'background_color' ] = '#222222';
	$new_defaults[ 'text_color' ] = '#3a3a3a';
	$new_defaults[ 'link_color' ] = '#1e73be';
	$new_defaults[ 'link_color_hover' ] = '#000000';
	$new_defaults[ 'link_color_visited' ] = '';

	return $new_defaults;
}
endif;

/**
 * Set default options
 */
if ( !function_exists( 'forefront_get_color_defaults' ) ) :
add_filter( 'generate_color_option_defaults','forefront_get_color_defaults' );
function forefront_get_color_defaults( $forefront_color_defaults )
{
	$forefront_color_defaults[ 'header_background_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'header_text_color' ] = '#3a3a3a';
	$forefront_color_defaults[ 'header_link_color' ] = '#3a3a3a';
	$forefront_color_defaults[ 'header_link_hover_color' ] = '';
	$forefront_color_defaults[ 'site_title_color' ] = '#222222';
	$forefront_color_defaults[ 'site_tagline_color' ] = '#999999';
	$forefront_color_defaults[ 'navigation_background_color' ] = '#D33232';
	$forefront_color_defaults[ 'navigation_text_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'navigation_background_hover_color' ] = '#dd5656';
	$forefront_color_defaults[ 'navigation_text_hover_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'navigation_background_current_color' ] = '#dd5656';
	$forefront_color_defaults[ 'navigation_text_current_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'subnavigation_background_color' ] = '#dd5656';
	$forefront_color_defaults[ 'subnavigation_text_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'subnavigation_background_hover_color' ] = '#E87171';
	$forefront_color_defaults[ 'subnavigation_text_hover_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'subnavigation_background_current_color' ] = '#E87171';
	$forefront_color_defaults[ 'subnavigation_text_current_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'content_background_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'content_text_color' ] = '#3a3a3a';
	$forefront_color_defaults[ 'content_link_color' ] = '';
	$forefront_color_defaults[ 'content_link_hover_color' ] = '';
	$forefront_color_defaults[ 'content_title_color' ] = '';
	$forefront_color_defaults[ 'blog_post_title_color' ] = '#2D2D2D';
	$forefront_color_defaults[ 'blog_post_title_hover_color' ] = '#D33232';
	$forefront_color_defaults[ 'entry_meta_text_color' ] = '#888888';
	$forefront_color_defaults[ 'entry_meta_link_color' ] = '#666666';
	$forefront_color_defaults[ 'entry_meta_link_color_hover' ] = '#D33232';
	$forefront_color_defaults[ 'h1_color' ] = '';
	$forefront_color_defaults[ 'h2_color' ] = '';
	$forefront_color_defaults[ 'h3_color' ] = '';
	$forefront_color_defaults[ 'sidebar_widget_background_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'sidebar_widget_text_color' ] = '#3a3a3a';
	$forefront_color_defaults[ 'sidebar_widget_link_color' ] = '#686868';
	$forefront_color_defaults[ 'sidebar_widget_link_hover_color' ] = '#D33232';
	$forefront_color_defaults[ 'sidebar_widget_title_color' ] = '#000000';
	$forefront_color_defaults[ 'footer_widget_background_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'footer_widget_text_color' ] = '#3a3a3a';
	$forefront_color_defaults[ 'footer_widget_link_color' ] = '#1e73be';
	$forefront_color_defaults[ 'footer_widget_link_hover_color' ] = '#000000';
	$forefront_color_defaults[ 'footer_widget_title_color' ] = '#000000';
	$forefront_color_defaults[ 'footer_background_color' ] = '#D33232';
	$forefront_color_defaults[ 'footer_text_color' ] = '#ffffff';
	$forefront_color_defaults[ 'footer_link_color' ] = '#ffffff';
	$forefront_color_defaults[ 'footer_link_hover_color' ] = '#222222';
	$forefront_color_defaults[ 'form_background_color' ] = '#FAFAFA';
	$forefront_color_defaults[ 'form_text_color' ] = '#666666';
	$forefront_color_defaults[ 'form_background_color_focus' ] = '#FFFFFF';
	$forefront_color_defaults[ 'form_text_color_focus' ] = '#666666';
	$forefront_color_defaults[ 'form_border_color' ] = '#CCCCCC';
	$forefront_color_defaults[ 'form_border_color_focus' ] = '#BFBFBF';
	$forefront_color_defaults[ 'form_button_background_color' ] = '#666666';
	$forefront_color_defaults[ 'form_button_background_color_hover' ] = '#606060';
	$forefront_color_defaults[ 'form_button_text_color' ] = '#FFFFFF';
	$forefront_color_defaults[ 'form_button_text_color_hover' ] = '#FFFFFF';

	return $forefront_color_defaults;
}
endif;

/**
 * Set default options
 */
if ( !function_exists('forefront_get_default_fonts') ) :
add_filter( 'generate_font_option_defaults','forefront_get_default_fonts' );
function forefront_get_default_fonts( $forefront_font_defaults )
{
	$forefront_font_defaults[ 'font_body' ] = 'Arial, Helvetica, sans-serif';
	$forefront_font_defaults[ 'body_font_weight' ] = 'normal';
	$forefront_font_defaults[ 'body_font_transform' ] = 'none';
	$forefront_font_defaults[ 'body_font_size' ] = '15';
	$forefront_font_defaults[ 'font_site_title' ] = 'Merriweather';
	$forefront_font_defaults[ 'font_site_title_category' ] = 'sans-serif';
	$forefront_font_defaults[ 'font_site_title_variants' ] = 'regular,500,700,900';
	$forefront_font_defaults[ 'site_title_font_weight' ] = 'bold';
	$forefront_font_defaults[ 'site_title_font_transform' ] = 'none';
	$forefront_font_defaults[ 'site_title_font_size' ] = '60';
	$forefront_font_defaults[ 'mobile_site_title_font_size' ] = '30';
	$forefront_font_defaults[ 'font_site_tagline' ] = 'Roboto';
	$forefront_font_defaults[ 'font_site_tagline_category' ] = 'sans-serif';
	$forefront_font_defaults[ 'font_site_tagline_variants' ] = '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic';
	$forefront_font_defaults[ 'site_tagline_font_weight' ] = 'normal';
	$forefront_font_defaults[ 'site_tagline_font_transform' ] = 'none';
	$forefront_font_defaults[ 'site_tagline_font_size' ] = '15';
	$forefront_font_defaults[ 'font_navigation' ] = 'Roboto';
	$forefront_font_defaults[ 'font_navigation_category' ] = 'sans-serif';
	$forefront_font_defaults[ 'font_navigation_variants' ] = '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic';
	$forefront_font_defaults[ 'navigation_font_weight' ] = 'normal';
	$forefront_font_defaults[ 'navigation_font_transform' ] = 'none';
	$forefront_font_defaults[ 'navigation_font_size' ] = '15';
	$forefront_font_defaults[ 'font_widget_title' ] = 'Roboto';
	$forefront_font_defaults[ 'font_widget_title_category' ] = 'sans-serif';
	$forefront_font_defaults[ 'font_widget_title_variants' ] = '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic';
	$forefront_font_defaults[ 'widget_title_font_weight' ] = 'normal';
	$forefront_font_defaults[ 'widget_title_font_transform' ] = 'none';
	$forefront_font_defaults[ 'widget_title_font_size' ] = '20';
	$forefront_font_defaults[ 'widget_content_font_size' ] = '15';
	$forefront_font_defaults[ 'font_heading_1' ] = 'Roboto';
	$forefront_font_defaults[ 'font_heading_1_category' ] = 'sans-serif';
	$forefront_font_defaults[ 'font_heading_1_variants' ] = '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic';
	$forefront_font_defaults[ 'heading_1_weight' ] = '300';
	$forefront_font_defaults[ 'heading_1_transform' ] = 'none';
	$forefront_font_defaults[ 'heading_1_font_size' ] = '40';
	$forefront_font_defaults[ 'mobile_heading_1_font_size' ] = '30';
	$forefront_font_defaults[ 'font_heading_2' ] = 'Roboto';
	$forefront_font_defaults[ 'font_heading_2_category' ] = 'sans-serif';
	$forefront_font_defaults[ 'font_heading_2_variants' ] = '100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic';
	$forefront_font_defaults[ 'heading_2_weight' ] = '300';
	$forefront_font_defaults[ 'heading_2_transform' ] = 'none';
	$forefront_font_defaults[ 'heading_2_font_size' ] = '30';
	$forefront_font_defaults[ 'mobile_heading_2_font_size' ] = '25';
	$forefront_font_defaults[ 'font_heading_3' ] = 'inherit';
	$forefront_font_defaults[ 'heading_3_weight' ] = 'normal';
	$forefront_font_defaults[ 'heading_3_transform' ] = 'none';
	$forefront_font_defaults[ 'heading_3_font_size' ] = '20';
	$forefront_font_defaults[ 'footer_font_size' ] = '17';

	return $forefront_font_defaults;
}
endif;

/**
 * Prints the Post Image to post excerpts
 */

if ( ! function_exists( 'forefront_post_image' ) && !function_exists( 'generate_blog_get_defaults' ) ) :
	add_action( 'generate_before_content', 'forefront_post_image' );
	function forefront_post_image()
	{
		if ( !has_post_thumbnail() )
			return;

		if ( 'post' == get_post_type() && !is_single() ) {
		?>
			<div class="post-image">
				<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		<?php
		}
	}
endif;
add_filter('storm_social_icons_use_latest', '__return_true');

add_filter('storm_social_icons_hide_text', '__return_false');

add_filter( 'wpcf7_validate_configuration', '__return_false' );