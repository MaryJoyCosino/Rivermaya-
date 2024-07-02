<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

*::before, *::after{
    padding: 0;
    margin: 0;
}

:root{
    --whitetype: #ff7480;
    --blacktype: #9f6ea3;
    --lightblack: #515C6F;
    --white: #ffffff;
    --darkwhite: #cecaca;
    --pinkshadow: #ffcbdd;
    --lightbshadow: rgba(0, 0, 0, 0.364);
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 0;
}

.player {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: url("https://www.philippineconcerts.com/wp-content/uploads/2024/02/Rivermaya-1024x768.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.wrapper{
    width: 450px;
    padding: 25px 30px;
    overflow: hidden;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 6px 15px var(--lightbshadow);
    background-filter:blur(100px);
}

.wrapper i{
    cursor: pointer;
}

.main {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 5px;
}

.main #logo {
    font-size: 20px;
    color: white;
}

.main #logo i {
    margin-right: 10px;
}

.top-bar, .progress-area .song-timer, .controls, .music-list .header, .music-list ul li {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.top-bar i{
  font-size: 30px;
  color: white;
}

.top-bar span{
    font-size: 18px;
    margin-left: -3px;
    color: white;
}

.img-area{
    width: 60%;
    height: 235px;
    margin: auto;
    overflow: hidden;
    margin-top: 15px;
    border-radius: 50%;
    -moz-box-shadow: 0px 6px 12px var(--lightbshadow);
    -webkit-box-shadow: 0px 6px 12px var(--lightbshadow);
    box-shadow: 0px 6px 12px var(--lightbshadow);
}

.img-area img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.song-details{
    text-align: center;
    margin: 15px 0;
}

.song-details>p{
    color: white;
}

.song-details .name{
    font-size: 21px;
}

.song-details .artist{
    font-size: 18px;
    opacity: 0.9;
    line-height: 35px;
}

.progress-area{
    height: 6px;
    width: 100%;
    border-radius: 50px;
    background: #f0f0f0;
    cursor: pointer;
}

.progress-area .progress-bar{
    height: inherit;
    width: 0%;
    position: relative;
    border-radius: inherit;
    background: linear-gradient(90deg, var(--whitetype) 0%, var(--blacktype) 100%);
}

.progress-bar::before{
    content: "";
    position: absolute;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    top: 50%;
    right: -5px;
    z-index: 2;
    opacity: 0;
    pointer-events: none;
    transform: translateY(-50%);
    background: inherit;
    transition: opacity 0.2s ease;
}

.progress-area:hover .progress-bar::before{
    opacity: 1;
    pointer-events: auto;
}

.progress-area .song-timer{
    margin-top: 2px;

}
.song-timer span{
    font-size: 13px;
    color: white;
}

.volume{
    margin: 30px 0 15px 0;
    /* position: absolute; */
    display: flex;
    justify-content: center; 
    align-items: center;
    color: white;
}

.volume p {
    font-size: 15px;
}

.volume i {
    cursor: pointer;
    padding: 8px 12px;
}

.volume i:hover {
    background: rgba(109, 109, 109, 0.1);
}

.volume #volume_show {
    padding: 8px 12px;
    margin: 0 5px 0 0;
    background: rgba(122, 121, 121, 0.1);
}

.volume input {
    -webkit-appearance: none;
    width: 60%;
    outline: none;
    border: none;
    height: 3px;
    margin: 0 5px;
    background: white;
} 

input[type="range"]::-webkit-progress-value {
    -webkit-appearance: none;
    background-color: #31369f;
}

input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    height: 20px;
    width: 20px;
    background: #f7f7f7;
    border: 3px solid rgb(156, 153, 153);
    border-radius: 50%;
    cursor: pointer;
}

.controls{
    margin: 10px 0 5px 0;
}

.controls i{
    font-size: 28px;
    user-select: none;
    background: white;  
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.controls i:nth-child(2), .controls i:nth-child(4){
    font-size: 43px;
}

.controls #prev{
    margin-right: -13px;
}

.controls #next{
    margin-left: -13px;
}

.controls .play-pause{
    height: 54px;
    width: 54px;
    display: flex;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: white;
    box-shadow: 0px 0px 5px var(--whitetype);
}

.play-pause::before{
    position: absolute;
    content: "";
    height: 43px;
    width: 43px;
    border-radius: inherit;
    background: linear-gradient(var(--whitetype) 0%, var(--blacktype) 100%);
}

.play-pause i{
    height: 43px;
    width: 43px;
    line-height: 43px;
    text-align: center;
    background: inherit;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    position: absolute;
    background-color: white;
}

.music-list{

    position: absolute;
    background: black;
    width: 100%;
    left: 0;
    bottom: -55%;
    opacity: 0;
    pointer-events: none;
    /* z-index: 5; */
    padding: 15px 30px;
    border-radius: 15px;
    box-shadow: 0px -5px 10px rgba(0,0,0,0.1);
    transition: all 0.15s ease-out;
}

.music-list.show{
    bottom: 0;
    opacity: 1;
    pointer-events: auto;
}

.header .row{
    display: flex;
    align-items: center;
    font-size: 19px;
    color: white;
}

.header .row i{
    cursor: default;
}

.header .row span{
    margin-left: 5px;
}

.header #close{
    font-size: 22px;
    color: white;
}

.music-list ul{
    margin: 10px 0;
    max-height: 260px;
    overflow: auto;
}

.music-list ul::-webkit-scrollbar{
    width: 0px;
}

.music-list ul li{
    list-style: none;
    display: flex;
    cursor: pointer;
    padding-bottom: 10px;
    margin-bottom: 5px;
    color: white;
    border-bottom: 1px solid #E5E5E5;
}

.music-list ul li:last-child{
    border-bottom: 0px;
}

.music-list ul li .row span{
    font-size: 17px;
}

.music-list ul li .row p{
    opacity: 0.9;
}

ul li .audio-duration{
    font-size: 16px;
}

.rotate {
    animation: rotation 7s infinite linear;
}
@keyframes rotation {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(359deg);
    }
}

.loader {
    padding-top: 15px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.loader .stroke{
    background: white;
    height: 120%;
    width: 8px;
    border-radius: 50px;
    margin: 0 5px;
    animation: animate 1s linear infinite;
}

@keyframes animate {
    30% {
        height: 20%;
        background: #79397d;
    }

    50% {
        height: 50%;
        background: #93438b;
    }
  
    100% {
        background: #87267a;
        height: 100%;
    }
}

.stroke:nth-child(1){
    animation-delay: 0s;
}

.stroke:nth-child(2){
    animation-delay: 0.6s;
}

.stroke:nth-child(3){
    animation-delay: 0.2s;
}

.stroke:nth-child(4){
    animation-delay: 0.4s;
}

.stroke:nth-child(5){
    animation-delay: 0.8s;
}

.stroke:nth-child(6){
    animation-delay: 0.4s;
}

.stroke:nth-child(7){
    animation-delay: 0.2s;
}

.stroke:nth-child(8){
    animation-delay: 0.6s;
}

.stroke:nth-child(9){
    animation-delay: 0s;
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
<button id="infoButton" class="top-right-button" onclick="learnMore()">About us</button>
    <div class="player">
    <div class="wrapper">
        <div class="main">
            <p id="logo"><i class="fa fa-music"></i>Music</p>
            
        </div>


        <div class="top-bar">
            <i class="material-icons">expand_more</i>
            <span>Now Playing</span>
            <i class="material-icons">more_horiz</i>
        </div>

        <div class="img-area">
            <img src="images/music-1.jpg" alt="">
        </div>

        <div class="song-details">
            <p class="name"></p>
            <p class="artist"></p>
        </div>

        <div class="progress-area">
            <div class="progress-bar">
                <audio id="main-audio" src=""></audio>
                <span></span>
            </div>
            <div class="song-timer">
                <span class="current-time">0:00</span>
                <span class="max-duration">0:00</span>
            </div>
        </div>

        <div class="volume">
            <p id="volume_show">92</p>
            <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
            <input type="range" min="0" max="100" value="92" onchange="volume_change()" id="volume">  
        </div>

        <div class="controls">
            <i id="repeat-plist" class="material-icons" title="Playlist looped">repeat</i>
            <i id="prev" class="material-icons">skip_previous</i>
            <div class="play-pause">
                <i class="material-icons play">play_arrow</i>
            </div>
            <i id="next" class="material-icons">skip_next</i>
            <i id="more-music" class="material-icons">queue_music</i>
        </div>

        <div id="wave">
            <span class="stroke"></span>
            <span class="stroke"></span>
            <span class="stroke"></span>
            <span class="stroke"></span>
            <span class="stroke"></span>
            <span class="stroke"></span>
            <span class="stroke"></span>
            <span class="stroke"></span>
            <span class="stroke"></span>
        </div>

        <div class="music-list">
            <div class="header">
                <div class="row">
                    <i class= "list material-icons">queue_music</i>
                    <span>Music list</span>
                </div>
                <i id="close" class="material-icons">close</i>
            </div>
            <ul>
                <!-- here li list are coming from js -->

                <!-- <li>
                    <div class="row">
                        <span>Despacito</span>
                        <p>Justin</p>
                    </div>
                    <span class="audio-duration">2:34</span>
                </li> -->
                
    </div>
</div>
<script>
        function learnMore() {
            console.log("Learn More button clicked");
            window.location.replace("learn-more.php");
        }
    </script>

    <script src="music-list.js"></script>
    <script src="script.js"></script>
</body>
</html>
