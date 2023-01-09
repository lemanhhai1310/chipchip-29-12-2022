<?php $data["title"] = "Popup4"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section-xsmall" uk-height-viewport="offset-top: true">
    <div class="uk-container">

    </div>
</div>


<!-- This is the modal with the default close button -->
<div id="modal-popup4" class="modal__popup4 uk-flex-top" uk-modal>
    <div class="uk-modal-dialog modal__dialog-m uk-margin-auto-vertical uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div>
            <div class="modal__popup4__item uk-text-center">
                <div class="uk-cover-container uk-border-circle uk-margin-auto uk-display-inline-block">
                    <img src="images/noimage.jpg" alt="" uk-cover="">
                    <canvas width="97" height="97"></canvas>
                </div>
                <div class="uk-h5 home__giaovien__card__name uk-margin-remove">Thầy Edward</div>
            </div>
            <div class="modal__popup4__item">
                <div class="uk-text-center modal__popup4__txtSmall">Thứ Năm, 18/12/2022 vào 14:52</div>
            </div>
            <div class="modal__popup4__item">
                <div class="item__8">
                    <div class="modal__popup4__label">Đơn hàng của bạn</div>
                </div>
                <div class="item__8">
                    <div class="uk-grid uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="modal__popup4__txtSmall">Lớp học thử 1 kèm 1 trong 25 phút</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="modal__popup4__txtSmall">50.000 đ</div>
                        </div>
                    </div>
                </div>
                <div class="item__8">
                    <div class="uk-grid uk-grid-10" uk-grid>
                        <div class="uk-width-expand">
                            <div class="modal__popup4__label">Tổng</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="modal__popup4__label uk-text-danger">50.000 đ</div>
                        </div>
                    </div>
                </div>
                <div class="item__8">
                    <div class="modal__popup4__boxKm">Chip Chip cam kết hoàn phí 100% nếu bạn không hài lòng với buổi học thử</div>
                </div>
            </div>
            <div class="modal__popup4__item">
                <div class="item__8">
                    <div class="modal__popup4__label">Phương thức thanh toán</div>
                </div>
                <div class="item__8">
                    <div class="uk-margin uk-grid-small uk-flex-middle uk-child-width uk-grid uk-grid-10" uk-grid>
                        <label><div class="modal__popup4__boxRadio"><input class="uk-radio modal__popup4__radio" type="radio" name="radio2" checked> <span class="modal__popup4__span" style="--url: url('images/cellphone.png')">Chuyển khoản ngân hàng</span></div></label>
                        <label><div class="modal__popup4__boxRadio"><input class="uk-radio modal__popup4__radio" type="radio" name="radio2"> <span class="modal__popup4__span" style="--url: url('images/atm-machine.png')">Qua thẻ ATM (có Internet Banking)</span></div></label>
                        <label><div class="modal__popup4__boxRadio"><input class="uk-radio modal__popup4__radio" type="radio" name="radio2"> <span class="modal__popup4__span" style="--url: url('images/credit-card.png')">Qua thẻ quốc tế Visa, MasterCard, JCB</span></div></label>
                    </div>
                </div>
                <div class="item__15">
                    <button class="uk-button modal__popup1__btn uk-width uk-button-primary uk-border-pill">Xác nhận</button>
                </div>
                <div class="item__10 uk-text-center">
                    <span class="modal__popup4__txtSmall">Bằng việc xác nhận thanh toán, bạn đã đồng ý với <br> Điều khoản dịch vụ của Chip Chip</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    UIkit.modal('#modal-popup4').show();
</script>

<?php require "template-parts/layouts/footer.php"; ?>