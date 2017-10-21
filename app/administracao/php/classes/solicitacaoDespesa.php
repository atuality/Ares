<?php
/**
 * Projeto Ares 
 * Contém a classe 'solicitação de despesa' e seus respectivos atributos.
 * Data Atualização: 21/10/2017
 * 
 * @version 1.2
 * @author Atuality Web
 *
 */

class solicitacaoDespesa
{
    
    private $numeroSolicitacao;
    
    private $dataSolicitacao;
    
    private $registroPreco;
    
    private $dotacaoOrcamentaria;
    
    private $tipoDespesa;
    
    private $objetoSolicitacao;
    
    public function __construct()
    {}
    
    public function setNumeroSolicitacao($numero)
    {
        $this->numeroSolicitacao = $numero;
    }
    
    public function getNumeroSolicitacao()
    {
        return $this->numeroSolicitacao;
    }
    
    public function setDataSolicitacao($dataSolicitacao)
    {
        $this->dataSolicitacao = $dataSolicitacao;
    }
    
    public function getDataSolicitacao()
    {
        return $this->dataSolicitacao;
    }
    
    public function setRegistroPreco($registroPreco)
    {
        $this->registroPreco = $registroPreco;
    }
    
    public function getRegistroPreco()
    {
        return $this->registroPreco;
    }
    
    public function setDotacaoOrcamentaria($dotacaoOrcamentaria)
    {
        $this->dotacaoOrcamentaria = $dotacaoOrcamentaria;
    }
    
    public function getDotacaoOrcamentaria()
    {
        return $this->dotacaoOrcamentaria;
    }
    
    public function setTipoDespesa($tipoDespesa)
    {
        $this->tipoDespesa = $tipoDespesa;
    }
    
    public function getTipoDespesa()
    {
        return $this->tipoDespesa;
    }
    
    public function setObjetoSolicitacao($objetoSolicitacao)
    {
        $this->objetoSolicitacao = $objetoSolicitacao;
    }
    
    public function getObjetoSolicitacao()
    {
        return $this->objetoSolicitacao;
    }
}



?>