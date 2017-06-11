<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\AuthItem $model
 * @var yii\widgets\ActiveForm $form
 */
?>
<div class="row">
	<div class="col-lg-12">
	     <div class="panel panel-default">
	        <div class="panel-heading">
    	         <?= Html::encode($this->title) ?>
	        </div>
			 <div class="panel-body">
			     <div class="row">
			         <div class="col-lg-6">
                                <div class="auth-item-form">
                                
                                    <?php $form = ActiveForm::begin(); ?>
                                
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>
                                
                                    <?= $form->field($model, 'className')->textInput() ?>
                                
                                    <div class="form-group">
                                        <?php
                                        echo Html::submitButton($model->isNewRecord ? Yii::t('rbac-admin', 'Create') : Yii::t('rbac-admin', 'Update'), [
                                            'class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary'])
                                        ?>
                                    </div>
                                
                                <?php ActiveForm::end(); ?>
                                </div>
			        </div>
			 	</div>
	     	</div>
		</div>
	</div>
</div>
