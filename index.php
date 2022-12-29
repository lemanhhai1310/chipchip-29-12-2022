<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Nền tảng tìm giáo viên nước ngoài kèm riêng cho trẻ em lớn nhất-->
<div class="uk-section uk-background-default">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-30-m uk-grid uk-flex-middle" uk-grid>
            <div class="uk-hidden@m uk-text-center">
                <h2 class="uk-h2 home__title">Nền tảng tìm giáo viên nước ngoài kèm riêng cho trẻ em lớn nhất</h2>
            </div>
            <div class="uk-flex-last@m">
                <video id="video-intro" src="tvc.mp4" width="1800" height="1200" loop muted playsinline></video>
            </div>
            <div class="uk-text-center uk-text-left@m">
                <h2 class="uk-h2 home__title uk-visible@m">Nền tảng tìm giáo viên nước ngoài kèm riêng cho trẻ em lớn nhất</h2>
                <div class="home__item-32-16 home__txt" uk-toggle="cls: home__item-32-16; mode: media; media: @m">Muốn con nói thành thạo tiếng Anh? Chip Chip cung cấp hàng trăm giáo viên nước ngoài chất lượng cao kèm riêng 1-1 cho con với học phí linh hoạt từ 60.000đ/buổi học.</div>
                <div class="home__item-32-16"><a href="" uk-icon="icon: play-circle; ratio: 1" class="home__btnLarge home__btnLarge--radius uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1 uk-width-auto@m">Chọn giáo viên.</a></div>
            </div>
        </div>
    </div>
</div>
<!--/Nền tảng tìm giáo viên nước ngoài kèm riêng cho trẻ em lớn nhất-->

<div class="uk-section-small uk-background-muted uk-visible@m uk-text-center">
    <div class="uk-container">
        <div class="uk-grid uk-child-width-1-3@m" uk-grid>
            <div>
                <h2 class="uk-h2 home__number uk-margin-remove"><span>+350</span></h2>
                <div class="home__txt item__5">giáo viên</div>
            </div>
            <div>
                <h2 class="uk-h2 home__number uk-margin-remove"><span>+300.000</span></h2>
                <div class="home__txt item__5">lớp học hoàn thành</div>
            </div>
            <div>
                <h2 class="uk-h2 home__number uk-margin-remove"><span>+18.000</span></h2>
                <div class="home__txt item__5">đánh giá dành cho giáo viên</div>
            </div>
        </div>
    </div>
</div>


<div class="uk-section uk-background-muted home__bg">
    <div class="uk-container">
        <!--Chọn từ hơn 350 giáo viên nước ngoài giỏi-->
        <div class="home__item-70-40">
            <div class="home__item-40-16 uk-text-center">
                <h2 class="uk-h2 home__title">Chọn từ hơn 350 giáo viên nước ngoài giỏi</h2>
            </div>
            <div class="home__item-40-16">
                <!--Visible PC-->
                <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-visible@m" uk-grid>
                    <?php for ($i=1;$i<=8;$i++): ?>
                        <div>
                            <div class="home__giaovien__card uk-card uk-card-default uk-border-rounded uk-height-min-small uk-padding-small">
                                <div class="uk-cover-container uk-background-muted">
                                    <img src="https://picsum.photos/276/172/?random=<?= $i ?>" alt="" uk-cover="">
                                    <canvas width="276" height="172"></canvas>
                                    <a href="" class="uk-position-cover home__giaovien__card__iconPlay uk-flex uk-flex-middle uk-flex-center"></a>
                                </div>
                                <div class="uk-grid uk-child-width-auto uk-grid-5 item__8 uk-flex-middle" uk-grid>
                                    <div>
                                        <h5 class="uk-h5 home__giaovien__card__name"><a href="">Thầy Edward</a></h5>
                                    </div>
                                    <div>
                                        <span class="home__giaovien__card__tag uk-label uk-label-warning uk-border-pill uk-text-capitalize">Super Teacher</span>
                                    </div>
                                </div>
                                <div class="item__8 home__giaovien__card__txt uk-flex uk-flex-row-reverse uk-flex-middle" uk-icon="icon: user; ratio:0.8">
                                    <span class="uk-flex-auto uk-text-middle">80 học sinh * 5603 bài học</span>
                                </div>
                                <div class="item__5 uk-grid uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                                    <div class="home__giaovien__card__star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="home__giaovien__card__star__count">5.0</span>
                                    </div>
                                    <div>
                                        <div class="home__giaovien__card__txt1">67 đánh giá</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <!--/Visible PC-->

                <!--Visible Mobile-->
                <div class="uk-hidden@m uk-overflow-auto home__boxSpace home__overflow__scrollbar home__overflow__boxShadown">
                    <div class="uk-grid uk-grid-13 uk-flex-nowrap uk-child-width-auto" uk-grid>
                        <?php for ($i=1;$i<=8;$i++): ?>
                            <div class="home__overflow__column">
                                <div class="uk-card home__giaovien__card uk-card-default uk-border-rounded uk-width-medium uk-padding-small">
                                    <div class="uk-grid uk-grid-8" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="uk-cover-container uk-border-circle">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                <canvas width="43" height="43"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div>
                                                <h5 class="uk-h5 home__giaovien__card__name uk-margin-remove"><a href="">Thầy Edward</a></h5>
                                            </div>
                                            <div class="home__giaovien__card__txt1 item__5">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                1563 buổi học * 23 học sinh
                                            </div>
                                            <div class="home__giaovien__card__txt1 item__5 home__giaovien__card__star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                5.0 (23 đánh giá)
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <a href="" class="home__btnLarge home__btnLarge--small uk-border-pill uk-button uk-button-primary uk-width-1-1 uk-width-auto@m">Đặt lịch học thử</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <!--/Visible Mobile-->
            </div>
            <div class="home__item-40-16 uk-text-center" uk-toggle="cls: home__item-40-16; mode: media; media: @m">
                <a href="" uk-icon="icon: chevron-right; ratio: 1" class="home__btnLarge home__btnLarge--giaovien uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1 uk-width-auto@m">Tìm thêm giáo viên.</a>
            </div>
        </div>
        <!--/Chọn từ hơn 350 giáo viên nước ngoài giỏi-->

        <!--Giải pháp linh hoạt & tiết kiệm nhất để con nói giỏi tiếng Anh-->
        <div class="home__item-70-40 home__boxCardMB uk-border-rounded">
            <div class="home__item-40-16 uk-text-center">
                <h2 class="uk-h2 home__title">Giải pháp linh hoạt & tiết kiệm nhất để <br class="uk-visible@m"> con nói giỏi tiếng Anh</h2>
            </div>
            <div class="home__item-40-16 uk-grid uk-child-width-1-4@l uk-grid-small" uk-grid>
                <div>
                    <div class="uk-text-center home__giaiphap">
                        <div class="home__giaiphap__boxImg home__giaiphap__boxImg--icon1 uk-background-norepeat uk-background-center-center">

                        </div>
                        <h4 class="uk-h4 home__giaiphap__title uk-margin-remove">Giáo viên <br class="uk-visible@m"> uy tín</h4>
                        <div class="home__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla</div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center home__giaiphap">
                        <div class="home__giaiphap__boxImg home__giaiphap__boxImg--icon2 uk-background-norepeat uk-background-center-center">

                        </div>
                        <h4 class="uk-h4 home__giaiphap__title uk-margin-remove">Linh hoạt, <br class="uk-visible@m"> thuận tiện</h4>
                        <div class="home__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla</div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center home__giaiphap">
                        <div class="home__giaiphap__boxImg home__giaiphap__boxImg--icon3 uk-background-norepeat uk-background-center-center">

                        </div>
                        <h4 class="uk-h4 home__giaiphap__title uk-margin-remove">Tương tác <br class="uk-visible@m"> đa chiều</h4>
                        <div class="home__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla</div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center home__giaiphap">
                        <div class="home__giaiphap__boxImg home__giaiphap__boxImg--icon4 uk-background-norepeat uk-background-center-center">

                        </div>
                        <h4 class="uk-h4 home__giaiphap__title uk-margin-remove">Học phí <br class="uk-visible@m"> tiết kiệm</h4>
                        <div class="home__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Giải pháp linh hoạt & tiết kiệm nhất để con nói giỏi tiếng Anh-->

        <!--Học ở Chip Chip như thế nào?-->
        <div class="home__boxCardMB uk-border-rounded home__item-70-40">
            <div class="home__item-40-16 uk-text-center">
                <h2 class="uk-h2 home__title">Học ở Chip Chip như thế nào?</h2>
            </div>

        </div>
        <!--/Học ở Chip Chip như thế nào?-->

        <!--Cam kết 100% hài lòng-->
        <div class="home__boxCardMB uk-border-rounded home__item-70-40">
            <div class="item__16 uk-position-relative home__camket__boxLine uk-text-center">
                <img src="images/cam-ket.png" alt="">
            </div>
            <div class="item__16 uk-text-center">
                <h2 class="uk-h2 home__title">Cam kết 100% hài lòng</h2>
            </div>
            <div class="item__16 uk-text-center">
                <div class="home__txt">Nếu bạn không hài lòng với buổi học thử, Chip Chip sẽ sắp xếp lại bạn buổi học thử
                    <br class="uk-visible@m"> hoàn toàn miễn phí hoặc hoàn lại 100% khoản tiền học phí của buổi học thử</div>
            </div>
        </div>
        <!--/Cam kết 100% hài lòng-->

        <!--Câu hỏi thường gặp-->
        <div class="uk-section-small home__cauhoi__box home__boxCardMB uk-border-rounded home__item-70-40" uk-toggle="cls: uk-background-muted; mode: media; media: @m">
            <div class="uk-position-relative uk-position-z-index">
                <div class="home__item-40-16 uk-text-center">
                    <h2 class="uk-h2 home__title">Câu hỏi thường gặp</h2>
                </div>
                <div class="home__item-40-16">
                    <ul class="uk-accordion" uk-accordion>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">Item 1</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Item 2</a>
                            <div class="uk-accordion-content">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">Item 3</a>
                            <div class="uk-accordion-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="home__item-40-16 uk-text-center">
                    <a href="" uk-icon="icon: chevron-right; ratio: 1" class="home__btnLarge home__btnLarge--default uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1 uk-width-auto@m">Xem tất cả</a>
                </div>
            </div>
        </div>
        <!--/Câu hỏi thường gặp-->

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