<?php

/**
 * This is the model class for table "FRAIS".
 *
 * The followings are the available columns in table 'FRAIS':
 * @property integer $Num_Frais
 * @property string $Date_Note
 * @property double $Montant_Frais
 * @property integer $Num_SS
 * @property integer $Num_Convention
 * @property integer $Num_RF
 */
class Frais extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'FRAIS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Num_Frais, Num_SS, Num_Convention, Num_RF', 'required'),
			array('Num_Frais, Num_SS, Num_Convention, Num_RF', 'numerical', 'integerOnly'=>true),
			array('Montant_Frais', 'numerical'),
			array('Date_Note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Num_Frais, Date_Note, Montant_Frais, Num_SS, Num_Convention, Num_RF', 'safe', 'on'=>'search'),
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
			'Num_Frais' => 'Num Frais',
			'Date_Note' => 'Date Note',
			'Montant_Frais' => 'Montant Frais',
			'Num_SS' => 'Num Ss',
			'Num_Convention' => 'Num Convention',
			'Num_RF' => 'Num Rf',
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

		$criteria->compare('Num_Frais',$this->Num_Frais);
		$criteria->compare('Date_Note',$this->Date_Note,true);
		$criteria->compare('Montant_Frais',$this->Montant_Frais);
		$criteria->compare('Num_SS',$this->Num_SS);
		$criteria->compare('Num_Convention',$this->Num_Convention);
		$criteria->compare('Num_RF',$this->Num_RF);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Frais the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
