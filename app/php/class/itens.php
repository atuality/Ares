<?php
/**
 * Projeto Ares
 * Contém a classe 'itens' e seus respectivos atributos.
 * Data Atualização: 21/10/2017
 *
 * @version 1.2
 * @author Atuality Web
 *
 */
class itens
{
    
    private $codItem;
    
    private $nomeItem;
    
    public function __construct()
    {}
    
    public function getCodItem()
    {
        return $this->codItem;
    }
    
    public function getNomeItem()
    {
        return $this->nomeItem;
    }
    
    public function setCodItem($codItem)
    {
        $this->codItem = $codItem;
    }
    
    public function setNomeItem($nomeItem)
    {
        $this->nomeItem = $nomeItem;
    }
}

?>