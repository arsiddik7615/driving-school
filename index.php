
<?php 

include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>


<!-- header section start     -->

    <header class="header">
            <div class="container-fluid">
                <div class="row">    
                <div class="top_heading">
                    <div class="heading_info">
                        <span><i class="fa-regular fa-message"></i> Quick.Help@gmail.com</span>
                        <span><i class="fa-regular fa-clock"></i> Driving Time  9:AM - 5:PM</span>
                    </div>
                    
                        <div class="social_media">
                            <span>Follow</span>
                            <span>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </span>
                            <span>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </span>
                        </div>
                </div>
                </div>
            </div>
            <div class="container-fluid">  
                    <div class="row">
                        <div class="col-xl-2 logo">
                            
                        <?php 

                        $sql="select*from logo";
                        $result=$connection->query($sql);
                        $row=mysqli_fetch_array($result);
                        ?>
                                <img src="uploads/<?php echo $row['logo_img'];?>">
                        </div>

                        <div class="col-xl-10">
                            <div class="nav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="service.php">Services</a></li>
                                    <li><a href="course.php">Course</a></li>
                                    <li><a href="instructor.php">Instructor</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><span class="search"><i class="fa-solid fa-magnifying-glass"></i></span></li>
                                    <li><span class="menu_bar"><i class="fa-solid fa-bars"></i></span></li>
                                    <button type="button" class="btn header_button ">Get Consulting <i class="fa-solid fa-arrow-right"></i></button>

                                </ul>
                            </div> 
                        </div>
                        </div>
                    
                        
            </div>
                
            
    </header>

<!-- header section end   -->



<!-- Banner section start     -->

<section class="banner">
    <div class="banner_img">
        <img src="./image/banner.png">

    </div>
    <div class="banner_content">
        <div class="container-fluid">
            <div class="row">
                <?php 
                $sql="select*from service";
                $result=$connection->query($sql);
                while($row=$result->fetch_assoc()){
                    ?>
                       <div class="col-xl-3">
                    <div class="d-flex position-relative">
                        <div class="banner_content1">
                            <i class="fa-solid fa-car"></i>
                        <div class="banner_content_description">
                            
                          <h5 class="mt-0"><?php echo $row['title'];?></h5>
                          <p><?php echo $row['content'];?></p>
                          <a href="#" class="stretched-link">Read More</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>
             
            
        </div>
        </div>
    </div>
</section>

<!-- Banner section end     -->




<!-- About section start     -->

<section class="about">
<?php 

$sql="select*from about_compani";
$result=$connection->query($sql);
$row=mysqli_fetch_array($result);
?>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about_img">
                    <img src="uploads/<?php echo $row['image'];?>" alt="">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about_content1">
                    <p><span class="circle">1</span>About Company</p>
                    
                    <h3><?php echo $row['title'];?><br>
                       </h3>
                        <p><?php echo $row['content'];?> </p>
                </div>
                <div class="row about_content2">                   
                    <div class="col-xl-6">
                        <div class="facility1">
                            <img src="./image/facility1.png" alt="">
                            <h6><?php echo $row['facility_1'];?></h6>
                                <div class="about_margin"></div>
                        </div>
                        
                    </div>
                    <div class="col-xl-6">
                        <div class="facility2">
                            <img src="./image/facility2.png" alt="">
                            <h6><?php echo $row['facility_2'];?></h6>
                        </div>
                    </div>
                </div>
                <div class="row about_content3">
                    <div class="col-xl-6">
                        <div class="about_button">
                            <button type="button" class="btn ">Read More<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about_ceo">
                        <?php 

                        $sql="select*from founder";
                        $result=$connection->query($sql);
                        $row=mysqli_fetch_array($result);
                        ?>
                            <img src="uploads/<?php echo $row['image'];?>" alt="">
                            <div>
                                <h4><?php echo $row['name'];?></h4>
                                <h6><?php echo $row['title'];?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 

                        $sql="select*from founded";
                        $result=$connection->query($sql);
                        $row=mysqli_fetch_array($result);
                        ?>
        <div class="row found_exp">
            <div class="col-xl-5">
                <div class="founded">
                    <h3><?php echo $row['title'];?></h3>
                    <p><?php echo $row['content'];?></p>
                    <button type="button" class="btn">Read More<i class="fa-solid fa-arrow-right"></i></button>       
                </div>
                
            </div>
            <div class="col-xl-1 exp_margin_head">
                <div class="exp_margin">
                        
                </div>
                
            </div>
            <div class="col-xl-6">
                
                <div class="experience">
                    <div>
                        <h2><?php echo $row['counter'];?>+</h2>
                    <h5><?php echo $row['heading'];?></h5>
                    </div>
                    <img src="uploads/<?php echo $row['image'];?>" alt="">
                </div>
                
                
            </div>
        </div>

    </div>
</section>

<!-- About section end    -->



<!-- Service section start     -->

<section class="container-fluid service">
    <div class="container ">
        <div class="service_item">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="service_heading">
                        <p><span class="circle">1</span>Our Course</p>
                        <h3>Course to drive with certainty</h3>      
                     </div>
                </div>
            </div>
            <div class="row">
            <?php 
                $sql="select*from course";
                $result=$connection->query($sql);
                while($row=$result->fetch_assoc()){
                    ?>
                <div class="col-xl-4 ">
                    <div class="service1">
                        <div class="card">
                            <img src="uploads/<?php echo $row['image'];?>">
                          
                            <div class="card-body">
                               <div class="service_content">
                                <h5 class="card-title"><?php echo $row['title'];?></h5>
                              <p class="card-text"><?php echo $row['content'];?></p>
                               </div>
                                <div class="service_session">
                                <hr>
                                    <div class="row">
                                        <div class="col-xl-6 ssborder">
                                            <h5>Theory Session</h5>
                                            <p><?php echo $row['t_duration'];?> Hours</p>
                                        </div>
                                    
                                        <div class="col-xl-6">
                                            <h5>Practical Session</h5>
                                            <p><?php echo $row['p_duration'];?> Hours</p>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            <a href="course.html" class=" view_course_button">View Course</a>
                        </div>
                    </div>
                </div>
               
                <?php } ?>
            </div>
        </div>
        
    </div>
    
    
</section>

<!-- Service section end     -->




<!-- Driving Skill section Start     -->

<section class="driving_skill">
    <div class="container-fluid">
        <div class="">
            <div class="row ">
            <?php 

$sql="select*from skill";
$result=$connection->query($sql);
$row=mysqli_fetch_array($result);
?>
                <div class="col-xl-4">
                    <div class="driving_skill_img">
                    <img src="uploads/<?php echo $row['image'];?>">
        
                    </div>
                </div>
                <div class="col-xl-5 driving_skill_content">
                    <div class="number1"><h6>1</h6> <p>Develop Driving Skill</p> </div>
                    <h2><?php echo $row['title'];?></h2>
                        <p><?php echo $row['content'];?></p>
                        <div class="driving_skill_email">
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                          </div>
                        </div>
                    <div class="driving_skill_btn">
                        <button type="button" class="btn driving_skill_button ">Send Request <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-xl-3 student_list">
               

                    
                    <ul>
                    <?php 
                    $sql="select*from success";
                    $result=$connection->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
                        <li><h3><?php echo $row['count'];?>K</h3><p><?php echo $row['title'];?></p></li>
                        <?php } ?>
                    </ul>
                    
                </div>
            </div>
        </div>
        
    </div>
   
</section>

<!-- Driving Skill section end     -->




<!-- Driving Brands section start     -->

<section class="driving_brands">
    <div class="container">
        <div class="row ">
        <?php 
                    $sql="select*from partner";
                    $result=$connection->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
            <div class="col-xl-3">
                <div class="driving_brands">
                <img src="uploads/<?php echo $row['logo'];?>" alt="">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Driving Brands section end     -->



<!-- It work section start     -->

<section class="it_work">
<?php 

$sql="select*from process";
$result=$connection->query($sql);
$row=mysqli_fetch_array($result);
?>
    
    <div class="container">
        <div class="row">
            <div class="col-xl-6 it_work1">
                <p><span class="circle">1</span>How IT Works </p>
                <h3><?php echo $row['title'];?>
                   </h3>
               <p>
               <?php echo $row['content'];?>
              </p>
                <div class="quick_help">
                    <div class="row">
                        <div class="col-xl-2 call_icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="col-xl-10">
                            <h6>Quick help</h6>
                            <h6>+880<?php echo $row['mobile'];?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 it_work2">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row it_work_content">
                            <div class="col-xl-2 number3">
                               1
                            </div>
                            <div class="col-xl-10">
                                <h5><?php echo $row['plan_title'];?></h5>
                                <p><?php echo $row['plan_content'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 it_work_img">
                        <img src="./image/Line.png" alt="">
                    </div>
                </div>
                <div class="row it_work_middle">
                    <div class="col-xl-3 it_work_img">
                        <img src="./image/Line1.png" alt="">
                    </div>
                    <div class="col-xl-9">
                        <div class="row it_work_content">
                            <div class="col-xl-2 number3">
                               1
                            </div>
                            <div class="col-xl-10">
                                <h5><?php echo $row['buy_title'];?></h5>
                                <p><?php echo $row['buy_content'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row it_work_content">
                            <div class="col-xl-2 number3">
                               1
                            </div>
                            <div class="col-xl-10">
                                <h5><?php echo $row['select_title'];?></h5>
                                <p><?php echo $row['select_content'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- It work section end     -->




<!-- Testimonial section start     -->

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="testimonial_heading">
                    <p><span class="circle">1</span>Testimonial </p>
                <h2>What our Beloved <br>
                    Client says</h2>
               
                <h6>40K+ Active Our Comminity</h6>
                </div>
            </div>
            <div class="col-xl-7">

            <!-- Set up your HTML -->
                <div class="owl-carousel">
                <div class="row testimonial_content">
                        <div class="col-xl-4 testimonial_content_img">
                            <img src="./image/testimonial.png" alt="">
                        </div>
                        <div class="col-xl-8 testimonial_contents">
                            <p>Aliquam mollis nibh quis ante congue, in  tempor turpis vestibulum. Nullam euismod nisi vitae tortor vestibulum, quis rutrum ante molestie. Ut maximus </p>
                            <h3>David Harbour</h3>
                            <h6>Founder CEO</h6>
                        </div>
                    
                </div>
                <div class="row testimonial_content">
                        <div class="col-xl-4 testimonial_content_img">
                            <img src="./image/testimonial.png" alt="">
                        </div>
                        <div class="col-xl-8 testimonial_contents">
                            <p>Aliquam mollis nibh quis ante congue, in  tempor turpis vestibulum. Nullam euismod nisi vitae tortor vestibulum, quis rutrum ante molestie. Ut maximus </p>
                            <h3>David Harbour</h3>
                            <h6>Founder CEO</h6>
                        </div>
                    
                </div>
                <div class="row testimonial_content">
                        <div class="col-xl-4 testimonial_content_img">
                            <img src="./image/testimonial.png" alt="">
                        </div>
                        <div class="col-xl-8 testimonial_contents">
                            <p>Aliquam mollis nibh quis ante congue, in  tempor turpis vestibulum. Nullam euismod nisi vitae tortor vestibulum, quis rutrum ante molestie. Ut maximus </p>
                            <h3>David Harbour</h3>
                            <h6>Founder CEO</h6>
                        </div>
                    
                </div>
                <div class="row testimonial_content">
                        <div class="col-xl-4 testimonial_content_img">
                            <img src="./image/testimonial.png" alt="">
                        </div>
                        <div class="col-xl-8 testimonial_contents">
                            <p>Aliquam mollis nibh quis ante congue, in  tempor turpis vestibulum. Nullam euismod nisi vitae tortor vestibulum, quis rutrum ante molestie. Ut maximus </p>
                            <h3>David Harbour</h3>
                            <h6>Founder CEO</h6>
                        </div>
                    
                </div>
                <div class="row testimonial_content">
                        <div class="col-xl-4 testimonial_content_img">
                            <img src="./image/testimonial.png" alt="">
                        </div>
                        <div class="col-xl-8 testimonial_contents">
                            <p>Aliquam mollis nibh quis ante congue, in  tempor turpis vestibulum. Nullam euismod nisi vitae tortor vestibulum, quis rutrum ante molestie. Ut maximus </p>
                            <h3>David Harbour</h3>
                            <h6>Founder CEO</h6>
                        </div>
                    
                </div>
     
                </div>
           
            </div>
        </div>
    </div>
</section>

<!-- Testimonial section end     -->




<!-- Blog section start     -->

<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 blog_heading">
                <p><span class="circle">1</span>About Company</p>
                <h2>Our Latest Blog & News</h2>
            </div>
        </div>
        <div class="row blog_items">

        <?php 
                    $sql="select*from blog";
                    $result=$connection->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
          
            <div class="col-xl-4">
                <div class="blog2">
                    
                        <img src="uploads/<?php echo $row['image'];?>" alt="">
                    
                    <div class="blog2_content">
                        <h3><?php echo $row['title'];?></h3>
                        
                       <a href="blog_details.php?id=<?php echo $row['id'];?>">Read More<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>

            <?php } ?>
           
    </div>

    
</section>

<!-- Blog section end     -->




<!-- Community section start     -->

<section class="community">
    <div class="container-fluid community_cover">
        <div class="row">
            <div class="col-xl-6 offset-xl-1 community_content">
                <h3>Become an expert on vehicles <br>
                    And Their mechanics </h3> 
            </div>
            <div class="col-xl-2 offset-xl-1 community_button  ">
                <button type="button" class="btn">Join Our Communiyt <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </div>

</section>

<!-- Community section end     -->




<!-- Footer section start     -->

<footer class="footer">
    <div class="container-fluid">
            <div class="container">
                <div class="row footer_info">
                    <div class="col-xl-4">
                        <img src="./image/footerlogo.png" alt="">
                        <p>Sed ut perspiciatis unde omnis iste natusit voluptatem accusantium doloremque lauda ntiume totam rem aperiam eaque quaeillo </p>
                        <div class="footer_social_media">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></a></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <h4>Our Services</h4>
                        <ul class="services_list">
                            <li><a href="#">Driving License</a></li>
                            <li><a href="#">Driving License</a></li>
                            <li><a href="#">Driving License</a></li>
                            <li><a href="#">Driving License</a></li>
                            <li><a href="#">Driving License</a></li>
                            <li><a href="#">Driving License</a></li>
                            <li><a href="#">Driving License</a></li>
                           
                            
                        </ul>
                    </div>
                    <div class="col-xl-2">
                        <h4>Important <br> Link</h4>
                        <ul class="services_list">
                            <li><a href="">About Us</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">About Us</a></li>
                            
                       
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <h4>Subscribe <br> Our</h4>
                        <div class="driving_skill_email">
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                          </div>
                        </div>
                        <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                            <div class="location_content">
                                <h6>Office Address</h6>
                                <p>8M6X+W8H West Augusta <br>
                                    Virginia, USA</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <hr>
                <div class="row">
                    <ul class="footer_page">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li class=""><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
    </div>
    
</footer>

<!-- Footer section end     -->


















<script src="./js/jquery.js">  </script>
<script src="./js/bootstrap.bundle.min.js">  </script>
<script src="./js/owl.carousel.min.js">  </script>

<script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
})

    </script>
</body>
</html>