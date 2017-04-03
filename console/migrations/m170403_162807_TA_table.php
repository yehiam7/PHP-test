<?php

use yii\db\Migration;

class m170403_162807_TA_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('TA',[
            'id' => $this->primarykey().' NOT NULL AUTO_INCREMENT',
            'name' => $this->string(12)->notNull(),
            'password' => $this->integer()->notNull(),
            'gpa' => $this->float()->notNull()
        ]);
    }

    public function safeDown()
    {
        echo "m170403_162807_TA_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
