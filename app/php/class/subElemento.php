<?php
/**
 * Projeto Ares
 * Contém a classe 'subElemento' e seus respectivos atributos.
 * Data Atualização: 21/10/2017
 *
 * @version 1.2
 * @author Atuality Web
 *
 */


class subElemento
{

    private $codSubElemento;

    private $nomeSubElemento;

    private $descricaoSubElemento;

    public function __construct()
    {}

    public function getCodSubElemento()
    {
        return $this->codSubElemento;
    }

    public function getNomeSubElemento()
    {
        return $this->nomeSubElemento;
    }

    public function getDescricaoSubElemento()
    {
        return $this->descricaoSubElemento;
    }

    public function setCodSubElemento($codSubElemento)
    {
        $this->codSubElemento = $codSubElemento;
    }

    public function setNomeSubElemento($nomeSubElemento)
    {
        $this->nomeSubElemento = $nomeSubElemento;
    }

    public function setDescricaoSubElemento($descricaoSubElemento)
    {
        $this->descricaoSubElemento = $descricaoSubElemento;
    }
}
?>