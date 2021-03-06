<?php

/**
 * This is the model class for table "ACOMPTE".
 *
 * The followings are the available columns in table 'ACOMPTE':
 * @property integer $Num_Acompte
 * @property double $Montant_HT
 * @property integer $Num_SS
 * @property integer $Num_Convention
 */
class Acompte extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ACOMPTE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Num_SS, Num_Convention', 'required'),
			array('Num_SS, Num_Convention', 'numerical', 'integerOnly'=>true),
			array('Montant_HT', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Num_Acompte, Montant_HT, Num_SS, Num_Convention', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Num_Acompte' => 'Num Acompte',
			'Montant_HT' => 'Montant Ht',
			'Num_SS' => 'Num Ss',
			'Num_Convention' => 'Num Convention',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Num_Acompte',$this->Num_Acompte);
		$criteria->compare('Montant_HT',$this->Montant_HT);
		$criteria->compare('Num_SS',$this->Num_SS);
		$criteria->compare('Num_Convention',$this->Num_Convention);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Acompte the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
