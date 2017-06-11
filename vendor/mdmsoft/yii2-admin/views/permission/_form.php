<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Json;
use mdm\admin\AutocompleteAsset;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */
/* @var $form yii\widgets\ActiveForm */
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
                            <div class="auth-item-form">
                            
                                <?php $form = ActiveForm::begin(); ?>
                            
                                <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>
                            
                                <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
                            
                                <?= $form->field($model, 'ruleName')->textInput(['id'=>'rule-name']) ?>
                            
                                <?= $form->field($model, 'data')->textarea(['rows' => 6]) ?>
                            
                                <div class="form-group">
                                    <?php
                                    echo Html::submitButton($model->isNewRecord ? Yii::t('rbac-admin', 'Create') : Yii::t('rbac-admin', 'Update'), [
                                        'class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary',])
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
<?php
AutocompleteAsset::register($this);

$options = Json::htmlEncode([
    'source' => array_keys(Yii::$app->authManager->getRules())
]);
$this->registerJs("$('#rule-name').autocomplete($options);");