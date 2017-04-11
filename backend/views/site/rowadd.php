<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;

$this->title = 'Add Row';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
    $(document).ready(function(e) {
       var $table = $('ti table tbody');
       $('.add-row').click(function(e) {
         var number = (($table.find('tr').size())%2 === 0)?'odd':'even';
         var html = '<tr class="'+number+'"> <td>Added</td> </tr>';
         $table.append(html);
         return false;
       });
    });
</script>
<h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <table border = "1" id="ti">
                <tr><td><a href="#" class = "add-row">add row</a></td></tr>
                <tr><td>Name: </td><td></td></tr>
                <tr><td>Password: </td><td></td></tr>
                <tr><td>Re-Enter Password: </td><td></td></tr>
                <tr><td>GPA</td><td></td></tr>
            </table>
        </div>
    </div>
