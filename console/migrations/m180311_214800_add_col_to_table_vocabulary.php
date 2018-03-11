<?php

use yii\db\Migration;

class m180311_214800_add_col_to_table_vocabulary extends Migration
{
    public function up()
    {
        $this->addColumn('vocabulary', 'subtopic_id', $this->integer()->null() );

        // creates index for column `subtopic_id`
        $this->createIndex(
            'idx-subtopic_id',
            'vocabulary',
            'subtopic_id'
        );

        // add foreign key for column `subtopic_id`
        $this->addForeignKey(
            'fk-subtopic_id',
            'vocabulary',
            'subtopic_id',
            'subtopic',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropColumn('vocabulary',   'subtopic_id');
    }
}
