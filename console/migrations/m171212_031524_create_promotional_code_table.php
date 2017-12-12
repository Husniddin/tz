<?php

use yii\db\Migration;

/**
 * Handles the creation of table `promotional_code`.
 * Has foreign keys to the tables:
 *
 * - `tariff_zone`
 */
class m171212_031524_create_promotional_code_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('promotional_code', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'tariff_zone_id' => $this->integer(),
            'customer_reward' => $this->integer()->notNull(),
            'start_dt' => $this->date()->notNull(),
            'end_dt' => $this->date()->notNull(),
            'status' => "ENUM('active', 'inactive') NOT NULL DEFAULT 'active'",
        ]);

        // creates index for column `tariff_zone_id`
        $this->createIndex(
            'idx-promotional_code-tariff_zone_id',
            'promotional_code',
            'tariff_zone_id'
        );

        // add foreign key for table `tariff_zone`
        $this->addForeignKey(
            'fk-promotional_code-tariff_zone_id',
            'promotional_code',
            'tariff_zone_id',
            'tariff_zone',
            'id',
            'SET NULL',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `tariff_zone`
        $this->dropForeignKey(
            'fk-promotional_code-tariff_zone_id',
            'promotional_code'
        );

        // drops index for column `tarifff_zone_id`
        $this->dropIndex(
            'idx-promotional_code-tariff_zone_id',
            'promotional_code'
        );

        $this->dropTable('promotional_code');
    }
}
