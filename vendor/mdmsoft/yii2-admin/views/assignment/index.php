<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Assignment */
/* @var $usernameField string */
/* @var $extraColumns string[] */

$this->title = Yii::t('rbac-admin', 'Assignments');
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
				<?php
                Pjax::begin([
                    'enablePushState'=>false,
                ]);
                $columns = array_merge(
                    [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'class' => 'yii\grid\DataColumn',
                            'attribute' => $usernameField,
                        ],
                    ],
                    $extraColumns,
                    [
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{view}'
                        ],
                    ]
                );
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => $columns,
                ]);
                Pjax::end();
                ?>
			</div>
		</div>
	</div>
</div>




