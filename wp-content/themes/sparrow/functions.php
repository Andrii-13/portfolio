<?php
add_action("wp_enqueue_scripts", "style_theme");
add_action("wp_footer", "scripts_theme");
add_action("after_setup_theme", "theme_register_nav_menu"); //1 параметр = коли викликати функцію, 2 - параментр - хук, функція яка викликається (яку ми створюємо);
add_action('widgets_init', 'register_my_widgets');


function register_my_widgets()
{

    register_sidebar(array(
        'name'          => "Right Sidebar",
        'id'            => "right_sidebar",
        'description'   => 'опис сайдбару',
        //змінюємо на li на div щоб не було крапок.     
        // 'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",

    ));
}

function theme_register_nav_menu()
{
    register_nav_menu('header-menu', 'Header Menu'); //1 параметр - імя яке задаємо для виведення в wp_nav_menu, 2 - параментр - для відображеня меню Водрпресс;
    register_nav_menu('footer-menu', 'Footer Menu');
}

function style_theme() // підключаємо стилі
{
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style("defalult", get_template_directory_uri() . "/assets/css/default.css");
    wp_enqueue_style("layout", get_template_directory_uri() . "/assets/css/layout.css");
    wp_enqueue_style("media-queries", get_template_directory_uri() . "/assets/css/media-queries.css");
}

function scripts_theme() // підключаємо скрипти
{
    wp_enqueue_script("init", get_template_directory_uri() . "/assets/js/init.js"); //get_template_directory_uri() - відповідає за шлях
    wp_enqueue_script("doubletaptogo", get_template_directory_uri() . "/assets/js/doubletaptogo.js");
    wp_enqueue_script("flexslider", get_template_directory_uri() . "/assets/js/jquery.flexslider.js");
}
