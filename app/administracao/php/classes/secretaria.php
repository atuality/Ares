<?php

/**
 * Projeto Ares
 * Contém a classe 'secretaria' e seus respectivos atributos.
 * Data Atualização: 21/10/2017
 *
 * @version 1.2
 * @author Atuality Web
 *
 */
class secretaria
{

    private $codSecretaria;

    private $nomeSecretaria;

    private $siglaSecretaria;

    private $CNPJSecretaria;

    private $enderecoSecretaria;

    private $telefoneSecretaira;

    private $emailSecretaria;

    public function __construct()
    {}

    public function getCodSecretaria()
    {
        return $this->codSecretaria;
    }

    public function getNomeSecretaria()
    {
        return $this->nomeSecretaria;
    }

    public function getSiglaSecretaria()
    {
        return $this->siglaSecretaria;
    }

    public function getCNPJSecretaria()
    {
        return $this->CNPJSecretaria;
    }

    public function getEnderecoSecretaria()
    {
        return $this->enderecoSecretaria;
    }

    public function getTelefoneSecretaira()
    {
        return $this->telefoneSecretaira;
    }

    public function getEmailSecretaria()
    {
        return $this->emailSecretaria;
    }

    public function setCodSecretaria($codSecretaria)
    {
        $this->codSecretaria = $codSecretaria;
    }

    public function setNomeSecretaria($nomeSecretaria)
    {
        $this->nomeSecretaria = $nomeSecretaria;
    }

    public function setSiglaSecretaria($siglaSecretaria)
    {
        $this->siglaSecretaria = $siglaSecretaria;
    }

    public function setCNPJSecretaria($CNPJSecretaria)
    {
        $this->CNPJSecretaria = $CNPJSecretaria;
    }

    public function setEnderecoSecretaria($enderecoSecretaria)
    {
        $this->enderecoSecretaria = $enderecoSecretaria;
    }

    public function setTelefoneSecretaira($telefoneSecretaira)
    {
        $this->telefoneSecretaira = $telefoneSecretaira;
    }

    public function setEmailSecretaria($emailSecretaria)
    {
        $this->emailSecretaria = $emailSecretaria;
    }
}
?>