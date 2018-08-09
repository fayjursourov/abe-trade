<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>If you have some Questions or need Help! Please Contact Us!<br>We make Cool and Clean Design for your Business and Home</p>
                    <p>
                        <span>Contact Information:</span> <br>
                        <span class="glyphicon glyphicon-home"></span> 181 S.Whitfield Street Unit 1 Nazareth PA 18064 United States <br/>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">



                <?php

                $error_message = [];
                $success_message = '';

                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $name = isset($_POST['name']) ? $_POST['name'] : '';
                $message = isset($_POST['message']) ? $_POST['message'] : '';

                if(isset($_POST['contact-form'])) {

                    if($email == '' || $email == null) {
                        $error_message['email'] = 'Email is required';
                    }
                    if($message == '' || $message == null) {
                        $error_message['message'] = 'Message is required';
                    }


                    # if email or message is blank, show message to fill up required input

                    # if email, and msg given (or, error_message is empty)
                    # send email
                    # if can send mail
                    # show success message
                    # show failed message


                    if(empty($error_message)) {

                        $to = '';

                        if(empty($_GET)) {
                            $to = 'husam66@gmail.com';
                        }

                        if(isset($_GET['test-mail'])) {
                            $to = $_GET['test-mail'];
                        }

                        $subject = 'PiCanvas contact message';
                        $msg = '<p>Email: ' . $email . '<p>'
                            . '<p>Name: ' . $name . '<p>'
                            . '<p>Message' . $message .'<p>';
                        $sent = mail($to, $subject, $msg);

                        if($sent) {
                            $success_message = '<span class="alert-success">Message sent.</span>';
                        } else {
                            $success_message = '<span class="alert-warning">Message not sent. Please try again.</span>';
                        }
                    }


                }

                function get_error_class($msg, $name) {

                    if( isset($msg[$name]) ) {
                        return ' has-error';
                    }
                    return '';
                }

                function get_error_message($msg, $name) {

                    if( isset($msg[$name]) ) {
                        return $msg[$name];
                    }
                    return '';
                }

                //                var_dump($error_message);
                ?>



                <form name="sentMessage" id="contactForm" novalidate="" action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group<?php echo get_error_class($error_message, 'email'); ?>">
                                <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"><?php echo get_error_message($error_message, 'email'); ?></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="hidden" name="contact-form" value="yes">
                            <div class="form-group">
                                <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Your Name" id="name" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group<?php echo get_error_class($error_message, 'message'); ?>">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."><?php echo $message; ?></textarea>
                                <p class="help-block text-danger"><?php echo get_error_message($error_message, 'message'); ?></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
