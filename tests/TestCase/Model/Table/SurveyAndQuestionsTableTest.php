<?php
namespace CakephpSurvey\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use CakephpSurvey\Model\Table\SurveyAndQuestionsTable;

/**
 * CakephpSurvey\Model\Table\SurveyAndQuestionsTable Test Case
 */
class SurveyAndQuestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakephpSurvey\Model\Table\SurveyAndQuestionsTable
     */
    public $SurveyAndQuestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cakephp_survey.survey_and_questions',
        'plugin.cakephp_survey.surveys',
        'plugin.cakephp_survey.survey_questions',
        'plugin.cakephp_survey.survey_question_options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SurveyAndQuestions') ? [] : ['className' => 'CakephpSurvey\Model\Table\SurveyAndQuestionsTable'];
        $this->SurveyAndQuestions = TableRegistry::get('SurveyAndQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SurveyAndQuestions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
