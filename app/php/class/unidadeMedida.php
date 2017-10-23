<?php
/**
 * Projeto Ares
 * Contém a classe 'unidade medida' e seus respectivos atributos.
 * Data Atualização: 21/10/2017
 *
 * @version 1.2
 * @author Atuality Web
 *
 */

class unidadeMedida
{
    
    private $codUnidadeMedida;
    
    private $nomeUnidadeMedida;
    
    public function __construct()
    {}
    
    public function getCodUnidadeMedida()
    {
        return $this->codUnidadeMedida;
    }
    
    public function getNomeUnidadeMedida()
    {
        return $this->nomeUnidadeMedida;
    }
    
    public function setCodUnidadeMedida($codUnidadeMedida)
    {
        $this->codUnidadeMedida = $codUnidadeMedida;
    }
    
    public function setNomeUnidadeMedida($nomeUnidadeMedida)
    {
        $this->nomeUnidadeMedida = $nomeUnidadeMedida;
    }
}



?>