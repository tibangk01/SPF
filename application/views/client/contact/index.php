<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-img" data-bg="<?= base_url() ?>assets/client/images/bg/corporate-breadcrumb_bg-contact.jpg" data-white-overlay="4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-left">
                    <h2 class="breadcrumb-title title--default mb-10">Contactez-nous</h2>
                    <p>Faites-nous part ici de vos inquiétudes et réclamations.
                        <br>
                        Nous nous ferons un plaisir de vous répondre au plus vite.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<div class="site-wrapper-reveal">
    <!--============ Personal Contact Us Area Start ============-->
    <div class="personal-contact-us-area  section-space--ptb_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-us-info section-space--mb_40">
                        <div class="contact-widget__wrap section-space--mt_50">
                            <div class="single-footer-widger mb-30">
                                <h5 class="mb-10">Adresse</h5>
                                <p><?= APP_ADDRESS ?></p>
                            </div>
                            <div class="single-footer-widger mb-30">
                                <h5 class="mb-10">Téléphone</h5>
                                <p><?= APP_PHONE ?></p>
                            </div>
                            <div class="single-footer-widger mb-30">
                                <h5 class="mb-10">Adresse Web</h5>
                                <p>
                                    <a href="<?= APP_WEB_ADDRESS_LINK ?>"><?= APP_WEB_ADDRESS ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <?php echo form_open('ccontact/store'); ?>
                    <div class="contact-us-form section-space--mb_40">
                        <div class="contact-form__one ml-lg-5">
                            <div class="contact-title section-space--mb_30">
                                <h4 class="text-white">Envoyez-nous un message </h4>
                            </div>
                            <div class="contact-title section-space--mb_15">
                                <span class="text-warning"><?php $temp = $this->session->flashdata('visitor_message_sent');
                                                            if ($temp !== NULL) echo $temp ?></span>
                            </div>
                            <div class="contact-input input-row">
                                <div class="contact-inner input-col-5">
                                    <input name="nom" type="text" placeholder="Nom *" value="<?php if (!empty(form_error('nom'))) echo set_value('nom') ?>" maxlength="64" required autocomplete="off">
                                    <?= form_error('nom', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="contact-inner input-col-5">
                                    <input name="email" type="email" placeholder="Email *" value="<?php if (!empty(form_error('email'))) echo set_value('email') ?> " maxlength="64" required autocomplete="off">
                                    <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="sujet" type="text" placeholder="Sujet *" value="<?php if (!empty(form_error('sujet'))) echo set_value('sujet') ?>" maxlength="128" required autocomplete="off">
                                    <?= form_error('sujet', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <div class="contact-inner contact-message">
                                <textarea name="message" type="text" placeholder="Message *" maxlength="512" required><?php if (!empty(form_error('message'))) echo set_value('message') ?></textarea>
                                <?= form_error('message', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="comment-submit-btn text-right">
                                <button class="ht-btn ht-btn-sm personal-contact-btn" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <!--============ Personal Contact Us Area End ============-->
    </div>
</div>