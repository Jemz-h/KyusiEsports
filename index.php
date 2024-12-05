<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCE.css">
    
<body>
    <div class="wrapper">

    <?php include "#Navbar.php"; ?>
        
        <!-- Main Section ito-->
        <main class="main-content">
            <div class="slider">
                <div class="slides">
                    <img class="slide" src="qceimages/qct1.jpg" alt="Image #1">
                    <img class="slide" src="qceimages/qct2.jpg" alt="Image #2">
                    <img class="slide" src="qceimages/qct3.jpg" alt="Image #3">
                </div>
                <button class="prev" onclick="prevSlide()">&#10094;</button>
                <button class="next" onclick="nextSlide()">&#10095;</button>
            </div>

            <h2 class="sponsors-title">S<span class="red-letter">P</span>ONS<span class="red-letter">O</span>RS</h2>
            <div class="sponsors-container">
            <div class="image-gallery">
                <img src="qceimages/qcesponsors.jpg" alt="Image 1" class="sponsor1">
                <img src="qceimages/qcesponsors2.jpg" alt="Image 2" class="sponsor2">
            </div>
            <div class="image-gallery">
            <img src="qceimages/sponsorimage3.jpg" alt="Image 3" class="sponsor3">
            <img src="qceimages/sponsorimage4.jpg" alt="Image 4" class="sponsor4">
        </div>
        </main>
    </div>

    <?php include "#Footer.php"; ?>

    </body>

    <script src="javascript/QCE.js"></script>
</body>
</html>
