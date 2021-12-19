<?php
namespace App\Supports;


class Validate{

    public static function success($msg){
        return "<p style = 'color:#000;text-align:center;font-size:1rem; background-color:#f0faf0; border-radius:.5rem; padding:.4rem 5rem;'>{$msg}</p>";
        }
       
     public static function danger($msg){
        return "<p style = 'color:#fa748a;text-align:center;font-size:1rem; background-color:#fdeeee; border-radius:.5rem; padding:.4rem 5rem;'>{$msg}</p>";
        }
    public static function required($msg){
        return  "<span style = 'color:#fa748a;font-size:.8rem; font-weight:600'>{$msg}</span>"; 
                      
    }
    //Student cell number validate
    public static function cellCheck($scell){
        $length = strlen($scell);
        if (substr($scell, 0, 2) == '01' and $length > 10) {
            return true;
        } else if (substr($scell, 0, 4) == '8801' and $length > 12) {
            return  true;
        } else if (substr($scell, 0, 5) == '+8801' and $length > 13) {
            return true;
        } else {
            return  false;
        }
    }
    //Email validate
    public static function emailCheck($temail){
        if (filter_var($temail, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    public static function age($age){
        if($age>=6 && $age<=14){
            return true;
        }else{
           return false;
        }
    }
       
        
        
         
         
}





?>


