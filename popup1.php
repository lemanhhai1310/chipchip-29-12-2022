<?php $data["title"] = "Popup1"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section-xsmall" uk-height-viewport="offset-top: true">
    <div class="uk-container">

    </div>
</div>


<!-- This is the modal with the default close button -->
<div id="modal-popup1" class="modal__popup1 uk-flex-top" uk-modal>
    <div class="uk-modal-dialog modal__dialog uk-margin-auto-vertical uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="modal__popup1__avarta">

        </div>
        <h2 class="uk-modal-title modal__title uk-text-center">Đăng ký để bắt đầu học tập</h2>
        <div class="uk-text-center modal__popup1__txt">Chỉ còn 1 bước để hoàn tất đặt lịch học thử</div>
        <div class="uk-margin">
            <input class="uk-input modal__popup1__input uk-border-rounded" type="text" placeholder="Số điện thoại" aria-label="Input">
        </div>
        <div>
            <button uk-icon="icon: arrow-right" class="uk-button modal__popup1__btn uk-button-primary uk-width uk-border-pill">Tiếp tục</button>
        </div>
        <div class=" uk-text-center uk-margin modal__popup1__txt">Bạn đã có tài khoản? Vui lòng <a href="">Đăng nhập</a></div>
    </div>
</div>

<script>
    UIkit.modal('#modal-popup1').show();
</script>

<?php require "template-parts/layouts/footer.php"; ?>