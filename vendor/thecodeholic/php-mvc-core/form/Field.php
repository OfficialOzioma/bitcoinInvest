<?php
/**
 * User: TheCodeholic
 * Date: 7/9/2020
 * Time: 7:05 AM
 */

namespace thecodeholic\phpmvc\form;


use thecodeholic\phpmvc\Model;

/**
 * Class Field
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package core\form
 */
class Field extends BaseField
{
    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'file';
    const CSS_CLASS = '' ;
    const CSS_ID = '' ;
    public string $css_class = '';
    public string $otherAttribute = '';




    /**
     * Field constructor.
     *
     * @param \thecodeholic\phpmvc\Model $model
     * @param string          $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    

    public function renderInput()
    {
        return sprintf('<input type="%s" class="form-control%s %s" name="%s" value="%s" %s>',
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->css_class,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->otherAttribute,
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function css_Class($classname = [])
    {
        $this->css_class = implode( " ", $classname );
        return $this; 
    }

    public function otherAttributes($attributename = [])
    {
        $this->otherAttribute = implode(',', array_map(
            function ($v, $k) { 
                return $k.'='."\"$v\"";
            },
            $attributename,
            array_keys($attributename)
        ));
        return $this;       
    }

    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this; 
    }
} 