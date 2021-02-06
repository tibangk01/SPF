<div class="site-wrapper-reveal">
    <!--============ Hero Area Start ============-->
    <div class="hero-area-wrap">
        <div class="corporate-hero corporate-bg-01">
            <div class="container">
                <div class="row align-items-center">
                    <!--baseline-->
                    <div class="col-xl-6 col-lg-8 col-md-9">
                        <div class="corporate-hero-text wow move-up">
                            <h3 class="font-weight--bold mb-15 section-title">Bienvenue sur notre plateforme décentralisée en ligne</h3>
                            <div class="hero-button mt-30">
                                <a href="<?= base_url('client/contact') ?>" class="ht-btn ht-btn-lg font-weight--bold">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-to-number">
            <?php $tel = preg_replace('/\s+/', '', APP_PHONE); ?>
            <a href="tel:<?= $tel ?>"><img class="img-fluid" src="<?= base_url('') ?>assets/client/images/icons/call-icon.png" alt=""><?= APP_PHONE ?></a>
        </div>
    </div>
    <!--============ Hero Area End ============-->

    <!--============ Feature Area Start ============-->
    <div class="feature-wrapper section-space--ptb_90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-images__one modern-grid-image-4">
                        <div class="custom_4 small-mt__30  wow move-up animate">
                            <!-- ht-box-icon Start -->
                            <a href="#" class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image mb-20">
                                        <img class="img-fulid" src="<?= base_url('') ?>assets/client/images/icons/corporate-feature-icon-01.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="heading-title mb-15">Notre Histoire</h4>
                                        <div class="text"><?= APP_COMPANY_HISTORY ?></div>
                                    </div>
                                </div>
                            </a>
                            <!-- ht-box-icon End -->
                        </div>
                        <div class="custom_4 active mt-30 mb-30  wow move-up animate">
                            <!-- ht-box-icon Start -->
                            <a href="#" class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image mb-20">
                                        <img class="img-fulid" src="<?= base_url('') ?>assets/client/images/icons/corporate-feature-icon-02.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="heading-title mb-15">Mot Du Directeur</h4>
                                        <div class="text"><?= APP_DIRECTOR_GREATINGS ?></div>
                                    </div>
                                </div>
                            </a>
                            <!-- ht-box-icon End -->
                        </div>
                        <div class="custom_4 small-mb__30  wow move-up animate">
                            <!-- ht-box-icon Start -->
                            <a href="#" class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image mb-20">
                                        <img class="img-fulid" src="<?= base_url('') ?>assets/client/images/icons/corporate-feature-icon-03.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="heading-title mb-15">Nos Objectifs</h4>
                                        <div class="text"><?= APP_COMPANY_GOALS ?></div>
                                    </div>
                                </div>
                            </a>
                            <!-- ht-box-icon End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--============ Feature Area End ============-->
</div>