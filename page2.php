<?php $data["title"] = "Page 2"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-muted uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-card page1__card uk-visible@m uk-card-body uk-border-rounded uk-card-default uk-padding-small uk-height-min-small">
            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-expand uk-flex-last@m">
                    <div class="uk-cover-container">
                        <img src="images/img-courses/tieng-anh-tre-em-online.png" alt="" uk-cover="">
                        <canvas width="546" height="291"></canvas>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <h2 class="uk-h2 home__title">Chương trình Tiếng Anh giao tiếp trẻ em 1 kèm 1</h2>
                    <p class="home__txt">Được xây dựng trên khung chuẩn Cambridge, mục tiêu giúp trẻ em nói tự tin - phát âm chuẩn</p>
                </div>
            </div>
        </div>
        <div class="uk-hidden@m uk-text-center">
            <h2 class="uk-h2 home__title">Chương trình Tiếng Anh giao tiếp trẻ em 1 kèm 1</h2>
            <p class="home__txt">Được xây dựng trên khung chuẩn Cambridge, mục tiêu giúp trẻ em nói tự tin - phát âm chuẩn</p>
            <div class="uk-cover-container home__boxSpace">
                <img src="images/img-courses/tieng-anh-tre-em-online.png" alt="" uk-cover="">
                <canvas width="546" height="291"></canvas>
            </div>
        </div>
        <div class="uk-grid uk-grid-small uk-margin uk-grid-match" uk-grid>
            <?php for ($i=1;$i<=3;$i++): ?>
            <div class="uk-width-1-3@m">
                <div class="uk-card uk-card-body uk-border-rounded uk-card-default uk-padding-small uk-height-min-medium">
                    <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="page2__card__title">Cấp độ STARTERS</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="page2__card__title">5-7 tuổi</div>
                        </div>
                    </div>
                    <div class="uk-padding-small uk-margin uk-background-muted page2__card__box uk-border-rounded">
                        <div class="uk-grid uk-child-width-expand uk-grid-5 uk-text-center uk-flex-middle" uk-grid>
                            <div>
                                <div class="page2__card__box__txt1">60</div>
                                <div class="page2__card__box__txt2">buổi học</div>
                            </div>
                            <div>
                                <div class="page2__card__box__txt1">15</div>
                                <div class="page2__card__box__txt2">units</div>
                            </div>
                            <div>
                                <div class="page2__card__box__txt1">3</div>
                                <div class="page2__card__box__txt2">bài kiểm tra</div>
                            </div>
                        </div>
                    </div>
                    <div class="page2__card__desc">Chương trình dành cho các học sinh bắt đầu làm quen với tiếng Anh. Trong cấp độ này con sẽ được:</div>
                    <ul class="uk-list uk-list-bullet page2__card__list">
                        <li>speak about themselves</li>
                        <li>have a simple conversation about previously covered topics</li>
                        <li>speak about daily routine and what they are doing at the moment</li>
                        <li>speak about past events using was / were</li>
                        <li>speak about objects and compare them</li>
                        <li>ask for and give directions</li>
                        <li>read short sentences containing words of 4-6 letters</li>
                    </ul>
                    <ul class="page2__card__accordion" uk-accordion>
                        <li class="">
                            <a class="uk-accordion-title page2__card__accordion__title" href="#">Năng lực giao tiếp</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title page2__card__accordion__title" href="#">Các chủ đề & từ vựng</a>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title page2__card__accordion__title" href="#">Cấu trúc ngữ pháp</a>
                            <div class="uk-accordion-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <!--Hành trình con nói giỏi tiếng Anh bắt đầu từ môi trường luyện tập với người thầy tốt!-->
        <div class="home__item-70-40 home__hanhtrinh__card uk-border-rounded uk-card uk-card-body uk-text-center">
            <div class="uk-light">
                <h2 class="uk-h2 home__title">Hành trình con nói giỏi tiếng Anh bắt đầu từ <br class="uk-visible@m"> môi trường luyện tập với người thầy tốt!</h2>
            </div>
            <div>
                <a href="" uk-icon="icon: chevron-right; ratio: 1" class="home__btnLarge uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1 uk-width-auto@m">Chọn giáo viên ngay</a>
            </div>
        </div>
        <!--/Hành trình con nói giỏi tiếng Anh bắt đầu từ môi trường luyện tập với người thầy tốt!-->
    </div>
</div>


<?php require "template-parts/layouts/footer.php"; ?>