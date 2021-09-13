<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gene".
 *
 * @property int $id
 * @property string|null $symbol
 * @property string|null $ncbi_id
 */
class Gene extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gene';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['symbol', 'ncbi_id'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'symbol' => 'Symbol',
            'ncbi_id' => 'Ncbi ID',
        ];
    }
}
