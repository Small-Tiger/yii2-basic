<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\AuthItem */

$this->title = Yii::t('rbac-admin', 'Permission').'列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
		  <h1>权限管理</h1>
		</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

   
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="panel-heading">
        	         <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    	        </div>
				 
			</div>
			<div class="box-body">
				 <p>
       				 <?= Html::a(Yii::t('rbac-admin', 'Create Permission'), ['create'], ['class' => 'btn btn-primary']) ?>
    			</p>
                    <?php
                    Pjax::begin([
                        'enablePushState'=>false,
                    ]);
                    echo GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'name',
                                'label' => Yii::t('rbac-admin', 'Name'),
                            ],
                            [
                                'attribute' => 'description',
                                'label' => Yii::t('rbac-admin', 'Description'),
                            ],
                            ['class' => 'yii\grid\ActionColumn',],
                        ],
                    ]);
                    Pjax::end();
                    ?>

			</div>
		</div>
	</div>
</div>

