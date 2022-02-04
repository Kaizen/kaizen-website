<?php

class TitleWidget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Title';
    }

    public function get_title()
    {
        return 'Founders Title';
    }

    public function get_icon()
    {
        return 'eicon eicon-post-title';
    }

    public function get_categories()
    {
        return ['founders'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Content',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'founders-widgets'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Lorem Ipsum',
            ]
        );

        $this->add_control(
            'text',
            [
                'label' => __('Text', 'founders-widgets'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => 'Lorem Ipsum',
            ]
        );

        $this->add_control(
            'large_padding_top',
            [
                'label' => __('Large padding top', 'founders-widgets'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'input_type' => 'checkbox'
            ]
        );

        $this->add_control(
            'large_padding_bottom',
            [
                'label' => __('Large padding bottom', 'founders-widgets'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'input_type' => 'checkbox'
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        $className = 'title-widget  widget-type-text widget';

        if ($settings['large_padding_top']) {
            $className .= ' widget--large-padding-top';
        }

        if ($settings['large_padding_bottom']) {
            $className .= ' widget--large-padding-bottom';
        }

        if (empty($settings['text'])) {
            $className .= ' title-widget--empty-body';
        }

        ?>
        <section class="<?= esc_attr($className); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-md-1 col-md-10 offset-xl-0 col-xl-12">
                        <h1 class="mb-3"><?= $settings['title'] ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 offset-md-1 col-md-6 col-lg-5 offset-xl-0">
                        <div class="title-widget__text-wrapper subtitle rich-text d-block">
                            <?= $settings['text'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}