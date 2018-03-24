<?php

use yii\db\Migration;

/**
 * Class m180324_094452_add_col_to_table_topic
 */
class m180324_094452_add_col_to_table_topic extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('topic', 'url', $this->string()->null() );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropColumn('topic', 'url' );

        return true;
    }

}
