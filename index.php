<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mediaquery.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" href="img/favicon.png" rel="shortcut icon">
    <title>Edchat</title>
    
    <style>
    
    .content p{
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
    text-align: justify;
}
        
    </style>
</head>

<body>

    <div class="header">

        <div style="float: left; word-spacing: 23px">
            <a href="index.php"><img src="img/EDCHAT-LOGO.png" alt="" class="himg"></a>
            <!--            <b>Finder</b> File Edit Find View Go Window Help-->
        </div>

        <div style="float: right; margin:7px 30px 0px 0px;">

            <span style="cursor:pointer" onclick="openSign()">Sign Up</span> &nbsp;
            <span style="cursor:pointer" onclick="openNav()">Login</span>
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <h1 style="text-align:center;background-color:white;color:black; width:auto;z-index: 300;margin:20px;">Education Chat</h1>
    <div class="timeline">
        
        <div class="container left">
            <div class="content">
                <h3>Who We Are</h3>
                <p>Edchat is social media that any educator can join to discuss and learn about current teaching trends, how to integrate technology, transform their teaching, web coding and connect with inspiring educators worldwide. We also discuss education policy, education reform and often have leaders</p>
            </div>
        </div>
        <div class="container right">
            <div class="content">
                <h3>Easy Learning</h3>
                <ul>
                    <li>EdChat has focus on simplicity</li>
                    <li>EdChat practice easy and straight-forward learning</li>
                    <li>EdChat uses simple code explanations with simple illustrations of how to use it</li>
                    <li>EdChat's tutorials start from basic level and move all the way up to professional references</li>
                </ul>
            </div>
        </div>
        <div class="container left">
            <div class="content">
                <h3>Connecting with experts on topics</h3>
                <p>
                    The great thing about using Edchat is that you soon learn who the experts are in particular fields and subjects. When you start following these experts you learn more and gain useful content from them, this empowers you to produce great results. Edchat has the ability to broaden your perspective on various subjects and gives illuminating, instant content that is new. You have the opportunity of engaging experts to get answers on topics that you may need help in</p>
            </div>
        </div>
        <div class="container right">
            <div class="content">
                <h3>Learners can build social credibility</h3>
                <p>Building a brand through the Edchat networks can help students build a portfolio for their career. The platforms can be used to start sharing work while a student is still in the learning space. This is beneficial to the launch of a student’s career it demonstrates the learning process has developed through their Edchat. By reflecting on educational background and gaining exposure on Edchat builds social credibility and students come across as people who can offer their expertise in specified fields. This prepares and positions your career to have social credibility. As social networks interactions advance in education systems, Edchat will become the number one means for solving education problems. The important benefit that networks build is the many helpful and beneficial tools and access that make learning become a pleasant process. A digital marketing qualification can inspire learners to know about the role of Edchat in education. This can lead to various Edchat and marketing job paths.</p>
            </div>
        </div>
        <div class="container left">
            <div class="content">
                <h3>Institutions communicate with students </h3>
                <p>
                    Learning colleges have the ability to connect with students through Edchat networks such as Facebook, Google Plus groups, and YouTube. These channels can be used to communicate campus news, make announcements and provide students with useful information. This builds engagement between the College and students which help tackle many student issues through the group interactions. Institutions can share supportive and positive posts that reach all students that are connected to the networks and pages. You can initiate hashtags on Edchat to engage students and online discussions that are helpful. Video is a prominent tool in Edchat trends that are effective and you can use it to share useful videos that inspire students and help them in their course subjects. Through social mediums such as YouTube, Facebook or Instagram live video the engagements between students and the institution can be sustained. It is advisable to be selective about which social platforms to use for the best practice.</p>
            </div>
        </div>
        <div class="container right">
            <div class="content">
                <h3>Connecting with experts on topics</h3>
                <p>The great thing about using Edchat is that you soon learn who the experts are in particular fields and subjects. When you start following these experts you learn more and gain useful content from them, this empowers you to produce great results. Edchat has the ability to broaden your perspective on various subjects and gives illuminating, instant content that is new. You have the opportunity of engaging experts to get answers on topics that you may need help in.</p>
            </div>
        </div>
    </div>
    <div style="height: 30px;"></div>

<?php
                     require_once("footer.php");
                    ?>

  


    <div id="myNav" class="overlay">

        <a class="closebtn" onclick="closeNav()">&times;</a>

        <div class="overlay-content" style="text-align:left;">
            <?php
                     require_once("signin.php");
                    ?>
        </div>

    </div>

    <div id="mySign" class="overlay">

        <a class="closebtn" onclick="closeSign()">&times;</a>

        <div class="overlay-content" style="top:10%">
            <?php
                     require_once("signup.php");
                    ?>
        </div>

    </div>

    <script type="text/javascript" src="js/java.js"></script>
</body>

</html>