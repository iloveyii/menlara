<?php

use yii\db\Migration;

class m180311_154607_add_table_subtopic_column_pic_url extends Migration
{
    public function up()
    {
        $this->addColumn('subtopic', 'pic_url', $this->string(300)->null() );
        $this->addColumn('subtopic', 'pic_text', $this->string(300)->null() );
    }

    public function down()
    {
        $this->dropColumn('subtopic',   'pic_url');
        $this->dropColumn('subtopic',   'pic_text');
    }
}
