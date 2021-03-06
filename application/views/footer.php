        <?php if ($page == 'aboutus' OR $page == 'gallery') { ?>

        <div id="home-contact" class="home-section contact-footer">
            <div class="wrapper">
                <h3>Need help with your home?</h2>
                <p>Let's get in touch. Contact us <br>by phone or email.</p>
                <a href="<?php echo site_url('contactus') ?>">Contact Us</a>
            </div>
        </div>


        <?php } ?>

        <div class="footer-container">
            <footer class="wrapper">
                <p>&copy; Copyright <?= date('Y') ?><br><span> - </span>Rodan Construction | LIC# B731254 </p>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>

        <script src="<?php echo base_url('js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('js/main.js') ?>"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>