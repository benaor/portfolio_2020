    <!-- Start service section -->
    <section class="service-section section-gap black-bg" id="service-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-6 service-left">
                    <h4>Our Services</h4>
                    <h1>What Service we Provide</h1>
                    <p>
                        Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do.Miles
                        mr an forty along as he. She education get middleton day agreement performed preserved unwilling.
                        Do however as pleased offence.
                    </p>
                    <p>
                        By outward neither he so covered amiable greater. Juvenile proposal betrayed he an informed weddings followed. Precaution
                        day see imprudence sympathize principles. At full leaf.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 service-right">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" v-for="(service, i) in services">
                            <div class="single-service pb-40">
                                <i :class="service.classLogo" aria-hidden="true"></i>
                                <h4>{{ service.title }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service section -->
