<?php
/**
 * SliceApp.php is the class for instantiating the application.
 *
 * @author lisabruney@y...com
 * @date 3/12/15
 * @time 7:28 PM
 */

class SliceApp {
    public function __construct() {
        $files = array('Helper', 'Controller', 'Model');
        foreach($files as $file) {
            include_once('Slice'.$file.'.php');
        }
        $this->route();
    }

    public static function getConfiguration() {
        static $config = null;
        if (!$config) {
            $config = include_once('./config/main.php');
        }
        return $config;
    }

    protected function route() {
        $actionName = SliceHelper::getAction();
        $controller = new SliceController();
        $controller->setConfig(self::getConfiguration());
        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            $controller->actionIndex();
        }
    }
}

(new SliceApp());