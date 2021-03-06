<?php
/**
 * Kale theme defaults
 *
 * @package kale
 */
?>
<?php 
$kale_defaults['kale_custom_header']                    = esc_url( get_template_directory_uri() ) . '/sample/images/header.jpg';

$kale_defaults['kale_footer_copyright']                 = 'Copyright &copy; 2016 <a href="https://www.lyrathemes.com/kale-pro/">Kale Pro</a>';
$kale_defaults['kale_nav_search_icon']                  = 1;

$kale_defaults['kale_image_logo_show']                  = 0;
$kale_defaults['kale_text_logo']                        = 'KALE';

$kale_defaults['kale_banner_heading']                   = get_bloginfo('name');
$kale_defaults['kale_banner_description']               = get_bloginfo('description');
$kale_defaults['kale_banner_url']                       = '#';

$kale_defaults['kale_frontpage_banner']                 = 'Posts';

$kale_defaults['kale_frontpage_posts_slider_category']  = 1; //Uncategorized
$kale_defaults['kale_frontpage_posts_slider_number']    = '3';

$kale_defaults['kale_frontpage_featured_posts_show']    = 1;
$kale_defaults['kale_frontpage_featured_posts_heading'] = __('Featured Posts', 'kale');
$kale_defaults['kale_frontpage_featured_posts_post_1']  = kale_get_random_post();
$kale_defaults['kale_frontpage_featured_posts_post_2']  = kale_get_random_post();
$kale_defaults['kale_frontpage_featured_posts_post_3']  = kale_get_random_post();

$kale_defaults['kale_frontpage_large_post_show']        = 1;
$kale_defaults['kale_frontpage_large_post_heading']     = __('My Diary', 'kale');
$kale_defaults['kale_frontpage_large_post']             = kale_get_random_post();

$kale_defaults['kale_blog_feed_meta_show']              = 1;
$kale_defaults['kale_blog_feed_date_show']              = 1;
$kale_defaults['kale_blog_feed_category_show']          = 1;
$kale_defaults['kale_blog_feed_author_show']            = 1;
$kale_defaults['kale_blog_feed_comments_show']          = 1;
$kale_defaults['kale_blog_feed_post_format']            = 'Mixed';

$kale_defaults['kale_posts_meta_show']                  = 1;
$kale_defaults['kale_posts_date_show']                  = 1;    
$kale_defaults['kale_posts_category_show']              = 1;
$kale_defaults['kale_posts_author_show']                = 1;
$kale_defaults['kale_posts_tags_show']                  = 1;
$kale_defaults['kale_posts_sidebar']                    = '1';
$kale_defaults['kale_posts_featured_image_show']        = 1;

$kale_defaults['kale_pages_sidebar']                    = '1';
$kale_defaults['kale_pages_featured_image_show']        = 1;

/* sample images */

$kale_defaults['kale_slide_sample'][]                   = esc_url( get_template_directory_uri() ) . '/sample/images/slide1.jpg';
$kale_defaults['kale_slide_sample'][]                   = esc_url( get_template_directory_uri() ) . '/sample/images/slide2.jpg';
$kale_defaults['kale_slide_sample'][]                   = esc_url( get_template_directory_uri() ) . '/sample/images/slide3.jpg';
$kale_defaults['kale_slide_sample'][]                   = esc_url( get_template_directory_uri() ) . '/sample/images/slide4.jpg';
$kale_defaults['kale_slide_sample'][]                   = esc_url( get_template_directory_uri() ) . '/sample/images/slide5.jpg';
$kale_defaults['kale_slide_sample'][]                   = esc_url( get_template_directory_uri() ) . '/sample/images/slide6.jpg';

$kale_defaults['kale_thumbnail_sample'][]               = esc_url( get_template_directory_uri() ) . '/sample/images/thumb1.jpg';
$kale_defaults['kale_thumbnail_sample'][]               = esc_url( get_template_directory_uri() ) . '/sample/images/thumb2.jpg';
$kale_defaults['kale_thumbnail_sample'][]               = esc_url( get_template_directory_uri() ) . '/sample/images/thumb3.jpg';
$kale_defaults['kale_thumbnail_sample'][]               = esc_url( get_template_directory_uri() ) . '/sample/images/thumb4.jpg';
$kale_defaults['kale_thumbnail_sample'][]               = esc_url( get_template_directory_uri() ) . '/sample/images/thumb5.jpg';
$kale_defaults['kale_thumbnail_sample'][]               = esc_url( get_template_directory_uri() ) . '/sample/images/thumb6.jpg';

$kale_defaults['kale_full_sample'][]                    = esc_url( get_template_directory_uri() ) . '/sample/images/full1.jpg';
$kale_defaults['kale_full_sample'][]                    = esc_url( get_template_directory_uri() ) . '/sample/images/full2.jpg';
$kale_defaults['kale_full_sample'][]                    = esc_url( get_template_directory_uri() ) . '/sample/images/full3.jpg';
?>