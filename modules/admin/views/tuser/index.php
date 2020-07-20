<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Владелец питомца';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i>'.' Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'family',
            'name',
            'second_name',
            'login',
            //'password',
            //'phone_nubmber',
            //'adress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
