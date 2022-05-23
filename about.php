<?php 
$pageName = "About me | Angel Mavare"; 

?>
<?php require('partials/header.php');?>
<div class="whatpage" id="about"></div>
    <!-- Top bar -->
    <div class="top-bar">
        <h1>About Me</h1>
        <p><a href="/">Home</a> / About me</p>
    </div>
    <!-- end Top bar -->

    <!-- Main container -->
    <div class="container main-container clearfix">
        <div class="col-md-6">
            <img src="assets/img/profile4.jpg" class="img-responsive" alt="Angel Mavare Portrait" title="Angel Mavare Portrait" />
        </div>
        <div class="col-md-6">
            <h3 class="uppercase">About Me</h3>

            <div class="h-0"></div>
            <p>
                Hello! I'm Angel, Web full-stack developer from Venezuela, graduated in Computer Engineering from the Universidad Centroccidental Lisandro Alvarado (UCLA).
                
                </p>

            <p>I work in the web design and web development areas, additionally I like to work with pieces of graphic design and digital illustration. I've great interest in Front-End Web development and UX/UI design.</p>
            <p>I have more than 7 years providing solutions to companies that want to enter the digital world and take the next step to be on the internet.</p>
            <p>I also tend to actively share information, tips and code on my blog <a class="p-color" target="_blank" href="https://pixonauta.com/"><strong>pixonauta.com</strong></a></p>
            <div class="h-10"></div>
            <ul class="social-ul">
            <?php require('partials/social-full.php');?>
            </ul>


        </div>
    </div>
    <!-- end Main container -->


    <?php require('partials/footer.php');?>