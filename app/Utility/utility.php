<?php
namespace App\Utility;

class Old{
   
    public static function saveData($name){
        if (isset($_POST[$name])) {
            return $_POST[$name];
        } else {
            return "";
        }
    }

}

class Test{
    public $kasem='Manik';
}


?>