<?php

use app\models\Petrequests;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PetrequestsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="petrequests-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Управление заявками', ['view'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'description:ntext',
            'admin_message:ntext',
            'missing_date',
            //'user_id',
            'status_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Petrequests $model, $key, $index, $column) {
                   return Url::toRoute([$action, 'id' => $model->id]);
                 }
                
            ],
        ],
    ]); ?>


</div>
