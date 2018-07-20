<?php
$optionArray = array(
    // Configurator tab
    'ip_box_ui' => 'default',
    'ip_grid_ui' => 'default',
    'ip_ipw' => 5,
    'ip_ipp' => 20,
    'ip_app' => 10,
    'ip_order' => 'DESC',
    'ip_orderby' => 'date',
    'ip_slug' => 'image',
    'ip_image_size' => 'imagepress_sq_std',
    'ip_title_optional' => 1,
    'ip_meta_optional' => 1,
    'ip_views_optional' => 1,
    'ip_comments' => 1,
    'ip_likes_optional' => 1,
    'ip_author_optional' => 0,

    // Collections tab
    'ip_collections_page' => '',

    // Login tab
    'ip_login_image' => '',
    'ip_login_bg' => '#fefefe',
    'ip_login_box_bg' => '#ffffff',
    'ip_login_box_text' => '#000000',
    'ip_login_page_text' => '#000000',
    'ip_login_button_bg' => '#00a0d2',
    'ip_login_button_text' => '#ffffff',
    'ip_login_copyright' => '',

    // Labels tab
    'ip_caption_label' => 'Image Caption',
    'ip_category_label' => 'Image Category',
    'ip_tag_label' => 'Image Tag',
    'ip_description_label' => 'Image Description',
    'ip_upload_label' => 'Upload',
    'ip_image_label' => 'Select Image',
    'ip_notifications_mark' => 'Mark all as read',
    'ip_notifications_all' => 'View all notifications',
    'ip_upload_success_title' => 'Image uploaded!',
    'ip_upload_success' => 'Click here to view your image.',
    'ip_vote_like' => 'Like',
    'ip_vote_unlike' => 'Unlike',
    'cinnamon_edit_label' => 'Edit profile',
    'cinnamon_pt_account' => 'Account details',
    'cinnamon_pt_social' => 'Social details',
    'cinnamon_pt_profile' => 'Profile details',
    'cinnamon_pt_collections' => 'Collections',
    'cinnamon_pt_images' => 'Image editor',
    'ip_load_more_label' => 'Load more',

    // Settings tab
    'ip_moderate' => 1,
    'ip_registration' => 1,
    'ip_click_behaviour' => 'media',
    'ip_cat_moderation_include' => '',
    'cinnamon_mod_login' => 0,
    'ip_mod_login' => 0,
    'ip_mod_collections' => 1,
    'ip_upload_redirection' => '',
    'ip_delete_redirection' => '',
    'ip_notification_email' => '',

    // Authors tab
    'ip_profile_page' => '',
    'cinnamon_author_slug' => 'profile',
    'ip_cards_per_author' => 5,
    'ip_et_login' => '',
    'cinnamon_show_uploads' => 1,
    'cinnamon_show_awards' => 0,
    'cinnamon_show_about' => 1,
    'cinnamon_show_followers' => 1,
    'cinnamon_show_following' => 1,
    'cinnamon_hide_admin' => 1,
    'cinnamon_account_page' => '',
    'cinnamon_edit_page' => '',
    'cinnamon_show_likes' => 0,
    'cinnamon_show_collections' => 0,
    'cinnamon_fancy_header' => 1,
    'approvednotification' => 1,
    'declinednotification' => 1,

    // Upload tab
    'ip_upload_secondary' => 0,
    'ip_allow_tags' => 0,
    'ip_upload_tos' => 0,
    'ip_upload_tos_url' => '',
    'ip_upload_tos_error' => 'You have to agree! You definitely have to!',
    'ip_upload_tos_content' => 'I have read and agree to the terms & conditions of use.',
    'ip_upload_size' => 4096,
    'ip_global_upload_limit' => 1000,
    'ip_global_upload_limit_message' => 'You have reached the maximum number of images allowed.',
    'ip_cat_exclude' => '',
    'ip_max_quality' => 100,
    'ip_dropbox_enable' => 0,
    'ip_dropbox_key' => '',

    'ip_enable_views' => 1,
    'ip_role_quota' => '',
);

add_option('imagepress', $optionArray);
