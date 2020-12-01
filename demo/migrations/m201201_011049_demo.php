<?php

use yii\db\Migration;

/**
 * Class m201201_011049_demo
 */
class m201201_011049_demo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201201_011049_demo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201201_011049_demo cannot be reverted.\n";

        return false;
    }
    */
}
