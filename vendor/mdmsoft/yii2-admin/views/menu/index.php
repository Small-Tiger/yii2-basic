<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Menu */

$this->title = Yii::t('rbac-admin', 'Menus');
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
        	         <h3 class="box-title">菜单列表</h3>
        	        
    	        </div>
				 
			</div>
			<div class="box-body">
    			<p>
           		 <?= Html::a(Yii::t('rbac-admin', 'Create Menu'), ['create'], ['class' => 'btn btn-primary']) ?>
        		</p>
				<div class="menu-index">
                    <?php
                    Pjax::begin(['formSelector' => 'form', 'enablePushState' => false]);
                    echo GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'name',
                            [
                                'attribute' => 'menuParent.name',
                                'filter' => Html::activeTextInput($searchModel, 'parent_name', [
                                    'class' => 'form-control', 'id' => null
                                ]),
                                'label' => Yii::t('rbac-admin', 'Parent'),
                            ],
                            'route',
                            'order',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    Pjax::end();
                    ?>

				</div>
			</div>
		</div>
	</div>
</div>
