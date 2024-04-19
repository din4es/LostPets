<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $role_id
 *
 * @property PetRequests[] $petRequests
 * @property Role $role
 */
class RegForm extends User
{
    public $passwordConfirm;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Почта',
            'password' => 'Пароль',
            'passwordConfirm' => 'Повторите пароль',
            'role_id' => 'Admin',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'passwordConfirm', 'role_id'], 'required'],
            [['role_id'], 'integer'],
            [['name'], 'string', 'max' => 511],
            [['email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

}
