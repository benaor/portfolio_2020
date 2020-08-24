    <!-- Start projects section -->
    <section class="portfolio-section section-gap black-bg" id="work-section">
        <div class="container">
            <div class="row">
                <div class="section-title col-lg-12 black-section-title">
                    <h1>Mes projets</h1>
                    <h3>Découvrez mes réalisations
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6" v-for="(project, i) in projects">
                    <div class="single-portfolio">
                        <img class="img-fluid" :src="'img/'+project.img" alt="">
                        <div class="portfolio-content">
                            <h4 class="title">{{ project.title }}</h4>
                            <p class="title">{{ project.stack }}</p>
                            <div class="icon post">
                                <a class="primary-btn mx-3" :href="project.git">dépot Git</a>
                                <a v-if="project.urlLink" class="primary-btn" :href="project.urlLink">Le Projet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End projects section -->