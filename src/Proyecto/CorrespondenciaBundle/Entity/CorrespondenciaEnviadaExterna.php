<?php
/**
 * Description of CorrespondenciaEnviadaExterna
 *
 * @author Juan
 */

namespace Proyecto\CorrespondenciaBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Table(name="correspondencia_enviada_externa")
* @ORM\Entity
*/
class CorrespondenciaEnviadaExterna {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     *@ORM\Column(type="date") 
     */
    protected $fecha;
    
    /**
     *@ORM\Column(type="string", length=5)
     */
    protected $hora;
    
    /**
     *@ORM\Column(type="string", length=10)
     */
    protected $radicado;
    
    /**
     *@ORM\Column(type="string", length=50)
     */
    protected $destinatario;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Proyecto\UsuarioBundle\Entity\Usuario") 
     */
    protected $dependencia;
    /**
     * @ORM\Column(type="date")
     */
    protected $fechaDoc;
    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $anexo;
    
    /**
     *@ORM\Column(type="string", length=20)
     */
    protected $serie;
    
    /**
     *@ORM\Column(type="string", length=40)
     */
    protected $documento;
     /**
     *@ORM\Column(type="string", length=20)
     */
    protected $estado;
    
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
    public function getFecha() {
        return $this->fecha;
    }
    /**
     * 
     * @param type $fecha
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    /**
     * 
     * @return type
     */
    public function getHora() {
        return $this->hora;
    }
    /**
     * 
     * @param type $hora
     */
    public function setHora($hora) {
        $this->hora = $hora;
    }
    /**
     * 
     * @return type
     */
    public function getRadicado() {
        return $this->radicado;
    }
    /**
     * 
     * @param type $radicado
     */
    public function setRadicado($radicado) {
        $this->radicado = $radicado;
    }
    /**
     * 
     * @return type
     */
    public function getDestinatario() {
        return $this->destinatario;
    }
    /**
     * 
     * @param type $destinatario
     */ 
    public function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }
    /**
     * 
     * @return type
     */
    public function getDependencia() {
        return $this->dependencia;
    }
    /**
     * 
     * @param type $dependencia
     */
    public function setDependencia($dependencia) {
        $this->dependencia = $dependencia;
    }
    /**
     * 
     * @return type
     */
    public function getFechaDoc() {
        return $this->fechaDoc;
    }
    /**
     * 
     * @param type $fechaDoc
     */
    public function setFechaDoc($fechaDoc) {
        $this->fechaDoc = $fechaDoc;
    }
    /**
     * 
     * @return type
     */
    public function getAnexo() {
        return $this->anexo;
    }
    /**
     * 
     * @param type $anexo
     */
    public function setAnexo($anexo) {
        $this->anexo = $anexo;
    }
    /**
     * 
     * @return type
     */
    public function getSerie() {
        return $this->serie;
    }
    /**
     * 
     * @param type $serie
     */
    public function setSerie($serie) {
        $this->serie = $serie;
    }
    /**
     * 
     * @return type
     */
    public function getDocumento() {
        return $this->documento;
    }
    /**
     * 
     * @param type $documento
     */
    public function setDocumento($documento) {
        $this->documento = $documento;
    }
    /**
     * 
     * @return type
     */
    public function getEstado() {
        return $this->estado;
    }
    /**
     * 
     * @param type $estado
     */
    public function setEstado($estado) {
        $this->estado = $estado;
    }    
}
?>
