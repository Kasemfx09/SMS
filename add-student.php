<?php

use App\Supports\Validate;
use App\Controllers\StudentController;


// use App\Utility\Old;


require_once "vendor/autoload.php";

$stu= new StudentController;
// $old_data= new Old;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/add-student.css">
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
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-user-tie"></i>Teachers</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="teachers-data.php">All Teachers</a></li>
                                        <li class="inner-item"><a href="add-teacher.php">Add New Teacher</a></li>
                                        <li class="inner-item"><a href="teachers-grid-data.php">Teachers Prifle</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-user-graduate"></i>Students</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="students-data.php">All Students</a></li>
                                        <li class="inner-item"><a href="add-student.php">Add Students</a></li>
                                        <li class="inner-item"><a href="students-grid-data.php">Students Profile</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-users-cog"></i>Staffs</a>
                                <ul class="inner">
                                    <li class="inner-item"><a href="staffs-data.php">All Staffs</a></li>
                                    <li class="inner-item"><a href="add-staff.php">Add Staff</a></li>
                                    <li class="inner-item"><a href="">Staffs Profile</a></li>
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
                <!-- Start body content -->

<?php 
if(isset($_POST['add'])){
    $roll = $_POST['roll'];
    $sname = $_POST['sname'];
    $scell = $_POST['scell'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];
    $age = $_POST['age'];   
    $class = $_POST['class'];
    $fees = $_POST['fees'];
    $pname = $_POST['pname'];
    $mname = $_POST['mname'];
    $pcell = $_POST['pcell'];
    $blood_g = $_POST['blood_g'];
    $hobbies = $_POST['hobbies'];
    $interested = $_POST['interested'];
    $pre_address = $_POST['pre_address'];
    $gender='';

    if(isset($_POST['gender'])){
        $gender =$_POST['gender'];
   }
   

    if(empty($roll) && empty($sname) && empty($scell) && empty($email) && empty($birth) && empty($age) && empty($class) && empty($fees) && empty($pname) && empty($pcell) && empty($blood_g ) && empty($gender)){      
        $msg=Validate::danger('Please complete all required fields!');
    }elseif((int)$roll==false){
        $msg_roll=Validate::required('Required valid roll number!');    
    }elseif((string)$sname==false){
        $msg_name=Validate::required('Required your name!');    
    }elseif(Validate::cellCheck($scell)==false){
        $msg_cell=Validate::required('Required valid cell number!');    
    }elseif(Validate::emailCheck($email)==false){
        $msg_email=Validate::required('Required valid email number!');    
    }elseif($birth==false){
        $msg_birth=Validate::required('Required birth date!');    
    }elseif(Validate::age($age)==false){
        $msg_age=Validate::required('Required correct age (6 - 14 Years)!');
    }elseif($class==false){
        $msg_class=Validate::required('Required class name!');
    }elseif($fees==false){
        $msg_fees=Validate::required('Required admission fees!');
    }elseif($gender==false){
        $msg_gender=Validate::required('Please check gender field!');
    }else{
        $msg=Validate::success('Data stable');
        $stu->studentCreate($roll, $sname, $scell, $email, $birth, $age, $class, $fees, $pname, $mname, $pcell, $blood_g, $hobbies, $interested,$pre_address, $gender );
            
        }


}
?>

                <div class="item content-body">                     
                    <div class="data-container">
                        <div class="students-data"> 
                            <div class="breadcrumb">
                                <div class="heading"><p>Add Student</p></div>
                                <div class="message"><p><?php echo $msg ?? '';?></p></div> 
                                    <div class="breadcrumb-info">
                                    <p>Home > Students > Add Student</p>
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
                                                <input class="border" type="text" name="roll" placeholder="Roll Number" value="">
                                                <?php echo $msg_roll ?? '';?>
                                            </div>

                                            <div class="name update-item">
                                                <label for="">Student Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="sname" placeholder="Name" value="">
                                                <?php echo $msg_name ?? '';?>
                                            </div>

                                            <div class="cell update-item">
                                                <label for="">Cell Number <strong style="color:red;">*</strong></label>                                               
                                                <input class="border" type="text" name="scell" placeholder="Cell Number" value="">
                                                <?php echo $msg_cell ?? '';?>
                                            </div>
                                        </div>
                                        <div class="update-column-2">
                                            <div class="email update-item">
                                                <label for="">Email <strong style="color:red;">*</strong></label>                                                
                                                <input class="border" class="border" type="text" name="email" placeholder="Email" value="">
                                                <?php echo $msg_email ?? '';?>
                                            </div>
                                            <div class="birth update-item">
                                                <label for="">Date of Birth <strong style="color:red;">*</strong></label>
                                                <input type="date" name="birth" value="">
                                                <?php echo $msg_birth ?? '';?>
                                            </div>                                 

                                            <div class="age update-item">
                                                <label for="">Age <strong style="color:red;">*</strong></label>                                                
                                                <input class="border" type="text" name="age" placeholder="Age" value="">
                                                <?php echo $msg_age ?? '';?>
                                            </div>
                                        </div>
                                        <div class="update-column-3">                                        
                                            <div class="class update-item">
                                                <label for="">Class Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="class" placeholder="Class" value="">
                                                <?php echo $msg_class ?? '';?>
                                            </div>
                                            <div class="gender update-item">
                                                <label>Gender <strong style="color:red;">*</strong></label>
                                                <span class="border-gender" >
                                                    <div class="gender-fit">
                                                        <label for="male">Male</label>
                                                        <input type="radio" id="male" name="gender" value="Male">
                                                    </div>
                                                    <div class="gender-fit">
                                                        <label for="female">Female</label>
                                                        <input type="radio" id="female" name="gender" value="Female">
                                                    </div>
                                                </span>
                                                <?php echo $msg_gender ?? '';?>
                                            </div>
                                            <div class="fee update-item">
                                                <label for="">Fees</label>
                                                <input class="border" type="text" name="fees" placeholder="Fee" value="">
                                                <?php echo $msg_fees ?? '';?>
                                            </div>
                                        </div>
                                        <div class="update-column-4">
                                            <div class="parents-name update-item">
                                                <label for="">Hobbies </label>
                                                <input class="border" type="text" name="hobbies" placeholder="Hobbies" value="">
                                            </div>
                                            <div class="parents-name update-item">
                                                <label for="">Interested </label>
                                                <input class="border" type="text" name="interested" placeholder="Interested" value="">
                                            </div> 
                                            <div class="blood-roup update-item">                                          
                                                <label for="">Blood Group</label>
                                                <input class="border" type="text" name="blood_g" placeholder="Blood Group" value="">
                                            </div>                                   
                                        </div>
                                        <div class="update-column-5">
                                            <div class="parents-name update-item">
                                                <label for="">Admission Date</label>
                                                <input class="border" type="text" name="admission" placeholder="Admission Date" value="">
                                            </div>
                                                                            
                                        </div>
                                        <p class="information">Parents Information:</p>
                                        <div class="update-column-6">
                                            <div class="parents-name update-item">
                                                <label for="">Father's Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="pname" placeholder="Father's Name" value="">
                                            </div>
                                            <div class="parents-name update-item">
                                                <label for="">Mother's Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="mname" placeholder="Mother's Name" value="">
                                            </div>
                                            <div class="parents-cell update-item">                                          
                                                <label for="">Parents Cell Number <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="pcell" placeholder="Parents Cell Number" value="">
                                            </div>                                                                                  
                                        </div>
                                       
                                       
                                        <div class="address">                                            
                                            <div class="address-1">
                                                <label for="">Permenent Address<strong style="color:red;">*</strong></label>
                                                <textarea class="border" name="pre_address" id=""></textarea>
                                            </div>
                                            <!-- <div class="address-1">
                                            <label for="">Present Address</label>
                                                <textarea class="border" name="address" id=""></textarea>
                                            </div> -->
                                        </div>                                        
                                    </div> 
                                     <div class="photo">  
                                        <input type="file" name="photo" id="file_upload" style="display: none;"><br>
                                        <label for="file_upload"> <i class="fas fa-camera" id="file_upload"></i>                                        
                                        </label>
                                    </div>
                                    <div class="Update">
                                        <div class="submit">
                                            <input type="submit" name="add"  value="Add Student">
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