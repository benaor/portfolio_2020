    <!-- Start footer section -->
    <footer class="footer-section black-bg section-half" id="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 footer-left">
                    <H3 class="text-white">GIRARD Benjamin</H3>
                </div>
                <div class="col-lg-6 col-sm-6 footer-right">
                    <ul class="social_links">
                        <li v-for="reseau in reseaux">
                            <a :href="reseau.link">
                                <i :class="'fa fa-'+reseau.nameNetwork+'-square'" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 text-center copyright-wrap">
                    <p>
                        &copy; GIRARD Benjamin, tout droit réservé. <br>
                        Template : F4 (dope_theme).
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->
