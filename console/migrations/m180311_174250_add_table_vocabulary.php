<?php

use yii\db\Migration;

class m180311_174250_add_table_vocabulary extends Migration
{
    public function up()
    {
        $this->createTable('vocabulary', [
            'id' => $this->primaryKey(),
            'word' => $this->string(150),
            'meaning' => $this->string(150),
            'lang' => $this->string(2),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    public function down()
    {
        $this->dropTable('vocabulary');
    }
}
