<?php
namespace App\Controllers;

use App\Supports\Database;
use App\Utility\Image;

class TeacherController extends Database{
    use Image;

    
    public function teacherCreate($tname, $tcell, $temail, $tbirth, $age, $department, $education, $salary, $join_date, $fname,$mname, $pre_address,$per_address, $tgender){
      
        //    photo uploading  
           $photo_name=NULL;
           if($this->hasFile('tphoto')){
            $photo_name = $this->move($_FILES['tphoto'], 'student_photo/');
           }
           
            
            $this->create("INSERT INTO teachers(tname, tcell, temail, tbirth, age, department, education, salary, join_date, fname, mname, pre_address, per_address, tgender, tphoto) value ('$tname', '$tcell', '$temail', '$tbirth', '$age', '$department', '$education', '$salary', '$join_date', '$fname', '$mname', '$pre_address', '$per_address', '$tgender','$photo_name')");
        }
    
    
   
    // edit/update student data
    public function teacherUpdate($tname, $tcell, $temail, $tbirth, $age, $department,$education, $salary, $availability, $experience, $designation, $join_date, $fname, $mname, $pre_address,$per_address, $tgender, $id){
      
        // photo uploading  
        $photo_name=NULL;
        if($this->hasFile('tphoto')){
         $photo_name = $this->move($_FILES['tphoto'], 'student_photo/');
        }
        
         
         $this->update("UPDATE teachers set tname='$tname', tcell='$tcell', temail='$temail', tbirth='$tbirth', age='$age', department='$department', education='$education', salary='$salary', availability='$availability', experience='$experience', designation='$designation', join_date='$join_date', fname='$fname', mname='$mname', pre_address='$pre_address', per_address='$per_address', tgender='$tgender', tphoto='$photo_name' WHERE  id='$id'");
        
        
     }


 

    public function dataShow(){
        return $this->all('teachers');
    }
    public function teach_delete($delete_id){
        $this->delete('teachers', $delete_id);
    }
    public function singleTeacherData($id){
        return $this->find('teachers', $id);
    }
    /**
     * Eidt student data
     */
    public function editTeacherData($id){
        return $this->find('teachers', $id);
    }
   
}


?>