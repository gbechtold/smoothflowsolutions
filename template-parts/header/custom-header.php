<?php
if (! defined('ABSPATH')) exit; // Exit if accessed directly

class Smooth_Flow_Custom_Header extends \Bricks\Element
{
    public $category = 'custom';
    public $name = 'smooth-flow-header';
    public $icon = 'ti-layout-header';
    public $css_selector = '.smooth-flow-header';

    public function get_label()
    {
        return esc_html__('Smooth Flow Header', 'smoothflowsolutions');
    }

    public function set_controls()
    {
        // Add any Bricks builder controls here
    }

    public function render()
    {
        return '<div class="smooth-flow-header"></div>';
    }
}
