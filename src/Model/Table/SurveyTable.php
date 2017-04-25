<?php
namespace CakephpSurvey\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Survey Model
 *
 * @property \Cake\ORM\Association\HasMany $SurveyAndQuestions
 *
 * @method \CakephpSurvey\Model\Entity\Survey get($primaryKey, $options = [])
 * @method \CakephpSurvey\Model\Entity\Survey newEntity($data = null, array $options = [])
 * @method \CakephpSurvey\Model\Entity\Survey[] newEntities(array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\Survey|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakephpSurvey\Model\Entity\Survey patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\Survey[] patchEntities($entities, array $data, array $options = [])
 * @method \CakephpSurvey\Model\Entity\Survey findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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
        parent::initialize($config);

        $this->table('survey');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('SurveyAndQuestions', [
            'foreignKey' => 'survey_id',
            'className' => 'CakephpSurvey.SurveyAndQuestions'
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
            ->allowEmpty('banner');

        $validator
            ->allowEmpty('type');

        $validator
            ->dateTime('start')
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->dateTime('end')
            ->requirePresence('end', 'create')
            ->notEmpty('end');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->integer('modified_by')
            ->allowEmpty('modified_by');

        return $validator;
    }
}
