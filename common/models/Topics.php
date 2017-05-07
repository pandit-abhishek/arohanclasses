<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Topics extends ActiveRecord
{
	public static function tableName(){
		return 'topics';
		
	}

	public function attributes(){
		return [
			'id',
			'sub_id',
			'topic_name'
		];
	}

	public function rules(){
		return [
			[['id','sub_id','topic_name'],'safe']
		];
	}
	
}