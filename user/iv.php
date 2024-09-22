<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Visit Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, rgba(137, 255, 253, 1), rgba(239, 50, 217, 1));
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        header {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5em;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .glass-section {
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 30px;
            margin: 20px 0;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .glass-section h2 {
            color: #fff;
            font-size: 1.8em;
            margin-bottom: 15px;
        }

        .experience-content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .text-box, 
        .image-box, 
        .video-box {
            flex: 1 1 45%;
            margin-bottom: 20px;
        }

        .image-box img, 
        .video-box video {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .text-box p, 
        .text-box ul {
            color: #e0e0e0;
            line-height: 1.6;
        }

        .text-box ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        .footer {
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 20px;
            color: white;
            text-align: center;
            margin-top: 20px;
        }

        .footer p {
            margin: 0;
            font-size: 1em;
        }

        .footer .icons {
            margin: 10px 0;
        }

        .footer .icons i {
            color: white;
            font-size: 1.5em;
            margin: 0 10px;
            cursor: pointer;
        }

        .footer .icons i:hover {
            color: #89fffd;
        }

        @media screen and (max-width: 768px) {
            .experience-content {
                flex-direction: column;
            }

            .text-box, 
            .image-box, 
            .video-box {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Industrial Visit Experience</h1>
</header>

<div class="container">
    <!-- Section for Kashiv InfoTech -->
    <div class="glass-section">
        <h2>Visit to Kashiv InfoTech</h2>
        <div class="experience-content">
            <div class="text-box">
                <p>We had an insightful visit to <strong>Kashiv InfoTech</strong>, where we gained knowledge about various aspects of <strong>web development</strong>:</p>
                <ul>
                    <li>Front-end: HTML, CSS, JavaScript</li>
                    <li>Back-end: PHP, MySQL</li>
                    <li>Web Development trends</li>
                </ul>
            </div>
            <div class="image-box">
                <img src="../images/us.jpeg" alt="Kashiv InfoTech Office">
            </div>
        </div>
    </div>

    <!-- Section for Vandaloor Zoo -->
    <div class="glass-section">
        <h2>Visit to Vandaloor Zoo</h2>
        <div class="experience-content">
            <div class="image-box">
                <img src="../images/IV.JPG" alt="Vandaloor Zoo">
            </div>
            <div class="text-box">
                <p>After the visit, we had a fun time at <strong>Vandaloor Zoo</strong>. We explored the zoo, saw wildlife, and enjoyed the scenery:</p>
                <ul>
                    <li>Saw animals like lions, elephants, and more</li>
                    <li>Visited the aviary and zoo safari</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Section for Photos and Videos -->
    <div class="glass-section">
        <h2>Our Gallery</h2>
        <div class="experience-content">
            <div class="image-box">
                <img src="../images/zoo.jpg" alt="Group Photo at Zoo">
                <img src="../images/zoo.jpg" alt="Group Photo at Zoo">
            </div>
            <div class="video-box">
                <video controls>
                    <source src="zoo_video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<section class="footer">
    <p>Thanks for visiting our industrial tour webpage!</p>
    <div class="icons">
        <i class="fa-brands fa-square-facebook"></i>
        <i class="fa-brands fa-square-twitter"></i>
        <i class="fa-brands fa-square-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
    </div>
    <p>Created by Karthika Ezhilan</p>
</section>

</body>
</html>
