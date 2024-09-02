<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../css/mscit.css" class="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="header">
     <nav>
        <a href="index.html"><img src=""></a>
        <div class="nav-links" id="navLinks">
        <i class="fa fa-solid fa-xmark" onclick="hideMenu()"></i>  
        <ul>
        <li><a href>HOME</a></li>  
        <li><a href>Students</a></li> 
        <li><a href>Parents</a></li>
        <li><a href>Staff</a></li>
        <li><a href>Events</a></li>
        <li><a href>News</a></li>
         </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
     </nav>
<!-----Footer----->



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
