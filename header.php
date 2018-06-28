<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } else { ?><?php bloginfo('name'); ?><?php } ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/hint.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Barcode+39+Extended+Text' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontlar/prox/stylesheet.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontlar/freestyle/stylesheet.css" type="text/css" media="all" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/animate/animate.css"/>
<?php for ($ar=1; $ar<=get_option('posts_per_page'); $ar++) { ?>
<script type="text/javascript">
$(function(){
$('.acilyaziacil<?php echo $ar; ?>').click(function () {
$('.kirkharamilergeliyor<?php echo $ar; ?>').slideToggle(); }); });
</script>
<?php } ?>

	<script>
		$(function(){
			
			$(".cepecevre").hide().delay(1000).fadeIn();
			
		});
	</script>

<meta name="language" content="tr-TR" />
<meta name="location" content="türkiye, tr, turkey" />
<meta name="robots" content="all" />

<?php wp_head(); ?>
<?php echo get_option('analytics'); ?>
</head>
<body>
<body style="
    background-image: url(https://i.resimyukle.xyz/A70S5K.gif);
    background-repeat: repeat;
    background-attachment: fixed;
    background-position: center;
    color: #27f6a4;
    font-family: 'Share Tech Mono';
">
<div class="ust"></div>
<div class="cepecevre" style="display: block;">
	 <div class="bground" style="
    background-color: rgba(0, 30, 38, 0.7);
    position: fixed;
    z-index: -1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
"></div>
    <h1 style="
    font-family: 'Fredoka One';
    text-align: center;
    font-weight: normal;
    font-size: 40px;
    margin-bottom: 0px;
">AimTerror Security</h1>
    <div class="greetings" style="
    text-align: center;
">
    Start everything with #!/bin/bash
    </div><br>
    <center>Linux Pentest And Defacer Tool Repo<br><br>
        <div class="barlink" style="
    font-size: 12px;
">
    <a href="/Exploit" style="
    color: #27f6a4;
    text-decoration: none;
"><?php       
$cat_args = array ( 'parent' => 0 ) ;
        $parentcategories = get_terms ( "category", $cat_args ) ;
        $no_of_categories = count ( $parentcategories ) ;

    if ( $no_of_categories > 0 ) {

        foreach ( $parentcategories as $parentcategory ) {

        echo '<a href="'.get_term_link( $parentcategory ).'" style="font-size: 23px;">' . $parentcategory ->name . '</a> | ' ;

                $parent_id = $parentcategory ->term_id;
                $subcategories = get_terms ( 'category', array ( 'child_of' => $parent_id, 'hide_empty' => false ) ) ;

            foreach ( $subcategories as $subcategory ) { 

                $args = array (
                    'post_type'=> 'category',
                    'orderby'=> 'title',
                    'order'=> 'ASC',
                    'post_per_page'=> -1,
                    'nopaging'=> 'true',
                    'taxonomy_name'=> $subcategory->name
                ); 

                echo '<span></span><a href="'.get_term_link( $subcategory ).'" style="font-size: 23px;">' . $subcategory->name . '</a><ul>';

                    query_posts ( $args ) ;

                        while ( have_posts () ) : the_post () ;

                            ?> 
                                <li><a href="<?php the_permalink () ; ?>" style="font-size: 23px;"><?php the_title () ; ?> </a></li>
								
                            <?php

                        endwhile;

                    wp_reset_query () ;

                echo '</ul></ul>' ; 

            } 

            echo '</ul>' ;

            }
    }
?></a>
    </div>
	<br>
