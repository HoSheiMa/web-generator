@if ($visible)
    <!-- contact start -->
    <section class="section pb-0 bg-gradient" id="contact">
        <div class="bg-shape">
            <img src="images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block" />
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center mb-4">
                        <h3 class="text-white">Have any Questions ?</h3>
                        <p class="text-white-50">
                            Please fill out the following form and we will get back to you
                            shortly
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-4">
                <div class="col-lg-4">
                    <div class="contact-content text-center mt-4">
                        <div class="contact-icon mb-2">
                            <i class="mdi mdi-email-outline text-info h2"></i>
                        </div>
                        <div class="contact-details text-white">
                            <h5 class="text-white">E-mail</h5>
                            <p class="text-white-50">example@abc.com</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="contact-content text-center mt-4">
                        <div class="contact-icon mb-2">
                            <i class="mdi mdi-cellphone-iphone text-info h2"></i>
                        </div>
                        <div class="contact-details">
                            <h5 class="text-white">Phone</h5>
                            <p class="text-white-50">012-345-6789</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="contact-content text-center mt-4">
                        <div class="contact-icon mb-2">
                            <i class="mdi mdi-map-marker text-info h2"></i>
                        </div>
                        <div class="contact-details">
                            <h5 class="text-white">Address</h5>
                            <p class="text-white-50">4413 Redbud Drive, New York</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="custom-form p-5 bg-white">
                        <div id="message"></div>
                        <form name="contact-form" id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name..." />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email..." />
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">phone</label>
                                        <input name="phone" id="subject" type="tel" class="form-control" placeholder="Enter Subject..." />
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Message</label>
                                        <textarea name="message" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button onclick="send()" type="button" name="submit" class="submitBnt btn btn-danger" value="Send Message">send</button>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                    <!-- end custom-form -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        PHP_SCRIPT_FORM_SUBMIT
        <!-- end container-fluid -->
    </section>
    <!-- contact end -->

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
            fetch("./api/contactus/contactus.php", requestOptions)
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
    </script>
@endif
