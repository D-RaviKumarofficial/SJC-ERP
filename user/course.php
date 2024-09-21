<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../css/abouts.css" class="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="sub-header">
     <nav>
        <a href="index.html"><img src=""></a>
        <div class="nav-links" id="navLinks">
        <i class="fa fa-solid fa-xmark" onclick="hideMenu()"></i>  
        <ul>
        <li><a href>HOME</a></li>  
        <li><a href>ABOUT</a></li> 
        <li><a href>COURSE</a></li>
        <li><a href>MSC.IT</a></li>
        <li><a href>GALLERY</a></li>
        <li><a href>CONTACT</a></li>
         </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav> 
    <h1>Our Course</h1>
</div>

<!------------COURSE-------->
 
<section class="course">
    <h1>Courses Available</h1>
    <p>Courses Offered by St.Joseph's College of Arts and Science(Autonomous) 2024 </p> 
    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>Making website is now of the easiest thing in the world.you 
            just need you learn HTML,CSS,Javascript and you are good to go.
            Making website is now of the easiest thing in the world.you 
            just need you learn  </p>
     </div>
     <div class="course-col">
            <h3>Under Graduation</h3>
            <p>Making website is now of the easiest thing in the world.you 
            just need you learn HTML,CSS,Javascript and you are good to go.
            Making website is now of the easiest thing in the world.you 
            just need you learn  </p>
         </div>
         <div class="course-col">
            <h3>Post Graduation</h3>
            <p>Making website is now of the easiest thing in the world.you 
            just need you learn HTML,CSS,Javascript and you are good to go.
            Making website is now of the easiest thing in the world.you 
            just need you learn  </p>
        </div>
    </div>
 </section>


 <!-------CAMPUS--->
    

<!------Facilities---->

<section class="facilities">
    <h1>Our College Facilities</h1>
    <p>Campus of St.Joseph's College of Arts and Science(Autonomous) 2024</p>
    <div class="row">
        <div class="facilities-col">
            <img src="../images/msc.jpg" alt="">
            <h3>LIBRARY</h3>
            <p>Making website is now of the easiest thing in the world.you 
            just need you learn HTML,CSS,Javascript and you are good to go.
            Making website is now of the easiest thing in the world.you 
            just need you learn</p>
        </div>
        <div class="facilities-col">
            <img src="../images/msc.jpg" alt="">
            <h3>LIBRARY</h3>
            <p>Making website is now of the easiest thing in the world.you 
            just need you learn HTML,CSS,Javascript and you are good to go.
            Making website is now of the easiest thing in the world.you 
            just need you learn</p>
        </div>
        <div class="facilities-col">
            <img src="../images/msc.jpg" alt="">
            <h3>LIBRARY</h3>
            <p>Making website is now of the easiest thing in the world.you 
            just need you learn HTML,CSS,Javascript and you are good to go.
            Making website is now of the easiest thing in the world.you 
            just need you learn</p>
        </div>
    </div>
</section>

<!-------Testimonial------->

<!-----Footer----->
<section class="footer">
    <h4>About Us</h4>
    <p>Making website is now of the easiest thing in the world.you 
    just need you <br>learn HTML,CSS,Javascript and you are good to go</p>
    <div class="icons">
    <i class="fa-brands fa-square-facebook"></i>
    <i class="fa-brands fa-square-twitter"></i>
    <i class="fa-brands fa-square-instagram"></i>
    <i class="fa-brands fa-linkedin"></i>
   </div>
   <p>made with <i class="fa-regular fa-heart"></i> by Karthika Ezhilan</p>
</section>


<!---------javascript for Toggle <Menu------->
<script>
    var navLinks=document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right="0";
    }
    function hideMenu(){
        navLinks.style.right="-200px";
    }
</script>
</body>
</html>
