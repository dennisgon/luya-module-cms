<?php

use yii\db\Migration;

/**
 * Class m190728_084936_cms_theme
 */
class m190728_084936_cms_theme extends Migration
{
    public function safeUp()
    {
        $this->createTable('cms_theme', [
            'id' => $this->primaryKey(),
            'is_active' => $this->boolean()->notNull()->defaultValue(0),
            'base_path' => $this->string(255)->notNull()->unique(),
            'json_config' => $this->text()->notNull(),
        ]);
    }
    
    public function safeDown()
    {
        $this->dropTable('cms_theme');
    }
}
