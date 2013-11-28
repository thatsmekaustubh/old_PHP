<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property integer $id
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $userid
 * @property string $pwd
 * @property string $addr1
 * @property string $addr2
 * @property string $addr3
 * @property string $pincode
 * @property string $lcontactno
 * @property string $mcontactno
 * @property string $emailid
 * @property integer $type
 * @property string $timestamp
 * @property integer $homestopid1
 * @property integer $homestopid2
 * @property integer $homestopid3
 * @property integer $officestopid1
 * @property integer $officestopid2
 * @property integer $officestopid3
 */
class Person extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, mname, lname, userid, pwd, addr1, addr2, addr3, pincode, lcontactno, mcontactno, emailid, type, timestamp, homestopid1, homestopid2, homestopid3, officestopid1, officestopid2, officestopid3', 'required'),
			array('type, homestopid1, homestopid2, homestopid3, officestopid1, officestopid2, officestopid3', 'numerical', 'integerOnly'=>true),
			array('fname, mname, lname, addr1, addr2, addr3, emailid', 'length', 'max'=>100),
			array('userid, pwd, timestamp', 'length', 'max'=>50),
			array('pincode, lcontactno, mcontactno', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, mname, lname, userid, pwd, addr1, addr2, addr3, pincode, lcontactno, mcontactno, emailid, type, timestamp, homestopid1, homestopid2, homestopid3, officestopid1, officestopid2, officestopid3', 'safe', 'on'=>'search'),
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
			'fname' => 'First name',
			'mname' => 'Middle name',
			'lname' => 'Last name',
			'userid' => 'User id',
			'pwd' => 'Password',
			'addr1' => 'Address Line 1',
			'addr2' => 'Address Line 2',
			'addr3' => 'Address Line3',
			'pincode' => 'Pincode',
			'lcontactno' => 'Landlie contact no',
			'mcontactno' => 'Mobile contact no',
			'emailid' => 'Email id',
			'type' => 'Type',
			'timestamp' => 'Timestamp',
			'homestopid1' => 'Home stop 1',
			'homestopid2' => 'Home stop 2',
			'homestopid3' => 'Home stop 3',
			'officestopid1' => 'Office stop 1',
			'officestopid2' => 'Office stop 2',
			'officestopid3' => 'Office stop 3',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('userid',$this->userid,true);
		$criteria->compare('pwd',$this->pwd,true);
		$criteria->compare('addr1',$this->addr1,true);
		$criteria->compare('addr2',$this->addr2,true);
		$criteria->compare('addr3',$this->addr3,true);
		$criteria->compare('pincode',$this->pincode,true);
		$criteria->compare('lcontactno',$this->lcontactno,true);
		$criteria->compare('mcontactno',$this->mcontactno,true);
		$criteria->compare('emailid',$this->emailid,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('homestopid1',$this->homestopid1);
		$criteria->compare('homestopid2',$this->homestopid2);
		$criteria->compare('homestopid3',$this->homestopid3);
		$criteria->compare('officestopid1',$this->officestopid1);
		$criteria->compare('officestopid2',$this->officestopid2);
		$criteria->compare('officestopid3',$this->officestopid3);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Person the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
