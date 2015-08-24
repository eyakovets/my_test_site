<?php

/**
 * This is the model class for table "re_account_user".
 *
 * The followings are the available columns in table 're_account_user':
 * @property integer $id
 * @property string $type
 * @property string $status
 * @property string $first_name
 * @property string $last_name
 * @property string $organization_name
 * @property string $email
 * @property string $password
 * @property string $password_salt
 * @property string $avatar
 * @property string $phone
 * @property string $verify_email
 * @property string $verify_email_code
 *
 * The followings are the available model relations:
 * @property AccountUserSocialLogin[] $accountUserSocialLogins
 * @property AccountUsersRoles[] $accountUsersRoles
 */
class AccountUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 're_account_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, organization_name, password, password_salt, avatar, phone', 'required'),
			array('type', 'length', 'max'=>12),
			array('status', 'length', 'max'=>10),
			array('first_name, last_name', 'length', 'max'=>30),
			array('organization_name, email, verify_email', 'length', 'max'=>255),
			array('password', 'length', 'max'=>64),
			array('password_salt', 'length', 'max'=>8),
			array('avatar', 'length', 'max'=>45),
			array('phone', 'length', 'max'=>16),
			array('verify_email_code', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, status, first_name, last_name, organization_name, email, password, password_salt, avatar, phone, verify_email, verify_email_code', 'safe', 'on'=>'search'),
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
			'accountUserSocialLogins' => array(self::HAS_MANY, 'AccountUserSocialLogin', 'user_id'),
			'accountUsersRoles' => array(self::HAS_MANY, 'AccountUsersRoles', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'status' => 'Status',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'organization_name' => 'Organization Name',
			'email' => 'Email',
			'password' => 'Password',
			'password_salt' => 'Password Salt',
			'avatar' => 'Avatar',
			'phone' => 'Phone',
			'verify_email' => 'Verify Email',
			'verify_email_code' => 'Verify Email Code',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('organization_name',$this->organization_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password_salt',$this->password_salt,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('verify_email',$this->verify_email,true);
		$criteria->compare('verify_email_code',$this->verify_email_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AccountUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
