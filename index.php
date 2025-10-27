<?php
include_once('main.php');
?>
<link rel="stylesheet" type="text/css" href="./CSS/main.css">

<body>
    <div class="container-fluid p-0">
        <div class="row g-0 vh-100">


            <div class="col-4">
                <div class="image-wrapper">
                    <img src="assets/images/NXLP-75.webp" class="img-fluid cover-img" alt="Image 2">
                </div>
            </div>

            <div class="col-4">
                <div class="image-wrapper">
                    <img src="assets/images/NXLP-302.webp" class="img-fluid cover-img" alt="Image 1">
                </div>
            </div>

            <div class="col-4">
                <div class="image-wrapper">
                    <img src="assets/images/NXLP-306.webp" class="img-fluid cover-img" alt="Image 3">
                </div>
            </div>
        </div>

        <!-- Overlay Text -->
        <div class="overlay-text-title">
            <h1 class="title">KALINGA</h1>
            <p class="subtitle">Women for Peace</p>
        </div>
    </div>





    <!-- <section class="showcase mb-4" id="home">
        <div class="video-container">
            <Video src="assets/videos/1.2.mp4" type="video/mp4" autoplay muted loop></Video>
        </div>
        <div>
            <h3>Kalinga</h3>
            <h4>Women for Peace</h4>
        </div>
    </section> -->

    <div class="logo mb-4 mt-4">
        <a href="index"><img class="log mb-4" src="assets/images/logo.webp"></a>
        <h3>BOBBOBAI NI KALINGA PARA AD KAPYA:</h3>
        <h3>Documentation of the Roles of Women in Bodong</h3>
    </div>

    <?php
    include_once('includes/navbar.php');
    ?>
    <!-- <div id="demo" class="carousel slide" data-ride="carousel" data-aos="fade-up" data-aos-duration="2000">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/Carina_new_web_new.webp" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <button type="button" class="btn btn-dark" onclick="document.location='woman1'">READ
                        MORE</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/Irene_new_web.webp" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <button type="button" class="btn btn-dark" onclick="document.location='woman3'">READ
                        MORE</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/Elena_new_webp.webp" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <button type="button" class="btn btn-dark" onclick="document.location='woman2'">READ
                        MORE</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div> -->

    <div id="demo" class="carousel slide" data-ride="carousel" data-aos="fade-up" data-aos-duration="2000">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <div class="slide-layout d-flex">
                    <!-- Left image -->
                    <div class="slide-left">
                        <img src="assets/images/CarinaNew.webp" alt="Carina">
                    </div>
                    <!-- Right text + background -->
                    <div class="slide-right" style="background-image: url('assets/images/pattern.webp');">
                        <div class="slide-text">
                            <h3>CARINA: The Fabled Peace Warrior of Kalinga</h3>
                            <p>
                                Unbeknownst to Carina then, her extraordinary courage and resolute stance to revive a
                                very expensive peace had made her the first woman peace pact holder, not only of
                                Kalinga, but also of the whole Gran Cordillera. Petite as she physically stands, her
                                valor, conviction, and strength of character are bigger than anyone could ever imagine.
                                Carina personifies an empowered woman, who is ever ready to make big sacrifices if only
                                to give her tribe members the peaceful and secure life that they deserve.
                            </p>
                            <p>Carina has
                                become the source of inspiration for many people in her tribe, including her own beloved
                                children. For her daughter Juanita, Carina has proven that in Bodong and elsewhere in
                                life, women are not consigned to the kitchen. Women play enormous roles in conflict
                                resolution and achieving peace. They possess assets and skills that are valuable in
                                negotiating and restoring amity. They are cool-headed and could adjust in almost all
                                situations since they can control their minds and emotions. In addition, when women
                                speak amidst a pool of men, the latter would almost always lend their ears to the former
                                as Kalinga men accord women great respect.
                            </p>
                            <p class="mt-2"><a class="readmore" href="woman1"><strong><u>Read more →</u></strong></a>
                            </p>
                            <!-- <button type="button" class="btn btn-dark" onclick="document.location='woman1'">READ
                                MORE</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <div class="slide-layout d-flex">
                    <div class="slide-left">
                        <img src="assets/images/Irene_new.webp" alt="Irene">
                    </div>
                    <div class="slide-right" style="background-image: url('assets/images/pattern.webp');">
                        <div class="slide-text">
                            <h3>IRENE: Guardian of Peace</h3>
                            <p>It’s no secret that women have historically faced greater barriers than men when it comes
                                to fully participating in their respective community. In Kalinga, being the leader of a
                                tribe was once a male-dominated role but has drastically become gender-equal task
                                through the test of time, and the story of Irene has proved worthy of not just being a
                                peace pact holder but also a chieftain to her tribe.
                            </p>
                            <p>
                                Irene Addamo, of the Sumadel tribe in Bulo, Tabuk City, Kalinga, holds a peace pact
                                between her ethnic community and the Lubo tribe of Tanudan. She whole-heartedly
                                inherited the title of Nangdon si Bodong (peace-pact holder) following the death of her
                                husband in 2002
                            </p>
                            <p class="mt-2"><a class="readmore" href="woman3"><strong><u>Read more →</u></strong></a>
                            </p>
                            <!-- <button type="button" class="btn btn-dark" onclick="document.location='woman3'">READ
                                MORE</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class="carousel-item">
                <div class="slide-layout d-flex">
                    <div class="slide-left">
                        <img src="assets/images/ElenaNew.webp" alt="Elena">
                    </div>
                    <div class="slide-right" style="background-image: url('assets/images/pattern.webp');">
                        <div class="slide-text">
                            <h3>ELENA: Leading "Light" of Her Land</h3>
                            <p>
                                Confident in their abilities and certain of their power, women take on numerous roles in
                                society. Taking up space and achieving great feats have been their primary ways of
                                proving that they are worthy of esteem and are empowered to handle responsibilities,
                                especially in leadership. This holds true to Elena, a peace pact holder in Kalinga, who
                                illuminates her light to lead her land toward a peaceful life.
                            </p>
                            <p>
                                Designated by elders of the Biga tribe with a unanimous decision, Elena Baglinit holds a
                                peace pact between her indigenous community and the Tanglag tribe in Lubuagan, Kalinga.
                            </p>
                            <p class="mt-2"><a class="readmore" href="woman2"><strong><u>Read more →</u></strong></a>
                            </p>
                            <!-- <button type="button" class="btn btn-dark" onclick="document.location='woman2'">READ
                                MORE</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <br>



    <section id="articles" class="mt-4 mb-4" data-aos="fade-up" data-aos-duration="3000">
        <div class="container-fluid">
            <div class="title" id="stories">
                <h1>Latest Articles</h1>
            </div>

            <!-- Carousel wrapper -->
            <div class="carousel-wrapper">
                <!-- Prev button -->
                <button class="carousel-btn prev">&#10094;</button>

                <!-- viewport wrapper -->
                <div class="carousel-viewport">
                    <!-- scrollable container -->
                    <div id="cardCarousel" class="carousel-container">

                        <!-- CARD 0 -->
                        <div class="card h-100">
                            <img src="assets/images/article_2.webp" alt="Province of Kalinga" class="card-img-top">
                            <div class="card-header">
                                <h6 class="card-title"><b>Kalinga’s Bodong and Its Place in the
                                        <br>Contemporary Justice System</b>
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Justice in the Philippines is often associated with formal courts,
                                    legal statutes, and structured proceedings. However, in Kalinga, ...
                                </p>
                            </div>
                            <div class="card-footer mb-2">
                                <p>
                                    <a class="readmore" href="kalingasbodong">
                                        <strong>
                                            <u>Read more →</u></strong>
                                    </a>
                                </p>
                                <!-- <a href="festivalOfKalinga" class="btn btn-dark mt-auto">READ MORE</a> -->
                            </div>
                        </div>



                        <!-- CARD 1 -->
                        <div class="card h-100">
                            <img src="assets/images/article1.webp" alt="The Bodong" class="card-img-top">
                            <div class="card-header">
                                <h6 class="card-title"><b>The Bodong Festival of Kalinga: A Celebration of
                                        <br>Peace and
                                        Heritage</b>
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Every February, the mountainous province of Kalinga in the
                                    Cordillera region of the Philippines comes alive with color, music, and culture...
                                </p>
                            </div>
                            <div class="card-footer mb-2">
                                <p>
                                    <a class="readmore" href="festivalOfKalinga">
                                        <strong>
                                            <u>Read more →</u></strong>
                                    </a>
                                </p>
                                <!-- <a href="festivalOfKalinga" class="btn btn-dark mt-auto">READ MORE</a> -->
                            </div>
                        </div>

                        <!-- CARD 2 -->
                        <div class="card h-100">
                            <img src="assets/images/BL.webp" alt="Maim to Fame" class="card-img-top">
                            <div class="card-header">
                                <h6 class="card-title"><b>MAIM TO FAME: Getting To Know Kalinga Better</b>
                                </h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">There are rugged hills to climb, unique flavors to devour, history
                                    to review, picturesque scenery to capture, people to appreciate; Kalinga is
                                    waving...</p>
                            </div>
                            <div class="card-footer mb-2">
                                <p>
                                    <a class="readmore" href="ktac">
                                        <strong>
                                            <u>Read more →</u></strong>
                                    </a>
                                </p>
                                <!-- <a href="ktac" class="btn btn-dark mt-auto">READ MORE</a> -->
                            </div>
                        </div>

                        <!-- CARD 3 -->
                        <div class="card h-100">
                            <img src="assets/images/bd1.webp" alt="Bodong" class="card-img-top">
                            <div class="card-header">
                                <h6 class="card-title"><b>BODONG: The Legal Ambit of Kalinga</b></h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">There was a time when people would deliberately presume that the
                                    rugged mountainous terrains of Kalinga were home to vicious warriors...</p>
                            </div>
                            <div class="card-footer mb-2">
                                <p>
                                    <a class="readmore" href="whatisbodong">
                                        <strong>
                                            <u>Read more →</u></strong>
                                    </a>
                                </p>
                                <!-- <a href="whatisbodong" class="btn btn-dark mt-auto">READ MORE</a> -->
                            </div>
                        </div>

                        <!-- CARD 4 -->
                        <div class="card h-100">
                            <img src="assets/images/Pagta.webp" alt="Pagta" class="card-img-top">
                            <div class="card-header">
                                <h6 class="card-title"><b>Pagta: Protecting and Empowering Kalinga Women</b></h6>
                            </div>
                            <div class="card-body">
                                <p class="card-text">A fundamental tenet in the iKalinga worldview is the deep respect
                                    and courtesy accorded to women, who are regarded as life-givers and peacemakers...
                                </p>
                            </div>
                            <div class="card-footer mb-2">
                                <p>
                                    <a class="readmore" href="peaceholder">
                                        <strong>
                                            <u>Read more →</u></strong>
                                    </a>
                                </p>
                                <!-- <a href="peaceholder" class="btn btn-dark mt-auto">READ MORE</a> -->
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Next button -->
                <button class="carousel-btn next">&#10095;</button>
            </div>
        </div>
    </section>



    <div class="title" id="gallery" data-aos="fade-up" data-aos-duration="2000">
        <h1>Features</h1>
    </div>


    <div class="container-fluid">
        <div class="row mt-4">
            <!-- Modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modal1" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">The Kalinga Society</h4>
                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(1).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">Located within the mountainous zones of the Cordillera Administrative
                                Region, the
                                province of
                                Kalinga adheres to political structures cultivated by their culture. In their society,
                                harmony rules and
                                amity prevails. Kalinga is home to forty-six (46) ancestral domains
                                <strong><i>(bugis)</i></strong>,
                                separated by clearly drawn
                                borders. Amidst the diversity in the province, communities are governed by unifying
                                political systems
                                structures embedded in folkways and mores. Found at the core of these legislative,
                                executive, and judicial
                                patterns are the law of peace and order.

                            </p>
                            <p class="mt-2"><a class="readmore" href="tks"><strong><u>Read more →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal1">
                <div class="img-wrapper">
                    <img src="assets/images/(1).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">The Kalinga Society</div>
                </div>
            </div>

            <div class="modal fade" tabindex="-1" role="dialog" id="modal2" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">The Bodong Bond</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(2).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">Conflicts between clans and troupes can either lead to unresolved
                                tension
                                or settled
                                agreement. For the communities of Kalinga, the latter is more preferred and their desire
                                to clear up disputes is manifested in Bodong. Bodong is a bilateral agreement between
                                two groups, both seeking a harmonious relationship with each other. In the process of
                                resolving their struggle, both parties abide by these steps in forging Bodong.

                            </p>
                            <p class="mt-2"><a class="readmore" href="bodongprocess"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>


            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal2">
                <div class="img-wrapper">
                    <img src="assets/images/(2).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">The Bodong Bond</div>
                </div>
            </div>


            <div class="modal fade" tabindex="-1" role="dialog" id="modal3" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">The Bodong Process</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(3).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">Conflicts between clans and troupes can either lead to unresolved
                                tension
                                or settled
                                agreement. For the communities of Kalinga, the latter is more preferred and their desire
                                to clear up disputes is manifested in Bodong. Bodong is a bilateral agreement between
                                two groups, both seeking a harmonious relationship with each other. In the process of
                                resolving their struggle, both parties abide by these steps in forging Bodong.
                            </p>
                            <p class="mt-2"><a class="readmore" href="bodongprocess"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal3">
                <div class="img-wrapper">
                    <img src="assets/images/(3).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">The Bodong Process</div>
                </div>
            </div>



            <div class="modal fade" tabindex="-1" role="dialog" id="modal4" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Indigenous Women in Dispute Settlement Mechanisms</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/im.webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">For so long, indigenous people have been struggling as they strive to
                                preserve their
                                ancestral lands, protect their native language, and promote their dying culture. With
                                the widespread liberalization around the globe, the norms and indigenous people are
                                threatened to be displaced, making them more susceptible to insecurity and
                                discrimination. Along with this hostile condition, ethnic people, specifically women may
                                seem to drown in the world where men seem to dominate in every career aspect.
                            </p>
                            <p class="mt-2"><a class="readmore" href="indigenous"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal4">
                <div class="img-wrapper">
                    <img src="assets/images/im.webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text-long">Indigenous Women in Dispute Settlement Mechanisms</div>
                </div>
            </div>


            <div class="modal fade" tabindex="-1" role="dialog" id="modal5" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Kalinga Women’s Engagement in Peace</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(5).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">Decked with its rich cultural heritage, Kalinga women seemingly mirror
                                an
                                exhibit of
                                gold; incomparable and matchless. Perhaps one of their defining features is seen beyond
                                their nakedness covered by their tradition of adorning their skin with lace-like tribal
                                patterns and intricate textiles. But if people think that this is what Kalinga women
                                only offer, they are still yet to behold a gripping reason why it is an exhibit of
                                such.
                            </p>
                            <p class="mt-2"><a class="readmore" href="engagement"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal5">
                <div class="img-wrapper">
                    <img src="assets/images/(5).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">Kalinga Women’s Engagement in Peace</div>
                </div>
            </div>



            <div class="modal fade" tabindex="-1" role="dialog" id="modal6" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Kalinga Youth Dialogues</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(6).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">
                                The exponential growth of numerous innovations and developments has
                                convinced many that
                                the seed of values and culture indigenous peoples have nourished for generations is
                                slowly dying. The influx of external influence and mobilization of local folks to pursue
                                education or work is believed to cause this phenomenon.
                            </p>
                            <p class="mt-2"><a class="readmore" href="kalingayouth"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal6">
                <div class="img-wrapper">
                    <img src="assets/images/(6).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">Kalinga Youth Dialogues</div>
                </div>
            </div>



            <div class="modal fade" tabindex="-1" role="dialog" id="modal7" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Bonds of Tradition and Flavor</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(7).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">In any Kalinga occasion, food plays a vital role in making the moment as
                                worthwhile and
                                meaningful as possible. Food has always been an integral part of the Kalinga culture as
                                the latter exhibits itself in the variety of dishes served during important occasions.
                                One occasion where the Kalingas showcase their rich culinary tradition is during the
                                culmination of a successful establishment of bodong following a long and tedious
                                negotiation.
                            </p>
                            <p class="mt-2"><a class="readmore" href="food"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal7">
                <div class="img-wrapper">
                    <img src="assets/images/(7).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">Bonds of Tradition and Flavor</div>
                </div>
            </div>



            <div class="modal fade" tabindex="-1" role="dialog" id="modal8" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Kalinga Women Shine!</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(8).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">Bestowed with beauty and grace, women are esteemed by many. But beyond
                                that respect
                                ascribed to them, they have so much more to offer than good looks and lovely gestures,
                                because they can achieve great feats with their power and strength.
                            </p>
                            <p class="mt-2"><a class="readmore" href="empowered"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal8">
                <div class="img-wrapper">
                    <img src="assets/images/(8).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">Kalinga Women Shine!</div>
                </div>
            </div>



            <div class="modal fade" tabindex="-1" role="dialog" id="modal9" aria-labelledby="myExtraLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Kalinga Tourism, Arts and Culture</h4>

                        </div>
                        <div class="modal-body">
                            <img src="assets/images/(9).webp" width="100%" height="100%">
                            <hr>
                            <!-- <h4>Tooltips in a modal</h4> -->
                            <p class="contento">Before the emergence of modernized civilization, headhunting was once
                                regarded as a noble
                                pursuit and symbolized bravery for the natives. Hence, headhunters became the identity
                                interlinked with the natives of this landlocked province. It was then a warrior society
                                that accorded tattoos as status symbols awarded to warriors which men respected and as
                                these warriors earned tattoos, women's admiration was earned as well. But it’s not all
                                violence and tribal wars that prevail most in this pristine land, there’s more than
                                meets the eye!
                            </p>
                            <p class="mt-2"><a class="readmore" href="ktac"><strong><u>Read more
                                            →</u></strong></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3" data-toggle="modal" data-target="#modal9">
                <div class="img-wrapper">
                    <img src="assets/images/(9).webp" alt="Sample" class="img-fluid">
                    <div class="overlay-text">Kalinga Tourism, Arts and Culture</div>
                </div>
            </div>


        </div>
    </div>
    <?php
    include_once('includes/footer.php');
    ?>
</body>
<script>
    AOS.init();

    const carousel = document.querySelector("#cardCarousel");
    const prevBtn = document.querySelector(".carousel-btn.prev");
    const nextBtn = document.querySelector(".carousel-btn.next");

    let index = 0;

    function getVisibleCount() {
        return window.innerWidth <= 768 ? 1 : 3;
    }

    function updateCarousel() {
        const visibleCount = getVisibleCount();
        const cardWidth = carousel.querySelector(".card").offsetWidth + 20; // include gap
        carousel.style.transform = `translateX(${-index * cardWidth}px)`;
    }

    nextBtn.addEventListener("click", () => {
        if (index < carousel.children.length - getVisibleCount()) {
            index++;
        } else {
            index = 0; // loop back
        }
        updateCarousel();
    });

    prevBtn.addEventListener("click", () => {
        if (index > 0) {
            index--;
        } else {
            index = carousel.children.length - getVisibleCount();
        }
        updateCarousel();
    });

    window.addEventListener("resize", updateCarousel);
    updateCarousel();
</script>

</html>