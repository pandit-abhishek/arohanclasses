<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Topics extends ActiveRecord
{
	public static function tableName(){
		return [
			'topics'
		];
	}

	public function attributes(){
		return [
			'id',
			'topic_id',
			'sub_topic_name'
		];
	}

	public function rules(){
		return [
			[['id','topic_id','sub_topic_name'],'safe']
		];
	}
	
}