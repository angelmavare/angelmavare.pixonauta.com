<?php 
$pageName = "Uxtify theme | Angel Mavare";
$projectName = "Uxtify theme";
?>
<?php require('partials/header.php');?>
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
            <img src="assets/img/portfolio/uxtify_theme/uxtify-fig.jpg" alt="<?php echo $projectName; ?> cover" class="img-responsive" />
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <h3 class="text-uppercase"><?php echo $projectName; ?></h3>
            <h5>A wordpress theme made for pixonauta.com as "Pixonauta blog"</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            <p>Uxtify theme was the first blog style template for pixonauta.com. We wanted the style to be a bit out of the box, with vertical text, undocked cards, and a nice way to display categories.</p>

            <p>The theme was made from scratch using the best practices of the moment. A bit challenging in terms of css but a fun learning experience.</p>
        

            <img src="assets/img/portfolio/uxtify_theme/uxtify-home2.jpg" alt="<?php echo $projectName; ?>" title="<?php echo $projectName; ?> home" class="img-responsive" style="margin-top:30px;" />
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
                <li><i class="fa-solid fa-pen-nib text-center"></i> <strong>Design:</strong> Ana Echeverría</li>
                <li><i class="fa-solid fa-code text-center"></i> <strong>Development:</strong> Angel Mavare</li>
                <li><i class="fa-solid fa-calendar-days text-center"></i> <strong>Date:</strong> Dec 2019</li>
                <li><i class="fa-solid fa-house text-center"></i> <strong>Org:</strong> <a target="_blank" href="https://pixonauta.com">pixonauta.com</a></li>
                <li><i class="fa-solid fa-tag text-center"></i> <strong>Tags:</strong> <span class="badge badge-primary">theme</span> <span class="badge badge-primary">wordpress</span> <span class="badge badge-primary">php</span></li>
                
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