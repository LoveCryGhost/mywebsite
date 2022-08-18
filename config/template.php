<?php
use Illuminate\Support\Str;

$_TEMPLATE_PATH_APP = 'layouts.limitless.app';
$_TEMPLATE_PATH_ADMIN = 'layouts.limitless.admin.share_components';
$_TEMPLATE_PATH_GUEST = 'layouts.limitless.guest.share_components';
$_TEMPLATE_PATH_USER = 'layouts.limitless.user.share_components';

$_TEMPLATE_PATH_MEMBER = 'layouts.limitless.member.share_components';

return [

    //Blade
    //換主體，只需換 limitless
    'app' => [
        'css_top' => $_TEMPLATE_PATH_APP.'.css_top',
        'js_top' => $_TEMPLATE_PATH_APP.'.js_top',
        'css_bottom' => '',
        'js_bottom' => '',
    ],

    'admin' => [
        //Auth
        'show_login_form' => $_TEMPLATE_PATH_ADMIN.'.show_login_form',
        'show_forget_password' => $_TEMPLATE_PATH_ADMIN.'.show_forget_password',
        'show_reset_password' => $_TEMPLATE_PATH_ADMIN.'.show_reset_password',

        'main_navbar' => $_TEMPLATE_PATH_ADMIN.'.main_navbar',
        'notifications' => $_TEMPLATE_PATH_ADMIN.'.notifications',
        'main_sidebar' => $_TEMPLATE_PATH_ADMIN.'.main_sidebar',
        'secondary_sidebar' => $_TEMPLATE_PATH_ADMIN.'.secondary_sidebar',
        'right_sidebar' => $_TEMPLATE_PATH_ADMIN.'.right_sidebar',
        'footer' => $_TEMPLATE_PATH_ADMIN.'.footer',
        'sidebar_left1' => '',
        'sidebar_left2' => '',
        'sidebar_right1' => '',
        'sidebar_right2' => '',
    ],
    'guest' => [
        'main_navbar' => $_TEMPLATE_PATH_GUEST.'.main_navbar',
        'notifications' => $_TEMPLATE_PATH_GUEST.'.notifications',
        'main_sidebar' => $_TEMPLATE_PATH_GUEST.'.main_sidebar',
        'secondary_sidebar' => $_TEMPLATE_PATH_GUEST.'.secondary_sidebar',
        'right_sidebar' => $_TEMPLATE_PATH_GUEST.'.right_sidebar',
        'footer' => $_TEMPLATE_PATH_GUEST.'.footer',
        'sidebar_left1' => '',
        'sidebar_left2' => '',
        'sidebar_right1' => '',
        'sidebar_right2' => '',

    ],
    'user' => [
        //Auth
        'show_login_form' => $_TEMPLATE_PATH_USER.'.show_login_form',
        'show_forget_password' => $_TEMPLATE_PATH_USER.'.show_forget_password',
        'show_reset_password' => $_TEMPLATE_PATH_USER.'.show_reset_password',

        'main_navbar' => $_TEMPLATE_PATH_USER.'.main_navbar',
        'notifications' => $_TEMPLATE_PATH_USER.'.notifications',
        'main_sidebar' => $_TEMPLATE_PATH_USER.'.main_sidebar',
        'secondary_sidebar' => $_TEMPLATE_PATH_USER.'.secondary_sidebar',
        'right_sidebar' => $_TEMPLATE_PATH_USER.'.right_sidebar',
        'footer' => $_TEMPLATE_PATH_USER.'.footer',
        'sidebar_left1' => '',
        'sidebar_left2' => '',
        'sidebar_right1' => '',
        'sidebar_right2' => '',

    ]

];
