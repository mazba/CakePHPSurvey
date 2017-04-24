<?php
namespace CakephpSurvey\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use CakephpSurvey\Model\Entity\Survey;

/**
 * Survey Model
 */
class SurveyTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('survey');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('SurveyQuestions', [
            'foreignKey' => 'survey_id',
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
            ->add('id', 'valid', ['rule' => 'integer'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');
            
        $validator
            ->allowEmpty('description');
            
        $validator
            ->allowEmpty('banner');
            
        $validator
            ->allowEmpty('type');
            
        $validator
            ->add('start', 'valid', ['rule' => 'dateTime'])
            ->requirePresence('start', 'create')
            ->notEmpty('start');
            
        $validator
            ->add('end', 'valid', ['rule' => 'dateTime'])
            ->requirePresence('end', 'create')
            ->notEmpty('end');


        return $validator;
    }
}
