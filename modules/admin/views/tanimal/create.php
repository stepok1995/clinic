<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tanimal */

$this->title = 'Create Tanimal';
$this->params['breadcrumbs'][] = ['label' => 'Tanimals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanimal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
