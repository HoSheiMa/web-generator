<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0">
    <title>
      Document
    </title>
    <link href="./theme/css/bootstrap.min.css" rel="stylesheet"
    type="text/css" id="app-style">
    <link href="./theme/css/materialdesignicons.min.css" rel=
    "stylesheet" type="text/css" id="app-style">
    <link href="./theme/css/style.css" rel="stylesheet" type=
    "text/css" id="app-style">
  </head>
  <body>
    <nav class=
    "navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
      <div class="container-fluid">
        <!-- LOGO -->
         <a class="logo text-uppercase" href=
        "/home.php"><span class="text-white">google</span></a>
        <button class="navbar-toggler" type="button" data-toggle=
        "collapse" data-target="#navbarCollapse" aria-controls=
        "navbarCollapse" aria-expanded="false" aria-label=
        "Toggle navigation"><i class="mdi mdi-menu"></i></button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto navbar-center" id=
          "mySidenav">
            <li class="nav-item">
              <a class="nav-link" href="./home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=
              "./features.php">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./demos.php">Demos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./faqs.php">Faqs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./clients.php">Clients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
          </ul><button class="btn btn-info navbar-btn">Try for
          Free</button>
        </div>
      </div>
    </nav><!-- contact start -->
    <section class="section pb-0 bg-gradient" id="contact">
      <div class="bg-shape">
        <img src="images/bg-shape-light.png" alt="" class=
        "img-fluid mx-auto d-block">
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="title text-center mb-4">
              <h3 class="text-white">
                Have any Questions ?
              </h3>
              <p class="text-white-50">
                Please fill out the following form and we will get
                back to you shortly
              </p>
            </div>
          </div>
        </div><!-- end row -->
        <div class="row mb-4">
          <div class="col-lg-4">
            <div class="contact-content text-center mt-4">
              <div class="contact-icon mb-2">
                <i class="mdi mdi-email-outline text-info h2"></i>
              </div>
              <div class="contact-details text-white">
                <h5 class="text-white">
                  E-mail
                </h5>
                <p class="text-white-50">
                  example@abc.com
                </p>
              </div>
            </div>
          </div><!-- end col -->
          <div class="col-lg-4">
            <div class="contact-content text-center mt-4">
              <div class="contact-icon mb-2">
                <i class=
                "mdi mdi-cellphone-iphone text-info h2"></i>
              </div>
              <div class="contact-details">
                <h5 class="text-white">
                  Phone
                </h5>
                <p class="text-white-50">
                  012-345-6789
                </p>
              </div>
            </div>
          </div><!-- end col -->
          <div class="col-lg-4">
            <div class="contact-content text-center mt-4">
              <div class="contact-icon mb-2">
                <i class="mdi mdi-map-marker text-info h2"></i>
              </div>
              <div class="contact-details">
                <h5 class="text-white">
                  Address
                </h5>
                <p class="text-white-50">
                  4413 Redbud Drive, New York
                </p>
              </div>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="custom-form p-5 bg-white">
              <div id="message"></div>
              <form name="contact-form" id="contact-form" method=
              "post">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="name">Name</label> <input name=
                      "name" id="name" type="text" class=
                      "form-control" placeholder=
                      "Enter your name...">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input name="email" id="email" type="email"
                      class="form-control" placeholder=
                      "Enter your email...">
                    </div>
                  </div>
                </div><!-- end row -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="subject">phone</label>
                      <input name="phone" id="subject" type="tel"
                      class="form-control" placeholder=
                      "Enter Subject...">
                    </div>
                  </div>
                </div><!-- end row -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="comments">Message</label> 
                      <textarea name="message" id="comments" rows=
                      "4" class="form-control" placeholder=
                      "Enter your message..."></textarea>
                    </div>
                  </div>
                </div><!-- end row -->
                <div class="row">
                  <div class="col-lg-12 text-right">
                    <button onclick="send()" type="button" name=
                    "submit" class="submitBnt btn btn-danger"
                    value="Send Message">send</button>
                    <div id="simple-msg"></div>
                  </div>
                </div><!-- end row -->
              </form>
            </div><!-- end custom-form -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container-fluid -->
    </section><!-- contact end -->
    <script>
        function send() {

            form = jQuery('form').serializeArray();

            let error = false;

            var formdata = new FormData();
            formdata.append("submit", "1");

            var myHeaders = new Headers();
            myHeaders.append("Accept", "application/json");

            form.map((field) => {
                if (field.value == "") {
                    alert(`please fill ${field.name} field`)
                    error = true;
                    return;
                }
                formdata.append(field.name, field.value);
            });
            if (error) return;

            var requestOptions = {
                method: 'POST',
                headers: myHeaders,
                body: formdata,
                redirect: 'follow'
            };
            fetch("./api/contactus.php", requestOptions)
                .then(response => response.json())
                .then(result => {
                    if (result.error == false) {
                        alert('thanks, your message sent!')
                    } else {
                        alert('something going wrong, please try again later')
                    }
                })
                .catch(error => {
                    alert('something going wrong, please try again later')
                });
        }
    </script> <!-- footer start -->
    <footer class="bg-dark footer">
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-lg-4">
            <div class="pr-lg-4">
              <div class="mb-4">
                <span class="text-white">google dogs.com</span>
              </div>
              <p class="text-white-50">
                A Responsive Bootstrap 4 Web App Kit
              </p>
              <p class="text-white-50">
                Ubold is a fully featured premium admin template
                built on top of awesome Bootstrap 4.1.3, modern web
                technology HTML5, CSS3 and jQuery.
              </p>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="footer-list">
              <ul class="list-unstyled">
                <li>
                  <a href="./home.php"><i class=
                  "mdi mdi-chevron-right mr-2"></i>Home</a>
                </li>
                <li>
                  <a href="./features.php"><i class=
                  "mdi mdi-chevron-right mr-2"></i>Features</a>
                </li>
                <li>
                  <a href="./demos.php"><i class=
                  "mdi mdi-chevron-right mr-2"></i>Demos</a>
                </li>
                <li>
                  <a href="./pricing.php"><i class=
                  "mdi mdi-chevron-right mr-2"></i>Pricing</a>
                </li>
                <li>
                  <a href="./faqs.php"><i class=
                  "mdi mdi-chevron-right mr-2"></i>Faqs</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="footer-list">
              <ul class="list-unstyled">
                <li>
                  <a href="./clients.php"><i class=
                  "mdi mdi-chevron-right mr-2"></i>Clients</a>
                </li>
                <li>
                  <a href="./contact.php"><i class=
                  "mdi mdi-chevron-right mr-2"></i>Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="float-left pull-none">
              <p class="text-white-50">
                2015 - 2020 © Ubold. Design by <a href=
                "https://coderthemes.com/" target="_blank" class=
                "text-white-50">Coderthemes</a>
              </p>
            </div>
            <div class="float-right pull-none">
              <ul class="list-inline social-links">
                <li class="list-inline-item text-white-50">Social :
                </li>
                <li class="list-inline-item">
                  <a href="/"><i class="mdi mdi-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="/"><i class="mdi mdi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="/"><i class="mdi mdi-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- container-fluid -->
    </footer><!-- footer end -->
    <script src="./theme/js/jquery.min.js"></script> 
    <script src="./theme/js/bootstrap.bundle.min.js"></script> 
    <script src="./theme/js/jquery.easing.min.js"></script> 
    <script src="./theme/js/scrollspy.min.js"></script> 
    <script src="./theme/js/app.js"></script>
  </body>
</html>