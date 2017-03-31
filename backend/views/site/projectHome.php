<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Project Home';
$this->params['breadcrumbs'][] = $this->title;

?>
<h2>Student Info</h2>
<ul>
	<li>Name: <?=$student->name?></li>
	<li>GPA: <?=$student->gpa?></li>
</ul>
<br>
<?= Html::a('Logout', ['site/logoutp'], ['class'=>'btn btn-primary']) ?>                   
<?= Html::a('Update Info', ['site/updateinfo'], ['class'=>'btn btn-primary']) ?>