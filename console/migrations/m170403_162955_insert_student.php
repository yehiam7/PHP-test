<?php

use yii\db\Migration;

class m170403_162955_insert_student extends Migration
{
    public function safeUp()
    {
        $this->insert('student',['name' => 'Mostafa Yehia',
            'password' => '12345',
            'gpa' => '3']);
        $this->insert('student',['name' => 'Ahmed Hossam',
            'password' => '11111',
            'gpa' => '2.5']);
        $this->insert('student',['name' => 'Abdulrahman Omar',
            'password' => '22222',
            'gpa' => '4']);
    }

    public function safeDown()
    {
        echo "m170403_162955_insert_student cannot be reverted.\n";

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
