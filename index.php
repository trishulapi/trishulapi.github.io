<?php 
require_once 'includes/define.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trishul API | A Lightweight, Fast, Secure, Easy to implement Framework for Restful APIs.</title>
        <?php require_once 'includes/header.php'; ?>
    </head>
    <body id="page-top">
        <?php include_once 'includes/navbar.php'; ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Trishul API!</div>
                <div class="masthead-heading text-uppercase">A Framework for Restful APIs.</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Learn More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Why Trishul API?</h2>
                    <h3 class="section-subheading text-muted">Trishul API is a PHP Framework for creating restFul APIs.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-bolt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Lightweight</h4>
                        <p class="text-muted">It is very lightweight and you can make your first endpoint in just less than 10 seconds.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Easy to Implement</h4>
                        <p class="text-muted">Implementation is very easy. Everything is documented. A lot of inbuilt classes and functions are useful for handling the requests and responses.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-code fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Fast Coding</h4>
                        <p class="text-muted">You can code faster with this framework. As lot of task is already handled by the Framework.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- features Grid-->
        <section class="page-section bg-light" id="features">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Features</h2>
                    <h3 class="section-subheading text-muted">Trishul API comes with all features of a full fledged framework.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- features item 1-->
                        <div class="portfolio-item">
                                <img class="img-fluid" src="assets/img/routing.jpg" alt="..." />
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><h2>Routing</h2></div>
                                <div class="portfolio-caption-subheading text-muted">For creating routes</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- features item 2-->
                        <div class="portfolio-item">
                           
                                <img class="img-fluid" src="assets/img/log.jpg" alt="..." />
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><h2>Logging</h2></div>
                                <div class="portfolio-caption-subheading text-muted">Inbuilt LoggerFactory for logging in application.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- features item 3-->
                        <div class="portfolio-item">
                           
                                <img class="img-fluid" src="assets/img/middleware.webp" alt="..." />
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><h2>Middlewares</h2></div>
                                <div class="portfolio-caption-subheading text-muted">Acts as request and response interceptors. (AuthMiddleware, LoggingMiddleware)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- features item 4-->
                        <div class="portfolio-item">
                            
                                <img class="img-fluid" src="assets/img/cors.jpg" alt="..." />
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><h2>CORS Support</h2></div>
                                <div class="portfolio-caption-subheading text-muted">Support for CORS.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- features item 5-->
                        <div class="portfolio-item">
                           
                                <img class="img-fluid" src="assets/img/di.png" alt="..." />
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><h2>DI (Dependency Injection)</h2></div>
                                <div class="portfolio-caption-subheading text-muted">Automatic Dependency Injection at service layer.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- features item 6-->
                        <div class="portfolio-item">
                            
                                <img class="img-fluid" src="assets/img/swagger_doc.png" alt="..." />
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><h2>Swagger Doc</h2></div>
                                <div class="portfolio-caption-subheading text-muted">Automatically Generates Swagger Documentation.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Trishul API is made by these developers.</h3>
                </div>
                <div class="row">
                    <div class="offset-lg-4 col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/shyam.png" alt="Shyam Dubey" />
                            <h4>Shyam Dubey</h4>
                            <p class="text-muted">Founder & Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://x.com/riskyspandit" aria-label="Shyam Dubey Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://facebook.com/riskyspandit" aria-label="Shyam Dubey Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/shyam-dubey-114132147/" aria-label="Shyam Dubey LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">We are inviting developers to use this framework and contribute in developing this framework. We strongly believe that this will be the first choice of all PHP developers when they want to build restFul APIs.</p></div>
                </div>
            </div>
        </section>
        <!-- Add this section where you want to show short info about core classes -->

<section class="page-section" id="core-info">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Core Components Overview</h2>
            <h3 class="section-subheading text-muted">Key classes and features of Trishul API Framework</h3>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4>Request.php</h4>
                <p class="text-muted">
                    Handles incoming HTTP requests. Provides easy access to query parameters, headers, body, cookies, session, and path variables. Used in controllers and middleware to interact with client requests.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>Response.php</h4>
                <p class="text-muted">
                    Manages HTTP responses. Supports setting status codes, headers, cookies, and response bodies. Easily return JSON responses and control output to the client.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>App.php</h4>
                <p class="text-muted">
                    The main entry point of the framework. Bootstraps the application, initializes routing, exception handling, CORS, logging, and Swagger documentation. Configure and start your API here.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>Environment.php</h4>
                <p class="text-muted">
                    Utility class for accessing environment variables from <code>.env</code> files or system environment. Simplifies configuration management for different environments.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>HttpStatus.php</h4>
                <p class="text-muted">
                    Enum listing standard HTTP status codes (e.g., 200, 404, 500). Use for consistent and readable API responses.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>Exception Handling</h4>
                <p class="text-muted">
                    Centralized exception handler (see <code>ExceptionHandler</code>) for catching, logging, and formatting errors in API responses. Ensures robust error management.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>LoggerFactory</h4>
                <p class="text-muted">
                    Provides logging capabilities for your application. Supports info, warning, and error logs, with customizable log directory and daily log rotation.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4>MiddlewareInterface.php</h4>
                <p class="text-muted">
                    Interface for creating custom middleware. Allows you to intercept and modify requests and responses (e.g., for authentication, logging, or CORS).
                </p>
            </div>
        </div>
    </div>
</section>
        
        
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Contact us for any query.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" type="post" action="">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required />
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required />
                                <div class="invalid-feedback" >An email is required.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="country" type="text" placeholder="Your country *" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" required></textarea>
                            </div>
                        </div>
                    </div>
                    
                </form>
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" onclick="submitContact()">Send Message</button></div>

            </div>
        </section>
        <?php require_once 'includes/footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            function submitContact() {
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const country = document.getElementById('country').value;
                const message = document.getElementById('message').value;

                if (name && email && country && message) {
                    // Here you can add your form submission logic, e.g., sending data to a server
                    jQuery.ajax({
                        url: '<?php echo MCQBUDDY_BASE_URL; ?>/api/url/common/contact', // Replace with your API endpoint
                        type: 'POST',
                        data: JSON.stringify({
                            "name": name,
                            "email": email,
                            "country": country,
                            "message": message,
                            "subject":"Message from Trishul API Contact Form"
                        }),
                        contentType: 'application/json',
                        success: function(response) {
                            alert('Message sent successfully!');
                        },
                        error: function(error) {
                            alert('Error sending message. Please try again later.');
                        }
                    })
                } else {
                    alert('Please fill all the fields.');
                }
            }   
        </script>
    </body>
</html>
