    <!-- Start about section -->
    <section class="about-section section-gap offwhite-bg" id="about-section">
        <div class="container">
            <div class="row">
                <div class="section-title col-lg-12">
                    <h1>A PROPOS</h1>
                    <h3>Ce Que Vous Devez Savoir Sur Moi</h3>
                </div>
            </div>
            <div class="row justify-content-center justify-content-lg-around">
                <div v-for="(about, i) in aboutMe" class="col-lg-4 col-md-6 single-about">
                    <div class="about-details">
                        <h4>{{ about.title }}</h4>
                        <p v-for="(text, i) in about.text">
                            {{ text }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->

