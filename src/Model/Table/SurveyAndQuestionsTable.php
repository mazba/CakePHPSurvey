<?php
namespace CakephpSurvey\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SurveyAndQuestions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Surveys
 * @property \Cake\ORM\Association\BelongsTo $SurveyQuestions
 *
 * @method \CakephpSurvey\Model\Entity\SurveyAndQuestion get($primaryKey, $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyAndQuestion newEntity($data = null, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyAndQuestion[] newEntities(array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyAndQuestion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyAndQuestion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyAndQuestion[] patchEntities($entities, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyAndQuestion findOrCreate($search, callable $callback = null, $options = [])
 */
class SurveyAndQuestionsTable extends Table
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

        $this->table('survey_and_questions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Survey', [
            'foreignKey' => 'survey_id',
            'joinType' => 'INNER',
            'className' => 'CakephpSurvey.Survey'
        ]);
        $this->belongsTo('SurveyQuestions', [
            'foreignKey' => 'survey_question_id',
            'joinType' => 'INNER',
            'className' => 'CakephpSurvey.SurveyQuestions'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['survey_id'], 'Survey'));
        $rules->add($rules->existsIn(['survey_question_id'], 'SurveyQuestions'));

        return $rules;
    }
}
