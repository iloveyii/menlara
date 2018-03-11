<?php

use yii\db\Migration;

class m180311_115612_add_table_topic extends Migration
{
    public function up()
    {
        $this->createTable('topic', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'description' => $this->text(),
            'section_id' => $this->integer(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(null),
        ]);

        // creates index for column `section_id`
        $this->createIndex(
            'idx-section_id',
            'topic',
            'section_id'
        );

        // add foreign key for table `itinerary`
        $this->addForeignKey(
            'fk-section_id',
            'topic',
            'section_id',
            'section',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('topic');
    }



}
