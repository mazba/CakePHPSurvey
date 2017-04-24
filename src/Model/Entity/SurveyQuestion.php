<?php
namespace CakephpSurvey\Model\Entity;

use Cake\ORM\Entity;

/**
 * SurveyQuestion Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modifited
 * @property int $created_by
 * @property int $modifited_by
 */
class SurveyQuestion extends Entity
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
