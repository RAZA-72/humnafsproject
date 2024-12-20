<div class="page-title-overlap bs-warning-bg-subtle">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                    class="ci-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

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
  
    <div class="container px-0" id="map">
        <div class="row g-0">
            <div class="col-6 offset-3 px-xl-5 py-5">
                <h2 class="h4 mb-4">Drop us a line</h2>
                <form class="needs-validation mb-3" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="cf-name">Your name:&nbsp;<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" name="full_name" type="text" id="cf-name" required="">
                            <div class="invalid-feedback">Please fill in you name!</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="cf-email">Email address:&nbsp;<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" name="email_id" type="email" id="cf-email" required="">
                            <div class="invalid-feedback">Please provide valid email address!</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="cf-phone">Your phone:&nbsp;<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" name="whatsapp_num" type="text" id="cf-phone" required="">
                            <div class="invalid-feedback">Please provide valid phone number!</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="cf-subject">Subject:</label>
                            <input class="form-control" name="subject" type="text" id="cf-subject">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="cf-message">Message:&nbsp;<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" name="message" id="cf-message" rows="6" required=""></textarea>
                            <div class="invalid-feedback">Please write a message!</div>
                            <button class="btn btn-outline-danger mt-4" action="/mail" type="submit">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>