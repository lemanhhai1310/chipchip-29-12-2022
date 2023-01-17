<?php $data["title"] = "Price"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section">
    <div class="uk-container">
        <div class="home__item-40-16 uk-text-center">
            <h2 class="uk-h2 home__title">Học tập chỉ hiệu quả khi trở thành thói quen thường xuyên. <br class="uk-visible@m"> Đăng ký gói học để bắt đầu.</h2>
        </div>
        <div class="home__item-40-16">
            <div class="uk-grid uk-grid-20 uk-grid-match uk-child-width-1-3@m" uk-grid>
                <?php
                $data = array(
                    array(
                        'number' => '6',
                        'price1' => '99.000đ/buổi',
                        'price' => '594.000đ',
                        'phobien' => false,
                    ),
                    array(
                        'number' => '12',
                        'price1' => '93.000đ/buổi',
                        'price' => '1.116.000đ',
                        'sale' => '6',
                        'phobien' => true,
                    ),
                    array(
                        'number' => '24',
                        'price1' => '85.000đ/buổi',
                        'price' => '2.040.000đ',
                        'sale' => '14',
                        'phobien' => false,
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-card price__card uk-position-relative uk-text-center uk-card-default uk-card-body uk-padding-small uk-border-rounded uk-flex uk-flex-column">
                        <?php if ($v['phobien']): ?>
                            <img class="uk-position-top-right price__card__phobien" src="images/phobien1.png" alt="">
                        <?php endif; ?>
                        <div class="uk-flex-auto">
                            <div class="price__card__number"><?= $v['number'] ?></div>
                            <div class="price__card__buoihoc">buổi học</div>
                            <div class="price__card__price1"><?= $v['price1'] ?></div>
                            <div class="uk-margin">
                                <div class="price__card__price"><?= $v['price'] ?></div>
                                <?php if (isset($v['sale'])): ?>
                                <div class="price__card__sale">tiết kiệm <?= $v['sale'] ?>%</div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="uk-text-center">
                            <a href="" class="uk-button header__btn uk-button-primary uk-border-pill">Đăng ký</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="home__item-40-16">
            <div class="uk-grid uk-flex-center" uk-grid>
                <div class="uk-width-4-5@m">
                    <div class="uk-card uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                        <div class="uk-grid uk-flex-middle uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <img src="images/refund1.png" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <div>Cam kết hoàn tiền trong 14 ngày đầu tiên</div>
                                <div>Trong vòng 14 ngày đầu tiên sau khi đăng ký gói học, nếu bạn muốn thay đổi kế hoạch học tập, Chip Chip sẽ  hoàn lại học phí các buổi còn lại bạn chưa sử dụng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-small">
        <!--Câu hỏi thường gặp-->
        <div class="home__item-70-40">
            <div class="home__item-40-16 uk-text-center">
                <h2 class="uk-h2 home__title">Câu hỏi thường gặp</h2>
            </div>
            <div class="home__item-40-16">
                <div class="uk-grid uk-flex-center" uk-grid>
                    <div class="uk-width-3-5@m">
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Mỗi buổi học kéo dài bao lâu?</a>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">Mỗi tuần học bao nhiêu buổi?</a>
                                <div class="uk-accordion-content">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">Chương trình học như thế nào?</a>
                                <div class="uk-accordion-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">Tôi phải làm gì nếu giáo viên huỷ lịch đột xuất?</a>
                                <div class="uk-accordion-content">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">Trong lớp học nếu xẩy ra lỗi thì tôi được có bị tính phí không?</a>
                                <div class="uk-accordion-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/Câu hỏi thường gặp-->

        <!--Tin tưởng bởi hơn 35.000 phụ huynh Việt Nam-->
        <div class="home__item-70-40">
            <div class="home__item-40-16 uk-text-center">
                <h2 class="uk-h2 home__title">Tin tưởng bởi hơn 35.000 phụ huynh Việt Nam</h2>
            </div>
            <div class="home__item-40-16">
                <div uk-slider>

                    <div class="uk-position-relative">

                        <div class="uk-slider-container">
                            <ul class="uk-slider-items uk-child-width uk-child-width-1-2@s uk-grid" uk-grid>
                                <?php for ($i=1;$i<=5;$i++): ?>
                                    <li>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem</div>
                                        <div class="uk-child-width-auto item__15 uk-grid uk-grid-small" uk-grid>
                                            <div>
                                                <div class="uk-cover-container uk-border-circle">
                                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                                    <canvas width="74" height="74"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div>Chị Cao Thanh Tâm</div>
                                                <div>Phụ huynh học sinh Hồ Tuệ Đan (8t)</div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>
        </div>
        <!--/Tin tưởng bởi hơn 35.000 phụ huynh Việt Nam-->
    </div>
</div>


<?php require "template-parts/layouts/footer.php"; ?>