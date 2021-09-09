<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News</title>

        <body >
        


    
    
        <section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Section Header -->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2><span class="highlight-text">BLOG</span></h2>

                
            </div>
            <!-- Section Header End -->

            <div class="contact-details">


                <!-- Contact Form -->
                <div class="contact-form wow bounceInRight">

                    <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                    <form name="sentMessage"  method="post" action="sorte"id="contactForm" novalidate>
                    @csrf   
                    

                        <div class="col-md-12">
                                <textarea rows="10" cols="100" name="message" class="form-control" placeholder="Message" id="message"
                                          required data-validation-required-message="Please enter your message" minlength="5"
                                          data-validation-minlength-message="Min 5 characters" maxlength="999"
                                          style="resize:none"></textarea>
                        </div>

                        <div class="col-md-8 col-md-offset-2"><br>
                            <div id="success"> </div>
                            <input type="submit" class='btn btn-danger' style="margin: 10px 10px 10px 10px;">

                        </div>
                    </form>
                </div>

            </div>
        </div>
</section>



    </body>
</html>



