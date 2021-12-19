<?php

use App\Controllers\StudentController;

include_once "vendor/autoload.php";  

    $stu= new StudentController;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $single_data=$stu->singleStudentData($id);        
    } 
    
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $single_data-> sname;?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/student-single-data.css">
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
                                        <li class="inner-item"><a href="">Edit Students</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item"><a class="nav-ink toggle" href=""><i class="fas fa-users-cog"></i>Staffs</a>
                                    <ul class="inner">
                                        <li class="inner-item"><a href="staffs-data.php">All Staffs</a></li>
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
                                <div class="heading"><p>Student Profile View</p></div>  
                                <div class="breadcrumb-info">
                                    <p>Home > Students > All Student > <span style="color:darkblue;"><?php echo $single_data-> sname;?></span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-student-container">
                        <div class="single-student-content">
                            <div class="single-student-info-1">
                                <div class="profile-view-photo">
                                    <img src="student_photo/<?php echo $single_data->photo?>" alt="">
                                    <h2><?php echo $single_data-> sname;?></h2>
                                </div>
                                <div class="single-student-details">
                                    <p><strong>Admission Date</strong> <span><?php echo $single_data->admission_date;?></span></p>
                                    <p><strong>Roll no.</strong> <span><?php echo $single_data-> roll;?></span></p>
                                    <p><strong>Class </strong><span><?php echo $single_data-> class;?></span></p>
                                    <p><strong>Cell </strong> <span><?php echo $single_data-> scell;?></span> </p>
                                    <p><strong>Email ID </strong><span><?php echo $single_data-> email;?></span></p>
                                    
                                    <p><strong>Gender </strong><span><?php echo $single_data-> gender;?></span></p>
                                    <p><strong>Date of Birth </strong><span><?php echo $single_data->birth;?></span></p>
                                    <p><strong>Age </strong><span><?php echo $single_data-> age;?> Years</span></p>
                                    <p><strong>Blood Group </strong><span><?php echo $single_data-> blood_g;?></span></p>
                                    <div class="fname">
                                        <div class="item"> <strong>Awards:</strong></div>                                  
                                        <div class="item"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-student-info-2">
                                <div class="heading">
                                    <p>About Student!</p>
                                </div>
                                <div class="personal-info">
                                    <h3>Perosnal Information</h3>
                                    <span class="border"></span>
                                    <div class="personal-details">
                                        <div class="fname">
                                            <div class="item"><strong>Father's Name </strong> </div>
                                            <div class="item"><strong>:</strong> </div>
                                            <div class="item"><?php echo $single_data->pname;?></div>
                                        </div>
                                        <div class="fname">
                                            <div class="item"><strong>Mother's Name </strong> </div>
                                            <div class="item"><strong>:</strong> </div>
                                            <div class="item"><?php echo $single_data->mname;?></div>
                                        </div>
                                        <div class="fname">
                                            <div class="item"><strong>Parents Cell Number </strong> </div>
                                            <div class="item"><strong>:</strong> </div>
                                            <div class="item"><?php echo $single_data-> pcell;?></div>
                                        </div>                                     
                                        <div class="fname">
                                            <div class="item"><strong>Hobbies</strong> </div>
                                            <div class="item"><strong>:</strong> </div>
                                            <div class="item"><?php echo $single_data-> hobbies;?></div>
                                        </div>
                                        <div class="fname">
                                            <div class="item"><strong>Interested</strong> </div>
                                            <div class="item"><strong>:</strong> </div>
                                            <div class="item"><?php echo $single_data->interested;?></div>
                                        </div>
                                        <div class="fname">
                                            <div class="item"><strong>Present Address</strong> </div>
                                            <div class="item"><strong>:</strong> </div>
                                            <div class="item"><?php echo $single_data->pre_address;?></div>
                                        </div>
                                        <div class="fname">
                                            <div class="item"><strong>Permenent Address</strong> </div>
                                            <div class="item"><strong>:</strong> </div>
                                            <div class="item"><?php echo $single_data->per_address;?></div>
                                        </div>
                                        <div class="details">
                                            <div class="item"><strong>Student Details :</strong></div>
                                            <div class="item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ullam eveniet dolorum? Minus iste, vitae adipisci obcaecati officiis ducimus quas illum et magni consequatur, asperiores error nisi, doloremque temporibus facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, voluptatum natus, blanditiis officiis aspernatur ea quisquam earum, sunt magni molestiae suscipit fugit quos? Quaerat expedita numquam aperiam asperiores eos autem.</div>
                                        </div>
                                    </div>
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


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var a = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
a.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$(document).ready(function(){
$(".profile-photo img").click(function(){
    $(this).siblings(".toggle").slideToggle(50);
});

});
</script>

</body>

</html>