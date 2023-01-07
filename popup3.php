<?php $data["title"] = "Popup3"; ?>
<?php $bodyClass = '' ?>
<?php $is_from_login = true; ?>
<?php $lophoc = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-muted uk-section-xsmall" uk-height-viewport="offset-top: true">
    <div class="uk-container">

    </div>
</div>


<!-- This is the modal with the default close button -->
<div id="modal-popup3" class="modal__popup3 uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <div class="modal__popup3__user">

                    </div>
                </div>
                <div class="uk-width-expand">
                    <h2 class="uk-modal-title modal__title">Chọn khung giờ bạn muốn học thử</h2>
                </div>
            </div>
        </div>
        <div class="uk-modal-body">
            <div class="uk-grid uk-grid-10 uk-flex-middle uk-child-width-auto" uk-grid>
                <div>
                    <a href="" class="modal__popup3__icon modal__popup3__icon--prev"></a>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-text-center">19/12 - 25/12/2022</div>
                </div>
                <div>
                    <a href="" class="modal__popup3__icon modal__popup3__icon--next"></a>
                </div>
            </div>
            <div class="uk-margin-small uk-overflow-auto">
                <table class="uk-table uk-table-small modal__popup3__table">
                    <thead>
                    <tr>
                        <th>
                            <div>Mon</div>
                            <div>26</div>
                        </th>
                        <th>
                            <div>Tue</div>
                            <div>27</div>
                        </th>
                        <th>
                            <div>Web</div>
                            <div>28</div>
                        </th>
                        <th>
                            <div>Thu</div>
                            <div>29</div>
                        </th>
                        <th>
                            <div>Fri</div>
                            <div>30</div>
                        </th>
                        <th>
                            <div>Sat</div>
                            <div>31</div>
                        </th>
                        <th>
                            <div>Sun</div>
                            <div>1</div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($j=1;$j<=7;$j++): ?>
                    <tr>
                        <?php for ($i=1;$i<=6;$i++): ?>
                        <td><div class="modal__popup3__table__txtDate">13:00</div></td>
                        <?php endfor; ?>
                        <td></td>
                    </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div class="uk-text-center uk-margin">
                <button class="uk-button modal__popup1__btn uk-button-primary uk-border-pill">Xác nhận thời gian</button>
            </div>
        </div>
    </div>
</div>

<script>
    UIkit.modal('#modal-popup3').show();
</script>

<?php require "template-parts/layouts/footer.php"; ?>