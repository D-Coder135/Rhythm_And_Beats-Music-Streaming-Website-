<?php
$name=$_POST['fname'];
$email=$_POST['femail'];
$psw=$_POST['fpass'];
$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file))
  {
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),5,null);
  if ($str_arr[3]==$psw and $str_arr[1]==$email){  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/home.css" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <title>Home</title>
</head>

<body>
    <div class="both">
        <div id="left-box">
            <div>
                <h1><span>Rhythm and Beats</span></h1>
            </div>
            <div id="header">
                <ul>
                    <a href="#">
                        <li class="left-list">
                            <i class="fas fa-headphones-alt"></i>Listen Now
                        </li>
                    </a>
                    <a href="#">
                        <li class="left-list">
                            <i class="fas fa-star"></i>Top charts
                        </li>
                    </a>
                    <a href="#">
                        <li class="left-list">
                            <i class="fas fa-exclamation-circle"></i>New releases
                        </li>
                    </a>
                    <a href="#">
                        <li class="left-list">
                            <i class="fas fa-music"></i>My Library
                        </li>
                    </a>
                </ul>
            </div>
            <div>
                <ul>
                    <h3>Audio Playlists</h3>
                    <a href="#">
                        <li class="left-list">Thumbs up</li>
                    </a>
                    <a href="#">
                        <li class="left-list">Last added</li>
                    </a>
                    <a href="#">
                        <li class="left-list">Free and Purchased</li>
                    </a>
                </ul>
            </div>
            <div>
                <ul>
                    <h3><span>Playlists</span></h3>
                    <a href="#">
                        <li class="left-list">Current</li>
                    </a>
                    <a href="#">
                        <li class="left-list">Best of 2021</li>
                    </a>
                    <a href="#">
                        <li class="left-list">Best of 2020</li>
                    </a>
                    <a href="#">
                        <li class="left-list">Best of 2019</li>
                    </a>
                </ul>
            </div>
        </div>
        <div id="box">
            <div id="navHeading">
                <h1>My Library</h1>
            </div>
            <div class="search-right">
                <input type="text" id="searchtext" placeholder="Search music" />
                <i class="fas fa-search"></i>
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        <a href="home.php">
                            <li class="box-list">Home</li>
                        </a>
                        <a href="music.html">
                            <li class="box-list">Music</li>
                        </a>
                        <a href="artists.html">
                            <li class="box-list">Artists</li>
                        </a>
                        <a href="Contact-us.html">
                            <li class="box-list">About</li>
                        </a>
                        <a href="Contact-us.html">
                            <li class="box-list">Contacts</li>
                        </a>
                    </ul>
                </nav>
            </div>
            <div id="main-container">
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/justin.jpeg" /></a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/alan.jpeg" /> </a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/selena.jpeg" /> </a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/weeknd.jpeg" /> </a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/1.jpg" /> </a>
                </div>
            </div>
            <div id="main-container">
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/2.jpg" /> </a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/3.jpg" /> </a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/4.jpg" /> </a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/5.jpg" /> </a>
                </div>
                <div class="div1">
                    <i class="fas fa-headphones-alt"></i>
                    <a href="music.html"><img src="./images/6.jpg" /> </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php

      $flag=1;
      break;
    }//end if   
  }//end while
if ($flag==0)
echo "Please register yourself before login";
  fclose($file);
?>