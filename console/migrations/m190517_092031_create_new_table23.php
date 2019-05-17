<?php

use yii\db\Migration;

/**
 * Class m190517_092031_create_new_table23
 */
class m190517_092031_create_new_table23 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this->text(),
            'status' => $this->integer(3),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190517_092031_create_new_table23 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190517_092031_create_new_table23 cannot be reverted.\n";

        return false;
    }
    */
}
