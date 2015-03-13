<?php
/**
 * SliceController.php is the class for handling user requests.
 *
 * @author lisabruney@y...com
 * @date 3/12/15
 * @time 7:19 PM
 */

class SliceController {

    private $_config;
    private $_model;

    public function __construct() {
        $this->_model = new SliceModel();
    }

    /**
     * Sets configuration data.
     *
     * @param $config
     */
    public function setConfig($config) {
        $this->_config = $config;
    }

    /**
     * Gets a configuration value.
     *
     * @param null $key, a value to retrieve
     * @return mixed
     */
    public function getConfig($key = null) {
        return isset($this->_config[$key]) ? $this->_config[$key] : $this->_config;
    }

    public function actionIndex() {
        $this->actionList();
    }

    public function actionList() {
        return $this->display('list', ['list'=>$this->_model->getList()]);
    }

    public function actionItem() {
        $id = SliceHelper::getParameterWithName('id');
        return $this->display('item', ['model'=>$this->_model->getItemById($id)]);
    }

    /**
     * Displays view to the user browser.
     *
     * @param $file, the view to display
     * @param array $args, variables to send to the view
     */
    private function display($file, array $args) {
        foreach($args as $key=>$value) {
            ${$key} = $value;
        }
        include_once('./app/views/'.$file.'.php');
    }
} 