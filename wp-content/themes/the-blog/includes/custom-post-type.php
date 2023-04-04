<?php

function theblog_custom_post(){

$blogPost_label = array (
    'name'              => __('Blog Post', 'textdomain'),
    'singular_name'     => __('Blog Post', 'textdomain'),
    'add_new'           => __('Add Blog Post', 'textdomain'),
    'add_new_item'      => __('Add New Blog Post', 'textdomain'),
    'edit_item'         => __('Edit New Blog Post', 'textdomain'),
    'all_items'         => __('Blog Post', 'textdomain')
);

$blogPost_args = array(
    'labels'            => $blogPost_label,
    'public'            => true,
    'capability_type'   => 'post',
    'show_ui'           => true,
    'taxonomies'        => array('post_tag', 'category'),
    'supports'          => array('title','editor', 'thumbnail', 'excerpt' )
);

register_post_type('blogPost',$blogPost_args);


//latest story

$latestPost_label = array (
    'name'              => __('Latest Story', 'textdomain'),
    'singular_name'     => __('Latest Story', 'textdomain'),
    'add_new'           => __('Add Latest Story', 'textdomain'),
    'add_new_item'      => __('Add New Latest Story', 'textdomain'),
    'edit_item'         => __('Edit New Latest Story', 'textdomain'),
    'all_items'         => __('Latest Story', 'textdomain')
);

$latestPost_args = array(
    'labels'            => $latestPost_label,
    'public'            => true,
    'capability_type'   => 'post',
    'show_ui'           => true,
    'taxonomies'        => array('post_tag', 'category'),
    'supports'          => array('title','editor', 'thumbnail', 'excerpt' )
);

register_post_type('latestPost',$latestPost_args);



// featured post


$featuredPost_label = array (
    'name'              => __('Feature New', 'textdomain'),
    'singular_name'     => __('Feature New', 'textdomain'),
    'add_new'           => __('Add New Feature', 'textdomain'),
    'add_new_item'      => __('Add New Feature', 'textdomain'),
    'edit_item'         => __('Edit Feature New', 'textdomain'),
    'all_items'         => __('Feature New', 'textdomain')
);

$featuredPost_args = array(
    'labels'            => $featuredPost_label,
    'public'            => true,
    'capability_type'   => 'post',
    'show_ui'           => true,
    'taxonomies'        => array('category'),
    'supports'          => array('title','editor', 'thumbnail', 'excerpt' )
);

register_post_type('featuredPost',$featuredPost_args);



// featured side post


$sidePost_label = array (
    'name'              => __('Side Post', 'textdomain'),
    'singular_name'     => __('Side Post', 'textdomain'),
    'add_new'           => __('Add New Side Post', 'textdomain'),
    'add_new_item'      => __('Add New Side Post', 'textdomain'),
    'edit_item'         => __('Edit Side Post', 'textdomain'),
    'all_items'         => __('Side Post', 'textdomain')
);

$sidePost_args = array(
    'labels'            => $sidePost_label,
    'public'            => true,
    'capability_type'   => 'post',
    'show_ui'           => true,
    'taxonomies'        => array('category'),
    'supports'          => array('title','editor')
);

register_post_type('sidePost',$sidePost_args);

}

add_action('init','theblog_custom_post');
