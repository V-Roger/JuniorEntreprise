<?php

/**
 * This is the model class for table "REMUNERATION".
 *
 * The followings are the available columns in table 'REMUNERATION':
 * @property integer $Num_Convention
 * @property integer $Num_SS
 * @property integer $Num_Remuneration
 * @property double $Montant_Rem
 * @property integer $NbreJoursTravail
 * @property string $Date_Paiement
 */
class REMUNERATION extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'REMUNERATION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Num_Convention, Num_SS', 'required'),
			array('Num_Convention, Num_SS, NbreJoursTravail', 'numerical', 'integerOnly'=>true),
			array('Montant_Rem', 'numerical'),
			array('Date_Paiement', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Num_Convention, Num_SS, Num_Remuneration, Montant_Rem, NbreJoursTravail, Date_Paiement', 'safe', 'on'=>'search'),
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
			'Num_SS' => 'Num Ss',
			'Num_Remuneration' => 'Num Remuneration',
			'Montant_Rem' => 'Montant Rem',
			'NbreJoursTravail' => 'Nbre Jours Travail',
			'Date_Paiement' => 'Date Paiement',
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
		$criteria->compare('Num_SS',$this->Num_SS);
		$criteria->compare('Num_Remuneration',$this->Num_Remuneration);
		$criteria->compare('Montant_Rem',$this->Montant_Rem);
		$criteria->compare('NbreJoursTravail',$this->NbreJoursTravail);
		$criteria->compare('Date_Paiement',$this->Date_Paiement,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return REMUNERATION the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
