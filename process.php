<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form Submitted</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://sfaubus.heyuhnem.com/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://sfaubus.heyuhnem.com/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Sean Faubus</a>

                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://sfaubus.heyuhnem.com/">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://sfaubus.heyuhnem.com/sean-faubus-direction.html">Directions</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://sfaubus.heyuhnem.com/sean-faubus-contact.html">Contact</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://sfaubus.heyuhnem.com/sean-faubus-youtube.html">YouTube</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://sfaubus.heyuhnem.com/sean-faubus-photo-gallery.html">Photos</a></li>
					</ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <!-- <img class="masthead-avatar mb-5" src="https://sfaubus.heyuhnem.com/assets/img/Face2.png" alt="..." /> -->
                <!-- Masthead Heading-->
<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_phone = $_POST['visitor_phone'];
    $date_visited = $_POST['date_visited'];
    $time_visited = $_POST['time_visited'];
    $messagelab7 = "";
    $subject = "Faubus Contact Page";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
      

    $email_body .= "<div>
                    <label><b>Visitor Phone:</b></label>&nbsp;<span>".$visitor_phone."</span>
                    </div>";

    $email_body .= "<div>
                    <label><b>Date Visited:</b></label>&nbsp;<span>".$date_visited."</span>
                    </div>";

    $email_body .= "<div>
                    <label><b>Time Visited:</b></label>&nbsp;<span>".$time_visited."</span>
                    </div>";
    
    if(isset($_POST['messagelab7'])) {
        $messagelab7 = htmlspecialchars($_POST['messagelab7']);
        $email_body .= "<div>
                            <label><b>Visitor Message:</b></label>
                            <div>".$messagelab7."</div>
                        </div>";
    }
    
    $recipient = "skrana2@uh.edu";
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    if(mail($recipient, $subject, $email_body, $headers)) {
        echo "<p>Thank you for contacting me, $visitor_name. I have received your feedback!</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>
                <!-- Icon Divider-->
          
                
            </div>
        </header>
      
        <!-- Contact Section-->
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Sugar Land, Tx
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="mb-4">LinkedIn</h4>

                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/seanfaubus/"><i class="fab fa-fw fa-linkedin-in"></i></a>

                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="mb-4">GitHub</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/seanfaubus"><i class="fab fa-fw fa-github"></i></a>

                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Email</h4>
                        <p class="lead mb-0">
                            seanfaubus@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container" id="copyYear"></div>
        </div>
        <script>
            var copyYear = new Date();
              document.getElementById("copyYear").innerHTML = "Copyright &copy; Sean Faubus " +  copyYear.getFullYear();
        </script>
		
		
        
	
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://sfaubus.heyuhnem.com/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>




