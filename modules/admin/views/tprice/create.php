<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tprice */

$this->title = 'Create Tprice';
$this->params['breadcrumbs'][] = ['label' => 'Tprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tprice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
