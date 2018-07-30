<?php echo $__env->make('sections.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<main class="page landing-page">
    <section class="clean-block clean-hero">
        <div class="video">
            <video autoplay loop>
                <source src="video/movie.mp4" type="video/mp4">
            </video>
        </div>
        <div class="text absolute">
            <!--<img alt="Logo Kreuttal" src="img/Kreuttal2.png" class="logo-text">-->
            <h2>WILLKOMMEN IM REITERZENTRUM KREUTTAL</h2>
            <p>- Wo sich Reiter und Pferd zu Hause fühlen -</p>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Reiterzentrum Kreuttal</h2>
                <p>Wir achten auf Qualität, um den Ansprüchen von Dessur- und Springreiten gerecht zu werden. Wir führen einen Reitstall mit einen Platz für Rund 80 Pferde. Modernste Austattung und gut geschultes Personal sind uns wichtig. Wir bieten
                    deinem Pferd ein zu Hause, sowie Reitbegeistereten ohne Pferd hochqualitativen Unterricht. Schau dich auf unserer neuen Webseite um.<strong> Wir freuen uns auf dich!</strong></p>
                <button class="btn btn-outline-primary btn-lg" type="button" onclick="window.location='<?php echo e(url("/facilities")); ?>'">Anlage</button>
            </div>
        </div>
    </section>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Angebote</h2>
                <p>Hier im Kreuttal ist jeder Willkommen!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="icon-badge icon"></i>
                    <h4>Dressur</h4>
                    <p>Mit 2 Dressurveirecken und 2 Hallen, bieten wir genügend Platz für Dressurliebhaber. Die verschieden größen der Viecke vereinfachen das Üben für verschiedene Aufgaben.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-rocket icon"></i>
                    <h4>Springen</h4>
                    <p>Unser großer Springplatz lässt Springreiterherzen höher schlagen. So lang das Wetter es zulässt ist ein Pacour jeden Tag für Springreiter verfügbar.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="typcn typcn-adjust-brightness icon"></i>
                    <h4>Freizeitreiter</h4>
                    <p>Durch unsere endlos erscheinenden Reitwege. Steht einem stundenlangen Ausritt im Wald nichts im Wege.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-energy icon"></i>
                    <h4>Spezialrassen</h4>
                    <p>Bei uns ist jeder willkommen, daher findet bei uns auch Spezialrassen wie Andelusia und P.R.E bei uns Platz und Aufmerksamkeit.</p>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-outline-primary btn-lg" type="button" onclick="window.location='<?php echo e(url("/price")); ?>'">Preise</button>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="row align-items-center reverse">
            <div class="col-md-6"><img class="img-thumbnail" src="img/_MG_0330.jpg"></div>
            <div class="col-md-6 button-margin">
                <h3>Turniere &amp; Trainings</h3>
                <div class="getting-started-info">
                    <p>Jedes Jahr finden bei uns Turniere und vielzählige Trainings mit weltbekannten Reitern statt. Werfe einen Blick auf unseren Kalender und du weißt über unsere nächsten Termine bescheid.</p>
                </div>
                <button class="btn btn-outline-primary btn-lg" type="button" onclick="window.location='<?php echo e(url("/calender")); ?>'">Kalender</button>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 button-margin">
                <h3>Du möchtest Reiten uns hast kein Pferd...</h3>
                <div class="getting-started-info">
                    <p>Wie bieten Dir die Möglichkeit über unseren Verein ein Pferde zu mieten inklusive Unterricht. Turniere und Prüfungen sind auch möglich.</p>
                </div>
                <button class="btn btn-outline-primary btn-lg" type="button" onclick="window.location='<?php echo e(url("/club")); ?>'">Verein</button>
            </div>
            <div class="col"><img class="img-thumbnail" src="img/11908890_10206173725696417_6603164775354415266_o.jpg"></div>
        </div>
    </section>
</main>

<?php echo $__env->make('sections.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
