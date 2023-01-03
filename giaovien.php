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
                <div class="uk-inline">
                    <button class="uk-button giaovien__filter__btn uk-button-default uk-border-pill" type="button" tabindex="-1">
                        <span>Giáo viên</span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                    <div class="uk-width-large" uk-dropdown="mode: click">
                        <div class="uk-margin">
                            <h5 class="uk-h5 giaovien__filter__txt uk-margin-remove">Checkbox</h5>
                            <div class="uk-grid-10 item__10 uk-child-width-auto uk-grid">
                                <label><input class="uk-checkbox giaovien__filter__checkbox" type="checkbox" checked> <span class="giaovien__filter__box">A</span></label>
                                <label><input class="uk-checkbox giaovien__filter__checkbox" type="checkbox"> <span class="giaovien__filter__box">B</span></label>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <h5 class="uk-h5 giaovien__filter__txt uk-margin-remove">Radio</h5>
                            <div class="uk-grid-10 item__10 uk-child-width-auto uk-grid">
                                <label><input class="uk-radio giaovien__filter__radio" type="radio" name="radio2" checked> <span class="giaovien__filter__box">A</span></label>
                                <label><input class="uk-radio giaovien__filter__radio" type="radio" name="radio2"> <span class="giaovien__filter__box">B</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-inline">
                    <button class="uk-button giaovien__filter__btn uk-button-default uk-border-pill" type="button" tabindex="-1">
                        <span>Mục tiêu học tập</span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                    <div class="uk-width-large" uk-dropdown="mode: click">
                        <div class="uk-margin">
                            <h5 class="uk-h5 giaovien__filter__txt uk-margin-remove">Checkbox</h5>
                            <div class="uk-grid-10 item__10 uk-child-width-auto uk-grid">
                                <label><input class="uk-checkbox giaovien__filter__checkbox" type="checkbox" checked> <span class="giaovien__filter__box">A</span></label>
                                <label><input class="uk-checkbox giaovien__filter__checkbox" type="checkbox"> <span class="giaovien__filter__box">B</span></label>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <h5 class="uk-h5 giaovien__filter__txt uk-margin-remove">Radio</h5>
                            <div class="uk-grid-10 item__10 uk-child-width-auto uk-grid">
                                <label><input class="uk-radio giaovien__filter__radio" type="radio" name="radio2" checked> <span class="giaovien__filter__box">A</span></label>
                                <label><input class="uk-radio giaovien__filter__radio" type="radio" name="radio2"> <span class="giaovien__filter__box">B</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-inline">
                    <button class="uk-button giaovien__filter__btn uk-button-default uk-border-pill" type="button" tabindex="-1">
                        <span>Trình độ của con</span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                    <div class="uk-width-large" uk-dropdown="mode: click">
                        <div class="uk-margin">
                            <h5 class="uk-h5 giaovien__filter__txt uk-margin-remove">Checkbox</h5>
                            <div class="uk-grid-10 item__10 uk-child-width-auto uk-grid">
                                <label><input class="uk-checkbox giaovien__filter__checkbox" type="checkbox" checked> <span class="giaovien__filter__box">A</span></label>
                                <label><input class="uk-checkbox giaovien__filter__checkbox" type="checkbox"> <span class="giaovien__filter__box">B</span></label>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <h5 class="uk-h5 giaovien__filter__txt uk-margin-remove">Radio</h5>
                            <div class="uk-grid-10 item__10 uk-child-width-auto uk-grid">
                                <label><input class="uk-radio giaovien__filter__radio" type="radio" name="radio2" checked> <span class="giaovien__filter__box">A</span></label>
                                <label><input class="uk-radio giaovien__filter__radio" type="radio" name="radio2"> <span class="giaovien__filter__box">B</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Filter-->

<div class="uk-background-muted uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-grid uk-grid-small" uk-grid>
            <div class="uk-width-expand">
                <div class="home__item-70-40">
                    <h3 class="uk-h3 uk-margin-remove giaovien__list__title">Giáo viên đã học</h3>
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
                                            <span class="uk-label uk-label-success giaovien__list__label">Bản ngữ</span>
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
                </div>


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
                                    <span class="uk-label uk-label-success giaovien__list__label">Bản ngữ</span>
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
                        <div class="uk-cover-container uk-background-muted">
                            <img src="https://picsum.photos/276/172/?random=<?= $i ?>" alt="" uk-cover="">
                            <canvas width="396" height="210"></canvas>
                            <a href="" class="uk-position-cover home__giaovien__card__iconPlay uk-flex uk-flex-middle uk-flex-center"></a>
                        </div>
                        <table class="uk-table datlich__04__box3__table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <div><span class="datlich__04__box3__table__txt1">T2</span></div>
                                    <div><span class="datlich__04__box3__table__txt2">22</span></div>
                                </th>
                                <th>
                                    <div><span class="datlich__04__box3__table__txt1">T3</span></div>
                                    <div><span class="datlich__04__box3__table__txt2">23</span></div>
                                </th>
                                <th>
                                    <div><span class="datlich__04__box3__table__txt1">T4</span></div>
                                    <div><span class="datlich__04__box3__table__txt2">24</span></div>
                                </th>
                                <th>
                                    <div><span class="datlich__04__box3__table__txt1">T5</span></div>
                                    <div><span class="datlich__04__box3__table__txt2">25</span></div>
                                </th>
                                <th>
                                    <div><span class="datlich__04__box3__table__txt1">T6</span></div>
                                    <div><span class="datlich__04__box3__table__txt2">26</span></div>
                                </th>
                                <th>
                                    <div><span class="datlich__04__box3__table__txt1">T7</span></div>
                                    <div><span class="datlich__04__box3__table__txt2">27</span></div>
                                </th>
                                <th>
                                    <div><span class="datlich__04__box3__table__txt1">CN</span></div>
                                    <div><span class="datlich__04__box3__table__txt2">28</span></div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="datlich__04__box3__table__tr">
                                <td class="datlich__04__box3__table__td">
                                    <div><span class="datlich__04__box3__table__txt2 uk-text-truncate">00 - 04</span></div>
                                </td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="uk-active datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                            </tr>
                            <tr class="datlich__04__box3__table__tr">
                                <td class="datlich__04__box3__table__td">
                                    <div><span class="datlich__04__box3__table__txt2 uk-text-truncate">04 - 08</span></div>
                                </td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="uk-active datlich__04__box3__table__td"></td>
                                <td class="uk-active datlich__04__box3__table__td"></td>
                                <td class="uk-active datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                            </tr>
                            <tr class="datlich__04__box3__table__tr">
                                <td class="datlich__04__box3__table__td">
                                    <div><span class="datlich__04__box3__table__txt2 uk-text-truncate">08 - 12</span></div>
                                </td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="uk-active datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="uk-active datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                            </tr>
                            <tr class="datlich__04__box3__table__tr">
                                <td class="datlich__04__box3__table__td">
                                    <div><span class="datlich__04__box3__table__txt2 uk-text-truncate">12- 16</span></div>
                                </td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="uk-active datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                            </tr>
                            <tr class="datlich__04__box3__table__tr">
                                <td class="datlich__04__box3__table__td">
                                    <div><span class="datlich__04__box3__table__txt2 uk-text-truncate">16- 20</span></div>
                                </td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                            </tr>
                            <tr class="datlich__04__box3__table__tr">
                                <td class="datlich__04__box3__table__td">
                                    <div><span class="datlich__04__box3__table__txt2 uk-text-truncate">20- 24</span></div>
                                </td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                                <td class="datlich__04__box3__table__td"></td>
                            </tr>
                            </tbody>
                        </table>
                        <div>
                            <a href="" class="home__btnLarge home__btnLarge--default uk-border-pill uk-button uk-button-primary uk-button-large uk-width-1-1">Xem lịch đầy đủ</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>




<?php require "template-parts/layouts/footer.php"; ?>