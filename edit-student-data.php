<?php 
use App\Controllers\StudentController;
use App\Supports\Validate;
include_once "vendor/autoload.php";  

    $stu= new StudentController;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $edit_data=$stu->editStudentData($id);   
              
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $edit_data->sname ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/edit-student-data.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<section id="header-container">
    <div class="header-content">
        <div class="header-menu">
            <div class="header-item header-info-1">
                <div class="header-logo">                   
                    <img src="assets/media/img/education.png" alt="" srcset="">
                </div>
                <div class="header-name">
                    <h2>TOPEDGE</h2>
                </div>
            </div>
            <div class="header-item header-info-2">
                <div class="header-content-info">
                    <div class="toggle-search">
                        <div class="toggler">
                            <i class="fas fa-angle-left"></i>
                        </div>
                        <div class="search">
                            <form action="" method="post">
                                <input type="text" placeholder="Search">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                    </div> 
                    <div class="header-info-right">
                        <div class="profile-content">
                            <div class="profile-notify">
                                <i class="far fa-bell"></i>
                            </div>
                            <div class="profile-photo">
                                <img src="assets/media/img/boy4.jpg" alt="">
                                <div class="toggle">
                                    <span><a href="">Profile</a></span>                                                                
                                    <span><a href="">Inbox</a></span>                                                                
                                    <span><a href="#">Logout</a></span>                                                                
                                </div>
                            </div>                           
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
        
        <!-- menu -->
        <div class="nav-content-body">
            <div class="nav-content-body-container">
                <!-- Start menu -->
                <div class="item menu">
                    <div class="menu-heading">
                        <h2>MAIN MENU</h2>
                    </div>
                    <div class="menu-nav">
                        <div class="navbar">
                            <ul class="navbar-nav">                                                  
                                <li class="nav-item "><a class="nav-ink toggle " href=""><i class="fas fa-house-user "></i>Dashboard</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="index.php">Dashboard-1</a></li>
                                        <li class="inner-item"><a href="">Dashboard-2</a></li>
                                        <li class="inner-item"><a href="">Dashboard-3</a></li>
                                    </ul>                            
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-calendar-day"></i>Even Management</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="">Yearly</a></li>                                   
                                    </ul> 
                            
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-user-tie"></i>Professors</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="index.php">All Teachers</a></li>
                                        <li class="inner-item"><a href="add-teacher.phph">Add New Teachers</a></li>
                                        <li class="inner-item"><a href="teachers-grid-data.php">Teachers Profile</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-user-graduate"></i>Students</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="students-data.php">All Students</a></li>
                                        <li class="inner-item"><a href="add-student.php">Add Students</a></li>
                                        <li class="inner-item"><a href="">Edit Students</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-users-cog"></i>Staffs</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="staffs-data.php">All Staffs</a></li>
                                        <li class="inner-item"><a href="add-staff.php">Add Staff</a></li>
                                        <li class="inner-item"><a href="">Edit Staff</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-book"></i>Courses</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="">All Courses</a></li>
                                        <li class="inner-item"><a href="">Add Course</a></li>
                                        <li class="inner-item"><a href="">New Course</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-book-reader"></i>Library</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="">All.....</a></li>
                                        <li class="inner-item"><a href="">Dashboard-1</a></li>
                                        <li class="inner-item"><a href="">Dashboard-1</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-layer-group"></i>Departments</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="">All Department</a></li>
                                        <li class="inner-item"><a href="">Add Department</a></li>                                 
                                    </ul> 
                                </li>
                               
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-dollar-sign"></i>Fees</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="">Total Fees</a></li>
                                        <li class="inner-item"><a href="">Add Fees</a></li>
                                        <li class="inner-item"><a href="">Fees Receipt</a></li>
                                    </ul> 
                                </li>
                             
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-gift"></i>Holidays</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="">Holiday Calender</a></li>
                                        <li class="inner-item"><a href="">All Holiday</a></li>
                                        <li class="inner-item"><a href="">Add Holiday</a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End menu -->
                <?php 
if(isset($_POST['add'])){
    $roll = $_POST['roll'];
    $admission_date = $_POST['admission_date'];
    $sname = $_POST['sname'];
    $scell = $_POST['scell'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];
    $age = $_POST['age'];   
    $class = $_POST['class'];
    $fees = $_POST['fees'];
    $pname = $_POST['pname'];
    $mname = $_POST['mname'];
    $hobbies = $_POST['hobbies'];
    $interested = $_POST['interested'];
    $pcell = $_POST['pcell'];
    $blood_g = $_POST['blood_g'];
    $per_address = $_POST['per_address'];   
    $pre_address = $_POST['pre_address'];   
    $gender ='';
    
    if(isset($_POST['gender'])){
        $gender =$_POST['gender'];
   }
//    $update_at = date('Y-m-d h:m:s');
//    $admission_date = date('d-m-Y', strtotime($_POST['admission']));

    if(empty($roll) && empty($sname) && empty($scell) && empty($email) && empty($birth) && empty($age) && empty($class) && empty($fees) && empty($pname) && empty($pcell) && empty($blood_g ) && empty($gender)){      
        $msg=Validate::danger('Please complete all required fields!');
    }elseif((int)$roll==false){
        $msg_roll=Validate::required('Required valid roll number!');
    
    }elseif(Validate::cellCheck($scell)==false){
        $msg_cell=Validate::required('Required valid cell number!');
    
    }elseif(Validate::emailCheck($email)==false){
        $msg_email=Validate::required('Required valid email number!');
    
    }elseif(Validate::age($age)==false){
        $msg_age=Validate::required('Required correct age (6 - 14 Years)!');
    
    }else{
       
            $msg=Validate::success('Data stable');
            $stu->studentUpdate($roll, $admission_date, $sname, $scell, $email, $birth, $age, $class, $fees, $pname,$hobbies, $interested, $pcell, $blood_g, $gender, $per_address, $pre_address, $id);
          
                      
        }


}
?>

                <!-- Start body content -->
                <div class="item content-body">                     
                    <div class="data-container">
                        <div class="students-data"> 
                            <div class="breadcrumb">
                                <div class="heading"><p>Edit Student</p></div>  
                                <div class="breadcrumb-info">
                                    <p>Home > Students > Edit Student ><span style="color:darkblue;"> <?php echo $edit_data->sname;?></span></p>
                                </div>
                            </div> 
                                                    
                            <!--********** Student infomation table **********-->
                            <div class="add-students">                               
                            <form action="" method="POST" enctype="multipart/form-data" autocomplete="on">
                                    <div class="update-container">
                                    <p class="information">Student Information:</p>
                                        <div class="update-column-1">
                                            <div class="roll update-item">
                                                <label for="">Roll Number <strong style="color:red;">*</strong></label>                                                
                                                <input class="border" type="text" name="roll" placeholder="Roll Number" value="<?php echo $edit_data->roll;?>">
                                            </div>

                                            <div class="name update-item">
                                                <label for="">Student Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="sname" placeholder="Name" value="<?php echo $edit_data->sname;?>">
                                            </div>

                                            <div class="cell update-item">
                                                <label for="">Cell Number <strong style="color:red;">*</strong></label>                                               
                                                <input class="border" type="text" name="scell" placeholder="Cell Number" value="<?php echo $edit_data->scell;?>">
                                            </div>
                                        </div>
                                        <div class="update-column-2">
                                            <div class="email update-item">
                                                <label for="">Email <strong style="color:red;">*</strong></label>                                                
                                                <input class="border" class="border" type="text" name="email" placeholder="Email" value="<?php echo $edit_data->email;?>">                                                
                                            </div>
                                            <div class="birth update-item">
                                                <label for="">Date of Birth</label>
                                                <input type="date" name="birth" value="<?php echo $edit_data->birth;?>">
                                            </div>                                 

                                            <div class="age update-item">
                                                <label for="">Age <strong style="color:red;">*</strong></label>                                                
                                                <input class="border" type="text" name="age" placeholder="Age" value="<?php echo $edit_data->age;?>">                                               
                                            </div>
                                        </div>
                                        <div class="update-column-3">                                        
                                            <div class="class update-item">
                                                <label for="">Class Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="class" placeholder="Class" value="<?php echo $edit_data->class;?>">
                                            </div>
                                            <div class="gender update-item">
                                                <label>Gender <strong style="color:red;">*</strong></label>
                                                <span class="border-gender" >
                                                    <div class="gender-fit">
                                                        <label for="male">Male</label>
                                                        <input type="radio" id="male" name="gender" value="Male" <?php echo ($edit_data->gender=='Male')? 'checked' : '';?> >
                                                    </div>
                                                    <div class="gender-fit">
                                                        <label for="female">Female</label>
                                                        <input type="radio" id="female" name="gender" value="Female" <?php echo ($edit_data->gender=='Female')? 'checked' : '';?>>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="fee update-item">
                                                <label for="">Fees</label>
                                                <input class="border" type="text" name="fees" placeholder="Fee" value="<?php echo $edit_data->fees;?>">
                                            </div>
                                        </div>
                                        <div class="update-column-4">
                                            <div class="parents-name update-item">
                                                <label for="">Hobbies </label>
                                                <input class="border" type="text" name="hobbies" placeholder="Hobbies" value="<?php echo $edit_data->hobbies;?>">
                                            </div>
                                            <div class="parents-name update-item">
                                                <label for="">Interested </label>
                                                <input class="border" type="text" name="interested" placeholder="Interested" value="<?php echo $edit_data->interested;?>">
                                            </div> 
                                            <div class="blood-roup update-item">                                          
                                                <label for="">Blood Group</label>
                                                <input class="border" type="text" name="blood_g" placeholder="Blood Group" value="<?php echo $edit_data->blood_g;?>">
                                            </div>                                   
                                        </div>
                                        <div class="update-column-5">
                                            <div class="parents-name update-item">
                                                <label for="">Admission Date</label>
                                                <input class="border" type="text" name="admission_date" placeholder="DD/MM/YYYY" value="<?php echo $edit_data->admission_date;?>">
                                            </div>
                                                                           
                                        </div>
                                        <p class="information">Parents Information:</p>
                                        <div class="update-column-5">
                                            <div class="parents-name update-item">
                                                <label for="">Father's Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="pname" placeholder="Father's Name" value="<?php echo $edit_data->pname;?>">
                                            </div>
                                            <div class="parents-name update-item">
                                                <label for="">Mother's Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="mname" placeholder="Mother's Name" value="<?php echo $edit_data->mname;?>">
                                            </div>
                                            <div class="parents-cell update-item">                                          
                                                <label for="">Parents Cell Number <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="pcell" placeholder="Parents Cell Number" value="<?php echo $edit_data->pcell;?>">
                                            </div>                                                                                  
                                        </div>
                                        <div class="address">
                                        <div class="address-1">
                                                <label for="">Present Address <strong style="color:red;">*</strong></label>
                                                <textarea class="border" name="pre_address" id=""><?php echo $edit_data->pre_address;?></textarea>
                                            </div>                                          
                                            <div class="address-1">
                                                <label for="">Permenent Address</label>
                                                <textarea type="text" class="border" name="per_address" id=""><?php echo $edit_data->per_address;?></textarea>
                                            </div>                                           
                                        </div>                                        
                                    </div> 
                                     <div class="photo"> 
                                         <img src="student_photo/<?php echo $edit_data->photo?>" alt=""> 
                                        <input type="file" name="photo" id="file_upload" style="display: none;"><br>
                                        <label for="file_upload"> <i class="fas fa-camera" id="file_upload"></i>                                        
                                        </label>
                                    </div>
                                    <div class="Update">
                                        <div class="submit">
                                            <input type="submit" name="add"  value="Update">
                                        </div>
                                        <div class="cancel">
                                            <a href="students-data.php">Cancel</a>
                                        </div>                                          
                                                     
                                    </div>                            
                                </form>                                  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End body content -->
            </div>
        </div> 
    </div>
</section>






<script src="assets/js/myscript.js"></script>
<script src="assets/js/jquery-3.6.min.js"></script>

    <script>
    $('.toggle').click(function(e) {
    e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});
// icon rotated

// $('.toggle').on('click', function() {
//     if ($(this).hasClass('rotate-90')) {
//         $(this).removeClass('rotate-90');
        
//     } else {
//       $(this).addClass('rotate-90');
 
//     }
//   });

$(document).ready(function(){
$(".profile-photo img").click(function(){
    $(this).siblings(".toggle").slideToggle(50);
});

});
</script>

</body>

</html>