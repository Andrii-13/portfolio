<!-- footer
   ================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">


            <?php wp_nav_menu([
                'theme_location'  => 'footer-menu',
                'menu'            => '',
                'container'       => null,
                'menu_class'      => 'footer-nav',
            ]); ?>


            <!-- <ul class="footer-nav">;
                <li><a href="#">Home.</a></li>;
                <li><a href="#">Blog.</a></li>;
                <li><a href="#">Portfolio.</a></li>;
                <li><a href="#">About.</a></li>;
                <li><a href="#">Contact.</a></li>;
                <li><a href="#">Features.</a></li>;
            </ul>;

        -->

            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
                <li>Copyright &copy; 2014 Sparrow</li>
                <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
            </ul>

        </div>

        <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

    </div>

</footer> <!-- Footer End-->

<!-- Java Script
   ================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
</script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

<?php wp_footer() ?>

</body>

</html>