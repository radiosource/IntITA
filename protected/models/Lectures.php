<?php

/**
 * This is the model class for table "lectures".
 *
 * The followings are the available columns in table 'lectures':
 * @property integer $LectureID
 * @property integer $fkCourseID
 * @property integer $fkModuleID
 * @property string $NameClasses
 * @property string $GoalOfClasses
 * @property integer $TotalNumberOfItems
 * @property integer $Duration
 */
class Lectures extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lectures';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fkCourseID, fkModuleID, NameClasses, GoalOfClasses, TotalNumberOfItems, Duration', 'required'),
			array('fkCourseID, fkModuleID, TotalNumberOfItems, Duration', 'numerical', 'integerOnly'=>true),
			array('NameClasses, GoalOfClasses', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('LectureID, fkCourseID, fkModuleID, NameClasses, GoalOfClasses, TotalNumberOfItems, Duration', 'safe', 'on'=>'search'),
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
			'LectureID' => 'Lecture',
			'fkCourseID' => 'Course',
			'fkModuleID' => 'Module',
			'NameClasses' => 'Name Classes',
			'GoalOfClasses' => 'Goal of classes',
			'TotalNumberOfItems' => 'Total number of items',
			'Duration' => 'Duration (in hours)',
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

		$criteria->compare('LectureID',$this->LectureID);
		$criteria->compare('fkCourseID',$this->fkCourseID);
		$criteria->compare('fkModuleID',$this->fkModuleID);
		$criteria->compare('NameClasses',$this->NameClasses,true);
		$criteria->compare('GoalOfClasses',$this->GoalOfClasses,true);
		$criteria->compare('TotalNumberOfItems',$this->TotalNumberOfItems);
		$criteria->compare('Duration',$this->Duration);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lectures the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function listAll ($search = FALSE)
	{
		$criteria = new CDbCriteria;
		$criteria->order = 'LectureID ASC';
		$l = self::model ()->findAll ($criteria);

		$r = array ();

		if ($search) {
			$r[''] = ' ';
		}

		foreach ($l as $one) {
			$r[$one->LectureID] = $one->NameClasses;
		}

		return $r;
	}
}
