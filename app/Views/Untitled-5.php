 <div class="border-top footer">
        <div class="container">
            <footer class="pt-5">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Categories</h5>
                        <ul class="nav flex-column">


                            <li class="nav-item mb-2"><a href="<?php echo base_url('files/suits');?>"class="nav-link p-0 text-body-secondary">Suits</a>
                            </li>
                            <li class="nav-item mb-2"><a href="<?php echo base_url('files/saree');?>" class="nav-link p-0 text-body-secondary">Sarees</a>
                            </li>
                            <li class="nav-item mb-2"><a href="<?php echo base_url('files/orders');?>" class="nav-link p-0 text-body-secondary">Co-Ord
                                    Sets</a></li>
                            <li class="nav-item mb-2"><a href="<?php echo base_url('files/dress');?>" class="nav-link p-0 text-body-secondary">Dresses</a>
                            </li>
                            <li class="nav-item mb-2"><a href="<?php echo base_url('files/dupatta');?>" class="nav-link p-0 text-body-secondary">Dupatta</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3 mb-3">
                        <h5>Policies</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Shipping
                                    Policy</a></li>
                            <li class="nav-item mb-2"><a href="<?php echo base_url('/policy'); ?>" class="nav-link p-0 text-body-secondary">Privacy
                                    Policy</a></li>
                            <li class="nav-item mb-2"><a href="<?php echo base_url('/return');?>" class="nav-link p-0 text-body-secondary">Cancellation,
                                    Return & Exchange Policy</a></li>
                            <li class="nav-item mb-2"><a href="<?php echo base_url('/terms');?>" class="nav-link p-0 text-body-secondary">Terms of
                                    Services</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3 mb-3">
                        <h5>About Humnafs</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Our
                                    Founder</a></li>
                            <li class="nav-item mb-2"><a href="<?= base_url('/contact') ?>" class="nav-link p-0 text-body-secondary">Talk To
                                    Us</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Careers</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="<?= base_url('/about'); ?>" class="nav-link p-0 text-body-secondary">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 mb-3">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of what's new and exciting from us.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-outline-danger d-inline-flex align-items-center" type="button">
                                    Subscribe
                                    <i class="fa-regular fa-envelope ms-1"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row home-page-seo">
                    <div class="col-md-12">
                        <div class="border-top">
                            <h5 class="mt-4">Saree Top Categories:</h5>
                            <p><span>Shop By Color:</span><a href="#">Gold Sarees</a>|<a href="#">Pink Sarees</a>|<a
                                    href="#">Orange Sarees</a>|<a href="#">Blue Sarees</a>|<a href="#">Green
                                    Sarees</a>|<a href="#">Lavendar Sarees</a></p>
                            <p><span>Shop By Technique:</span><a href="#">Hand Block Sarees</a>|<a href="#">Hand Work
                                    Sarees</a></p>
                            <p><span>Shop By Fabric:</span><a href="#">Crushed Tissue Sarees</a>|<a href="#">Tanchoi
                                    Silk Sarees</a>|<a href="#">Munga Silk Sarees</a>|<a href="#">Pure Butter Silk
                                    Sarees</a>|<a href="#">Organza Sarees</a>|<a href="#">Katan Silk Sarees</a></p>
                            <p><span>Shop By Range:</span><a href="#">Saree Under ₹ 15,000</a>|<a href="#">Saree Under ₹
                                    20,000</a>|<a href="#">Saree Under ₹ 25,000</a>|<a href="#">Saree Under ₹ 30,000</a>
                            </p>
                        </div>
                    </div>
                </div>



                <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top copyright">
                    <p>2024 © Humnafs, All rights reserved.</p>
                    <ul class="list-unstyled d-flex justify-content-end">
                        <li class="ms-3"><a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a></li>
                        <li class="ms-3"><a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>


    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>