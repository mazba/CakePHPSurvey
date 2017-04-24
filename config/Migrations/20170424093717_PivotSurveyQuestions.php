<?php
use Migrations\AbstractMigration;

class PivotSurveyQuestions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->table('survey_and_questions')
            ->addColumn('survey_id', 'integer', [
                'default' => null,
                'limit'=>11,
                'null' => false,
            ])
            ->addColumn('survey_question_id', 'integer', [
                'default' => null,
                'limit'=>11,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('survey_and_questions');
    }
}
