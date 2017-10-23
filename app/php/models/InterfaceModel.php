<?php

interface InterfaceModel {
	
	public function cadastrar($objeto);
	public function atualizar($objeto);
	public function deletar($id);
	public function buscar($id);
	public function pesquisar($pesquisa, $campo);
	public function listar();
	
}

?>