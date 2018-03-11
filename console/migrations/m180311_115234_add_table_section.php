<?php

use yii\db\Migration;

class m180311_115234_add_table_section extends Migration
{
    public function up()
    {
        $this->createTable('section', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'url' => $this->string(50),
            'description' => $this->text(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    public function down()
    {
        $this->dropTable('section');
    }
}
