<?php

use yii\db\Migration;

class m180308_080830_add_table_tenses extends Migration
{
    public function up()
    {
        $this->createTable('tenses', [
            'id' => $this->primaryKey(),
            'english' => $this->string(100),
            'infinitiv' => $this->string(100),
            'presens' => $this->string(100),
            'preteritum' => $this->string(100),
            'supinum' => $this->string(100),
            'imperativ' => $this->string(100),
        ]);
    }

    public function down()
    {
        $this->dropTable('tenses');
    }
}
