<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="storage/assets/img/favicon.png" rel="icon">
        <link href="storage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <title>NextHome</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Styles -->
        @routes
        @vite([
            "resources/css/app.css",
            "resources/js/app.js",
            "resources/assets/vendor/bootstrap/css/bootstrap.min.css",
            "resources/assets/vendor/bootstrap-icons/bootstrap-icons.css",
            "resources/assets/vendor/boxicons/css/boxicons.min.css",
            "resources/assets/vendor/quill/quill.snow.css",
            "resources/assets/vendor/quill/quill.bubble.css",
            "resources/assets/vendor/remixicon/remixicon.css",
            "resources/assets/vendor/simple-datatables/style.css",
            "resources/assets/css/style.css",
            "resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
            "resources/assets/vendor/chart.js/chart.umd.js",
            "resources/assets/vendor/echarts/echarts.min.js",
            "resources/assets/vendor/quill/quill.min.js",
            "resources/assets/vendor/simple-datatables/simple-datatables.js",
            "resources/assets/vendor/tinymce/tinymce.min.js",
            "resources/assets/vendor/php-email-form/validate.js",
            "resources/assets/js/main.js",
            ])
        @inertiaHead
    </head>
    <body class="antialiased">
        @inertia
    </body>
</html>
