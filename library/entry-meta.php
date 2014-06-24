<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'FoundationPress'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
        //echo '<p class="byline author">'. __('Written by', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
    }
endif;

if(!function_exists('FoundationPress_entry_meta_jp')) :
    function FoundationPress_entry_meta_jp() {
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('投稿日 %s %s.', 'FoundationPress'), get_the_time('Y年 F j日 (D)'), get_the_time()) .'</time>';
    }
endif;

?>