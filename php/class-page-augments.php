<?php

class Meta_Description
{
    function __construct()
    {
        add_action('wp_head', array(get_called_class(), 'add_meta_description'));
    }

    public static function add_meta_description()
    {
        if (stripos(ob_get_contents(), 'name="description"') === false) {
            Meta_Description::generate_meta();
        }
    }

    public static function generate_meta()
    {
        $explode = explode(" ", get_the_title());
        shuffle($explode);
        $shuffled = '(480) 863-0024 | ' . wp_get_document_title() . ' | #1 Top Volume Residential Solar + Storage Installer in America';
        $trunc = (strlen($shuffled) > 70) ? substr($shuffled, 0, 67) . '...' : $shuffled;
        printf('<meta name="%s" content="%s">', esc_attr('description'), esc_attr($trunc));
    }
}
new Meta_Description();

class Page_CSS
{
    private static $style = array();

    function __construct($c)
    {
        self::$style[] = $c;
        add_action('wp_head', array(get_called_class(), 'add_style'));
    }

    public static function add_style()
    {
        foreach (self::$style as $key => $value) {
            echo $value;
        }
    }
}

class Page_Scripts
{
    private static $scripts = array();

    function __construct($c)
    {
        self::$scripts[] = $c;
        add_action('wp_footer', array(get_called_class(), 'add_script'));
    }

    public static function add_script()
    {
        foreach (self::$scripts as $key => $script) {
            echo $script;
        }
    }
}
