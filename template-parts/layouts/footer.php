<footer class="footer">
    <div class="footer__top uk-section uk-background-default uk-height-min-medium">
        <div class="uk-container">
            <div class="uk-grid uk-grid-small" uk-grid>
                <div class="uk-width-2-5@m">
                    <figure><a href=""><img src="images/logo_f.png" alt=""></a></figure>
                    <div class="footer__top__txt">Công ty CP Công nghệ Giáo dục ChipChip</div>
                    <div class="uk-margin">
                        <a href="" class="uk-icon-button box-social__icon uk-margin-small-right uk-icon" uk-icon="twitter"></a>
                        <a href="" class="uk-icon-button box-social__icon uk-margin-small-right uk-icon" uk-icon="facebook"></a>
                        <a href="" class="uk-icon-button box-social__icon uk-icon" uk-icon="youtube"></a>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <h5 class="uk-h5 footer__top__title">Truy cập</h5>
                    <ul class="uk-nav footer__top__nav uk-nav-default item__10">
                        <li><a href="">Giáo viên</a></li>
                        <li><a href="">Chương trình học</a></li>
                        <li><a href="">Nền tảng học</a></li>
                        <li><a href="">Về chúng tôi</a></li>
                        <li><a href="">Tin tức</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-margin">
                        <h5 class="uk-h5 footer__top__title">Miễn phí tải về</h5>
                        <div class="footer__top__txt item__10">Phần mềm học cho bé & phụ huynh</div>
                        <div class="uk-grid item__10 uk-child-width-auto uk-grid-small" uk-grid>
                            <div><a href=""><img src="images/appstore.png" alt=""></a></div>
                            <div><a href=""><img src="images/googleplay.png" alt=""></a></div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <h5 class="uk-h5 footer__top__title">Điện thoại</h5>
                        <div class="footer__top__txt item__10">024 66624235 - 0983 005 801</div>
                    </div>
                    <div class="uk-margin">
                        <h5 class="uk-h5 footer__top__title">Địa chỉ</h5>
                        <div class="footer__top__txt item__10">Tầng 9, N2, 210 Lê Trọng Tấn, toà nhà ACCI, 210 Lê Trọng Tấn, Thanh Xuân, Hà Nội</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall uk-background-muted footer__bottom">
        <div class="uk-container">
            <div class="uk-grid uk-flex-middle uk-grid-10 uk-text-center" uk-grid>
                <div class="uk-width-expand">
                    <ul class="footer__bottom__siteMap uk-subnav uk-subnav-divider uk-flex-left@m uk-flex-center">
                        <li><a href="">© 2020 Chipchip. All rights reserved</a></li>
                        <li class="uk-visible@s"><a href="">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="uk-width-auto@s">
                    <img src="images/bct.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
<?php if (isset($notBottom)): ?>
<div class="bottomDetail uk-box-shadow-medium uk-position-bottom uk-hidden@m uk-position-fixed uk-section-xsmall uk-background-default">
    <div class="uk-container">
        <div class="uk-grid-10 uk-grid uk-child-width-auto uk-flex-middle" uk-grid>
            <div>
                <a href="" class="uk-icon-button bottomDetail__icon" uk-icon="forward"></a>
            </div>
            <div>
                <a href="" class="uk-button bottomDetail__btn bottomDetail__btn--nhantin uk-button-default uk-border-pill">Nhắn tin</a>
            </div>
            <div class="uk-width-expand">
                <a href="" class="uk-button bottomDetail__btn bottomDetail__btn--datlop uk-width uk-button-primary uk-border-pill">Đặt lớp học thử</a>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="bottomSticky uk-position-bottom uk-position-fixed uk-background-default uk-box-shadow-small">
    <div class="uk-container">
        <div class="uk-grid uk-flex-bottom" uk-grid>
            <div class="uk-width-auto">
                <div class="uk-position-relative bottomSticky__boxImg">
                    <img class="uk-position-bottom" uk-scrollspy="cls: uk-animation-slide-bottom;" src="images/Popup-CTA-1.png" alt="">
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="bottomSticky__section" uk-toggle="cls: bottomSticky__section; mode: media; media: @m">
                    <div class="uk-grid uk-flex-middle uk-flex-right uk-flex-left@m uk-child-width-auto uk-grid-12 uk-grid-40-m" uk-grid>
                        <div>
                            <div class="bottomSticky__txt">Đăng ký học thử <br class="uk-hidden@m"> <span>MIỄN PHÍ</span> ngay!</div>
                        </div>
                        <div>
                            <a href="" class="uk-button header__btn header__btn--bottom uk-button-primary uk-border-rounded">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
</div>
<!--/app-->
</body>
</html>