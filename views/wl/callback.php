<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'tid callback';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <pre>
        <?= $query; ?>
    </pre>
    <code><?= __FILE__ ?></code>
</div>