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
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
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
                                <div>Giảng dạy tại Chip Chip từ 7/2020</div>
                                <div>32 lớp được đặt trong 48 giờ qua</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Thông tin giáo viên-->

                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
                <div class="uk-card item__15 uk-card-body uk-card-default uk-padding-small uk-border-rounded uk-height-min-small">
                    1
                </div>
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