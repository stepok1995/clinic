<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ttreatment */

$this->title = 'Create Ttreatment';
$this->params['breadcrumbs'][] = ['label' => 'Ttreatments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttreatment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
