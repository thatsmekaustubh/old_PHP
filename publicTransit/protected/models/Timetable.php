<?php

/**
 * This is the model class for table "timetable".
 *
 * The followings are the available columns in table 'timetable':
 * @property integer $id
 * @property integer $srcstop
 * @property integer $deststop
 * @property integer $depttime
 * @property integer $arrtime
 * @property integer $inchargeid
 * @property integer $workdaysflag
 * @property integer $caseflag
 * @property integer $parentJourney
 * @property string $abbrevation
 */
class Timetable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'timetable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('srcstop, deststop, depttime, arrtime, inchargeid, workdaysflag, caseflag, parentJourney, abbrevation', 'required'),
			array('srcstop, deststop, depttime, arrtime, inchargeid, workdaysflag, caseflag, parentJourney', 'numerical', 'integerOnly'=>true),
			array('abbrevation', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, srcstop, deststop, depttime, arrtime, inchargeid, workdaysflag, caseflag, parentJourney, abbrevation', 'safe', 'on'=>'search'),
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
			'srcstop' => 'Source Halt',
			'deststop' => 'Destination Halt',
			'depttime' => 'Departure Time ',
			'arrtime' => 'Arrival Time',
			'inchargeid' => 'Incharge',
			'workdaysflag' => 'Workdays',
			'caseflag' => 'Case',
			'parentJourney' => 'Parent Journey',
			'abbrevation' => 'Abbrevated as',
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
		$criteria->compare('depttime',$this->depttime);
		$criteria->compare('arrtime',$this->arrtime);
		$criteria->compare('inchargeid',$this->inchargeid);
		$criteria->compare('workdaysflag',$this->workdaysflag);
		$criteria->compare('caseflag',$this->caseflag);
		$criteria->compare('parentJourney',$this->parentJourney);
		$criteria->compare('abbrevation',$this->abbrevation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Timetable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
