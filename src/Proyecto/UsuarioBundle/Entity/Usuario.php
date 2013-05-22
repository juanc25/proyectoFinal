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
* @ORM\Table(name="usuario")
* @ORM\Entity
*/
class Usuario {
    
    
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    
  
    // Se declaran los atributos de la entidad usuario
     
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     *
     * @ORM\Column(type="string", length=90) 
     */
    protected $useName;
    /**
     *
     * @ORM\Column(type="string", length=100) 
     */
    protected $useDependencia;
    /**
     *
     * @ORM\Column(type="string", length=15) 
     */
    protected $usePhone;
    /**
     *
     * @ORM\Column(type="string", length=80) 
     */
    protected $useEmail;
    /**
     *
     * @ORM\Column(type="string", length=40) 
     */
    protected $useLogin;
    /**
     *
     * @ORM\Column(type="string", length=20)
     */
    protected $usePassword;
    /**
     *
     * @ORM\Column(type="string", length=70) 
     */
    protected $useOriginal;
    /**
     *
     * @ORM\Column(type="string", length=70) 
     */
    protected $useRename;
    /**
     *
     * @ORM\Column(type="integer") 
     */
    protected $useStatus;
    /**
     *
     * @ORM\Column(type="string") 
     */
    protected $useType;
   
    
    /**
     * Metodo constructor de la clase
     */
    function __construct() {
        
    }
    /**
     * 
     * @return type
     */
    public function getId() {
        return $this->id;
    }
    /**
     * 
     * @param type $id
     */
    public function setId($id) {
        $this->id = $id;
    }
    /**
     * 
     * @return type
     */
    public function getUseName() {
        return $this->useName;
    }
    /**
     * 
     * @param type $useName
     */
    public function setUseName($useName) {
        $this->useName = $useName;
    }
    /**
     * 
     * @return type
     */
    public function getUseDependencia() {
        return $this->useDependencia;
    }
    /**
     * 
     * @param type $useDependencia
     */
    public function setUseDependencia($useDependencia) {
        $this->useDependencia = $useDependencia;
    }
    /**
     * 
     * @return type
     */
    public function getUsePhone() {
        return $this->usePhone;
    }
    /**
     * 
     * @param type $usePhone
     */
    public function setUsePhone($usePhone) {
        $this->usePhone = $usePhone;
    }
    /**
     * 
     * @return type
     */
    public function getUseEmail() {
        return $this->useEmail;
    }
    /**
     * 
     * @param type $useEmail
     */
    public function setUseEmail($useEmail) {
        $this->useEmail = $useEmail;
    }
    /**
     * 
     * @return type
     */
    public function getUseLogin() {
        return $this->useLogin;
    }
    /**
     * 
     * @param type $useLogin
     */
    public function setUseLogin($useLogin) {
        $this->useLogin = $useLogin;
    }
    /**
     * 
     * @return type
     */
    public function getUsePassword() {
        return $this->usePassword;
    }
    /**
     * 
     * @param type $usePassword
     */
    public function setUsePassword($usePassword) {
        $this->usePassword = $usePassword;
    }
    /**
     * 
     * @return type
     */
    public function getUseOriginal() {
        return $this->useOriginal;
    }
    /**
     * 
     * @param type $useOriginal
     */
    public function setUseOriginal($useOriginal) {
        $this->useOriginal = $useOriginal;
    }
    /**
     * 
     * @return type
     */
    public function getUseRename() {
        return $this->useRename;
    }
    /**
     * 
     * @param type $useRename
     */
    public function setUseRename($useRename) {
        $this->useRename = $useRename;
    }
    /**
     * 
     * @return type
     */
    public function getUseStatus() {
        return $this->useStatus;
    }
    /**
     * 
     * @param type $useStatus
     */
    public function setUseStatus($useStatus) {
        $this->useStatus = $useStatus;
    }
    /**
     * 
     * @return type
     */
    public function getUseType() {
        return $this->useType;
    }
    /**
     * 
     * @param type $useType
     */
    public function setUseType($useType) {
        $this->useType = $useType;
    }
    /**
     * 
     * @return type
     */
    public function __toString() {
        
        return $this->useName;
    }   
}
?>