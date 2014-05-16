<?php

/**
 * This is the model class for table "CONVENTION".
 *
 * The followings are the available columns in table 'CONVENTION':
 * @property integer $Num_Convention
 * @property string $Nom_Projet
 * @property integer $Num_Entreprise
 * @property double $PrixJour
 * @property string $Date_Convention
 * @property integer $Duree_Projet
 * @property string $Date_Finprevu
 * @property integer $Proj_Fini
 */
class Convention extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'CONVENTION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Num_Convention, Nom_Projet, Num_Entreprise', 'required'),
			array('Num_Convention, Num_Entreprise, Duree_Projet, Proj_Fini', 'numerical', 'integerOnly'=>true),
			array('PrixJour', 'numerical'),
			array('Nom_Projet', 'length', 'max'=>40),
			array('Date_Convention, Date_Finprevu', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Num_Convention, Nom_Projet, Num_Entreprise, PrixJour, Date_Convention, Duree_Projet, Date_Finprevu, Proj_Fini', 'safe', 'on'=>'search'),
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
			'Num_Convention' => 'Num Convention',
			'Nom_Projet' => 'Nom Projet',
			'Num_Entreprise' => 'Num Entreprise',
			'PrixJour' => 'Prix Jour',
			'Date_Convention' => 'Date Convention',
			'Duree_Projet' => 'Duree Projet',
			'Date_Finprevu' => 'Date Finprevu',
			'Proj_Fini' => 'Proj Fini',
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

		$criteria->compare('Num_Convention',$this->Num_Convention);
		$criteria->compare('Nom_Projet',$this->Nom_Projet,true);
		$criteria->compare('Num_Entreprise',$this->Num_Entreprise);
		$criteria->compare('PrixJour',$this->PrixJour);
		$criteria->compare('Date_Convention',$this->Date_Convention,true);
		$criteria->compare('Duree_Projet',$this->Duree_Projet);
		$criteria->compare('Date_Finprevu',$this->Date_Finprevu,true);
		$criteria->compare('Proj_Fini',$this->Proj_Fini);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convention the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
