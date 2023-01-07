<?php $data["title"] = "Popup2"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section-xsmall" uk-height-viewport="offset-top: true">
    <div class="uk-container">

    </div>
</div>


<!-- This is the modal with the default close button -->
<div id="modal-popup2" class="modal__popup2 uk-flex-top" uk-modal>
    <div class="uk-modal-dialog modal__dialog uk-margin-auto-vertical uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title modal__title uk-text-center">Đăng ký để bắt đầu học tập</h2>
        <div class="uk-margin">
            <div class="item__8">
                <input class="uk-input modal__popup1__input uk-border-rounded" type="text" placeholder="Tên học sinh" aria-label="Input">
            </div>
            <div class="item__8">
                <input class="uk-input modal__popup1__input uk-border-rounded" type="text" placeholder="Năm sinh" aria-label="Input">
            </div>
            <div class="item__8">
                <input class="uk-input modal__popup1__input uk-border-rounded" type="text" placeholder="Mật khẩu" aria-label="Input">
            </div>
            <div class="item__8">
                <input class="uk-input modal__popup1__input uk-border-rounded" type="text" placeholder="Nhập mã OTP nhận được từ SMS" aria-label="Input">
            </div>
        </div>
        <div>
            <button class="uk-button modal__popup1__btn uk-button-primary uk-width uk-border-pill">Đăng ký</button>
        </div>
        <div class=" uk-text-center uk-margin modal__popup1__txt">Bạn đã có tài khoản? Vui lòng <a href="">Đăng nhập</a></div>
    </div>
</div>

<script>
    UIkit.modal('#modal-popup2').show();
</script>

<?php require "template-parts/layouts/footer.php"; ?>