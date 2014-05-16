<?php

/**
 * This is the model class for table "ETUDIANT".
 *
 * The followings are the available columns in table 'ETUDIANT':
 * @property integer $Num_SS
 * @property string $Nom_Etu
 * @property string $Date_Naissance
 * @property string $Adresse_Etu
 */
class Etudiant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ETUDIANT';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Num_SS', 'required'),
			array('Num_SS', 'numerical', 'integerOnly'=>true),
			array('Nom_Etu', 'length', 'max'=>30),
			array('Adresse_Etu', 'length', 'max'=>40),
			array('Date_Naissance', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Num_SS, Nom_Etu, Date_Naissance, Adresse_Etu', 'safe', 'on'=>'search'),
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
			'Nom_Etu' => 'Nom Etu',
			'Date_Naissance' => 'Date Naissance',
			'Adresse_Etu' => 'Adresse Etu',
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
		$criteria->compare('Nom_Etu',$this->Nom_Etu,true);
		$criteria->compare('Date_Naissance',$this->Date_Naissance,true);
		$criteria->compare('Adresse_Etu',$this->Adresse_Etu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Etudiant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
