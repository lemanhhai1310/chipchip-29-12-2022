<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.19/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.19/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.19/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($bodyClass))?$bodyClass:'' ?>">
<?php //require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="app uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <header class="header uk-position-top uk-position-fixed uk-position-z-index" uk-sticky>
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar  uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left"><a href="" class="uk-navbar-item uk-logo"><img src="images/logo_h.png" alt=""></a></div>
                <div class="uk-navbar-center uk-visible@m">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="">Tìm giáo viên</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="" class="uk-button header__btn uk-button-default">Đăng nhập</a>
                    </div>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="" class="uk-button header__btn uk-button-primary">Đăng ký</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>