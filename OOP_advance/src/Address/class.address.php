<?php

/**
 * Address Class
 */

class Address{

    //Street address
    public $street_address_1;
    public $street_address_2;

    //City
    public $city;

    //postal code
    protected $_postal_code;

    //Subdivision or state
    public $subdivision;

    //country
    public $country;

    //id to verify address uniquely
    protected $address_id;

    //time created and last updated
    protected $_created_at;
    protected $_updated_at;

    /**
     * Display address
     * @return string
     */
    function display(){
        $output = "<br/>Address:";
        $output .= "<br/>{$this->street_address_1}";

        if($this->street_address_2 != NULL){
            $output .= "<br/>{$this->street_address_2}";
        }
        $output .= "<br/>{$this->city}";
        $output .= "<br/>{$this->_postal_code}";
        $output .= "<br/>{$this->subdivision}";
        $output .= "<br/>{$this->country}";

        return $output;
    }

    /**
     * _postal_code_guess
     *
     * @return mixed
     * @todo replace 'LOOKUP' with Database action
     */
    protected function _postal_code_guess() : int{
        return "LOOKUP";
    }
    
    /**
     * Magic get method
     *
     * @param string $name
     * @return mixed
     */

    /* INFO - Magic methods are called in response to a PHP event, in this case, getting an object property */
    public function __get($name)
    {   
        //fetch postal code from database if city and subdivision are provided
        if(!$this->_postal_code){
            $this->_postal_code = $this->_postal_code_guess();
        }

        //if already set try to return the property if it exists
        $protected_property_name = "_" . $name;

        if(property_exists($this, $protected_property_name)){
            return $this->_postal_code;
        }
        else{
            trigger_error("Invalid property {$name} at __get.");
        }

    }

    public function __set($name, $value)
    {
        //allow set if name of property is 'postal code'
        if('postal_code' == $name){
            $this->$name = $value;
            return;
        }

        trigger_error('Unallowed property name {$name} at __set.');

    }
}