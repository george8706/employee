<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `employees_table`.
 */
class m160628_082643_create_employees_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employees', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(100),
            'lastname' => $this->string(100),
            'grouup' => $this->string(100),
            'dateofbirth' => $this->date(),
            'isworking' => $this->string(3),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employees');
    }
}
