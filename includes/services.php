    <!-- Start service section -->
    <section class="service-section section-gap black-bg" id="service-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-6 service-left">
                    <h4>Mes Services</h4>
                    <h1>Mes champs de compétences</h1>
                    <p>
                        Grâce a l'Access code school, et a un apprentissage en autodidacte j'ai developpé des compétences dans le developpement web que j'améliore de jour en jour grâce au e-learning.
                    </p>
                    <p>
                        Vous pouvez me confier vos développements front-end et back-end. Je sais m'adapter aux différents outils utilisé par vos équipes, et je suis capable d'optimiser le référencement SEO de vos site web.
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
