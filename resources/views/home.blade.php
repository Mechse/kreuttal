@include('sections.header')

<main class="page blog-post-list">
    <section class="clean-block clean-blog-list dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Unsere Pferde</h2>
                <p>Hier kannst du zwischen allen Pferden wählen und deine Stunde Buchen.</p>
                <button type="button" class="btn btn-primary btn-block" onclick="window.location='{{ url("/logout")}}'">
                    {{ __('LogOut') }}
                </button>
            </div>
            <div class="block-content">
                <div class="clean-blog-post">
                    <div class="row">
                        <div class="col-lg-5"><img class="rounded img-fluid" src="img/image4.jpg"></div>
                        <div class="col-lg-7">
                            <h3>Lorem Ipsum dolor sit amet</h3>
                            <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                vitae leo.
                            </p>
                            <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="clean-blog-post">
                    <div class="row">
                        <div class="col-lg-5"><img class="rounded img-fluid" src="img/image4.jpg"></div>
                        <div class="col-lg-7">
                            <h3>Lorem Ipsum dolor sit amet</h3>
                            <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                vitae leo.
                            </p>
                            <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="clean-blog-post">
                    <div class="row">
                        <div class="col-lg-5"><img class="rounded img-fluid" src="img/image4.jpg"></div>
                        <div class="col-lg-7">
                            <h3>Lorem Ipsum dolor sit amet</h3>
                            <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                vitae leo.
                            </p>
                            <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="clean-blog-post">
                    <div class="row">
                        <div class="col-lg-5"><img class="rounded img-fluid" src="img/image4.jpg"></div>
                        <div class="col-lg-7">
                            <h3>Lorem Ipsum dolor sit amet</h3>
                            <div class="info"><span class="text-muted">Jan 16, 2018 by&nbsp;<a href="#">John Smith</a></span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis
                                vitae leo.
                            </p>
                            <button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@include('sections.footer')
