<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Learn More</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
}
body {
    
    margin: 0;
    padding: 0;
    background-color: black;
}
.top-right-button {
    background-color: #7f5539;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    top: 50px;
    right: 0;
    border-radius: 5px;
    margin-right: 60px;
}
.top-right-button:hover {
    background-color: #C4A484;
    color: black;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    border-radius: 10px;
}
</style>
  </head>

<body>
    <button id="infoButton" class="top-right-button" onclick="backToPlaylist()">Back</button>
    <div class="rivermaya" style="width: 100px;  height: 20px; margin-left: 50px;  margin-top: 40px;">
    <img src='images/rivermaya.jpg'>
</div>
<br><br>
    <div class="info" style="color: white; text-align: justify; margin-left: 900px; margin-right: 50px; margin-top: 50px; line-height: 1.5; font-size: 15px; ">
        <p>Rivermaya, formed in 1994 in Manila, is one of the Philippines' most iconic rock bands known for their alternative rock and pop rock style. Originally featuring Bamboo Mañalac, Rico Blanco, Nathan Azarcon, Mark Escueta, and Perfecto de Castro, the band achieved early success with hits like "214," "Ulan," and "Awit ng Kabataan" from their self-titled debut album. Over the years, they released numerous successful albums, including Trip and Between the Stars and Waves, with hits such as "Kisapmata" and "Liwanag Sa Dilim." Despite numerous lineup changes, including the departures of Mañalac and Blanco, Rivermaya has remained influential in the OPM (Original Pilipino Music) scene, celebrated for their innovative approach to music distribution and continued energetic performances.</p>
</div>
<br>
<div class="bamboo" style="color: white; text-align: justify; margin-left: 250px; margin-right: 100px; margin-top: 130px; line-height: 1.5; font-size: 30px; ">
        <p style="color: red;"><b>BAMBOO MANALAC</b></p>
        <p style="font-size: 15px; margin-top: 20px;">Bamboo Mañalac, commonly known as Bamboo, was the original lead vocalist of Rivermaya when the band was formed in 1994. He contributed significantly to the band's early success with his powerful vocals on hits like "214," "Ulan," and "Awit ng Kabataan." Bamboo left Rivermaya in 1998 and later achieved further fame with his own band, Bamboo, and as a solo artist. His departure from Rivermaya marked a significant change in the band's lineup, but his impact on their initial success and the Filipino music scene remains notable.</p>
</div>
<div class="rico" style="color: white; text-align: justify; margin-left: 250px; margin-right: 100px; margin-top: 105px; line-height: 1.5; font-size: 30px; ">
        <p style="color: red;"><b>RICO BLANCO</b></p>
        <p style="font-size: 15px; margin-top: 20px;">Rico Blanco is a prominent Filipino musician, singer, songwriter, and record producer, best known as one of the founding members of the band Rivermaya. Born on March 17, 1973, Blanco played keyboards and guitar, and after the departure of original vocalist Bamboo Mañalac in 1998, he also took on lead vocal duties. He was instrumental in writing many of the band's hits, such as "214," "Elesi," and "Hinahanap-hanap Kita." Blanco's tenure with Rivermaya helped shape the band’s sound and success, making them one of the most influential rock bands in the Philippines. In 2007, Blanco left Rivermaya to pursue a solo career, where he continued to enjoy significant success, further establishing himself as a key figure in the Filipino music industry.
</div>
<div class="nat" style="color: white; text-align: justify; margin-left: 250px; margin-right: 100px; margin-top: 105px; line-height: 1.5; font-size: 30px; ">
        <p style="color: red;"><b>NATHAN AZARCON</b></p>
        <p style="font-size: 15px; margin-top: 20px;">Nathan Azarcon is a Filipino musician and songwriter, best known as the original bassist and one of the founding members of the band Rivermaya. Born on January 29, 1975, Azarcon played a pivotal role in the band’s early success, contributing to their distinctive sound with his bass playing and backing vocals. He was part of Rivermaya during the release of their first three albums, which included hits like "214," "Ulan," and "Kisapmata." After leaving Rivermaya in 2001, Azarcon continued his musical career with other notable bands such as Bamboo (with former Rivermaya vocalist Bamboo Mañalac) and later Hijo. His contributions to the Filipino rock music scene have made him a respected figure in the industry.</p>
</div>
<div class="mark" style="color: white; text-align: justify; margin-left: 250px; margin-right: 100px; margin-top: 105px; line-height: 1.5; font-size: 30px; ">
        <p style="color: red;"><b>MARK ESCUETA</b></p>
        <p style="font-size: 15px; margin-top: 20px;">Mark Escueta is a Filipino musician best known as the drummer and one of the founding members of the band Rivermaya. Born on January 9, 1976, Escueta has been a constant presence in the band since its formation in 1994. In addition to his drumming duties, he has also contributed as a guitarist and backing vocalist over the years. Escueta has remained with Rivermaya through numerous lineup changes, helping to sustain the band's enduring popularity and influence in the Filipino music scene. His versatility and dedication have made him a key figure in Rivermaya’s ongoing success.</p>
</div>
</div>
<br><br><br>
<div class="credits" style="background-color: white; height: 40px;  padding-top: 20px;">
    <p style="margin-left: 50px; color: black;"><b>MARY JOY M. COSINO</b></p>
</div>
</div>
<script>
        function backToPlaylist() {
            console.log("Back to Playlist button clicked");
            window.location.replace("index.php"); 
        }
    </script>

</body>
</html>
