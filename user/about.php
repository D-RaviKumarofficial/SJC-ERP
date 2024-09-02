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
    <h1>About Us</h1>
</div>

<!---------about us content------->

<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>ERP For Msc.IT Information Technology</h1>
            <P>The sending of distributed storage administrations has critical advantages in overseeing 
                information for clients. Be that as it may, it likewise causes numerous security concerns, and one 
                of them is information uprightness. Open check methods can empower a client to utilize an 
                outsider evaluator to confirm the information honesty for the benefit of the organization, while 
                existing open confirmation plans are defenseless examiners who may not perform confirmations 
                clearly. In this paper we propose a third-party auditor delegated for the background verification 
                process which is done on the part of every organization. In our project a novel way of 
                verification introduced which implements the block chain technology. By usage of block chain 
                each and every data about the candidate </P>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="../images/sjc.jpeg" alt="">
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
