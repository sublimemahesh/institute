<?php

/**
 * Description of Product
 *
 * @author sublime holdings
 * @web www.sublime.lk
 */
class HomeWork {

    //put your code here
    public $id;
    public $student_id;
    public $class_id;
    public $title;
    public $image_name;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `home_work` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->student_id = $result['student_id'];
            $this->class_id = $result['class_id']; 
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `home_work` (`student_id`,`class_id`,`title`, `image_name`) VALUES  ('"
                . $this->student_id . "', '"
                . $this->class_id . "', '"                
                . $this->title . "','"
                . $this->image_name . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `home_work` ORDER BY `class_id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = 'UPDATE `home_work` SET `class_id`= "' . $this->class_id . '" WHERE id="' . $this->id . '"';

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `home_work` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getHomeWorkByStudent($id) {

        $query = "SELECT * FROM `home_work` WHERE `student_id` = '" . $id . "'  ";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
