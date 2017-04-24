<?php
use Migrations\AbstractMigration;

class SurveyQuestionOptions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('survey_question_options')
            ->addColumn('survey_question_id', 'integer', [
                'default' => null,
                'limit'=>11,
                'null' => false,
            ])
            ->addColumn('option', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->create();
    }
    public function down()
    {
        $this->dropTable('survey_question_options');
    }
}
