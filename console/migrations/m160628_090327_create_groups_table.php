<?php

use yii\db\Migration;

/**
 * Handles the creation for table `group_table`.
 */
class m160628_090327_create_groups_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('groups', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'employees' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('groups');
    }
}
