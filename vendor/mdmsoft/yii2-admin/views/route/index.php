<?php

use yii\helpers\Html;
use mdm\admin\AdminAsset;
use yii\helpers\Json;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 */
$this->title = Yii::t('rbac-admin', 'Routes');
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
        	         <h3 class="box-title">路由列表</h3>
        	        
    	        </div>
				 
			</div>
			<div class="box-body">
				<p>
                    <?= Html::a(Yii::t('rbac-admin', 'Create route'), ['create'], ['class' => 'btn btn-primary']) ?>
                </p>
                    <div class="row">
                        <div class="col-lg-5">
                            <?= Yii::t('rbac-admin', 'Avaliable') ?>:
                            <input id="search-avaliable">
                            <a href="#" id="btn-refresh"><span class="glyphicon glyphicon-refresh"></span></a><br>
                            <select id="list-avaliable" multiple size="20" style="width: 100%">
                            </select>
                        </div>
                        <div class="col-lg-1">
                            <br><br>
                            <a href="#" id="btn-add" class="btn btn-success">&gt;&gt;</a><br>
                            <a href="#" id="btn-remove" class="btn btn-danger">&lt;&lt;</a>
                        </div>
                        <div class="col-lg-5">
                            <?= Yii::t('rbac-admin', 'Assigned') ?>:
                            <input id="search-assigned"><br>
                            <select id="list-assigned" multiple size="20" style="width: 100%">
                            </select>
                        </div>
                    </div>
			</div>
		</div>
	</div>
</div>
<?php
AdminAsset::register($this);
$properties = Json::htmlEncode([
        'assignUrl' => Url::to(['assign']),
        'searchUrl' => Url::to(['search']),
    ]);
$js = <<<JS
yii.admin.initProperties({$properties});

$('#search-avaliable').keydown(function () {
    yii.admin.searchRoute('avaliable');
});
$('#search-assigned').keydown(function () {
    yii.admin.searchRoute('assigned');
});
$('#btn-add').click(function () {
    yii.admin.assignRoute('assign');
    return false;
});
$('#btn-remove').click(function () {
    yii.admin.assignRoute('remove');
    return false;
});
$('#btn-refresh').click(function () {
    yii.admin.searchRoute('avaliable',1);
    return false;
});

yii.admin.searchRoute('avaliable', 0, true);
yii.admin.searchRoute('assigned', 0, true);
JS;
$this->registerJs($js);

