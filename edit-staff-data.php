<?php

use App\Controllers\StaffController;
use App\Supports\Validate;


require_once "vendor/autoload.php";

$staffs= new StaffController;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $edit_data=$staffs->editStaffData($id);   
          
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/staff-edit-data.css">
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
                                        <li class="inner-item"><a href="">Teachers Profile</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-user-graduate"></i>Students</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="students-data.php">All Students</a></li>
                                        <li class="inner-item"><a href="add-student.php">Add Students</a></li>
                                        <li class="inner-item"><a href="">Students Profle</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-users-cog"></i>Staffs</a>
                                <ul class="inner">
                                    <li class="inner-item"><a href="staffs-data.php">All Staffs</a></li>
                                    <li class="inner-item"><a href="add-staff.php">Add Staff</a></li>
                                    <li class="inner-item"><a href="">Staff Profile</a></li>
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

    $st_name = $_POST['st_name'];
    $st_cell = $_POST['st_cell'];
    $st_email = $_POST['st_email'];  
    $st_birth = $_POST['st_birth'];  
    $age = $_POST['age'];   
    $department = $_POST['department'];   
    $education = $_POST['education'];
    $salary = $_POST['salary'];
    $availability = $_POST['availability'];
    $experience= $_POST['experience'];
    $designation = $_POST['designation'];
    $join_date = $_POST['join_date']; 
    $fname = $_POST['fname']; 
    $mname = $_POST['mname']; 
    $pre_location = $_POST['pre_location']; 
    $per_location = $_POST['per_location']; 

    $st_gender ='';
   

    if(isset($_POST['st_gender'])){
        $st_gender =$_POST['st_gender'];
   }
    
   
    
   

    if(empty($st_name) && empty($st_cell) && empty($st_email) &&empty($age) && empty($education) && empty($salary) && empty($st_gender)){      
        $msg=Validate::danger('Please complete all required fields!');
    }elseif(Validate::emailCheck($st_email)==false){
        $msg_email=Validate::required('Required valid email number!');
    
    }else{
            $msg=Validate::success('Data stable');
            $staffs->staffUpdate($st_name, $st_cell, $st_email, $st_birth, $age, $department,$education, $salary, $availability, $experience, $designation, $join_date, $fname, $mname, $pre_location, $per_location, $st_gender, $id);
          
        }


}
?>

                <div class="item content-body">                     
                    <div class="data-container">
                        <div class="students-data"> 
                            <div class="breadcrumb">
                                <div class="heading"><p>Add Staff</p></div>
                                <div class="message"><p><?php echo $msg ?? '';?></p></div> 
                                    <div class="breadcrumb-info">
                                    <p>Home > Staffs > Add New Staff</p>
                                </div>
                            </div> 
                                                    
                            <!--********** Student infomation table **********-->
                            <div class="add-students">                               
                                <form action="" method="POST" enctype="multipart/form-data" autocomplete="on">
                                    <div class="update-container">
                                        <div class="update-column-1">                                         
                                            <div class="name update-item">
                                                <label for="">Staff Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="st_name" placeholder="Staff Name" value="<?php echo $edit_data->st_name;?>">
                                            </div>

                                            <div class="cell update-item">
                                                <label for="">Cell Number <strong style="color:red;">*</strong></label>                                               
                                                <input class="border" type="text" name="st_cell" placeholder="Cell Number" value="<?php echo $edit_data->st_cell;?>">
                                                <?php echo $msg_cell ?? '';?>
                                            </div>
                                            <div class="email update-item">
                                                <label for="">Email <strong style="color:red;">*</strong></label>                                                
                                                <input class="border" class="border" type="text" name="st_email" placeholder="Email" value="<?php echo $edit_data->st_email;?>">
                                                <?php echo $msg_email ?? '';?>
                                            </div>
                                        </div>
                                        <div class="update-column-2">                                           
                                            <div class="birth update-item">
                                                <label for="">Date of Birth</label>
                                                <input class="border" type="text" name="st_birth" placeholder="DD/MM/YYYY" value="<?php echo $edit_data->st_birth;?>">
                                            </div>                             

                                            <div class="age update-item">
                                                <label for="">Age <strong style="color:red;">*</strong></label>                                                
                                                <input class="border" type="text" name="age" placeholder="Age" value="<?php echo $edit_data->age;?>">
                                                <?php echo $msg_age ?? '';?>
                                            </div>
                                            <div class="department update-item">
                                                <label for="department">Department <strong style="color:red;">*</strong></label>
                                                <select class="border" name="department" id="cars">
                                                    <option value="">Select Subject/Department</option>
                                                    <option value="Bengali">Bengali</option>
                                                    <option value="English">English</option>
                                                    <option value="Accounting">Accounting</option>
                                                    <option value="Management">Management</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Math">Math</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="update-column-3">                                        
                                            <div class="class update-item">
                                                <label for="">Education <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="education" placeholder="Education" value="<?php echo $edit_data->education;?>">
                                            </div>
                                            <div class="gender update-item">
                                                <label>Gender <strong style="color:red;">*</strong></label>
                                                <span class="border-gender" >
                                                    <div class="gender-fit">
                                                        <label for="male">Male</label>
                                                        <input type="radio" id="male" name="st_gender" value="Male"<?php echo ($edit_data->st_gender=='Male')? 'checked' : '';?>>
                                                    </div>
                                                    <div class="gender-fit">
                                                        <label for="female">Female</label>
                                                        <input type="radio" id="female" name="st_gender" value="Female"<?php echo ($edit_data->st_gender=='Female')? 'checked' : '';?>>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="fee update-item">
                                                <label for="">Salary</label>
                                                <input class="border" type="text" name="salary" placeholder="Salary" value="<?php echo $edit_data->salary;?>">
                                            </div>
                                        </div>
                                        <div class="update-column-4">
                                            <div class="availability update-item">
                                                <label for="">Availability <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="availability" placeholder="Full Time/Part Time" value="<?php echo $edit_data->availability;?>">
                                            </div>
                                            <div class="Experience update-item">
                                                <label for="">Experience<strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="experience" placeholder="Experience" value="<?php echo $edit_data->experience;?>">
                                            </div>
                                            <div class="designation update-item">
                                                <label for="">Designation <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="designation" placeholder="Designation" value="<?php echo $edit_data->designation;?>">
                                            </div>                                           
                                                                                  
                                        </div>
                                        <div class="update-column-5">
                                            <div class="joining_date update-item">
                                                <label for="">Joining Date <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="join_date" placeholder="DD/MM/YYYY" value="<?php echo $edit_data->join_date;?>">
                                            </div>
                                            <div class="parents-name update-item">
                                                <label for="">Father's Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="fname" placeholder="Father's Name" value="<?php echo $edit_data->fname;?>">
                                            </div>
                                            <div class="parents-name update-item">
                                                <label for="">Mother's Name <strong style="color:red;">*</strong></label>
                                                <input class="border" type="text" name="mname" placeholder="Mother's Name" value="<?php echo $edit_data->mname;?>">
                                            </div>                                           
                                                                                  
                                        </div>                                       
                                        <div class="address">                                        
                                            <div class="present-address">
                                            <label for="">Present Address <strong style="color:red;">*</strong></label>
                                                <textarea class="border" name="pre_location" id=""><?php echo $edit_data->pre_location;?></textarea>
                                            </div>
                                            <div class="permenent_address">
                                            <label for="">Permenent Address</label>
                                                <textarea class="border" name="per_location" id=""><?php echo $edit_data->per_location;?></textarea>
                                            </div>
                                        </div>                                        
                                    </div> 
                                     <div class="photo"> 
                                        <img src="student_photo/<?php echo $edit_data->st_photo?>" alt=""> 
                                        <input type="file" name="st_photo" id="file_upload" style="display: none;"><br>
                                        <label for="file_upload"> <i class="fas fa-camera" id="file_upload"></i>                                        
                                        </label>
                                    </div>
                                    <div class="Update">
                                        <div class="submit">
                                            <input type="submit" name="add"  value="Add Student">
                                        </div>
                                        <div class="cancel">
                                            <a href="staffs-data.php">Cancel</a>
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