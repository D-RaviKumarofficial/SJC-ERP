<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Showcase</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .event-section {
            padding: 50px 0;
        }
        .event-card {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            background-color: white;
            transition: transform 0.2s ease-in-out;
        }
        .event-card:hover {
            transform: scale(1.05);
        }
        .event-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
        }
        .event-body {
            padding: 30px;
        }
        .btn-word-file {
            background-color: #007bff;
            color: white;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }
        .btn-word-file:hover {
            background-color: #0056b3;
        }
        .gallery-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #333;
        }
        .iframe-viewer {
            width: 100%;
            height: 600px;
            border: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container event-section">
    <h1 class="gallery-title">Our Featured Events</h1>
    
    <!-- Event 1: TechXtra'23 -->
    <div class="row">
        <div class="col-md-12">
            <div class="event-card">
                <div class="event-header">
                    <h2>TechXtra'23</h2>
                </div>
                <div class="event-body">
                    <p>TechXtra'23 is a flagship technical event that brings together young tech enthusiasts. This event includes the following exciting competitions:</p>
                    <ul>
                        <li><strong>Paper Presentation:</strong> Share your innovative ideas on trending technologies.</li>
                        <li><strong>Quiz:</strong> Test your knowledge across various domains in technology.</li>
                        <li><strong>Web Designing:</strong> Showcase your creativity and design skills by creating stunning websites.</li>
                        <li><strong>SQL Clash:</strong> Challenge yourself with complex SQL queries and problem-solving.</li>
                    </ul>
                    <a href="techxtra23_details.docx" download class="btn btn-word-file">Download TechXtra'23 Details</a>
                    <a href="https://view.officeapps.live.com/op/view.aspx?src=YOUR_DOC_URL" target="_blank" class="btn btn-word-file">View TechXtra'23 Details</a>
                    <!-- Replace 'YOUR_DOC_URL' with the URL of the document uploaded to your server or file sharing service -->
                </div>
            </div>
        </div>
    </div>

    <!-- Event 2: DhaMaka'23 -->
    <div class="row">
        <div class="col-md-12">
            <div class="event-card">
                <div class="event-header">
                    <h2>DhaMaka'23</h2>
                </div>
                <div class="event-body">
                    <p>DhaMaka'23 is a fun-filled non-technical event where creativity and enthusiasm meet. Participate in the following activities:</p>
                    <ul>
                        <li><strong>Connection:</strong> Test your visual and logical thinking through fun connections.</li>
                        <li><strong>Ad's Craze:</strong> Create and perform exciting ad scripts to entertain the audience.</li>
                        <li><strong>Sudoku:</strong> Exercise your brain with challenging Sudoku puzzles.</li>
                        <li><strong>Start Music:</strong> Show your moves and dance to the beat in this fun musical event.</li>
                    </ul>
                    <a href="dhamaka23_details.docx" download class="btn btn-word-file">Download DhaMaka'23 Details</a>
                    <a href="https://view.officeapps.live.com/op/view.aspx?src=YOUR_DOC_URL" target="_blank" class="btn btn-word-file">View DhaMaka'23 Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Event 3: Hello World'24 -->
    <div class="row">
        <div class="col-md-12">
            <div class="event-card">
                <div class="event-header">
                    <h2>Hello World'24</h2>
                </div>
                <div class="event-body">
                    <p>Hello World'24 is an international event open to all colleges worldwide. It offers students the opportunity to showcase their skills and win exciting cash prizes in the following competitions:</p>
                    <ul>
                        <li><strong>Quiz:</strong> Compete with global peers in a tech-based quiz.</li>
                        <li><strong>Web Designing:</strong> Show off your web development skills on a global platform.</li>
                        <li><strong>SQL Clash:</strong> Test your knowledge in SQL problem-solving.</li>
                        <li><strong>Paper Presentation:</strong> Present innovative research papers and ideas.</li>
                    </ul>
                    <p><strong>Cash Prizes:</strong> Winners will receive cash prizes for their achievements!</p>
                    <a href="helloworld24_details.docx" download class="btn btn-word-file">Download Hello World'24 Details</a>
                    <a href="https://view.officeapps.live.com/op/view.aspx?src=YOUR_DOC_URL" target="_blank" class="btn btn-word-file">View Hello World'24 Details</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
