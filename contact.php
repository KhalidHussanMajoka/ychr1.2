<?php include 'include/header.php'; ?>
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Send us a Message</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="https://sendmail.aresync.com/submitForm" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-style mt-3">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>House #58/44, Street 4, Block AA, Sector D, Bahria Town,<br /> Lahore, Pakistan</p>
                            <p> <a href="mailto:info@ychr-crt.org"><span
                                        class="fa fa-envelope"></span>info@ychr-crt.org</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+92 42 35462854"> +92 42 35462854</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+92 300 8433173"> +92 300 8433173</a></p>
                            <a href="donate.php" class="btn btn-style btn-outline-primary mt-4">
                                <span class="fa fa-heart mr-1"></span> Make Donation</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13625.14297572963!2d74.1695066!3d31.3786837!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70acae7c263c60a8!2sYCHR-CRT%20Office!5e0!3m2!1sen!2s!4v1665001677762!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
      <!-- Footers-14 -->
      <?php include 'include/footer.php'; ?>