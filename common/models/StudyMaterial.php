<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;


class StudyMaterial extends ActiveRecord
{
	public static function tableName(){
		return '{{%material}}';
	}

	public function attributes(){
		return [
			'id',
			'class',
			'subject',
			'type',
			'topic',
			'subtopic',
			'chapter',
			'created_at',
			'updated_at',
			'created_by',
			'updated_by'
		];
	}

	public function rules(){
		return [
			[['class','topic','subject'],'required'],
			[['id','class','type','topic','subtopic','chapter','created_at','updated_at','created_by','updated_by'],'safe']
		];
	}

	public function setAttr(){

	}
}