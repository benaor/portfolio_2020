    <!-- Start testimonial section -->
    <section class="testimonial-section section-gap" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="section-title col-lg-12">
                    <h1>Inspiration</h1>
                    <h3>Mes sources de motivations</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="owl-carousel owl-theme" id="testimonial_carousel">
                        <div class="item single-testimonial" v-for="testimonial in testimonials">
                            <blockquote class="block">
                                <p>"{{testimonial.text}} "</p>
                                <footer>
                                    <cite>
                                        <span>{{testimonial.author}}</span>
                                    </cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section -->
