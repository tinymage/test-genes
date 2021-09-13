<?php

use yii\db\Migration;

/**
 * Class m210913_105119_create_table_gene
 */
class m210913_105119_create_table_gene extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gene', [
            'id' => $this->primaryKey(),
            'symbol' => $this->char(120),
            'ncbi_id' => $this->char(120),
        ]);

        $this->batchInsert('gene', [
            'id',
            'symbol',
            'ncbi_id',
        ],
        [
            [1, 'GHR', 2690],
            [2, 'GHRH', 2691],
            [3, 'SHC1', 6464],
            [4, 'POU1F1', 5449],
            [5, 'PROP1', 5626],
            [6, 'TP53', 7157],
            [7, 'TERC', 7012],
            [8, 'TERT', 7015],
            [9, 'ATM', 472],
            [10, 'PLAU', 5328],
            [11, 'ERCC2', 2068],
            [12, 'ERCC8', 1161],
            [13, 'WRN', 7486],
            [14, 'LMNA', 4000],
            [15, 'IGF1R', 3480],
            [16, 'TXN', 7295],
            [17, 'KL', 9365],
        ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210913_105119_create_table_gene cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210913_105119_create_table_gene cannot be reverted.\n";

        return false;
    }
    */
}
