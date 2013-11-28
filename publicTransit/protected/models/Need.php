<?php

/**
 * This is the model class for table "need".
 *
 * The followings are the available columns in table 'need':
 * @property integer $id
 * @property integer $srcstop
 * @property integer $deststop
 * @property string $depttime
 * @property string $arrtime
 * @property integer $modechoice1
 * @property integer $modechoice2
 * @property integer $modechoice3
 * @property integer $alerttimebef
 * @property integer $workdayflag
 * @property integer $caseflag
 * @property integer $personid
 */
class Need extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'need';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('srcstop, deststop, depttime, arrtime, modechoice1, modechoice2, modechoice3, alerttimebef, workdayflag, caseflag, personid', 'required'),
			array('srcstop, deststop, modechoice1, modechoice2, modechoice3, alerttimebef, workdayflag, caseflag, personid', 'numerical', 'integerOnly'=>true),
			array('depttime, arrtime', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, srcstop, deststop, depttime, arrtime, modechoice1, modechoice2, modechoice3, alerttimebef, workdayflag, caseflag, personid', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'srcstop' => 'Source stop',
			'deststop' => 'Destination stop',
			'depttime' => 'Deptarture time',
			'arrtime' => 'Arrival time',
			'modechoice1' => 'Mode choice 1',
			'modechoice2' => 'Mode choice 2',
			'modechoice3' => 'Mode choice 3',
			'alerttimebef' => 'Alert time before',
			'workdayflag' => 'Workday',
			'caseflag' => 'Case',
			'personid' => 'Personid',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('srcstop',$this->srcstop);
		$criteria->compare('deststop',$this->deststop);
		$criteria->compare('depttime',$this->depttime,true);
		$criteria->compare('arrtime',$this->arrtime,true);
		$criteria->compare('modechoice1',$this->modechoice1);
		$criteria->compare('modechoice2',$this->modechoice2);
		$criteria->compare('modechoice3',$this->modechoice3);
		$criteria->compare('alerttimebef',$this->alerttimebef);
		$criteria->compare('workdayflag',$this->workdayflag);
		$criteria->compare('caseflag',$this->caseflag);
		$criteria->compare('personid',$this->personid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Need the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
