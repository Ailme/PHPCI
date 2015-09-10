<?php

use Phinx\Migration\AbstractMigration;

/**
 * Class AddColumnConfigFile
 */
class AddColumnConfigFile extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $project = $this->table('project');

        if (!$project->hasColumn('config_filename')) {
            $project->addColumn('config_filename', 'string', array('limit' => 100));
            $project->update();
        }
    }
}
