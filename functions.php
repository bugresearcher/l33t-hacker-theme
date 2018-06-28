<?php
//admin bar özelliğini iptal etme
add_filter( 'show_admin_bar', '__return_false' );
remove_action( 'personal_options', '_admin_bar_preferences' );

// öne çıkarılmış görsel
add_theme_support( 'post-thumbnails');

// menü
register_nav_menu('menu', 'Menü Alanı');

// güvenlik kodları
remove_action('wp_head', 'wp_generator');
add_filter('login_errors',create_function('$a', "return 'Kullanıcı adınız veya şifreniz yanlıştır.';"));
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
define('DISALLOW_FILE_EDIT', true);

// panel
if (file_exists(TEMPLATEPATH.'/temapaneli.php')) include_once("temapaneli.php");

// sayfalama
function sayfalama($pages = '', $range = 3)
{
    $showitems = ($range * 2)+1; 
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }  
    if(1 != $pages)
    {
        echo "<div class='wp-pagenavi'>";
		echo "<span>Toplam ".$pages." sayfa, ".$paged.". sayfa gösteriliyor.</span>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>İlk</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Son</a>";
        echo "</div>\n";
    }
}
?>