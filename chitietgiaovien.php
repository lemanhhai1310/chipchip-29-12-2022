<?php $data["title"] = "Chi Tiết Giáo viên"; ?>
<?php $bodyClass = '' ?>
<?php $notBottom = '' ?>
<?php require "template-parts/layouts/header.php"; ?>


<div class="uk-background-muted uk-section-xsmall chitietgiaovien__section">
    <div class="uk-container">
        <div class="uk-grid uk-grid-small" uk-grid>
            <div class="uk-width-1-1 uk-hidden@m">
                <div class="chitietgiaovien__videoMB uk-position-z-index">
                    <div class="chitietgiaovien__boxSpace">
                        <video src="tvc.mp4" width="1920" height="1080" controls playsinline uk-video></video>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <!--Thông tin giáo viên-->
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded">
                    <div class="uk-grid uk-grid-small" uk-grid>
                        <div class="uk-width-auto uk-text-center">
                            <div class="uk-cover-container giaovien__list__coverImg">
                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                <canvas width="122" height="115"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-grid uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="uk-grid uk-grid-5 uk-child-width-auto uk-flex-middle" uk-grid>
                                        <div>
                                            <h4 class="uk-h4 home__giaovien__card__name"><a href="">Thầy Edward</a></h4>
                                        </div>
                                        <div>
                                            <span class="home__giaovien__card__tag uk-label uk-label-warning uk-border-pill uk-text-capitalize">Super Teacher</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home__txt item__8">Chứng chỉ quốc tế TEFL với 5 năm kinh nghiệm giảng dạy</div>
                            <div class="item__8">
                                <div class="chitietgiaovien__info__txt1">Giảng dạy tại Chip Chip từ 7/2020</div>
                                <div class="chitietgiaovien__info__txt2">32 lớp được đặt trong 48 giờ qua</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Thông tin giáo viên-->

                <!--Thông tin giáo viên-->
                <div class="uk-card item__15 uk-card-body uk-text-center uk-card-default uk-padding-small uk-border-rounded">
                    <div class="uk-grid uk-grid-10 uk-child-width-expand" uk-grid>
                        <div>
                            <div class="uk-grid uk-child-width-auto uk-flex-center uk-grid-5 uk-flex-middle" uk-grid>
                                <div class="home__giaovien__card__star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span class="home__giaovien__card__star__count">5.0</span>
                                </div>
                            </div>
                            <div class="chitietgiaovien__info__txt3">đánh giá</div>
                        </div>
                        <div>
                            <div class="chitietgiaovien__info__number">1229</div>
                            <div class="chitietgiaovien__info__txt3">lớp đã dạy</div>
                        </div>
                        <div>
                            <div class="chitietgiaovien__info__number">89</div>
                            <div class="chitietgiaovien__info__txt3">học sinh</div>
                        </div>
                        <div>
                            <div class="chitietgiaovien__info__number">98%</div>
                            <div class="chitietgiaovien__info__txt3">mức chuyên cần</div>
                        </div>
                    </div>
                </div>
                <!--/Thông tin giáo viên-->

                <!--Giới thiệu-->
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded">
                    <h5 class="uk-h5 chitietgiaovien__about__title uk-margin-remove">Giới thiệu</h5>
                    <article class="uk-article chitietgiaovien__about__article item__10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat</p>
                    </article>
                    <div class="item__10">
                        <a href="" class="chitietgiaovien__about__link">Hiển thị thêm</a>
                    </div>
                </div>
                <!--/Giới thiệu-->

                <!--Lịch học-->
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-large">
                    <h5 class="uk-h5 chitietgiaovien__about__title uk-margin-remove">Lịch học</h5>
                    <div class="home__txt item__10">Chọn giờ học phù hợp với con. Mỗi buổi học kéo dài trong 25 phút.</div>
                </div>
                <!--/Lịch học-->


                <!--Đánh giá của phụ huynh-->
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    <h5 class="uk-h5 chitietgiaovien__about__title uk-margin-remove">Đánh giá của phụ huynh</h5>
                    <div class="uk-grid uk-child-width-auto uk-grid-5 uk-flex-middle item__10" uk-grid>
                        <div class="home__giaovien__card__star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="home__giaovien__card__star__count">5.0</span>
                        </div>
                        <div>
                            <div class="home__giaovien__card__txt1">(67 đánh giá)</div>
                        </div>
                    </div>
                    <div class="item__10">
                        <?php for ($i=5;$i>=1;$i--): ?>
                        <div class="uk-grid uk-child-width-auto uk-flex-middle item__10 uk-grid-10" uk-grid>
                            <div class="uk-width-small">
                                <div class="chitietgiaovien__danhgia__txt"><?= $i ?> sao</div>
                            </div>
                            <div>
                                <div class="uk-width-medium chitietgiaovien__danhgia__progess uk-position-relative">
                                    <div class="uk-position-left" style="width: 50%"></div>
                                </div>
                            </div>
                            <div>
                                <span class="chitietgiaovien__danhgia__txt">(50)</span>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="uk-grid uk-child-width-1-2@m uk-margin-top" uk-grid>
                        <?php for ($i=1;$i<=6;$i++): ?>
                        <div>
                            <div class="uk-grid uk-grid-10" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="70" height="70"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <h6 class="uk-h6 home__giaovien__card__name"><a href="">Nguyễn Hoàng Tôn</a></h6>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="uk-position-relative chitietgiaovien__danhgia__rate">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <div class="uk-position-left uk-text-nowrap uk-overflow-hidden" style="width: 30%">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chitietgiaovien__danhgia__txtDate item__5">12/3/2022</div>
                                    <div class="chitietgiaovien__danhgia__desc item__10 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat</div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="uk-margin-medium-top uk-text-center">
                        <a href="" uk-icon="icon: chevron-right; ratio: 1" class="home__btnLarge home__btnLarge--default uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1 uk-width-auto@m">Xem tất cả 53 đánh giá</a>
                    </div>
                </div>
                <!--/Đánh giá của phụ huynh-->

                <!--Trình độ-->
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    <div class="uk-margin">
                        <h5 class="uk-h5 chitietgiaovien__about__title uk-margin-remove">Trình độ</h5>
                        <table class="uk-table uk-table-divider">
                            <tbody>
                            <tr>
                                <td>2015 -- 2019</td>
                                <td>
                                    <div>Đại học Kinh Tế Philippines</div>
                                    <div>Cử nhân ngành Kinh doanh Quốc tế</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="uk-margin">
                        <h5 class="uk-h5 chitietgiaovien__about__title uk-margin-remove">Chứng chỉ</h5>
                        <div class="uk-grid uk-child-width-1-3@m uk-grid-small uk-grid-30-m" uk-grid>
                            <div>
                                <div class="uk-text-center">
                                    <div class="uk-cover-container">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="221" height="139"></canvas>
                                    </div>
                                    <div>TEFL</div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-text-center">
                                    <div class="uk-cover-container">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="221" height="139"></canvas>
                                    </div>
                                    <div>TESOL</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <h5 class="uk-h5 chitietgiaovien__about__title uk-margin-remove">Kinh nghiệm giảng dạy</h5>
                        <table class="uk-table uk-table-divider">
                            <tbody>
                            <tr>
                                <td>2019 -- 2021</td>
                                <td>
                                    <div>51Talk Online Learning Company</div>
                                    <div>Giáo viên tiếng Anh online</div>
                                </td>
                            </tr>
                            <tr>
                                <td>2021 -- 2022</td>
                                <td>
                                    <div>Rarejob Inc.</div>
                                    <div>Giáo viên tiếng Anh online</div>
                                </td>
                            </tr>
                            <tr>
                                <td>2022 -- 2023</td>
                                <td>
                                    <div>Talk915 Inc.</div>
                                    <div>Giáo viên tiếng Anh online</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/Trình độ-->

                <!--Bạn có thể sẽ thích-->
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    <h5 class="uk-h5 chitietgiaovien__about__title uk-margin-remove">Bạn có thể sẽ thích</h5>
                </div>
                <!--/Bạn có thể sẽ thích-->

            </div>
            <div class="uk-width-1-3@m uk-visible@m">
                <aside class="sidebar">
                    <div class="uk-card uk-border-rounded uk-card-default uk-height-min-medium">
                        <div class="uk-cover-container uk-background-muted">
                            <img src="https://picsum.photos/276/172/?random=<?= $i ?>" alt="" uk-cover="">
                            <canvas width="422" height="243"></canvas>
                            <a href="" class="uk-position-cover home__giaovien__card__iconPlay uk-flex uk-flex-middle uk-flex-center"></a>
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <div class="item__10">
                                <a href="" class="uk-button chitietgiaovien__sidebar__btn chitietgiaovien__sidebar__btn--datlop uk-button-primary uk-width-1-1@l uk-border-pill">Đặt lớp học thử</a>
                            </div>
                            <div class="item__10">
                                <a href="" class="uk-button chitietgiaovien__sidebar__btn chitietgiaovien__sidebar__btn--nhantin uk-button-default uk-width-1-1@l uk-border-pill">Nhắn tin</a>
                            </div>
                            <div class="item__10">
                                <a href="" class="uk-button chitietgiaovien__sidebar__btn chitietgiaovien__sidebar__btn--chiase uk-button-default uk-width-1-1@l uk-border-pill">Chia sẻ</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>




<?php require "template-parts/layouts/footer.php"; ?>