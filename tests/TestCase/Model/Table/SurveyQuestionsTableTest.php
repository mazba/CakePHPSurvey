<?php
namespace CakephpSurvey\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use CakephpSurvey\Model\Table\SurveyQuestionsTable;

/**
 * CakephpSurvey\Model\Table\SurveyQuestionsTable Test Case
 */
class SurveyQuestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakephpSurvey\Model\Table\SurveyQuestionsTable
     */
    public $SurveyQuestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cakephp_survey.survey_questions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SurveyQuestions') ? [] : ['className' => 'CakephpSurvey\Model\Table\SurveyQuestionsTable'];
        $this->SurveyQuestions = TableRegistry::get('SurveyQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SurveyQuestions);

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
}
