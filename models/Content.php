<?php

namespace kouosl\content\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $body
 * @property string $status
 * @property string $type
 * @property int $author
 * @property string $date
 * @property string $modified
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'body'], 'required'],
            [['body', 'status', 'type'], 'string'],
            [['date', 'modified'], 'safe'],
            [['name', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'body' => 'Body',
            'status' => 'Status',
            'type' => 'Type',
            'author' => 'Author',
            'date' => 'Date',
            'modified' => 'Modified',
        ];
    }
}
