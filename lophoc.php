<?php $data["title"] = "Lớp học"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section-xsmall" uk-height-viewport="expand: true">
    <div class="uk-container">
        <h3 class="uk-h3 uk-margin-remove giaovien__list__title">Lớp học của con</h3>
        <div class="uk-grid uk-margin uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card lophoc__card uk-card-body uk-card-default uk-padding-small uk-border-rounded">
                    <div class="uk-flex-middle uk-grid-5" uk-grid>
                        <div class="uk-width-expand">
                            <div class="lophoc__card__txt1">Đã hoàn thành</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="lophoc__card__rate">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid uk-grid-8 uk-flex-middle item__10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="uk-cover-container uk-border-circle">
                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                <canvas width="50" height="50"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h5 class="uk-h5 uk-margin-remove home__giaovien__card__name"><a href="">Thầy Edward</a></h5>
                            <div><span class="home__giaovien__card__tag uk-label uk-label-warning uk-border-pill uk-text-capitalize">Super Teacher</span></div>
                        </div>
                    </div>
                    <div class="item__5 lophoc__card__txtDate">20:00 Thứ 5 23/12/2022</div>
                    <div class="lophoc__card__desc">What do you like doing?</div>
                    <div class="uk-margin-small-top"><a href="" class="lophoc__card__btn uk-button uk-button-primary uk-width uk-border-pill">Nhận xét của giáo viên</a></div>
                    <div class="item__8"><a href="" class="lophoc__card__btn uk-button uk-button-default uk-width uk-border-pill">Video buổi học</a></div>
                    <div class="item__8"><a href="" class="lophoc__card__btn uk-button uk-button-default uk-width uk-border-pill">Luyện tập</a></div>
                </div>
            </div>
            <div>
                <div class="uk-card lophoc__card uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-text-center uk-card-body uk-card-default uk-padding-small uk-border-rounded">
                    <div>
                        <div class="lophoc__iconPlus"></div>
                        <div class="lophoc__card__txtAdd">Thêm buổi học</div>
                    </div>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
        </div>
    </div>
</div>




<?php require "template-parts/layouts/footer.php"; ?>