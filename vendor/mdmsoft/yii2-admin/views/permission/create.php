<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */

$this->title = Yii::t('rbac-admin', 'Create Permission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Permissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create">

	<h1>权限管理</h1>

	<?php echo $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
