<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>OceanicTrade Investment</title>
    <link rel='stylesheet' href="/assets/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <section>
            <!---Navigation--->
            <div class="nav-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-brand" href="#"><img src="/images/logo.png" alt="OceanicTrade" width="50"></div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active-nav-link">
                                <a class="nav-link" href="Index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="Investment-Plans.html">Investment Plans</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="Customer-Service.html">Customer Service</a>
                            </li>

                           <!---<li class="nav-item">
                                <a class="nav-link " href="Testimonials.html">Testimonials</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="Technology.html">Technology</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="Blog.html">Blog</a>
                            </li>--> 

                            <li class="nav-item">
                                <a class="nav-link " href="Contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <!---slider--->
        <div class="slider">
            <div id="HeaderSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#HeaderSlider" data-slide-to="0" class="active"></li>
                  <li data-target="#HeaderSlider" data-slide-to="1"></li>
                  <li data-target="#HeaderSlider" data-slide-to="2"></li>
                </ol>
                
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="/images/Slider1.jpg" class="d-block img-fluid" alt="Bitcoin Mining">
                        <div class="carousel-caption">
                            <h3>Welcome to OceanicTrade</h3>
                            <h1>START MINING CRYPTOS TODAY</h1>
                            <h4>Join Over 2.5 million People Worlwide in Mining with the World's Leading Hashpower</h4>

                            <div class="action-button-wrapper">
                                <div class="action-button-login">
                                    <button type="button" onclick="document.location='/login'" class="btn btn-primary">LOGIN</button>
                                </div>

                                <div class="action-button">
                                    <button type="button" onclick="document.location='/register'" class="btn btn-primary">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                  </div>

                  <div class="carousel-item">
                      <img src="/images/Slider4.jpg" class="d-block img-fluid" alt="Ethereum Mining">
                        <div class="carousel-caption">
                            <h2>Starting is Super-Simple!</h2>
                            <h4>All You Need is Setting Up Your Account</h4>

                            <div class="action-button-wrapper">
                                <div class="action-button-login">
                                    <button type="button" onclick="document.location='login-page.html'" class="btn btn-primary">LOGIN</button>
                                </div>

                                <div class="action-button">
                                    <button type="button" onclick="document.location='Registration-page.html'" class="btn btn-primary">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                  </div>

                  <div class="carousel-item">
                      <img src="/images/Slider3.jpg" class="d-block img-fluid" alt="Litecoin Mining">
                        <div class="carousel-caption">
                            <h4>As Soon As Your Account Is Ready, You Can Start Mining Your First Coin</h4>
                            <h4>Our Bitcoin Cloud Mining Services Makes Everything Super-Simple!</h4>

                            <div class="action-button-wrapper">
                                <div class="action-button-login">
                                    <button type="button" onclick="document.location='login-page.html'" class="btn btn-primary">LOGIN</button>
                                </div>

                                <div class="action-button">
                                    <button type="button" onclick="document.location='Registration-page.html'" class="btn btn-primary">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>

                <a class="carousel-control-prev" href="#HeaderSlider" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#HeaderSlider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>

        <hr style="margin: 10px; margin-left: 10%; width: 80%; height: 4px; border-width: 0; color: rgba(173, 49, 4, 0.856); background-color: rgba(173, 49, 4, 0.856);">

        <div class="home-page-content-wrapper">
            <section>

                <!---About-Us--->
                <div class="About-us-wrapper">
                    <div class="about-content-wrapper">
                        <h2>What We Offer</h2>
                        <p>
                            With our latest bitcoin mining hardware, we guarantee
                            the fastest bitcoin mining experience. Hassle free, no
                            struggles with rig assembly, or noisy miners at home.
                        </p>

                        <button type="button" onclick="document.location='About-Us.html'" class="btn btn-primary">About Us</button>
                    </div>
                    <hr style="margin: 10px; margin-left: 40%; width: 20%; height: 4px; border-width: 0; color: rgba(173, 49, 4, 0.856); background-color: rgba(173, 49, 4, 0.856);">
                </div>
            </section>

            <section>
                <!---Extra Services--->
                <div class="extra-services">
                    <div class="extra-services-content-wrapper">
                        <h2>Interested in Other Cryptos not Bitcoin</h2>
                        <p>
                            Our catalogue presents other cryptocurrencies that is
                            not Bitcoin! You can easily switch your mining power
                            for all the available cryptos using our website.
                        </p>

                        <button type="button" onclick="document.location='Customer-Service.html'" class="btn btn-primary">Customer Service</button>
                    </div>
                    <hr style="margin: 10px; margin-left: 40%; width: 20%; height: 4px; border-width: 0; color: rgba(173, 49, 4, 0.856); background-color: rgba(173, 49, 4, 0.856);">
                </div>
            </section>

            <section>
                <!---Registration--->
                <div class="registration">
                    <div class="registration-content-wrapper">
                        <h2>Get Started with Your FIRST Mining Output</h2>
                        <p>
                            Get Started with Your FIRST Mining Output
                            Give our Bitcoin mining platform try now!
                            Your periodic mining output will be
                            deposited to your personal wallet.                            
                        </p>

                        <button type="button" onclick="document.location='Investment-Plans.html'" class="btn btn-primary">Investment Plans</button>
                    </div>
                    <hr style="margin: 10px; margin-left: 40%; width: 20%; height: 4px; border-width: 0; color: rgba(173, 49, 4, 0.856); background-color: rgba(173, 49, 4, 0.856);">
                </div>
            </section>

        </div>

        <section>
            <!---Videos and Customer Service--->
            <div class="two-column-wrapper">
                <div class="videos-slider-wrapper">
                    <div class="videos-heading">
                        <h2>
                            OUR VIDEOS
                        </h2>
                    </div>
                    <hr style="border: dotted 1px; margin: 10px; margin-left: 10px; width: 20%; height: 1px; border-width: 0; color: rgba(0, 0, 0, 0.507); background-color: rgba(0, 0, 0, 0.507);">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <!---<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>--->
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe src="https://player.vimeo.com/video/165840295" width="500" height="375" frameborder="0" importance="low" loading="lazy" title="OceanicTrade Building Enigma / The largest Ethereum Mining Facility" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" class="d-block w-100" alt="..."></iframe>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>OceanicTrade Building Enigma</h5>
                                    <p>The largest Ethereum Mining Facility</p>
                                </div>
                          </div>
                          
                          <div class="carousel-item">
                                <iframe src="https://player.vimeo.com/video/145282999" width="500" height="375" frameborder="0" importance="low" loading="lazy" title="OceanicTrade Mining X11 Cryptocurrency Farm Build Out" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""class="d-block w-100" alt="..."></iframe> 
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>OceanicTrade Mining X11</h5>
                                    <p>Cryptocurrency Farm Build Out</p>
                                </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>

                <div class="customer-service">
                    <div class="customer-service-heading">
                        <h2>
                            CUSTOMER SERVICE
                        </h2>
                    </div>
                    <hr style="border: dotted 1px; margin: 10px; margin-left: 30px; width: 30%; height: 1px; border-width: 0; color: rgba(0, 0, 0, 0.507); background-color: rgba(0, 0, 0, 0.507);">

                    <div class="cs-img-text-wrapper">
                        <div class="cs-img-background" style="background-image: url(Images/customer-service.jpg);"></div>
                        <div class="cs-text-wrapper">
                            <p>
                                <b>What coins can I mine with each algorithm?</b>
                            </p>
                            <p>
                                Do you have other questions? <br>
                                Browse our customer service directory and get answers to the most common questions.
                            </p>
                            <button type="button" onclick="document.location='Customer-Service.html'" class="btn btn-primary">FAQ</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!---Investment Plans--->
        <section id="investment-plan">
            <div class="investment-plan-container">
                <h1>INVESTMENT PLANS</h1>

                <div class="row">
                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2 itemprop="description">BASIC</h2>
                                <P itemprop="description">Starter</P>
                            </div>

                            <div class="price-content"> 
                                <h3 class="demand">Invest</h3>
                                <div class="price-tag">
                                    <p>$</p><span>200</span><sup>00</sup><p>-$</p><span>9,999</span><sup>00</sup>
                                </div> 
                                <h3 class="demand">Get an ROI of:</h3>
                                <h1 class="percent-benefit">3%</h1>
                                <h3>DAILY</h3>
                                <ul>
                                    <li class="list-introduction">Extra Access</li>
                                    <li><i class="fa fa-check-square"></i>30 Days Bitcoin Mining</li>
                                    <li><i class="fa fa-check-square"></i>14 Days Max Cashout</li>
                                    <li><i class="fa fa-check-square"></i>Zero Maintenance Fee</li>
                                </ul>
                            </div>

                            <div class="price-button-wrapper">
                                <div class="price-button-purchase">
                                    <a class="buy-btn" href="#">PURCHASE PLAN</a>
                                </div>
    
                                <div class="price-button-learn-more">
                                    <a class="buy-btn" href="#">LEARN MORE</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2 itemprop="description">SMART</h2>
                                <P itemprop="description">Best Value</P>
                            </div>

                            <div class="price-content"> 
                                <h3 class="demand">Invest</h3>
                                <div class="price-tag">
                                    <p>$</p><span>10,000</span><sup>00</sup><p>-$</p><span>49,999</span><sup>00</sup>
                                </div> 
                                <h3 class="demand">Get an ROI of:</h3>
                                <h1 class="percent-benefit">4.5%</h1>
                                <h3>DAILY</h3>
                                <ul>
                                    <li class="list-introduction">Extra Access</li>
                                    <li><i class="fa fa-check-square"></i>30 Days Bitcoin Mining</li>
                                    <li><i class="fa fa-check-square"></i>12 Days Max Cashout</li>
                                    <li><i class="fa fa-check-square"></i>Zero Maintenance Fee</li>
                                </ul>
                            </div>

                            <div class="price-button-wrapper">
                                <div class="price-button-purchase">
                                    <a class="buy-btn" href="#">PURCHASE PLAN</a>
                                </div>
    
                                <div class="price-button-learn-more">
                                    <a class="buy-btn" href="#">LEARN MORE</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2 itemprop="description">ULTIMATE</h2>
                                <P itemprop="description">Professional</P>
                            </div>

                            <div class="price-content"> 
                                <h3 class="demand">Invest</h3>
                                <div class="price-tag">
                                    <p>$</p><span>50,000</span><sup>00</sup><p>-$</p><span>99,999</span><sup>00</sup>
                                </div> 
                                <h3 class="demand">Get an ROI of:</h3>
                                <h1 class="percent-benefit">5%</h1>
                                <h3>DAILY</h3>
                                <ul>
                                    <li class="list-introduction">Extra Access</li>
                                    <li><i class="fa fa-check-square"></i>60 Days Bitcoin Mining</li>
                                    <li><i class="fa fa-check-square"></i>10 Days Max Cashout</li>
                                    <li><i class="fa fa-check-square"></i>Zero Maintenance Fee</li>
                                </ul>
                            </div>

                            <div class="price-button-wrapper">
                                <div class="price-button-purchase">
                                    <a class="buy-btn" href="#">PURCHASE PLAN</a>
                                </div>
    
                                <div class="price-button-learn-more">
                                    <a class="buy-btn" href="#">LEARN MORE</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="single-price">
                            <div class="price-head">
                                <h2 itemprop="description">CUSTOM</h2>
                                <P itemprop="description">Create Custom Plan</P>
                            </div>

                            <div class="price-content"> 
                                <h3 class="demand">Invest</h3>
                                <div class="price-tag">
                                    <p>$</p><span>0</span><sup>00</sup>
                                </div> 
                                <h3 class="demand">Get an ROI of:</h3>
                                <h1 class="percent-benefit">0%</h1>
                                <h3>DAILY</h3>
                                <ul>
                                    <li class="list-introduction">Extra Access</li>
                                    <li><i class="fa fa-check-square"></i>90 Days Bitcoin Mining</li>
                                    <li><i class="fa fa-check-square"></i>SHA-256 Mining Algorithm</li>
                                    <li><i class="fa fa-check-square"></i>Zero Maintenance Fee</li>
                                </ul>
                            </div>

                            <div class="price-button-wrapper">
                                <div class="price-button-purchase">
                                    <a class="buy-btn" href="#">PURCHASE PLAN</a>
                                </div>
    
                                <div class="price-button-learn-more">
                                    <a class="buy-btn" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>All plans are one-time payments (upfront fee) for the entire contract duration and are not based on a monthly subscription model.</h5>
            </div>
        </section>

        <!---Payment Prompt-->
        <section id="payment-prompt">
            <div class="payment-prompt-wrapper">
                <div class="payment-prompt-background-img" style="background-image: url(Images/payment-slider.jpg);"></div>

                <div class="img-text-button-wrapper">
                    <div class="subtitle">Payment Made Easy!</div>

                    <div class="images-wrapper">
                        <div class="img-wrapper">
                            <img src="/images/mastercard.png">
                        </div>
                        <div class="img-wrapper">
                            <img src="/images/visa.png">
                        </div>
                        <div class="img-wrapper">
                            <img src="/images/paypal.png">
                        </div>
                        <div class="img-wrapper">
                            <img src="/images/bitcoin-icon.png">
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary">Try Now</button>
                </div>

            </div>
        </section>
        
        <section id="testimonials">
            <!---Tesimonials--->
            <div class="testimonials-wrapper">
                <div class="testimonials-heading">TESTIMONIALS</div>
                <div class="three-column-grid">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <!---<ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>--->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonials-items">
                                    <img src="/images/mulligan.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testimonials-items">
                                    <img src="/images/Pamela.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testimonials-items">
                                    <img src="/images/Paul.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>--->
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <!---<ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>--->
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="testimonials-items">
                                    <img src="/images/mulligan.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item active">
                                <div class="testimonials-items">
                                    <img src="/images/Pamela.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testimonials-items">
                                    <img src="/images/Paul.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>--->
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <!---<ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>--->
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="testimonials-items">
                                    <img src="/images/mulligan.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testimonials-items">
                                    <img src="/images/Pamela.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item active">
                                <div class="testimonials-items">
                                    <img src="/images/Paul.png">
                                    <div class="testimonial-text">
                                        <p><i> OceanicTrade is one of the leading cloudmining companies
                                        and a trustworthy partner of ours. It’s good to see that 
                                        they are an honest cloudmining service which shows their farms openly to the public.</i></p>
                                        <p style="font-size: small;">
                                            <b>~Guy Corem, CEO Spondoolies-Tech
                                            Leading Bitcoin Asic Manufacturing Company</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>--->
                    </div>
                </div>
            </div>
        </section>

        <!---Prompt Banner--->
        <section id="prompt-banner">
            <div class="prompt-banner-wrapper">
                <div class="prompt-banner-text">
                    <h1>Try Oceanic Trade Today</h1>
                    <p>world automated trading platform</p>

                    <div class="button-signup">
                        <button type="button" onclick="document.location='Registration-page.html'" class="btn">SIGN UP</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

<footer>
    <div class="footer">
        <div class="footer-wrapper">
            <div class="four-column-grid">
                <div class="footer-items">
                    <div class="footer-link-text">
                        <p><a class="b" href="Index.html">Home</a></p>
                        <p><a class="c" href="Investment-Plans.html">Investment Plans</a></p>
                        <p><a class="d" href="###">Why OceanicTrade</a></p>
                    </div>
                </div>

                <div class="footer-items">
                    <div class="footer-link-text">
                        <p><a class="e" href="About-Us.html">About Us</a></p>
                        <p><a class="f" href="###">Our Mission</a></p>
                        <p><a class="g" href="Financial-Planning.html">Financial Planning</a></p>
                    </div>
                </div>

                <div class="footer-items">
                    <div class="footer-link-text">
                        <p><a class="h" href="###">Overview</a></p>
                        <p><a class="i" href="Customer-Service.html">Customer Service</a></p>
                        <p><a class="j" href="###">Review</a></p>
                    </div>
                </div>

                <div class="footer-items">
                    <div class="footer-link-text">
                        <p><a class="k" href="###">Security</a></p>
                        <p><a class="l" href="Contact.html">Contact</a></p>
                        <p><a class="m" href="###">Affiliate Program</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-address-bottom">
        <div class="five-column-wrapper">
            <div class="five-column-wrapper-items">
                <div class="five-column-wrapper-item-brand">
                    <img src="/images/logo.png">
                </div>
            </div>

            <div class="five-column-wrapper-items">
                <div class="five-column-wrapper-item">
                    <div class="five-column-logos">
                        <img src="/images/mastercard-white.png">
                        <img src="/images/visa-white.png">
                        <img src="/images/paypal-white.png">
                        <img src="/images/btc-white.png">
                    </div>
                    <p>We accept all payments</p>
                </div>
            </div>

            <div class="five-column-wrapper-items">
                <div class="five-column-logos">
                    <a href="####"><img src="/images/facebook-white.png" alt="facebook" style="width: 50px; height: 50px;"></a>
                    <a href="####"><img src="/images/instagram-white.png" alt="instagram" style="width: 50px; height: 50px;"></a>
                    <a href="####"><img src="/images/twitter-white.png" alt="twitter" style="width: 50px; height: 50px;"></a>
                    <a href="####"><img src="/images/linkedin-white.png" alt="linkedin" style="width: 50px; height: 50px;"></a>
                </div>
                <p>Social</p>
            </div>

            <div class="five-column-wrapper-items">
                <div class="five-column-wrapper-item">
                    <p>
                        OceanicTrade Mining, Trading, Investment Services Ltd.
                    </p>
                    <p>
                        Trinity Chambers, P.O. Box 4301, Road Town, Tortola, British Virgin Islands
                    </p>
                </div>
            </div>

            <div class="five-column-wrapper-items">
                <div class="five-column-wrapper-item-brand">
                    <img src="/images/ssl-secure-encryption.png">
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">

        <p>The information on this website does not convey an offer of any type and is not intended to be, 
            and should not be construed as, an offer to sell, or the solicitation of an offer to buy, any securities, 
            commodities, or other financial products. In addition, the information on this website does not constitute 
            the provision of investment advice. No assurances can be made that any aims, assumptions, expectations, strategies, 
            and/or goals expressed or implied herein were or will be realized or that the activities or any performance described 
            did or will continue at all or in the same manner as is described on this website.
        </p>

        <hr style="border: dotted 1px; margin: 10px; margin-left: 10%; width: 80%; height: 1px; border-width: 0; color: #274c65; background-color: #274c65;">
    </div>
</footer>
<script> (function(document) { var placeholder = document.querySelector('.vp-placeholder'); 
var placeholderThumb = document.querySelector('.vp-placeholder-thumb'); var videoWidth = parseInt('1280'); 
var videoHeight = parseInt('720'); var thumb = new Image(); thumb.onload = function() 
{ var videoAspectRatio = videoWidth / videoHeight; var imageAspectRatio = this.width / this.height; if 
(imageAspectRatio <= 0.95 * videoAspectRatio || imageAspectRatio >= 1.05 * videoAspectRatio) 
{ var rect = placeholder.getBoundingClientRect(); var placeholderWidth = rect.right - rect.left; 
var placeholderHeight = rect.bottom - rect.top; var viewportWidth = window.innerWidth / placeholderWidth * 100; 
var viewportHeight = window.innerHeight / placeholderHeight * 100; placeholderThumb.style.height = 'calc(' + this.height + ' / ' + this.width + ' * ' + viewportWidth + 'vw)'; placeholderThumb.style.maxWidth = 'calc(' + this.width + ' / ' + this.height + ' * ' + viewportHeight + 'vh)'; } 
placeholder.style.visibility = 'visible'; }; thumb.src = "https://i.vimeocdn.com/video/543355533.jpg?mw=80&q=85"; }(document)); </script>

<script>
    const carouselItems = document.querySelectorAll('.carousel-item')

    carouselItems.forEach(carouselItem => {
        carouselItem.addEventListener('mouseover', () => {
            carouselItem.childNodes[1].classList.add('img-darken');
        })

        carouselItem.addEventListener('mouseout', () => {
            carouselItem.childNodes[1].classList.remove('img-darken');
        })
    })
</script>
</html>