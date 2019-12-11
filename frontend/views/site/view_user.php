<?php
use yii\widgets\ActiveForm;


$this->title = 'Tài khoản';
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin(['id'=>'userclient-form','enableClientValidation' => true ,'enableAjaxValidation' => true]);
$model = new \frontend\models\UserClient();
?>
<div class="container">
    <div class="col-xs-12 col-md-2">
        <a href="<?=  \yii\helpers\Url::to(['view_user']);?>">Thông tin tài khoản</a>
        <br><a href="<?=  \yii\helpers\Url::to(['dathang']);?>">Thông tin giỏ hàng</a>
    </div>
    <div class="col-xs-12 col-md-10" >
<!--        <div class="col-xs-8 col-md-9" >-->
            <div class="col-xs-8 col-md-6" >
                <?php foreach($user as $row){
                    echo $form->field($model,'hoten')->textInput(['maxlength'=>true,'value'=>$row['hoten']])->label('Họ tên');
                    echo "<br>"."<p style='width: 100px; height: 100px; border-radius: 1px solid black; background-color:#ffe6e1'>".\yii\helpers\Html::img('/uploads/'.$row['image'],['width'=>'100px'])."</p>";
                    echo "<br>"."<p>".$row['email']."</p>";
                }?>
                <?=  \yii\helpers\Html::submitButton('Cập nhật', ['class' => 'btn btn-success']);?>
            </div>
<!--        </div>-->
    </div>
</div>
