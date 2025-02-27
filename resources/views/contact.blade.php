@section('title', 'Contact Us')

<section id="contact" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                <h2 class="fs-15 text-uppercase text-primary text-center">Contact Us</h2>
                <h3 class="display-4 mb-6 text-center">Do You Need Help?</h3>
            </div>
            <div class="col-xl-10 mx-auto">
                <div class="row gy-10 gx-lg-8 gx-xl-12">
                    <div class="col-lg-8">
                        <form class="contact-form needs-validation" method="post" action="../../assets/php/contact.php"
                            novalidate>
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="Jane" required>
                                        <label for="form_name">First Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your first name. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="surname" class="form-control"
                                            placeholder="Doe" required>
                                        <label for="form_lastname">Last Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your last name. </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please provide a valid email address. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px"
                                            required></textarea>
                                        <label for="form_message">Message *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your messsage. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck"> I agree to <a href="#"
                                                class="hover">terms and policy</a>. </label>
                                        <div class="invalid-feedback"> You must agree before submitting. </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-dark rounded btn-send mb-3"
                                        value="Send message">
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fa-solid fa-location-dot"
                                        style="color: #222d3f;"></i> </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <address>Jl. Tanjungsari I No.18, Sumurboto, Kec. Banyumanik, Kota Semarang</address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fa-solid fa-phone-volume"
                                        style="color: #222d3f;;"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p>082 227 585 095<br />00 (987) 654 32 10</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fa-solid fa-envelope"
                                        style="color: #222d3f;"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail
                                </h5>
                                <p class="mb-0"><a href="mailto:sandbox@email.com"
                                        class="text-body">exemple@email.com</a></p>
                                <p><a href="mailto:help@sandbox.com" class="text-body">help@sandbox.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
