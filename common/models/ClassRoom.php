<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class ClassRoom extends ActiveRecord
{
	public static function tableName(){
		return 'class';
	}

	public function attributes(){
		return [
			'id',
			'class_name'
		];
	}

	public function rules(){
		return [
			[['id','class_name'],'safe']
		];
	}

}