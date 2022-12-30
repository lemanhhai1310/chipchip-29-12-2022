<?php $data["title"] = "Giáo viên"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Nền tảng tìm giáo viên nước ngoài kèm riêng cho trẻ em lớn nhất-->
<div class="uk-section uk-background-default">
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

<div class="uk-background-muted uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-grid-20-m" uk-grid>
            <div class="uk-width-expand">
                <div class="home__item-70-40">
                    <?php for ($i=1;$i<=4;$i++): ?>
                    <div class="uk-card item__15 uk-card-default uk-card-body uk-padding-small uk-border-rounded uk-height-min-small">

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
            <div class="uk-width-1-3@m">
                <aside class="sidebar">
                    <div class="uk-card uk-card-body uk-border-rounded uk-padding-small uk-card-default uk-height-min-medium">

                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>




<?php require "template-parts/layouts/footer.php"; ?>