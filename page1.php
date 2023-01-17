<?php $data["title"] = "Page 1"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section">
    <div class="uk-container">
        <div class="home__item-40-16 uk-text-center">
            <h2 class="uk-h2 home__title">Chương trình tiếng Anh online cho <br class="uk-visible@m">
                trẻ em đa dạng theo nhu cầu và trình độ</h2>
            <p class="home__txt">Dựa trên mục tiêu học tập và khả năng của con, giáo viên sẽ lựa chọn nội dung <br class="uk-visible@m"> chương trình theo cấp độ học tập phù hợp</p>
        </div>
        <div class="home__item-40-16">
            <div class="uk-grid uk-child-width" uk-grid>
                <?php
                $data = array(
                    array(
                        'img' => 'images/img-courses/tieng-anh-tre-em-online.png',
                        'title' => 'Tiếng Anh giao tiếp trẻ em 1 kèm 1',
                        'desc' => 'Môi trường giao tiếp 100% bằng tiếng Anh với giáo viên nước ngoài. Chỉnh sửa phát âm, hình thành phản xạ ngôn ngữ tự nhiên ngay từ sớm. Chương trình được thiết kế theo tiêu chuẩn khung chương trình Cambridge.',
                    ),
                    array(
                        'img' => 'images/img-courses/img-lets-talk.png',
                        'title' => "Let's Talk - trò chuyện với giáo viên nước ngoài",
                        'desc' => 'Phù hợp với những học sinh đã có sẵn nền tảng tiếng Anh, muốn duy trì môi trường tương tác ngôn ngữ thường xuyên qua trò chuyện tiếng Anh với người nước ngoài về các chủ đề thông dụng hàng ngày.',
                    ),
                    array(
                        'img' => 'images/img-courses/cambridge-speaking.png',
                        'title' => 'Luyện thi chứng chỉ Cambridge speaking',
                        'desc' => 'Giúp con làm quen và luyện tập thành thạo các dạng đề thi speaking lấy chứng chỉ Cambridge. Khoá học là bước chuẩn bị quan trọng để con đạt được thành tích cao trong kỳ thi lấy chứng chỉ Cambridge Starters/Movers hoặc Flyers trong tương lai.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-card page1__card uk-card-body uk-border-rounded uk-card-default uk-padding-small uk-height-min-small">
                        <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand uk-flex-last@m">
                                <div class="uk-cover-container">
                                    <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                    <canvas width="616" height="410"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-2-5@m">
                                <h2 class="uk-h2 home__title"><?= $v['title'] ?></h2>
                                <p class="home__txt"><?= $v['desc'] ?></p>
                                <div>
                                    <a href="" uk-icon="icon: chevron-right; ratio: 1" class="home__btnLarge home__btnLarge--giaovien uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1 uk-width-auto@m">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
</div>


<?php require "template-parts/layouts/footer.php"; ?>