<div class="form">
    <form action="" data-type="js-form">
        <input type="hidden" name="sessid" value="<?=bitrix_sessid()?>">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="form-title">
                        <h2>Записаться на консультацию</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="ui-input">
                        <label>
                            <input type="text" placeholder="Имя" name="name">
                        </label>
                    </div>
                    <div class="ui-input">
                        <label>
                            <input type="text" placeholder="Телефон" name="phone">
                        </label>
                    </div>
                    <div class="ui-input">
                        <label>
                            <input type="text" placeholder="Email для ответа" name="email">
                        </label>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ui-textarea">
                        <textarea placeholder="Ваши вопросы" name="text"></textarea>
                        <div class="ui-textarea-subtxt">
                            Все поля обязательны для заполнения
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="form-submit">
                        <div class="ui-button lg">
                            <button type="submit">
                                Отправить
                            </button>
                        </div>
                        <span>
                            Нажимая «Отправить», я даю <a href="#" target="_blank">согласие на обработку персональных
                                данных</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>