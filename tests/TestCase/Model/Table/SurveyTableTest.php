<?php
namespace CakephpSurvey\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use CakephpSurvey\Model\Table\SurveyTable;

/**
 * CakephpSurvey\Model\Table\SurveyTable Test Case
 */
class SurveyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakephpSurvey\Model\Table\SurveyTable
     */
    public $Survey;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cakephp_survey.survey',
        'plugin.cakephp_survey.survey_and_questions',
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
        $config = TableRegistry::exists('Survey') ? [] : ['className' => 'CakephpSurvey\Model\Table\SurveyTable'];
        $this->Survey = TableRegistry::get('Survey', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Survey);

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
