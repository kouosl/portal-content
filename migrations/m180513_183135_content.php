<?php

use yii\db\Migration;
//use Yii;
/**
 * Class m180513_183135_content
 */
class m180513_183135_content extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'content';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
			'body' => $this->text()->notNull(),
            'status' => "ENUM('draft', 'publish')",
            'type' => "ENUM('page', 'blog')",
            'author' => $this->integer()->defaultValue(1),
            'date' => $this->dateTime(),
            'modified' => $this->dateTime()
        ], $tableOptions);
        //$x=Yii::$app->formatter->asDate('now', 'yyyy-MM-dd');
        $this->insert('content',
        [
       'id' => 1,
       'name' => 'homepage',
       'title' => 'Merhaba',
       'body' => 'Merhaba',
       'status' => 'draft',
       'type' => 'page',
       'author' => 1,
       'date' => 'm-d-Y H:i:s',
       'modified' =>'m-d-Y H:i:s',
        ])
       ->execute();
            
       
    }

    public function down()
    {
        $TABLE_NAME = 'content';
        $this->dropTable($TABLE_NAME);
    }
}
