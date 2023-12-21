<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- TITLE -->
    <title><?= @$title; ?></title>

    <!-- DASHBOARD CSS -->
    <link href="<?= base_url(); ?>template/assets/css/dashboard.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="<?= base_url(); ?>template/assets/plugins/toggle-menu/sidemenu.css" rel="stylesheet">

    <!--C3.JS CHARTS PLUGIN -->
    <link href="<?= base_url(); ?>template/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- TABS CSS -->
    <link href="<?= base_url(); ?>template/assets/plugins/tabs/style-2.css" rel="stylesheet" type="text/css">

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="<?= base_url(); ?>template/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="<?= base_url(); ?>template/assets/css/icons.css" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="<?= base_url(); ?>template/assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <style>
        hr {
            width: -webkit-fill-available;
            border: 1px solid gray;
            margin: 5px;
        }

        .add {
            color: green !important;
        }

        .minus {
            color: red !important;
        }

        tr:hover {
            background: antiquewhite !important;
        }
    </style>
</head>