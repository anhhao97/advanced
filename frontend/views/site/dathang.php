<?php
use yii\widgets\ActiveForm;


$this->title = 'Thông tin giỏ hàng';
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin(['id'=>'order-form','enableClientValidation' => true ,'enableAjaxValidation' => true]);
$model = new \frontend\models\UserClient();
?>
<div class="container">
    <div class="col-xs-12 col-md-2">
        <a href="<?= \yii\helpers\Url::to(['view_user'])?>">Thông tin tài khoản</a>
        <br><a >Thông tin giỏ hàng</a>
    </div>
    <div class="col-xs-12 col-md-10">
        <?php if ($order){
            foreach ($order as $row){
                foreach ($order_detail as $order_c) {

                    ?>

                    <p>Tình trạng đơn hàng</p>
                    <div class="progress"></td>
                        <?php
                        if ($row['status'] == 1) {
                            echo '<div class="progress-bar progress-bar-success" style="width: 35%; background-color: red">' . 'Đã tiếp nhận đơn hàng' . '</div>';
                        } else if ($row['status'] == 2) {
                            echo '<div class="progress-bar progress-bar-warning" style="width: 70%">' . 'Đang giao hàng' . '</div>';
                        } else if ($row['status'] == 3) {
                            echo '<div class="progress-bar progress-bar-danger" style="width: 100%; background-color: #00a65a ">' . 'Giao hàng thành công' . '</div>';
                        } ?>
                    </div>
                    <p>Thông tin đơn hàng</p>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td class="col-xs-4 col-md-3">
                                <?php
                                $image = \frontend\models\Image::find()->select(['image'])->where(['idproduct' => $order_c['idproduct']])->limit(1)->all();
//                                var_dump($image); die();
                                foreach ($image as $item) {
                                    echo "<p>" . \yii\helpers\Html::img('/uploads/imageproduct/' . $item['image'], ['width' => '50%']) . "</p>";
                                } ?>
                            </td>
                            <td class="col-xs-8 col-md-6">
                                <?php
                                $product = \frontend\models\Product::find()->select(['tensp'])->where(['id' => $order_c['idproduct']])->all();
                                foreach ($product as $tensp) {
                                    echo "<p style='font-size: 13px'>" . $tensp['tensp'] . "</p>";
                                } ?>
                            </td>
                            <td class="col-xs-1 col-md-1">Số lượng </br>
                                <?php echo
                                $order_c['soluong'];
                                ?>
                            </td>
                            <td class="col-xs-2 col-md-2">
                                Giá sản phẩm
                                <?php echo number_format($order_c['price'], '0', '.', '.') . " VND" ?>
                            </td>
                        </tr>
                        </thead>
                    </table>
                    <p>Thông tin khách hàng</p>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td><?php echo "Tên khách hàng :" . $row['hoten']; ?></td>
                            <td><?php echo "Số điện thoại :" . $row['sdt']; ?></td>
                            <td><?php echo "Địa chỉ : " . $row['diachi'] ?></td>
                        </tr>
                        </thead>
                    </table>
                    <?php
                }
                }
            }else{
            echo "<h2>".'Không có đơn hàng nào';
            echo '<br>'.'<a href="'.\yii\helpers\Url::home(true).'" class="btn btn-success" type="button"> << Quay lại mua sắm </a>';
        }
        ?>
    </div>

</div>
