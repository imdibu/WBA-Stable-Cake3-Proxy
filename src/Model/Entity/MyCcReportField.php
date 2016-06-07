<?php
namespace App\Model\Entity;



/**
 * MyCcReportField Entity.
 *
 * @property int $id
 * @property string $field
 * @property string $label
 * @property int $parent_id
 * @property \App\Model\Entity\Base\ParentMyCcReportField $parent_my_cc_report_field
 * @property bool $readonly
 * @property string $display_field
 * @property string $format
 * @property \App\Model\Entity\Base\ChildMyCcReportField[] $child_my_cc_report_fields
 */
class MyCcReportField extends CoatsEntity
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
