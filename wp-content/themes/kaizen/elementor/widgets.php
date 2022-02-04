<?php

class kaizen_Elementor_Widgets
{

    protected static $instance = null;

    public static function get_instance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    protected function __construct()
    {
        require_once('TitleWidget.php');

        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
    }

    public function register_widgets()
    {
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new TitleWidget());
    }

}

// Create custom Elementor category
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');
function add_elementor_widget_categories($elements_manager)
{
    $elements_manager->add_category(
        'kaizen',
        [
            'title' => 'Kaizen',
            'icon' => 'fa fa-plug',
        ]
    );
}

// Initialize Elementor widgets
add_action('init', 'kaizen_elementor_init');
function kaizen_elementor_init()
{
    kaizen_Elementor_Widgets::get_instance();
}
