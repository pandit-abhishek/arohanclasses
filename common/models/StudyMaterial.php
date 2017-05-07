<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use common\models\ClassRoom;
use common\models\Topics;


class StudyMaterial extends ActiveRecord
{
	public static function tableName(){
		return '{{%material}}';
	}

	public $filePath;

	public function attributes(){
		return [
			'id',
			'class',
			'subject',
			'topic',
			'subtopic',
			'chapter',
			'file',
			'created_at',
			'updated_at',
			'created_by',
			'updated_by'
		];
	}

	public function rules(){
		return [
			// [['class','topic','subject'],'required'],
			[['id','class','type','topic','subtopic','chapter','file','created_at','updated_at','created_by','updated_by'],'safe']
		];
	}

	public function setAttr($post){
		// $this->setClass();
		// echo"<pre>";print_r($post);die;
		$this->class = $post['StudyMaterial']['class'];
		$this->subject = $post['StudyMaterial']['subject'];
		$this->chapter = $post['StudyMaterial']['chapter'];
		$this->topic = $this->saveTopic($post['StudyMaterial']['topic']);
		$this->subtopic = $post['StudyMaterial']['subtopic'];

		$this->file = UploadedFile::getInstance($this,'file');
		$this->created_at = Date('Y-m-d H:i:s');
		$this->updated_at = Date('Y-m-d H:i:s');
		$this->created_by = 'admin';
		$this->updated_by = 'admin';
		// $this->setClass();
		$this->upload();
		$this->save();
		// echo"<pre>";print_r($this);die;
	}

	public function saveTopic($post){

		$topic = new Topics();
		$topic->sub_id = $this->subject;
		$topic->topic_name = $post;
		// echo"<pre>";print_r($topic);die;
		$topic->save();
		return $topic->id;
		// print_r();die;
		// echo"<pre>";print_r($class->attributes);die;
	}

	public function setClass(){
		$class = new ClassRoom();
		$class->class_name = $this->class;
		// print_r();die;
		echo"<pre>";print_r($class->attributes);die;
	}


	public function upload()
    {
    	// print_r(Yii::getAlias('@upload'));die;
    	// echo"<pre>";print_r(scandir('../upload'));die;
        // if ($this->validate()) {
            $this->file->saveAs(Yii::getAlias('@upload').'/'. $this->file->baseName . '.' . $this->file->extension);
            // return true;
        // } else {
        //     return false;
        // }
    }
}