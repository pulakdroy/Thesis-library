<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis resources</title>
    <link rel="stylesheet" href="resources.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="resources.js" defer></script>
</head>
<body>


    <header>
        <section class="header">
            <nav class="navbar">
                <div class="logo">
                    <h2>Thesis Library</h2>
                </div>
                <div class="navmenu">
                    <ul>
                        <li><a href="landing.php">Home</a></li>
                        <li><a href="supervisor.php">Supervisors</a></li>
                        <li><a href="resources1.php">Resources</a></li>
                        <li><a href="sign.php">Signup</a></li>
                        <li><a href="upload.php">Upload</a></li>
                    </ul>
                </div>
            </nav>
            <div class="text-box">
                <br>
                <h3>Thesis Templates & Formats</h3>
                <br>
                <br>
            </div>
        </section>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-grid">
        <div class="container1" onclick="goToPage('template')">
            <h2>Template</h2>
            <br>
            <p><a href="resousces/BRACU_Thesis_TemplateV2.docx" onclick="downloadFile()">See more Templates</a></p>
        </div>

        <div class="container2" onclick="goToPage('guideline')">
            <h2>Guideline</h2>
            <br>
            <p><a href="resousces/guid.docx" onclick="downloadFile()">Download File</a></p>
        </div>
        <div class="container3" onclick="goToPage('citation')">
            <h2>Citation</h2>
            <br>

            <p><a href="https://guides.libraries.psu.edu/apaquickguide" onclick="downloadFile()">APA Quick Citation Guide</a></p>
        </div>
    </div>

</body>
</html>
