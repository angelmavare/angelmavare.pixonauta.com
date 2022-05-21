<?php 
$pageName = "Pixonauta | Angel Mavare"; 
$projectName = "Pixonauta agency";
?>

<?php require('partials/header.php');


?>
<div class="whatpage" id="project"></div>
    <!-- top-bar -->
    <div class="top-bar">
        <h1><?php echo $projectName; ?></h1>
        <p><a href="/">Home</a> / <a href="portfolio.php">portfolio</a> / <?php echo $projectName; ?></p>
    </div>
    <!-- end top-bar -->
    
    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-12">
            <img src="assets/img/portfolio/pixonauta2017/pixonauta-fig.jpg" alt="<?php echo $projectName; ?> cover" class="img-responsive" />
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <h3 class="text-uppercase"><?php echo $projectName; ?></h3>
            <h5>Website for pixonauta agency</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            <p>The first version of pixonauta in 2016 was "Pixonauta Agency", the project included logo design, character design, background illustrations, web design and development.</p>

            <p>The site consisted of a home page, a project gallery, contact and a price list that worked with php to later be assembled as a wordpress template. The Pixonauta agency's site was launched in 2017 and worked until 2019, when it became "Pixonauta blog" whose purpose until now is to share information about design and programming.</p>
        
            <img src="assets/img/portfolio/pixonauta2017/bg1-white2--pixonauta.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?> home" class="img-responsive" style="margin-top:30px;" />
            <img src="assets/img/portfolio/pixonauta2017/pixonautaweb2.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?> home" class="img-responsive" style="margin-top:30px;" />
            <img src="assets/img/portfolio/pixonauta2017/pixo-landscapes2.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?> landscapes" class="img-responsive" style="margin-top:30px;" />
            <img src="assets/img/portfolio/pixonauta2017/pixonautacharacteres2.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?> characters" class="img-responsive" style="margin-top:30px;" />
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
                <!-- <li><i class="fa-solid fa-pen-nib text-center"></i> <strong>Design:</strong> Ana Echeverría</li> -->
                <!-- <li><i class="fa-solid fa-code text-center"></i> <strong>Development:</strong> Angel Mavare</li> -->
                <li><i class="fa-solid fa-calendar-days text-center"></i> <strong>Date:</strong> Jan 2017</li>
                <!--  -->
                <li><i class="fa-solid fa-house text-center"></i> <strong>Org:</strong> <a target="_blank" href="https://pixonauta.com">pixonauta.com</a></li>
                <!-- <li><i class="fa-solid fa-building text-center"></i> <strong>Company:</strong> <a target="_blank" href="https://scribana.shop/">pixonauta.com</a></li> -->
                <li><i class="fa-solid fa-tag text-center"></i> <strong>Tags:</strong> <span class="badge badge-primary">website</span> <span class="badge badge-primary">design</span> <span class="badge badge-primary">php</span> </li>
                
            </ul>
            <div class="h-10"></div>
            <h4>Follow me</h4>
            <ul class="social-ul">
                <?php require('partials/social.php');?>
            </ul>
        </div>
    </div>
    <!-- end main-container -->


    <?php require('partials/footer.php');?>