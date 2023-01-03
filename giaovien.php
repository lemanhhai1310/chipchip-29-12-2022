<?php $data["title"] = "Giáo viên"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Nền tảng tìm giáo viên nước ngoài kèm riêng cho trẻ em lớn nhất-->
<div class="uk-section uk-background-default uk-padding-remove-bottom">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-30-m uk-grid uk-flex-middle" uk-grid>
            <div class="uk-hidden@m uk-text-center">
                <h2 class="uk-h2 home__title">Chọn giáo viên nước ngoài uy tín nhất cho con</h2>
            </div>
            <div class="uk-flex-last@m">
                <div class="uk-cover-container">
                    <img src="images/noimage.jpg" alt="" uk-cover="">
                    <canvas width="556" height="281"></canvas>
                </div>
            </div>
            <div class="uk-text-center uk-text-left@m">
                <h2 class="uk-h2 home__title uk-visible@m">Chọn giáo viên nước ngoài uy tín nhất cho con</h2>
                <div class="home__item-32-16 home__txt" uk-toggle="cls: home__item-32-16; mode: media; media: @m">Muốn con nói thành thạo tiếng Anh? Chip Chip cung cấp hàng trăm giáo viên nước ngoài chất lượng cao kèm riêng 1-1 cho con với học phí hợp lý.</div>
            </div>
        </div>
    </div>
</div>
<!--/Nền tảng tìm giáo viên nước ngoài kèm riêng cho trẻ em lớn nhất-->

<!--Filter-->
<div class="uk-section-xsmall giaovien__filter uk-background-default">
    <div class="uk-container">
        <div class="uk-grid uk-child-width-auto uk-grid-10" uk-grid>
            <div>
                <div uk-form-custom="target: > * > span:first-child">
                    <select aria-label="Custom controls">
                        <option value="">Giáo viên</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="uk-button giaovien__filter__btn uk-button-default uk-border-pill" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
            <div>
                <div uk-form-custom="target: > * > span:first-child">
                    <select aria-label="Custom controls">
                        <option value="">Mục tiêu học tập</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="uk-button giaovien__filter__btn uk-button-default uk-border-pill" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
            <div>
                <div uk-form-custom="target: > * > span:first-child">
                    <select aria-label="Custom controls">
                        <option value="">Trình độ của con</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="uk-button giaovien__filter__btn uk-button-default uk-border-pill" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Filter-->

<div class="uk-background-muted uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-grid-20-m" uk-grid>
            <div class="uk-width-expand">
                <div class="home__item-70-40">
                    <?php for ($i=1;$i<=4;$i++): ?>
                    <div class="uk-card giaovien__list__card item__15 uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                        <div class="uk-grid uk-grid-small" uk-grid>
                            <div class="uk-width-auto uk-text-center">
                                <div class="uk-cover-container giaovien__list__coverImg">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="122" height="115"></canvas>
                                </div>
                                <div class="uk-visible@m item__10 home__txt">5687 lớp học</div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-grid uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="uk-grid uk-grid-5 uk-child-width-auto uk-flex-middle" uk-grid>
                                            <div>
                                                <h5 class="uk-h5 home__giaovien__card__name"><a href="">Thầy Edward</a></h5>
                                            </div>
                                            <?php if ($i%2!=0): ?>
                                                <div>
                                                    <span class="home__giaovien__card__tag uk-label uk-label-warning uk-border-pill uk-text-capitalize">Super Teacher</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="uk-grid uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                                            <div class="home__giaovien__card__star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <span class="home__giaovien__card__star__count">5.0</span>
                                            </div>
                                            <div>
                                                <div class="home__giaovien__card__txt1">(67 đánh giá)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($i<=2): ?>
                                <div class="item__5">
                                    <span class="uk-label uk-label-success">Bản ngữ</span>
                                </div>
                                <?php endif; ?>

                                <div class="item__10">
                                    <div class="uk-hidden@m home__giaovien__card__txt uk-flex uk-flex-row-reverse uk-flex-middle" uk-icon="icon: user; ratio:0.8">
                                        <span class="uk-flex-auto uk-text-middle">80 học sinh * 5603 bài học</span>
                                    </div>
                                    <div class="uk-visible@m">
                                        <?php require "template-parts/block01.php"; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-hidden@m">
                                <?php require "template-parts/block01.php"; ?>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                    <div class="uk-margin-top uk-text-center">
                        <a href="" uk-icon="icon: chevron-right; ratio: 1" class="home__btnLarge home__btnLarge--default uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1 uk-width-auto@m">Hiển thị thêm</a>
                    </div>
                </div>

                <!--Câu hỏi thường gặp về giáo viên-->
                <div class="home__item-70-40">
                    <div class="home__item-40-16 uk-text-center">
                        <h2 class="uk-h2 home__title">Câu hỏi thường gặp về giáo viên</h2>
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
                </div>
                <!--/Câu hỏi thường gặp về giáo viên-->
            </div>
            <div class="uk-width-1-3@m uk-visible@m">
                <aside class="sidebar">
                    <div class="uk-card uk-card-body uk-border-rounded uk-padding-small uk-card-default uk-height-min-medium">

                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>




<?php require "template-parts/layouts/footer.php"; ?>