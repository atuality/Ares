<?php
/**
 * Projeto Ares (Classes)
 * Contém a classe 'elemento' e seus respectivos atributos.
 * Data Atualização: 21/10/2017
 *
 * @version 1.2
 * @author Atuality Web
 *
 */

class elemento
{
    
    private $codElemento;
    
    private $nomeElemento;
    
    public function __construct()
    {}
    
    public function getCodElemento()
    {
        return $this->codElemento;
    }
    
    public function getNomeElemento()
    {
        return $this->nomeElemento;
    }
    
    public function setCodElemento($codElemento)
    {
        $this->codElemento = $codElemento;
    }
    
    public function setNomeElemento($nomeElemento)
    {
        $this->nomeElemento = $nomeElemento;
    }
}
?>