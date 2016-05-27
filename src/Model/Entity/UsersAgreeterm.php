<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * UsersAgreeterm Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\Base\User $user
 * @property int $agree_terms_conditions
 * @property \Cake\I18n\Time $tc_acceptance_date
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class UsersAgreeterm extends CoatsEntity
{

}
