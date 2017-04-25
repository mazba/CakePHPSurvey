<?php
namespace CakephpSurvey\Model\Entity;

use Cake\ORM\Entity;

/**
 * Survey Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $banner
 * @property string $type
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $created_by
 * @property int $modified_by
 *
 * @property \CakephpSurvey\Model\Entity\SurveyAndQuestion[] $survey_and_questions
 */
class Survey extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
