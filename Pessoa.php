<?php

namespace Projeto;


class Pessoa{
	
	protected $nome;
	protected $idade;
	protected $altura;

	function __construct($nome,$idade,$altura)
	{
	 $this->nome = $nome;
	 $this->idade = $idade;
	 $this->altura = $altura;
	}

	function andar(){
		echo "correndo..\n";
	}

	public function identificacao(){
		
		return "
		Nome: {$this->nome}\n
		Idade: {$this->idade}\n
		Altura: {$this->altura}\n";
		
	}
}







?>