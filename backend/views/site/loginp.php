<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>
    <div class="row">
        <div class="col-lg-5">
            <table>
                <form method = "post" action = "<?=Url::to (['site/loginproject'])?>"> 
                    <tr><td>ID:</td><td><input type = "text" name = "id" required ></td></tr>
                    <tr><td>Password:</td> <td><input type= "password" name = "pass" required></td></tr>
                    <tr><td><input type = "submit" value = "Login" class = "btn btn-primary"></td></tr>
                </form>
            </table>
        </div>
    </div>
</div>
