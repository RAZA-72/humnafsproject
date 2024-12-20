

    <section class="py-0 border-top py-4 border-bottom">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 g-4">
                <!-- Address info -->
                <div class="col">
                    <div class="card card-body bg-light border-danger p-sm-5">
                        <!-- Icon -->
                        <div class="mb-4"><i class="fa-solid fa-map-pin fa-xl"></i></div>
                        <!-- Title -->
                        <h6 class="mb-4">Office Address</h6>
                        <!-- Office item -->
                        <div class="d-flex align-items-center mb-2">
                            <span class="heading-color fw-semibold mb-0">Corporate office:</span>
                        </div>
                        <address class="mb-0">D-2, Second Floor, Sector 2, Noida, Uttar Pradesh - 201301</address>
                    </div>  
                </div>

                <!-- Email info -->
                <div class="col">
                    <div class="card card-body bg-light border-danger p-sm-5">
                        <!-- Icon -->
                        <div class="mb-4"><i class="fa-regular fa-envelope fa-xl"></i></div>
                        <!-- Title -->
                        <h6 class="mb-3">Email us</h6>
                        <p>We're on top of things and aim to respond to all inquiries within 24 hours.</p>
                        <a href="#"
                            class="heading-color text-primary-hover text-decoration-underline mb-0">support@humnafs.com</a>
                    </div>
                </div>

                <!-- Contact info -->
                <div class="col">
                    <div class="card card-body bg-light border-danger p-sm-5">
                        <!-- Icon -->
                        <div class="mb-4"><i class="fa-solid fa-tty fa-xl"></i></div>
                        <!-- Title -->
                        <h6 class="mb-3">Call us</h6>
                        <p>Let's work together towards a common goal - get in touch!</p>
                        <a href="#" class="heading-color text-primary-hover text-decoration-underline mb-0">+91 95576
                            61726</a>
                    </div>
                </div>

            </div> <!-- Row END -->
        </div>

    </section>
    <div class="container px-0" id="contact-form">
    <div class="row g-0">
        <div class="col-6 offset-3 px-xl-5 py-5">
            <h2 class="h4 mb-4">Drop us a line</h2>
            <form class="needs-validation" action="<?= base_url('/sendemail');?>" method="post" novalidate>
                <!-- CSRF Token -->
                

                <div class="row g-3">
                    <!-- Full Name -->
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-name">Your Name:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" name="full_name" type="text" id="cf-name" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Please provide your name.</div>
                    </div>

                    <!-- Email -->
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-email">Email Address:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" name="email_id" type="email" id="cf-email" placeholder="Enter your email" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>

                    <!-- Phone -->
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-phone">Your Phone:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" name="whatsapp_num" type="tel" id="cf-phone" placeholder="Enter your phone number" required>
                        <div class="invalid-feedback">Please provide a valid phone number.</div>
                    </div>

                    <!-- Subject -->
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-subject">Subject:</label>
                        <input class="form-control" name="subject" type="text" id="cf-subject" placeholder="Enter a subject">
                    </div>

                    <!-- Message -->
                    <div class="col-12">
                        <label class="form-label" for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="message" id="cf-message" rows="6" placeholder="Write your message here" required></textarea>
                        <div class="invalid-feedback">Please write a message.</div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12">
                        <button class="btn btn-danger mt-4" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
