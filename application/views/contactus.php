<div class="main-container">
    <div id="banner-contact" class="banner">
        <div class="wrapper">
            <h1 class="banner-name">
                CONTACT US
            </h1>
        </div>
    </div>
    <div class="main wrapper clearfix">

        <div id="contact-form" class="contact-panel">
            <form name="contact-us-form" method="POST" accept-charset="utf-8" action="<?php echo site_url('contactus') ?>">
                <fieldset>
                    <legend><h2>Send a Message</h2></legend>
                    <?php if ($status != 'na') { ?>
                    <div id="contact-help" class="contact-<?php echo $status ?>">
                        <?php if ($status == 'success') { ?>
                            <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i>
                            <h3>Message sent successfully.</h3>
                            <p>Thank you for contacting Rodan Construction. We will get back to you as soon as we can.</p>
                        <?php } else if ($status == 'error') { ?>
                            <i class="fa fa-exclamation-circle fa-lg" aria-hidden="true"></i>
                            <h3>Error</h3>
                            <p><?php echo validation_errors() ?></p>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="form-field">
                        <label for="contact-name">
                            Name <abbr title="required" required>*</abbr>
                        </label><br>
                        <input type="text" name="contact-name" id="contact-name" 
                            <?php if ($status == 'error') {
                                echo 'value="'.set_value('contact-name').'"';
                            } ?>><br>
                    </div>
                    <div class="form-field">
                        <label for="contact-email">
                            Email <abbr title="required" required>*</abbr>
                        </label><br>
                        <input type="text" name="contact-email" id="contact-email"
                            <?php if ($status == 'error') {
                                echo 'value="'.set_value('contact-email').'"';
                            } ?>><br>
                    </div>
                    <div class="form-field">
                        <label for="contact-phone">
                            Phone <abbr title="required" required>*</abbr>
                        </label><br>
                        <input type="text" name="contact-phone" id="contact-phone"
                            <?php if ($status == 'error') {
                                echo 'value="'.set_value('contact-phone').'"';

                            } ?>><br>
                    </div>
                    <div class="form-field">
                        <label for="contact-message">
                            Message <abbr title="required" required>*</abbr>
                        </label><br>
                        <textarea name="contact-message" id="contact-message" rows=7 placeholder="Your message here..."><?php 
                            if ($status == 'error') {
                                echo set_value('contact-message');
                            } 
                        ?></textarea><br>
                    </div>
                    <input id="contact-submit" type="submit" value="Submit">
                </fieldset>
            </form>
        </div><div id="contact-details" class="contact-panel">
            <h2>Get in Touch</h2>
            <div id="contact-details-box">
                <div title="Address">
                    <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                    <p>2666 Royal Ann Dr,<br>Union City, CA 94587</p>
                </div>
                <div title="Phone Number">
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    <p>+1 (501) 468-7980</p>
                </div>
                <div title="Email Address">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>dan@rodanconstruction.com</p>
                </div>
            </div>
            <iframe id="contact-map" frameborder="0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAJ4DkoOB32Hqt2di5pvqxdwfQwg9oMq2A
                &q=2666+Royal+Ann+Dr,+Union+City+CA
                &zoom=15" allowfullscreen>
            </iframe>
        </div>
    </div> <!-- #main -->
</div> <!-- #main-container -->