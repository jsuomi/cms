<?php

/**
 * This is the model class for table "{{languages}}".
 *
 * The followings are the available columns in table '{{languages}}':
 * @property string $language_code
 * @property integer $date_created
 * @property integer $date_updated
 * @property string $uid
 */
class LanguagesAR extends BlocksActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Languages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{languages}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('language_code', 'required'),
			array('date_created, date_updated', 'numerical', 'integerOnly'=>true),
			array('language_code', 'length', 'max'=>5),
			array('uid', 'length', 'max'=>36),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('language_code, date_created, date_updated, uid', 'safe', 'on'=>'search'),
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
			'language_code' => 'Language Code',
			'date_created' => 'Date Created',
			'date_updated' => 'Date Updated',
			'uid' => 'Uid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('language_code',$this->language_code,true);
		$criteria->compare('date_created',$this->date_created);
		$criteria->compare('date_updated',$this->date_updated);
		$criteria->compare('uid',$this->uid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
