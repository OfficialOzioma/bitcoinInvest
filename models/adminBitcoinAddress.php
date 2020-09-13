<?php
namespace app\models;

use thecodeholic\phpmvc\db\DbModel;


/**
 * adminBitcoinAddress::class
 */
class adminBitcoinAddress extends DbModel 
{
    public string $admin_id = '';
    public string $address_name = '';
    public string $bitcoin_address = '';


    public static function tableName(): string
    {
        return 'adminBitcoinAddress'; 
    }

    public function attributes(): array
    {
        return ['admin_id', 'address_name', 'bitcoin_address'];
    }

}

?>