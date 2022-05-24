<?php 
$pageName = "Contact | Angel Mavare"; 

?>
<?php require('partials/header.php');?>
<div class="whatpage" id="contact"></div>
    <!-- top bar -->
    <div class="top-bar">
        <h1>contact Me</h1>
        <p><a href="/">Home</a> / Contact Me</p>
    </div>
    <!-- end top bar -->

    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="https://api.staticforms.xyz/submit" method="post">
                <input type="hidden" name="accessKey" value="ca5faac3-6cc0-4b7c-847d-f37eec6ae4fd"> <!-- Required -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="name">
                            <span>your name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="email">
                            <span>your email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="subject">
                            <span>Subject</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="message"></textarea>
                            <span>message</span>
                        </div>
                    </div>
                    <input type="text" name="honeypot" style="display:none">
                    <div class="col-md-12">
                    <input type="hidden" name="redirectTo" value="https://angelmavare.pixonauta.com/contact-success.php">
                    <input type="submit" class="btn btn-box" value="Submit" />
                        
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class="text-uppercase">contact me</h3>
            <!-- <h5>Creative & Lorem ipsum dolor sit amet</h5> -->
            <div class="h-30"></div>
            <p>You can contact me through this form, my email or through my whatsapp to request information, budgets or any concerns</p>
            <div class="contact-info">
                <p><i class="fa-brands fa-whatsapp"></i> +58 414 520 4695</p>
                <p><i class="fa-solid fa-envelope"></i> angelmavare1@gmail.com</p>
            </div>
        </div>


    </div>
    <!-- end main-container -->

    <?php require('partials/footer.php');?>