<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ttypeanimal */

$this->title = 'Create Ttypeanimal';
$this->params['breadcrumbs'][] = ['label' => 'Ttypeanimals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttypeanimal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
