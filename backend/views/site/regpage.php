<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<script type="text/javascript">
    function check(){
        var pass = document.forms["update"]["pass"].value;
        var spass = document.forms["update"]["spass"].value;
        var gpa = document.forms["update"]["gpa"].value;
        if(pass != spass){
            alert ("Passwords are not matched");
            return false;
        }
        if( gpa < 0  || gpa > 4 ){
            alert("GPA should be positive and not greater than 4 ");
            return false;
        }
    }
</script>
<h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <table>
                <form name = "update" method = "post" action = "<?=Url::to(['site/register'])?>" onsubmit = "return check()">
                    <tr><td align ="center">Name: </td><td><input type = "text" name = "name" required ></td>
                    </tr>
                    <tr><td align ="center">Password: </td><td><input type = "password" name = "pass" required></td>
                    </tr>
                    <tr><td>Re-Enter Password: </td><td><input type = "password" name="spass" required></td></tr>
                    <tr><td align = "center">GPA</td><td><input type = "text" name = "gpa" required></td></tr>
                    <tr><td><input type = "checkbox" id = "ta" value = "TA"></td></tr>
                    <tr><td><input type = "submit" value = "Submit" class= "btn btn-primary"></td></tr>
                </form>
            </table>
        </div>
    </div>
