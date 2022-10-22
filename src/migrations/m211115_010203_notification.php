<?php

use yii\db\Schema;
use yii\db\Migration;


class m211115_010203_notification extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $this->createTable(Module::$tablePrefix . "notification_read",
            '{{%notification_read}}',
            [
                'id_user'=> $this->integer(11)->notNull(),
                'created_at'=> $this->safe()
            ],$tableOptions
        );

        $this->createTable('por-notification_notification',
        [
                'id_notification'=> $this->primaryKey(11),
                'type'=> $this->integer(11)->notNull(),
                'id_to'=> $this->integer(11)->notNull(),
                'text'=> $this->string(255)->notNull(),
                'title'=> $this->string(255)->notNull(),
                
        ],$tableOptions

        );


        $this->addForeignKey(
            'fk-con-id_user',
            'con_user',
            'id_user',
            //'created_at',
            'CASCADE'

        );
        $this->addForeignKey(
            'fk-con-id_notification',
            'con_notification',
            'id_to',
            'con_to',
            'id_to',
            'CASCADE'
        );


    }

    public function safeDown()
    {
        $this->dropTable('{{%notification_notification}}');
    }

}


?>