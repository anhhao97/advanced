<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property int $id
 * @property int $idorder
 * @property int $idproduct
 * @property string $soluong
 * @property string $price
 * @property string $created_at
 * @property string $updated_at
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idorder', 'idproduct', 'soluong', 'price'], 'required'],
            [['idorder', 'idproduct'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['soluong', 'price'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idorder' => 'Idorder',
            'idproduct' => 'Idproduct',
            'soluong' => 'Soluong',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
