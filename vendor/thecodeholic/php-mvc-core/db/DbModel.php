<?php
/**
 * User: TheCodeholic
 * Date: 7/10/2020
 * Time: 9:19 AM
 */

namespace thecodeholic\phpmvc\db;

use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\Model;

/**
 * Class DbModel
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package thecodeholic\phpmvc
 */
abstract class DbModel extends Model
{
    abstract public static function tableName(): string;

    public function primaryKey(): string
    {
        return 'id';
    }
  
    public function save()
    { 
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (" . implode(",", $attributes) . ") 
                VALUES (" . implode(",", $params) . ")");
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }
 
    public static function prepare($sql): \PDOStatement
    {
        return Application::$app->db->prepare($sql);
    }

    public static function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        
        return $statement->fetchObject(static::class);
    }

    public static function findUser($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        
       $data = array();
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
       return $data;
    }

    public function update($data, $conditions){
        $table = static::tableName();

        if(!empty($data) && is_array($data)){
            $colvalSet = '';
            $whereSql = '';
            $i = 0;
        
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $colvalSet .= $pre.$key."='".$val."'";
                $i++;
            }

            if(!empty($conditions)&& is_array($conditions)){
                $whereSql .= ' WHERE ';
                $i = 0;
                foreach($conditions as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = '".$value."'";
                    $i++;
                }
            }
            
            $sql = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
            $query = self::prepare($sql);
            $update = $query->execute();
            return $update?$query->rowCount():false;
        }else{
            return false;
        }
    }


    public function findAll()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName");
        $statement->execute();
        $data = array();
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
       return $data;
    }
    public function countTable()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName");
        $statement->execute();

        return $statement->rowCount();
    }
    public function delete($id)
    {
        $tableName = static::tableName();
        $statement = self::prepare("DELETE FROM $tableName WHERE id = :id");
        $statement->bindParam("id", $id, \PDO::PARAM_STR);
        $statement->execute();
    }
}