<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tariff_zone`.
 */
class m171212_025923_create_tariff_zone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tariff_zone', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        $this->insert('tariff_zone', [
            'name' => 'Zone 1'
        ]);

        $this->insert('tariff_zone', [
            'name' => 'Zone 2'
        ]);

        $this->insert('tariff_zone', [
            'name' => 'Zone 3'
        ]);

        $this->insert('tariff_zone', [
            'name' => 'Zone 4'
        ]);

        $this->insert('tariff_zone', [
            'name' => 'Zone 5'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tariff_zone');
    }
}
