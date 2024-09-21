<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../css/abouts.css" class="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <h1>Contact </h1>
</div>

<!---------contact------->

<section class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31249.60569477263!2d79.74607544623096!3d11.750906178361666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a549888444e5d9d%3A0x6aa2c2d991f57236!2sCuddalore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1726824389255!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<!-- Contact Information Section -->
<section class="contact-us">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-4 contact-col">
                <div>
                    <i class="fa-solid fa-house"></i>
                    <span>
                        <h5>XYZ Road, ABC Building</h5>
                        <p>Cuddalore, Tamil Nadu</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>2345678899</h5>
                        <p>Monday to Saturday</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <span>
                        <h5>info@website.com</h5>
                        <p>Email Us for Inquiries</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>




<!------------COURSE-------->
 
 <!-------CAMPUS--->
    

<!------Facilities---->


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
