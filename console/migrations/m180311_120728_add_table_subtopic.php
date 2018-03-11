<?php

use yii\db\Migration;

class m180311_120728_add_table_subtopic extends Migration
{
    public function up()
    {
        $this->createTable('subtopic', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150),
            'description' => $this->text(),
            'topic_id' => $this->integer(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(null),
        ]);

        // creates index for column `section_id`
        $this->createIndex(
            'idx-topic_id',
            'subtopic',
            'topic_id'
        );

        // add foreign key for table `itinerary`
        $this->addForeignKey(
            'fk-topic_id',
            'subtopic',
            'topic_id',
            'topic',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('subtopic');
    }

}
