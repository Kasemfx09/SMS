<?php

use App\Controllers\StudentController;  

    include_once "vendor/autoload.php";
    
    $stu= new StudentController;

    if(isset($_GET['delete_id'])){
        $delete_id=$_GET['delete_id'];
        $stu->stu_delete($delete_id);
        header("location:students-data.php");
    }
   
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Student Data</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/students-data.css">
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
                                        <li class="inner-item"><a href="">Edit Teacher Data</a></li>
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
                                        <li class="inner-item"><a href="staffs.php">All Staffs</a></li>
                                        <li class="inner-item"><a href="add-teacher.php">Add Staff</a></li>
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
                                <div class="heading"><p>All Students List</p></div>  
                                <div class="breadcrumb-info">
                                    <p>Home > Students > All Student</p>
                                </div>
                            </div>                                  
                        
                            <!--********** Table heading **********-->
                            
                                <!--********** Data search **********-->
                                <div class="data-heading">
                                    <div class="heading-button">
                                        <ul>
                                            <a href="students-data.php">List View</a>
                                            <a href="students-grid-data.php">Grid View</a>
                                        </ul>                                        
                                    </div>  
                                    <div class="search">
                                        <form action="" method="POST">
                                            <input type="text" name="search" placeholder="Search">                                       
                                        </form> 
                                    </div>
                                </div>                          
                            <!--********** Student infomation table **********-->
                            <div class="students-content">
                                <div class="students-info">
                                    <table>
                                        <tr>
                                            <th>SL No.</th>               
                                            <th>Roll No.</th>
                                            <th>Name</th>
                                            <th>Cell</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Class</th>
                                            <th>Fees</th>                
                                            <th>Address</th>
                                            <th>Photo</th>
                                            <th colspan="3">Action</th> 
                                        </tr> 
                                        <?php 
                                        $i=1;
                                        $data=$stu->dataShow();  
                                        
                                                                         
                                        while($id = $data->fetch_object()):

                                        ?> 
                                        <tr>
                                            <td><?php echo $i; $i++?></td>                    
                                            <td><?php echo $id->roll;?></td>
                                            <td><?php echo $id->sname;?></td>
                                            <td><?php echo $id->scell;?></td>
                                            <td><?php echo $id->email;?></td>
                                            <td><?php echo $id->gender;?></td>
                                            <td><?php echo $id->age;?></td>
                                            <td><?php echo $id->class;?></td>
                                            <td><?php echo $id->fees;?></td>
                                            <td><?php echo $id->pre_address;?></td>   
                                            <td><div class="photo"><img src="student_photo/<?php echo $id->photo?>" alt="photo"></div> </td>                      
                                            <td class="view">
                                                <a class="tooltiptext" >View</a>
                                                <a href="student-single-data.php?id=<?php echo $id-> id;?>" ><i class="far fa-eye"></i></a>
                                            </td>
                                            <td class="view">
                                                <span class="tooltiptext">Edit</span>
                                                <a href="edit-student-data.php?id=<?php echo $id-> id;?>"><i class="fas fa-pen"></i></a>
                                            </td>
                                            <td class="view">
                                                <span class="tooltiptext">Delete</span>
                                                <a href="?delete_id=<?php echo $id-> id;?>" ><i class="far fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>                                     
                                    </table>
                                </div>
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