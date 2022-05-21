<?php 
$pageName = "Scribana shop | Angel Mavare"; 
$projectName = "Scribana shop";
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
            <img src="assets/img/portfolio/scribana/scribana-fig.jpg" alt="<?php echo $projectName; ?> cover" class="img-responsive" />
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <h3 class="text-uppercase"><?php echo $projectName; ?></h3>
            <h5>E-commerce project for Scribana shop</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            <p>Scribana is a high-quality art and office stationery store that sells its products in Venezuela, it is characterized by showing a vintage but minimal style.</p>

            <p>For this ecommerce we implemented Woocommerce on the site, through a custom child theme for the Astra template, which met the needs of the client. The challenge was to adapt the payment channels for Venezuela, where payment with credit cards is limited. To do this, we integrate communication channels with Facebook and Whatsapp business in order to offer a means by which to attend to those difficult cases at the time of purchase.</p>
        

            <img src="assets/img/portfolio/scribana/Scribana-Home.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?> home" class="img-responsive" style="margin-top:30px;" />
            <img src="assets/img/portfolio/scribana/Scribana-Products.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?> home" class="img-responsive" style="margin-top:30px;" />
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
                <!-- <li><i class="fa-solid fa-pen-nib text-center"></i> <strong>Design:</strong> Ana Echeverría</li> -->
                <!-- <li><i class="fa-solid fa-code text-center"></i> <strong>Development:</strong> Angel Mavare</li> -->
                <li><i class="fa-solid fa-calendar-days text-center"></i> <strong>Date:</strong> October 2021</li>
                <li><i class="fa-solid fa-circle-user text-center"></i> <strong>Client:</strong> <a target="_blank" href="https://scribana.shop/"><?php echo $projectName; ?></a></li>
                <!-- <li><i class="fa-solid fa-building text-center"></i> <strong>Company:</strong> <a target="_blank" href="https://scribana.shop/">pixonauta.com</a></li> -->
                <li><i class="fa-solid fa-tag text-center"></i> <strong>Tags:</strong> <span class="badge badge-primary">wordpress</span> <span class="badge badge-primary">woocommerce</span> <span class="badge badge-primary">e-commerce</span></li>
                
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