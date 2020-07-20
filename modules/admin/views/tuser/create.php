<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuser */

$this->title = 'Create Tuser';
$this->params['breadcrumbs'][] = ['label' => 'Tusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
