<?php
/**
 * SliceModel.php is the class for handling business logic of the application.
 *
 * @author lisabruney@y...com
 * @date 3/12/15
 * @time 7:19 PM
 */

class SliceModel {

    const SIZE = 5;
    public $id;
    public $name;

    private $_list = [];

    public function __construct() {
        $this->buildData();
    }

    /**
     * Creates sample data.
     */
    private function buildData() {
        if (count($this->_list) <= 0) {
            for($i=1; $i <= self::SIZE; $i++) {
                $this->_list[] = array(
                    'id'=>$i,
                    'name'=>'Cake slice '.$i
                );
            }
        }
    }

    /**
     * Returns all items.
     *
     * @return array
     */
    public function getList() {

        return $this->_list;
    }

    /**
     * Returns an item by its id.
     *
     * @param $id
     * @return mixed
     */
    public function getItemById($id) {
        foreach($this->_list as $row) {
            if (array_search($id, $row) != false) {
                return $row;
            }
        }
    }
} 