<?php
namespace App\Controllers;

use App\Supports\Database;
use App\Utility\Image;

class StudentController extends Database{
    use Image;
    public function studentCreate($roll, $sname, $scell, $email, $birth, $age, $class, $fees, $pname, $mname, $pcell, $blood_g, $hobbies, $interested,  $gender, $pre_address){
           
           //photo uploading  
       $photo_name=NULL;
       if($this->hasFile('photo')){
        $photo_name = $this->move($_FILES['photo'], 'student_photo/');
       }
      
         $this->create("INSERT INTO school_management(roll, sname, scell, email, birth, age, class, fees, pname, mname, pcell, blood_g, hobbies, interested, pre_address, gender, photo) value ('$roll', '$sname', '$scell',' $email', '$birth,', '$age', '$class', '$fees', '$pname', '$mname', '$pcell', '$blood_g','$hobbies', '$interested','$pre_address', '$gender', '$photo_name')");
     }
   
        // edit/update student data
        public function studentUpdate($roll, $admission_date, $sname, $scell, $email, $birth, $age, $class, $fees, $pname,$hobbies, $interested, $pcell, $blood_g, $gender, $per_address, $pre_address, $id){
      
            //photo editting/updating  
            $photo_name=NULL;
            if($this->hasFile('photo')){
             $photo_name = $this->move($_FILES['photo'], 'student_photo/');
            }
            
             
             $this->update("UPDATE school_management set roll='$roll', admission_date='$admission_date', sname='$sname', scell='$scell', email='$email', birth='$birth', age='$age', class='$class', fees='$fees', pname='$pname', hobbies='$hobbies', interested='$interested', pcell='$pcell', blood_g='$blood_g', gender='$gender', per_address='$per_address', pre_address='$pre_address', photo='$photo_name' WHERE id='$id'");
            
            }


    public function dataShow(){
        return $this->all('school_management');
    }
    public function stu_delete($delete_id){
        $this->delete('school_management', $delete_id);
    }
    public function singleStudentData($id){
        return $this->find('school_management', $id);
    }
    /**
     * Eidt student data
     */
    public function editStudentData($id){
        return $this->find('school_management', $id);
    }

    
    public function Old($name){
        if(isset($_POST[$name])) {
            return $_POST[$name];
         } else {
             return "";
         }
    }
   
}


?>