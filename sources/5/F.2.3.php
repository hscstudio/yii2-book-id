<?php
use yii\db\Schema;
use yii\db\Migration;
class m160118_041129_create_employee_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'age' => $this->integer(3)->notNull(),
        ],$tableOptions);
    }

    public function down()
    {
        echo "m160118_041129_create_employee_table cannot be reverted.\n";
        $this->dropTable('employee');
        return false;
    }
}
