<?php
namespace app\models;

use thecodeholic\phpmvc\db\DbModel;


/**
 * bitcoinAddress::class
 */
class bitcoinAddress extends DbModel 
{
    public string $user_id = '';
    public string $address_name = '';
    public string $bitcoin_address = '';


    public static function tableName(): string
    {
        return 'bitcoin_address'; 
    }

    public function attributes(): array
    {
        return ['user_id', 'address_name', 'bitcoin_address'];
    }

}

?>