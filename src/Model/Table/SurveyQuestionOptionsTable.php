<?php
namespace CakephpSurvey\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SurveyQuestionOptions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SurveyQuestions
 *
 * @method \CakephpSurvey\Model\Entity\SurveyQuestionOption get($primaryKey, $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestionOption newEntity($data = null, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestionOption[] newEntities(array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestionOption|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestionOption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestionOption[] patchEntities($entities, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\SurveyQuestionOption findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SurveyQuestionOptionsTable extends Table
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

        $this->table('survey_question_options');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

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

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

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
        $rules->add($rules->existsIn(['survey_question_id'], 'SurveyQuestions'));

        return $rules;
    }
}
