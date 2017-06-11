<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\Route $model
 * @var ActiveForm $form
 */

$this->title = Yii::t('rbac-admin', 'Create Route');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Routes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>权限管理</h1>
<div class="row">
	<div class="col-lg-12">
	     <div class="panel panel-default">
	        <div class="panel-heading">
    	         新增路由
	        </div>
			 <div class="panel-body">
			     <div class="row">
			         <div class="col-lg-6">
                        <div class="create">
                        
                        	<?php $form = ActiveForm::begin(); ?>
                        
                        		<?= $form->field($model, 'route') ?>
                        
                        		<div class="form-group">
                        			<?= Html::submitButton(Yii::t('rbac-admin', 'Create'), ['class' => 'btn btn-primary']) ?>
                        		</div>
                        	<?php ActiveForm::end(); ?>
                        
                        </div><!-- create -->
			        </div>
			 	</div>
	     	</div>
		</div>
	</div>
</div>