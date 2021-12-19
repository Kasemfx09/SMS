<?php
namespace App\Controllers;

use App\Supports\Database;
use App\Utility\Image;

class StaffController extends Database{
    use Image;

    public function StaffCreate($st_name, $st_cell, $st_email, $st_birth, $age, $department, $education, $st_gender, $salary, $join_date, $fname, $mname, $pre_location, $per_location){
      
        //    photo uploading  
           $photo_name=NULL;
           if($this->hasFile('st_photo')){
            $photo_name = $this->move($_FILES['st_photo'], 'student_photo/');
           }
           
            
            $this->create("INSERT INTO staffs(st_name, st_cell, st_email, st_birth, age, department, education, st_gender, salary, join_date, fname, mname, pre_location, per_location, st_photo) value ('$st_name', '$st_cell', '$st_email', '$st_birth', '$age', '$department', '$education', '$st_gender', '$salary', '$join_date', '$fname', '$mname', '$pre_location', '$per_location', '$photo_name')");
        }

      
   
    // edit/update student data
    public function staffUpdate($st_name, $st_cell, $st_email, $st_birth, $age, $department, $education, $salary, $availability, $experience, $designation, $join_date, $fname, $mname, $pre_location, $per_location, $st_gender, $id){
      
        // photo uploading  
        $photo_name=NULL;
        if($this->hasFile('st_photo')){
         $photo_name = $this->move($_FILES['st_photo'], 'student_photo/');
        }
        
         
         $this->update("UPDATE staffs set st_name='$st_name', st_cell='$st_cell', st_email='$st_email', st_birth='$st_birth', age='$age', department='$department', education='$education', salary='$salary', availability='$availability', experience='$experience', designation='$designation', join_date='$join_date', fname='$fname', mname='$mname', pre_location='$pre_location', per_location='$per_location', st_gender='$st_gender', st_photo='$photo_name' WHERE id='$id'");
        
        
     }

  

    public function dataShow(){
        return $this->all('staffs');
    }
    public function staff_delete($delete_id){
        $this->delete('staffs', $delete_id);
    }
    public function singleStaffsData($id){
        return $this->find('staffs', $id);
    }
    /**
     * Eidt student data
     */
    public function editStaffData($id){
        return $this->find('staffs', $id);
    }
   
}


?>