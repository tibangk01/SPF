<!--====================  footer area ====================-->
<div class="footer-area-wrapper ">
    <div class="footer-area section-space--ptb_120 bg-img footer-bg--overlay" data-bg="<?= base_url('') ?>assets/client/images/bg/footer-bg-01.jpg">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="<?= base_url('') ?>assets/client/images/logo/white-logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="footer-widget-dic">
                        <p class="footer-dec"><?=APP_DESCRIPTION?></p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="coustom-row-in-footer">
                        <div class="footer-widget-coustom-col footer-widget">
                            <h4 class="footer-widget__title mb-20 text-white">Liens utiles</h4>
                            <ul class="footer-widget__item-list">
                                <li><a href="<?= base_url('/') ?>" class="hover-style-link">Accueil</a></li>
                                <li><a href="<?= base_url('client/documents') ?>" class="hover-style-link">Documents utiles</a></li>
                                <li><a href="<?= base_url('client/contact') ?>" class="hover-style-link">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget-coustom-col footer-widget">
                            <h4 class="footer-widget__title mb-20 text-white">Nos coordonées</h4>
                            <div class="footer-widget__list">
                                <div class="single-footer-widger">
                                    <h5>Adresse</h5>
                                    <p><?= APP_ADDRESS.', '.APP_PHONE.', '?><a href="<?= APP_WEB_ADDRESS_LINK?>"><?= APP_WEB_ADDRESS?></a> </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4 col-sm-6 footer-widget">
                        
                    </div>-->
            </div>
        </div>
    </div>
    <div class="footer-copyright-area mt-25 mb-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <span class="copyright-text">&copy; <a href="#" >BTS <?= date('Y') ?></a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of footer area  ====================-->









<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fa fa-angle-double-up"></i>
    <i class="arrow-bottom fa fa-angle-double-up"></i>
</a>
<!--====================  End of scroll top  ====================-->



<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?= base_url('') ?>assets/client/images/logo/dark-logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="<?= base_url('/') ?>">Accueil</a>
                    </li>
                    <li class="has-children">
                        <a href="<?= base_url('client/docs') ?>">Documents utiles</a>
                    </li>
                    <li class="has-children">
                        <a href="<?= base_url('client/contact') ?>"><span>Contact</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->


























<!-- JS
    ============================================ -->
<!-- Modernizer JS -->
<script src="<?= base_url('') ?>assets/client/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="<?= base_url('') ?>assets/client/js/vendor/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="<?= base_url('') ?>assets/client/js/vendor/bootstrap.min.js"></script>

<!-- Swiper Slider JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/swiper.min.js"></script>

<!-- Waypoints JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/waypoints.min.js"></script>

<!-- Counter down JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/countdown.min.js"></script>

<!-- Isotope JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/images-loaded.min.js"></script>

<!-- Counterup JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/counterup.min.js"></script>

<!-- WOW JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/wow.min.js"></script>

<!-- AOS JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/aos.js"></script>

<!-- Some plugins JS -->
<script src="<?= base_url('') ?>assets/client/js/plugins/some-plugins.js"></script>


<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<!--
    <script src="<?= base_url('') ?>assets/client/js/plugins/plugins.min.js"></script>
    -->

<!-- Main JS -->
<script src="<?= base_url('') ?>assets/client/js/main.js"></script>


</body>

</html>