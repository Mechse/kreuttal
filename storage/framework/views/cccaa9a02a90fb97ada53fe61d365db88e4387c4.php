<?php echo $__env->make('sections.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Kontakt</h2>
                    <p>Sie wollen mehr über uns erfahren oder haben Fragen zu Angeboten oder Preisen. Dann bitte schrieben sie uns.</p>
                </div>
                <form>
                    <div class="form-group"><label>Name</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Betreff</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Nachricht</label><textarea class="form-control"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="button">Senden</button></div>
                </form>
            </div>
        </section>
    </main>


<?php echo $__env->make('sections.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
