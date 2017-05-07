<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Subject extends ActiveRecord
{
	public static function tableName(){
		return 'subject';
		
	}

	public function attributes(){
		return [
			'id',
			'class_id',
			'sub_name'
		];
	}

	public function rules(){
		return [
			[['id','class_id','sub_name'],'safe']
		];
	}
	
}