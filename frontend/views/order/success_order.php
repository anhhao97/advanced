<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;

?>
<div class="success_order" style="height: auto">
    <h2>Đặt hàng thành công</h2>
    <a href="<?php echo \yii\helpers\Url::home(true)?>" class="btn btn-success" type="button">Tiếp tục mua sắm </a>
    <?php

        unset($_SESSION['cart_item']);
    ?>
</div>
