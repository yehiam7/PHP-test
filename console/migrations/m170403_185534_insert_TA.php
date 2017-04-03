<?php

use yii\db\Migration;

class m170403_185534_insert_TA extends Migration
{
    public function safeUp()
    {
        $this->insert('ta',['name' => 'Mostafa Yehia',
            'password' => '12345',
            'gpa' => '3']);
        $this->insert('ta',['name' => 'Ahmed Hossam',
            'password' => '11111',
            'gpa' => '3.2']);
        $this->insert('ta',['name' => 'Abdulrahman Omar',
            'password' => '22222',
            'gpa' => '3.4']);
    }

    public function safeDown()
    {
        echo "m170403_185534_insert_TA cannot be reverted.\n";

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
