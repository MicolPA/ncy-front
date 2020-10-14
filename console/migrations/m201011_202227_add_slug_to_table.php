<?php

use yii\db\Migration;

/**
 * Class m201011_202227_add_slug_to_table
 */
class m201011_202227_add_slug_to_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%centros_educativos}}', 'slug', $this->string()->defaultValue(null));
        $this->addColumn('{{%cursos}}', 'slug', $this->string()->defaultValue(null));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201011_202227_add_slug_to_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201011_202227_add_slug_to_table cannot be reverted.\n";

        return false;
    }
    */
}
