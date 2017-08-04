<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property string $idState
 * @property string $idCountry
 * @property string $alias
 * @property string $nameRu
 * @property string $nameUa
 */
class StateModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCountry'], 'integer'],
            [['alias', 'nameRu'], 'required'],
            [['alias', 'nameRu', 'nameUa'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idState' => Yii::t('app', 'Id State'),
            'idCountry' => Yii::t('app', 'Id Country'),
            'alias' => Yii::t('app', 'Alias'),
            'nameRu' => Yii::t('app', 'Name Ru'),
            'nameUa' => Yii::t('app', 'Name Ua'),
        ];
    }
}
