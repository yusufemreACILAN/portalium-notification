<?php

use yii\db\Schema;
use yii\db\Migration;

class m211115_010203_notification extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }
    //diğer miggartion örneğinden alındı

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $this->createTable(
            '{{%notification_notification}}',
            [
                'id_notification'=> $this->primaryKey(11),
                'id_read'=> $this->primaryKey(11),
                'id_user'=> $this->integer(11)->notNull(),
                'type'=> $this->integer(11)->notNull(),
                'id_to'=> $this->integer(11)->notNull(),
                'text'=> $this->string(255)->notNull(),
                'title'=> $this->string(255)->notNull(),
                'created_at'=> $this->string(255)->notNull(),

            ],$tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%notification_notification}}');
    }


}




?>