<?php

class ControlElemento{

	private $modelElemento;

	 public function __construct(){
	 	$modelElemento = new ModelElemento();
	 }

	public function cadastrar($elemento){
		
	}

	public function atualizar($elemento){

	}

	public function deletar($id){

	}

	public function buscar($id){

	}

	public function pesquisar($pesquisa, $campo){

	}

	public function listar(){
		echo "<h1>ENTROU EM LISTAR - control</h1>";
		$this->modelElemento = new ModelElemento();
		return $this->modelElemento->listar();
	}
	
}

?>