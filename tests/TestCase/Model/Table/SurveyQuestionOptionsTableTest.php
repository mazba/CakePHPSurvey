<?php
namespace CakephpSurvey\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use CakephpSurvey\Model\Table\SurveyQuestionOptionsTable;

/**
 * CakephpSurvey\Model\Table\SurveyQuestionOptionsTable Test Case
 */
class SurveyQuestionOptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakephpSurvey\Model\Table\SurveyQuestionOptionsTable
     */
    public $SurveyQuestionOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cakephp_survey.survey_question_options',
        'plugin.cakephp_survey.survey_questions',
        'plugin.cakephp_survey.surveys'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SurveyQuestionOptions') ? [] : ['className' => 'CakephpSurvey\Model\Table\SurveyQuestionOptionsTable'];
        $this->SurveyQuestionOptions = TableRegistry::get('SurveyQuestionOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SurveyQuestionOptions);

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
