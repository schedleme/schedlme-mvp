<?php
/**
 * Local variables.
 * 
 * @var string $user_display_name
 */
?>
<div id="footer" class="d-lg-flex justify-content-lg-start align-items-lg-center p-2 text-center text-lg-left mt-auto">
    <div class="mb-3 me-lg-5 mb-lg-0">
        <!-- <img class="me-1" src="<?= base_url('assets/img/logo-16x16.png') ?>" alt="Logo"> -->
        <a href="<?= site_url('booking') ?>" target="_blank"><?= vars("company_name") ?></a>
    </div>



    <div class="mb-3 me-lg-5 mb-lg-0">
        <span id="select-language" class="badge bg-dark">
            <i class="fas fa-language me-2"></i>
            <?= ucfirst(config('language')) ?>
        </span>
    </div>

    <div class="mb-3 me-lg-5 mb-lg-0">
        <a href="<?= site_url("booking") ?>"">
            <?= lang('go_to_booking_page') ?>
        </a>
    </div>

    <div class=" ms-lg-auto">
            <strong id="footer-user-display-name">
                <?= lang('hello') . ', ' . e($user_display_name) ?>!
            </strong>
    </div>
</div>