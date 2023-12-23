<!doctype html>
<html lang="<?= config('language_code') ?>" class="bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#F3F5F6">
    <meta name="google" content="notranslate">

    <?php slot('meta'); ?>

    <title>
        <?= vars('page_title') ?>
    </title>

    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="icon" sizes="192x192" href="<?= asset_url('assets/img/logo.png') ?>">

    <link rel="stylesheet" type="text/css"
        href="<?= asset_url('assets/css/themes/' . setting('theme', 'default') . '.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/layouts/booking_layout.css') ?>">

    <?php component('company_color_style', ['company_color' => vars('company_color')]); ?>

    <?php slot('styles'); ?>
</head>

<body data-theme="lofi" class="bg-gray-100">
    <div id="main" class="container">
        <?php component('navbar', ['company_color' => vars('company_color')]); ?>
        <div class="row wrapper">
            <div id="message-frame" class="col-12 border my-auto frame-container">

                <?php slot('content'); ?>

                <div class="mt-2">
                    <small>

                        <a href="<?= site_url() ?>"><?= vars('company_name') ?></a>
                    </small>
                </div>

            </div>
        </div>
    </div>

    <script src="<?= asset_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset_url('assets/vendor/@popperjs-core/popper.min.js') ?>"></script>
    <script src="<?= asset_url('assets/vendor/bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?= asset_url('assets/vendor/moment/moment.min.js') ?>"></script>
    <script src="<?= asset_url('assets/vendor/moment-timezone/moment-timezone-with-data.min.js') ?>"></script>
    <script src="<?= asset_url('assets/vendor/@fortawesome-fontawesome-free/fontawesome.min.js') ?>"></script>
    <script src="<?= asset_url('assets/vendor/@fortawesome-fontawesome-free/solid.min.js') ?>"></script>
    <script src="<?= asset_url('assets/vendor/bootstrap/bootstrap.min.js') ?>"></script>

    <script src="<?= asset_url('assets/js/app.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/date.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/file.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/http.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/lang.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/message.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/string.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/url.js') ?>"></script>
    <script src="<?= asset_url('assets/js/utils/validation.js') ?>"></script>
    <script src="<?= asset_url('assets/js/layouts/message_layout.js') ?>"></script>
    <script src="<?= asset_url('assets/js/http/localization_http_client.js') ?>"></script>

    <?php component('js_vars_script'); ?>
    <?php component('js_lang_script'); ?>

    <?php slot('scripts'); ?>

</body>

</html>