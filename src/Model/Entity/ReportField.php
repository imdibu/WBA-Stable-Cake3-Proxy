<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * ReportField Entity.
 *
 * @property int $id
 * @property string $field
 * @property string $label
 * @property int $parent_id
 * @property \App\Model\Entity\Base\ParentReportField $parent_report_field
 * @property bool $readonly
 * @property string $display_field
 * @property \App\Model\Entity\Base\ChildReportField[] $child_report_fields
 */
class ReportField extends CoatsEntity
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
        'id' => false,
    ];
}
