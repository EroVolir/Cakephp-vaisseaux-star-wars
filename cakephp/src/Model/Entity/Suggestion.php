<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Suggestion Entity
 *
 * @property int $id
 * @property string|null $suggestion
 * @property string|null $email
 * @property \Cake\I18n\FrozenTime|null $date
 * @property bool|null $pris_en_compte
 */
class Suggestion extends Entity
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
        'suggestion' => true,
        'email' => true,
        'date' => true,
        'pris_en_compte' => true
    ];
}
