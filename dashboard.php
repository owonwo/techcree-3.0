<?php 
    session_start();
    @include('inc/functions.php');

+    validateUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">¬
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Layout</title>
    <link rel="stylesheet" href="css/dashboard.css"/>
    <link rel="stylesheet" href="css/fancy.css"/>
    <link rel="stylesheet" href="css/card.css"/>
    <link href="https://fonts.googleapis.com/css?family=Prompt:400,900" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
</head>
<body>
    <?php
        echo $_SESSION['username'];
    ?>
    <a href="logout.php">Logout</a>
    <div class="container">
        <section class="card-analytical">
            <div>
                <div class="icon-avatar blue">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="icon-avatar top-right">
                    <i class="zmdi zmdi-help"></i>
                </div>
                <div class="icon-avatar no-color top-left">
                    <i class="zmdi zmdi-help"></i>
                </div>
            </div>
            <div>
                <h3>20.3k</h3>
                <p class="">Total Followers</p>
            </div>
            <div>
            </div>
        </section>
    
        <section class="card-analytical">
            <div>
                <div class="icon-avatar purple">
                    <i class="zmdi zmdi-gesture"></i>
                </div>
                <div class="icon-avatar top-right">
                    <i class="zmdi zmdi-help"></i>
                </div>
                <div class="icon-avatar no-color top-left">
                    <i class="zmdi zmdi-help"></i>
                </div>
            </div>
            <div>
                <h3>1.6k</h3>
                <p class="">Impressions</p>
            </div>
            <div>
                <p class="rating text-green">
                    <i class="zmdi zmdi-caret-up"></i> 112.71%</p>
            </div>
        </section>
           
        <section class="card-analytical">
            <div>
                <div class="icon-avatar orange">
                    <i class="zmdi zmdi-accounts"></i>
                </div>
                <div class="icon-avatar top-right">
                    <i class="zmdi zmdi-help"></i>
                </div>
                <div class="icon-avatar no-color top-left">
                    <i class="zmdi zmdi-help"></i>
                </div>
            </div>
            <div>
                <h3>826</h3>
                <p class="">Reach</p>
            </div>
            <div>
                <p class="rating text-red">
                    <i class="zmdi zmdi-caret-down"></i>
                    112.71%
                </p>
            </div>
        </section>
    
        <section class="card-analytical">
            <div>
                <div class="icon-avatar green">
                    <i class="zmdi zmdi-view-dashboard"></i>
                </div>
                <div class="icon-avatar top-right">
                    <i class="zmdi zmdi-help"></i>
                </div>
                <div class="icon-avatar no-color top-left">
                    <i class="zmdi zmdi-help"></i>
                </div>
            </div>
            <div>
                <h3>183</h3>
                <p class="">Engagement</p>
            </div>
            <div>
            </div>
        </section>
    </div>
    <br>
    <div class="container">
        <section class="fancy-card">
            <div class="header">
                <img class="avatar" src="images/avatar-image.jpg" alt="">
                <span>47 days ago</span>
            </div>
            <div class="image-holder">
                <img src="images/avatar-image.jpg" alt="">
            </div>
            <div class="footer">
               
                    <i class="zmdi zmdi-favorite"></i>
                    <span>9,039</span>
                
                
                    <i class="zmdi zmdi-comment"></i>
                    <span>9,039</span>
               
                    <i class="zmdi zmdi-chart"></i>
                    <span>9,039</span>
                
            </div>
        </section>
        <section class="fancy-card">
            <div class="header">
                <img class="avatar" src="images/avatar-image.jpg" alt="">
                <span>47 days ago</span>
            </div>
            <div class="image-holder">
                <img src="images/avatar-image.jpg" alt="">
            </div>
            <div class="footer">
               
                    <i class="zmdi zmdi-favorite"></i>
                    <span>9,039</span>
                
                
                    <i class="zmdi zmdi-comment"></i>
                    <span>9,039</span>
               
                    <i class="zmdi zmdi-chart"></i>
                    <span>9,039</span>
                
            </div>
        </section>
        <section class="fancy-card">
            <div class="header">
                <img class="avatar" src="images/avatar-image.jpg" alt="">
                <span>47 days ago</span>
            </div>
            <div class="image-holder">
                <img src="images/avatar-image.jpg" alt="">
            </div>
            <div class="footer">
               
                    <i class="zmdi zmdi-favorite"></i>
                    <span>9,039</span>
                
                
                    <i class="zmdi zmdi-comment"></i>
                    <span>9,039</span>
               
                    <i class="zmdi zmdi-chart"></i>
                    <span>9,039</span>
                
            </div>
        </section>
        <section class="fancy-card">
            <div class="header">
                <img class="avatar" src="images/avatar-image.jpg" alt="">
                <span>47 days ago</span>
            </div>
            <div class="image-holder">
                <img src="images/avatar-image.jpg" alt="">
            </div>
            <div class="footer">
               
                    <i class="zmdi zmdi-favorite"></i>
                    <span>9,039</span>
                
                
                    <i class="zmdi zmdi-comment"></i>
                    <span>9,039</span>
               
                    <i class="zmdi zmdi-chart"></i>
                    <span>9,039</span>
                
            </div>
        </section>
    </div>
    <br>
    <div class="container">
    <section class="card">
        <div class="card-header">
            Followers Growth
            <div>
                <span class="circle-icon">
                    <i class="zmdi zmdi-cloud-download"></i>
                </span>
                <span class="circle-icon">
                    <i class="zmdi zmdi-more-vert"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
           <button class="fancy-chart"></button>
        </div>
    </section>
    <section class="card">
        <div class="card-header">
            Followers Growth
            <div>
                <span class="circle-icon">
                    <i class="zmdi zmdi-cloud-download"></i>
                </span>
                <span class="circle-icon">
                    <i class="zmdi zmdi-more-vert"></i>
                </span>
            </div>
        </div>
        <div class="card-body">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, distinctio? Inventore itaque eius nostrum tempora nulla iure quaerat suscipit, reiciendis, architecto mollitia, dolor sunt totam modi alias ad eos repudiandae?
        </div>
    </section>
    </div>

    <div class="flat-card">
        <div class="image-holder">
            <img src="images/avatar-image.jpg" alt="">
        </div>
        <div class="content">
            <h3>Lorem ipsum, dolor sit amet</h3>
            <div>
                <div>
                    <i class="zmdi zmdi-favorite"></i> AUG 20TH, 10:00PM
                </div>
                <div>
                    <i class="zmdi zmdi-favorite"></i> AUG 20TH, 10:00PM
                </div>
                <div>
                    <i class="zmdi zmdi-favorite"></i> AUG 20TH, 10:00PM
                </div>
            </div>
        </div>
    </div>
</body>
</html>