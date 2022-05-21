<?php 
$pageName = "SMS Shop | Angel Mavare"; 
$projectName = "SMS Shop";
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
            <img src="assets/img/portfolio/sshop/sshop-fig.jpg" alt="<?php echo $projectName; ?> cover" class="img-responsive" />
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <h3 class="text-uppercase"><?php echo $projectName; ?></h3>
            <h5>E-commerce for SMS Shop</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            <!-- <p>My responsibility was the design and development of the website adapting the identity of the brand. Work done for Accon software and customer</p> -->

            
            <img src="assets/img/portfolio/sshop/ss-JPG-09.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?>" class="img-responsive"  />
            <img src="assets/img/portfolio/sshop/ss-JPG-10.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?>" class="img-responsive"  />
            <img src="assets/img/portfolio/sshop/ss-JPG-11.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?>" class="img-responsive" />
            <img src="assets/img/portfolio/sshop/ss-JPG-13.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?>" class="img-responsive"  />
            <img src="assets/img/portfolio/sshop/ss-JPG-14.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?>" class="img-responsive"  />
        
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
                <!-- <li><i class="fa-solid fa-pen-nib text-center"></i> <strong>Design:</strong> Ana Echeverría</li> -->
                <!-- <li><i class="fa-solid fa-code text-center"></i> <strong>Development:</strong> Angel Mavare</li> -->
                <li><i class="fa-solid fa-calendar-days text-center"></i> <strong>Date:</strong> April 2018</li>
                <li><i class="fa-solid fa-circle-user text-center"></i> <strong>Customer:</strong> <?php echo $projectName; ?></li>
                <li><i class="fa-solid fa-building text-center"></i> <strong>Company:</strong> Accon Software</li>
                <li><i class="fa-solid fa-tag text-center"></i> <strong>Tags:</strong>  <span class="badge badge-primary">e-commerce</span> <span class="badge badge-primary">design</span> <span class="badge badge-primary">prestashop</span> </li>
                
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