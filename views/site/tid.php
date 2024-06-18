<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <h1 class="tid__title"><?= Html::encode($this->title) ?></h1>


    <div class="row">

            <form id="login-form"  class="tid__form">              
                <input class="tid__input" type="text" name="phone" id="phone-input" placeholder="Введите номер телефона" >
                <button class="tid__button" type="submit" id="login-button">Получить код</button>
            </form>

    </div>
</div>

<?php 
$this->registerJs(<<<JS
const tidSdk = new TidSDK({
        redirectUri: 'http://auth.550550.ru/wl/callback',
        responseType: 'code',
        clientId: 'tid_vapteke-wl',
        state: 'XXXX'
    });

    tidSdk.addWL({
        target: '_self',
        input: '#phone-input',
        actionElement: '#login-form'
    });
JS
);
?>