<?PHP
/**
 * 实现对Smarty的封装。
 */
require_once(SMARTY_PATH . 'Smarty.class.php');

class SmartyCap extends Smarty
{
    function __construct()
    {
        parent::__construct();
        $this->left_delimiter = "{{";
        $this->right_delimiter = "}}";

        $this->config_dir = CONFIGS_PATH;
        $this->cache_dir = THEMES_PATH . 'cache/';
        $this->compile_dir = THEMES_PATH . 'temp/' . APP_TYPE . '/' . APP_NAME;
        $this->template_dir = APP_THEME_PATH;

    }
}

?>