<?php

/**
 * Description of Usuario
 *
 * @author Juan
 */

//src/Proyecto/UsuarioBundle/Entity/Usuario.php
namespace Proyecto\UsuarioBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Usuario {
  
    // Se declaran los atributos de la entidad usuario
     
    /**
     * @ORM\Id
     * @ORM\Column(type="Integer")
     * @ORM\GeneratedValue
     */
    protected $use_code;
    /**
     *
     * @ORM\Column(type="String", length=90) 
     */
    protected $use_name;
    /**
     *
     * @ORM\Column(type="String", length=100) 
     */
    protected $use_dependencia;
    /**
     *
     * @ORM\Column(type="String", length=15) 
     */
    protected $use_phone;
    /**
     *
     * @ORM\Column(type="String", length=80) 
     */
    protected $use_email;
    /**
     *
     * @ORM\Column(type="String", length=40) 
     */
    protected $use_login;
    /**
     *
     * @ORM\Column(type="String", length=20)
     */
    protected $use_password;
    /**
     *
     * @ORM\Column(type="String", length=70) 
     */
    protected $use_original;
    /**
     *
     * @ORM\Column(type="String", length=70) 
     */
    protected $use_rename;
    /**
     *
     * @ORM\Column(type="Integer", columnDefinition="ENUM('1', '2','3','4')") 
     */
    protected $use_status;
    /**
     *
     * @ORM\Column(type="String", columnDefinition="ENUM('Administrador', 'Dependencia')") 
     */
    protected $use_type;
    /**
     *
     * @ORM\Column(type="date") 
     */
    protected $use_date_create;
    
    /**
     * Metodo constructor de la clase
     */
    function __construct() {
        
    }
    
    public function getUse_code() {
        return $this->use_code;
    }

    public function setUse_code($use_code) {
        $this->use_code = $use_code;
    }

    public function getUse_name() {
        return $this->use_name;
    }

    public function setUse_name($use_name) {
        $this->use_name = $use_name;
    }

    public function getUse_dependencia() {
        return $this->use_dependencia;
    }

    public function setUse_dependencia($use_dependencia) {
        $this->use_dependencia = $use_dependencia;
    }

    public function getUse_phone() {
        return $this->use_phone;
    }

    public function setUse_phone($use_phone) {
        $this->use_phone = $use_phone;
    }

    public function getUse_email() {
        return $this->use_email;
    }

    public function setUse_email($use_email) {
        $this->use_email = $use_email;
    }

    public function getUse_login() {
        return $this->use_login;
    }

    public function setUse_login($use_login) {
        $this->use_login = $use_login;
    }

    public function getUse_password() {
        return $this->use_password;
    }

    public function setUse_password($use_password) {
        $this->use_password = $use_password;
    }

    public function getUse_original() {
        return $this->use_original;
    }

    public function setUse_original($use_original) {
        $this->use_original = $use_original;
    }

    public function getUse_rename() {
        return $this->use_rename;
    }

    public function setUse_rename($use_rename) {
        $this->use_rename = $use_rename;
    }

    public function getUse_status() {
        return $this->use_status;
    }

    public function setUse_status($use_status) {
        $this->use_status = $use_status;
    }

    public function getUse_type() {
        return $this->use_type;
    }

    public function setUse_type($use_type) {
        $this->use_type = $use_type;
    }

    public function getUse_date_create() {
        return $this->use_date_create;
    }

    public function setUse_date_create($use_date_create) {
        $this->use_date_create = $use_date_create;
    }
    
    public function __toString() {
        
        $this->use_dependencia;
    } 
   
}

?>
