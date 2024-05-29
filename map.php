<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-S79Y2FRX1H"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
 
   gtag('config', 'G-S79Y2FRX1H');
   </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Meta Tags Start ------------------------------------------------------>
     <meta http-equiv='content-language' content='en-US'>
     <meta name="title" content="Map - Visit Sri Lanka">
     <meta name="description" content="Beauty of Indian Ocean">
     <meta name="keywords" content="">
     <!-- Open Graph -->
     <meta property="og:type" content="website">
     <meta property="og:url" content="https://visitsrilanka.live/map.php">
     <meta property="og:title" content="Map - Visit Sri Lanka">
     <meta property="og:description" content="Sri Lanka is an island nation located in the Indian Ocean, just off the southeastern coast of India.">
     <meta property="og:image" content="/images/preview.webp">
     <!-- Twitter -->
     <meta property="twitter:card" content="summary_large_image">
     <meta property="twitter:url" content="https://visitsrilanka.live/map.php">
     <meta property="twitter:title" content="Map - Visit Sri Lanka">
     <meta property="twitter:description" content="Sri Lanka is an island nation located in the Indian Ocean, just off the southeastern coast of India.">
     <meta property="twitter:image" content="/images/preview.webp">
     <!-------------------------------------------------------- Meta Tags End -->
    <title>Map</title>

    <!-- tab logo -->
    <link rel="icon" type="image/x-icon" href="/images/tepian.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    
    <!-- bootstrap CSS file link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>

    <!-- cards font awsome link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/map.css">
    <style>
        /* CSS to center the iframe */
        #map-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust as needed */
        }
    </style>
</head>
<body>
    
    <div id="top"></div>

<!-- home section starts  -->

<?php include 'navbar.php'; ?>

<!-- home section end  -->

<section class="map-section" style="padding-top: 150px;">
    <div class="container my-8"> <!-- Adjusted margin top -->
        <h1 class="heading adventureh1 mt-8 mb-4">Map of Samarinda City</h1> <!-- Adjusted margin top and bottom -->
        <!-- Map container -->
        <div id="map-container" style="margin-top: -120px; margin-bottom: -150px;"> <!-- Adjusted margin top -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.715465478128!2d117.144437315118!3d-0.5011375996363889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x322432c5b7484a79%3A0x3031f5f0ff768ad7!2sSamarinda%2C%20Samarinda%20City%2C%20East%20Kalimantan%2C%20Indonesia!5e0!3m2!1sen!2s!4v1640146282104!5m2!1sen!2s" width="1500" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<section class="about-samarinda" style="background-color: black; color: white; padding-top: 70px;">
  <div class="container">
      <h2 style="font-size: 24px; padding-bottom: 70px;">About Samarinda</h2>
      <p style="font-size: 18px; padding-bottom: 70px;">
          Samarinda is the capital city of the Indonesian province of East Kalimantan on the island of Borneo. The city lies on the banks of the Mahakam River with a land area of 718 km2 (277 sq mi). Samarinda was one of Indonesia's top ten Most Liveable Cities in 2022, ranks first on East Kalimantan Human Development Index[15] and it is the most populous city on the entire Borneo island, with a population of 727,500 at the 2010 Census[16] and 827,994 at the 2020 Census, the official estimate as at mid 2023 was 861,878. Samarinda is East Kalimantan's largest exporter and fifth-largest importer. The city has the highest number of bank headquarters in East Kalimantan.
          <br><br>
          In 2021, Samarinda Harbour became the busiest passenger port in East Kalimantan. The container port in Samarinda is also the busiest in East Kalimantan, handled more than 271 thousand twenty-foot equivalent units (TEU) in 2019.
          <br><br>
          Samarinda is known for its traditional food amplang, as well as the cloth sarung samarinda. As of 2021, the city has 3 bridges connecting its river banks: Mahakam Bridge, Mahakam Ulu Bridge, and Achmad Amins Bridge. The city center is on one side and the other side is named Samarinda Seberang.
      </p>
      <div class="cta-one__btn-block">
          <a href="/index.php" class="thm-btn cta-one__btn-one" style="font-size: 20px; ">Pelajari Lebih Lanjut</a>
      </div>
  </div>  
</section>


<a href="#top" class="to-top">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- custom js file link  -->
<script src="js/allscript.js"></script>

</body>
</html>
