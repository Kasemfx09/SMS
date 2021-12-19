<?php

use App\Controllers\TeacherController;

include_once "vendor/autoload.php";

$teacher= new TeacherController;
if(isset($_GET['delete_id'])){
    $delete_id=$_GET['delete_id'];
    $teacher->teach_delete($delete_id);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/grid-students-data.css">
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
                                        <li class="inner-item"><a href="">Edit Teacher</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-user-graduate"></i>Students</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="students-data.php">All Students</a></li>
                                        <li class="inner-item"><a href="add-student.php">Add Students</a></li>
                                        <li class="inner-item"><a href="edit-student-data.php">Edit Students</a></li>
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
                <!-- Start body content -->
                <div class="item content-body">                     
                    <div class="data-container">
                        <div class="students-data"> 
                            <div class="breadcrumb">
                                <div class="heading"><p>All Teachers List</p></div>  
                                <div class="breadcrumb-info">
                                    <p>Home > Teachers > All Teacher</p>
                                </div>
                            </div>                                  
                        
                            <!--********** Table heading **********-->
                            
                                <!--********** Data search **********-->
                                <div class="data-heading">
                                    <div class="heading-button">
                                        <ul>
                                            <a href="teachers-data.php">List View</a>
                                            <a href="teachers-grid-data.php">Grid View</a>
                                        </ul>                                       
                                    </div>  
                                    <div class="search">
                                        <form action="" method="POST">
                                            <input type="text" name="search" placeholder="Search">                                       
                                        </form> 
                                    </div>
                                </div>                          
                            <!--********** Student infomation table **********-->                            
                        </div>
                    </div>

                  
                    <div id="" class="student-grid-view">       
                        <div class="grid-content">
                            <?php 
                                        $i=1;
                                        $data=$teacher->dataShow();                                       
                                     
                                        while($id = $data->fetch_object()):

                                        ?> 
                            <div class="grid-info">
                                <div class="edit-delete">
                                    <i class="fas fa-ellipsis-h fas-btn"></i>  
                                    <div class="edit-delete-toggle">
                                        <a href="edit-teacher-data.php?id=<?php echo $id-> id;?>">Edit</a>
                                        <a href="?delete_id=<?php echo $id-> id;?>">Delete</a>                                  
                                    </div>                                  
                                </div> 
                             
                                                       
                                <div class="grid-photo">                               
                                    <div class="img">                                    
                                        <img src="student_photo/<?php echo $id->tphoto?>" alt="">
                                    </div>
                                    <div class="name">
                                        <h2><?php echo $id->tname?></h2>
                                    </div>
                                </div>
                                <div class="grid-info-container">
                                    
                                    <div class="class">
                                        <span> <strong>Education :</strong></span>
                                        <span><?php echo $id->education?></span>
                                    </div>
                                    <div class="designation">
                                        <span> <strong>Designation :</strong></span>
                                        <span><?php echo $id->designation?></span>
                                    </div>
                                                                        
                                    <div class="phone">
                                        <span> <strong>Phone :</strong></span>
                                        <span><?php echo $id->tcell?></span>
                                    </div>
                                    <div class="email">
                                        <span> <strong>Email :</strong></span>
                                        <span><?php echo $id->temail?></span>
                                    </div>
                                    <div class="admission-date">
                                        <span> <strong>Joining Date :</strong></span>
                                        <span><?php echo $id->join_date?></span>
                                    </div>
                                    <div class="btn">
                                        <a href="teacher-single-data.php?id=<?php echo $id-> id;?>">Read more</a>
                                    </div>
                                </div>
                              
                            </div>
                            <?php endwhile ?>
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
$(".fas-btn").click(function(){
    $(this).siblings(".edit-delete-toggle").slideToggle(400);
});

});

$(document).ready(function(){
$(".profile-photo img").click(function(){
    $(this).siblings(".toggle").slideToggle(50);
});

});

</script>

</body>

</html>