<?php
use yii\widgets\ActiveForm;


$this->title = 'Thông tin giỏ hàng';
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin(['id'=>'order-form']);
$model = new \frontend\models\UserClient();
?>
<div class="container">
    <div class="col-xs-4 col-md-3">
        <a href="<?= \yii\helpers\Url::to(['view_user'])?>">Thông tin tài khoản</a>
        <br><a >Thông tin giỏ hàng</a>
    </div>
    <div class="col-xs-8 col-md-9">
        <?php if ($order) { ?>
            <?php
            foreach ($order as $row) {
                echo "<p>" . "Tên khách hàng : " . $row['hoten'] . "</p>";
                echo "<br>" . "<p>" . "Số điện thoại : " . $row['sdt'] . "</p>";
                echo "<br>" . "<p>" . "Địa chỉ : " . $row['diachi'] . "</p>";
                echo "<br>" . "<p>" . "Email : " . $row['email'] . "</p>";
                echo "<br>" . "<p>" . "Số lương sản phẩm: " . $row['soluong'] . "</p>";
                echo "<br>" . "<p>" . "Giá sản phẩm : " . $row['price'] . "</p>";
                ?>
                <?php
                foreach ($image as $item) {
                    echo "<p>" . \yii\helpers\Html::img('/uploads/imageproduct/' . $item['image'], ['width' => '30%']) . "</p>";
                }
                foreach ($product as $tensp) {
                    echo "<p>" . $tensp['tensp'] . "</p>";
                }
                ?>
                <br><p>Ghi chú : <?php echo $row['ghichu'] ?></p>
            <?php }
        }else{
            echo "<h2>".'Không có đơn hàng nào';
            echo '<br>'.'<a href="'.\yii\helpers\Url::home(true).'" class="btn btn-success" type="button"> << Quay lại mua sắm </a>';
        }
        ?>
    </div>
</div>
