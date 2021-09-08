<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */

$this->title = Yii::t('app', 'Tambah Pegawai');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pegawai'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'fotomodel' => $fotomodel,
    ]) ?>

</div>
