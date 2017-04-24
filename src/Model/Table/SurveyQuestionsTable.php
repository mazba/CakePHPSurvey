<?php
namespace CakephpSurvey\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SurveyQuestions Model
 *
 * @property \Cake\ORM\Association\HasMany $SurveyAndQuestions
 * @property \Cake\ORM\Association\HasMany $SurveyQuestionOptions
 *
 * @method \CakephpSurvey\Model\Entity\SurveyQuestion get($primaryKey, $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestion newEntity($data = null, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestion[] newEntities(array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestion[] patchEntities($entities, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestion findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SurveyQuestionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('survey_questions');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('SurveyAndQuestions', [
            'foreignKey' => 'survey_question_id',
            'className' => 'CakephpSurvey.SurveyAndQuestions'
        ]);
        $this->hasMany('SurveyQuestionOptions', [
            'foreignKey' => 'survey_question_id',
            'className' => 'CakephpSurvey.SurveyQuestionOptions'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->allowEmpty('description');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');


        return $validator;
    }
}
