   <!-- footer -->
   <footer>
        <div class="container-fluid">
            <p class="copyright">© Angel Mavare <?php echo date("Y"); ?></p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="fa-solid fa-arrow-up"></i></a>
    <!-- end back to top -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/animated-headline.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="assets/js/custom.js"></script>
    <script>
        var idpage = $('.whatpage').attr("id");
        if(idpage == "home"){
            $('.page-home').append('<i class="fa-solid fa-circle color"></i>');
        }
        if(idpage == "about"){
            $('.page-about').append('<i class="fa-solid fa-circle color"></i>');
        }
        if(idpage == "services"){
            $('.page-services').append('<i class="fa-solid fa-circle color"></i>');
        }
        if(idpage == "portfolio"){
            $('.page-portfolio').append('<i class="fa-solid fa-circle color"></i>');
        }
        if(idpage == "contact"){
            $('.page-contact').append('<i class="fa-solid fa-circle color"></i>');
        }
        if(idpage == "project"){
            $('.page-portfolio').append('<i class="fa-solid fa-circle color"></i>');
        }
    </script>

</body>

</html>