<?php

/**
 * This is the model class for table "PARTICIPE".
 *
 * The followings are the available columns in table 'PARTICIPE':
 * @property integer $Num_SS
 * @property integer $Num_Convention
 * @property string $Nature_Etu
 */
class Participe extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PARTICIPE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Num_SS, Num_Convention, Nature_Etu', 'required'),
			array('Num_SS, Num_Convention', 'numerical', 'integerOnly'=>true),
			array('Nature_Etu', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Num_SS, Num_Convention, Nature_Etu', 'safe', 'on'=>'search'),
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
			'Num_SS' => 'Num Ss',
			'Num_Convention' => 'Num Convention',
			'Nature_Etu' => 'Nature Etu',
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

		$criteria->compare('Num_SS',$this->Num_SS);
		$criteria->compare('Num_Convention',$this->Num_Convention);
		$criteria->compare('Nature_Etu',$this->Nature_Etu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participe the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
