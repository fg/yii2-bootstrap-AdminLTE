<?php

namespace cszchen\alte;

use yii\base\Component;

class AdminLTE extends Component
{
    CONST LAYOUT_WRAPPER = 'wrapper';
    
    CONST LAYOUT_MAIN_HEADER = 'main-header';
    
    CONST LAYOUT_SIDEBAR_WRAPPER = 'sidebar-wrapper';
    
    CONST LAYOUT_CONTENT_WRAPPER = 'content-wrapper';
    
    CONST OPTION_FIXED = 'fixed';
    
    CONST OPTION_SIDEBAR_COLLAPSE = 'sidebar-collapse';
    
    CONST OPTION_LAYOUT_BOXED = 'layout-boxed';
    
    CONST OPTION_LAYOUT_TOP_NAV = 'layout-top-nav';
    
    static $layout = self::LAYOUT_CONTENT_WRAPPER;
    
    static $layoutOption = null;
    
    static $skin = '';
    
    static $sidebarMini = false;
    
    public static function register($view)
    {
        AlteAsset::register($view);
    }
    
    public static function setLayout($layout, $option = null)
    {
        self::$layout = $layout;
        self::$layoutOption = $option;
    }
    
    public static function setSkin($skin)
    {
        self::$skin = $skin;
    }
    
    public static function getLayoutCssClass()
    {
        return self::$layout;
    }
    
    public static function getOptionCssClass()
    {
        return self::$layoutOption . ' ' . self::$skin . (self::$sidebarMini ? ' sidebar-mini': '');
    }
    
    public static function setSidebarMini($open)
    {
        self::$sidebarMini = $open;
    }
}
