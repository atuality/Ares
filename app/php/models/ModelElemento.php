<?php

class ModelElemento implements InterfaceModel {

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
		echo "<h1>ENTROU EM LISTAR</h1>";
		$pdo = conectar();
	    try {
	        $listar = $pdo->prepare("SELECT * FROM elemento");
	    
	        $listar->execute();

	        if ($listar->rowCount() > 0) :
	            $dados = $listar->fetchAll(PDO::FETCH_OBJ);
	            
	            $d = new ArrayIterator($dados);
	            $elemento = new elemento();
	            $elementos = array();

	            while($d->valid()){
	            	$elemento = new elemento();
	            	$elemento->setCodElemento($d->current()->codElemento);
	            	$elemento->setNomeElemento($d->current()->nomeElemento);
	            	array_push($elementos, $elemento);
	            	$d->next();
	            }
	            return $elementos;

	        else:
	            return false;
	        endif;
	    } catch (PDOException $e) {
	        echo "Erro: " . $e->getMessage();
	    }
	}
	
}

?>