<?php
namespace App\Model\Table\Base;

use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $UserTypes
 * @property \Cake\ORM\Association\BelongsTo $Devices
 * @property \Cake\ORM\Association\BelongsTo $Timezones
 * @property \Cake\ORM\Association\BelongsTo $Languages
 * @property \Cake\ORM\Association\BelongsTo $DateFormats
 * @property \Cake\ORM\Association\BelongsTo $TimeFormats
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $ShipToParties
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class UsersTable extends CoatsTable
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

        $this->table('coats_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('UserTypes', [
            'foreignKey' => 'user_type_id'
        ]);
        $this->belongsTo('Devices', [
            'foreignKey' => 'device_id'
        ]);
        $this->belongsTo('Timezones', [
            'foreignKey' => 'timezone_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Languages', [
            'foreignKey' => 'language_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DateFormats', [
            'foreignKey' => 'date_format_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TimeFormats', [
            'foreignKey' => 'time_format_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ShipToParties', [
            'foreignKey' => 'ship_to_party_id'
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id'
        ]);
        $this->belongsTo('UpdatedUsers', [
            'foreignKey' => 'updated_user_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->allowEmpty('salt');

        $validator
            ->allowEmpty('first_name');

        $validator
            ->allowEmpty('last_name');

        $validator
            ->allowEmpty('mobile');

        $validator
            ->integer('is_sms_allowed')
            ->allowEmpty('is_sms_allowed');

        $validator
            ->integer('is_sync_enabled')
            ->allowEmpty('is_sync_enabled');

        $validator
            ->integer('is_order_cancel_allowed')
            ->allowEmpty('is_order_cancel_allowed');

        $validator
            ->integer('is_release_notes')
            ->allowEmpty('is_release_notes');

        $validator
            ->integer('agree_terms_conditions')
            ->allowEmpty('agree_terms_conditions');

        $validator
            ->date('tc_acceptance_date')
            ->allowEmpty('tc_acceptance_date');

        $validator
            ->integer('order_response_mail')
            ->allowEmpty('order_response_mail');

        $validator
            ->integer('ship_notice_mail')
            ->allowEmpty('ship_notice_mail');

        $validator
            ->allowEmpty('common_email');

        $validator
            ->allowEmpty('tokenhash');

        $validator
            ->integer('ship_notice_mail_cce')
            ->allowEmpty('ship_notice_mail_cce');

        $validator
            ->integer('HX_Active')
            ->requirePresence('HX_Active', 'create')
            ->notEmpty('HX_Active');

        $validator
            ->integer('AX_Active')
            ->requirePresence('AX_Active', 'create')
            ->notEmpty('AX_Active');

        $validator
            ->integer('sample_upload')
            ->allowEmpty('sample_upload');

        $validator
            ->integer('order_delay_alert')
            ->requirePresence('order_delay_alert', 'create')
            ->notEmpty('order_delay_alert');

        $validator
            ->integer('is_sftp_email_enabled')
            ->allowEmpty('is_sftp_email_enabled');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['user_type_id'], 'UserTypes'));
        $rules->add($rules->existsIn(['device_id'], 'Devices'));
        $rules->add($rules->existsIn(['timezone_id'], 'Timezones'));
        $rules->add($rules->existsIn(['language_id'], 'Languages'));
        $rules->add($rules->existsIn(['date_format_id'], 'DateFormats'));
        $rules->add($rules->existsIn(['time_format_id'], 'TimeFormats'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['ship_to_party_id'], 'ShipToParties'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
