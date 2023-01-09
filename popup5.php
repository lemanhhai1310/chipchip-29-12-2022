<?php $data["title"] = "Popup5"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section-xsmall" uk-height-viewport="offset-top: true">
    <div class="uk-container">

    </div>
</div>


<!-- This is the modal with the default close button -->
<div id="modal-popup5" class="modal__popup5 uk-flex-top" uk-modal>
    <div class="uk-modal-dialog modal__dialog-m uk-margin-auto-vertical uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-text-center uk-modal-title modal__title">Thông tin chuyển khoản</div>
        <p class="modal__popup4__txtSmall">Quý Phụ huynh vui lòng chuyển khoản theo thông tin dưới đây. Ngay sau khi nhận được thanh toán, Chip Chip sẽ kích hoạt gói học và liên hệ lại để xác nhận.</p>
        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label>
                <input class="uk-radio modal__popup5__radio" type="radio" name="radio2" checked>
                <div class="modal__popup5__box">
                    <img class="uk-responsive-width" src="images/mbbank.png" alt="">
                </div>
            </label>
            <label>
                <input class="uk-radio modal__popup5__radio" type="radio" name="radio2">
                <div class="modal__popup5__box">
                    <img class="uk-responsive-width" src="images/techcombank.png" alt="">
                </div>
            </label>
        </div>
        <div class="uk-margin">
            <div class="item__8">
                <div class="modal__popup4__txtSmall">Ngân hàng</div>
                <div class="modal__popup5__txt1">TMCP Quân Đội MB Bank</div>
            </div>
            <div class="item__8">
                <div class="modal__popup4__txtSmall">Số tài khoản</div>
                <div uk-grid>
                    <div>
                        <div class="modal__popup5__txt1">092343232</div>
                    </div>
                    <div>
                        <a href="" class="modal__popup5__saochep">Sao chép</a>
                    </div>
                </div>
            </div>
            <div class="item__8">
                <div class="modal__popup4__txtSmall">Tên tài khoản</div>
                <div class="modal__popup5__txt1">Cty CP Công nghệ & Giáo dục Chip Chip</div>
            </div>
            <div class="item__8">
                <div class="modal__popup4__txtSmall">Nội dung chuyển khoản</div>
                <div uk-grid>
                    <div>
                        <div class="modal__popup5__txt1">19122022-73 Nguyen Van A</div>
                    </div>
                    <div>
                        <a href="" class="modal__popup5__saochep">Sao chép</a>
                    </div>
                </div>
            </div>
            <div class="item__8">
                <div class="modal__popup4__txtSmall">Số tiền</div>
                <div class="uk-text-danger modal__popup5__txt2">50.000đ</div>
            </div>
        </div>
        <div class="uk-margin">
            <div class="item__8">
                <button class="uk-button modal__popup1__btn uk-width uk-button-primary uk-border-pill">Yêu cầu hỗ trợ</button>
            </div>
            <div class="item__8">
                <button class="uk-button modal__popup1__btn uk-width uk-button-default uk-border-pill">Chọn hình thức thanh toán khác</button>
            </div>
        </div>
    </div>
</div>

<script>
    UIkit.modal('#modal-popup5').show();
</script>

<?php require "template-parts/layouts/footer.php"; ?>