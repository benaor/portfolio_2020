    <!-- Start competences section -->
    <section class="work-section section-gap offwhite-bg" id="competences-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 work-left">
                    <h4>Mes compétences</h4>
                    <h1 class="mb-5">Mes outils de travail.</h1>
                    <div class='bar_group'>
                        <div v-for="stack in stacks" class='bar_group__bar thin' :label='stack.techno' show_values='true' tooltip='true' :value='stack.percentage'></div>
                    </div>
                </div>
                <div class="col-lg-6 work-right">
                    <p>
                        J'accorde beaucoup d'importance a progresser chaque jour sur mes technologies. <br>
                        J'aime apprendre de nouveaux langages et la prise en main de nouveau outils.
                    </p>
                    <img class="img-fluid" src="img/aboutus.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End competences section -->