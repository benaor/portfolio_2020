    <!-- Start stat section -->
    <section class="stat-section section-half black-bg" id="stats">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6 single-stat text-center" v-for="stat in stats">
                    <h4 class="text-white">{{stat.text}}</h4>
                    <h1 class="counter text-white pt-20">{{stat.number}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End stat section -->
