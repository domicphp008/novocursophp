<?php
	class Usuario
	{
		var $nome;
		var $cpf;
		
		public function __Construct($nome,$cpf)
		{
			$this->nome = $nome;
			$this->cpf = $cpf;
		}
		
		public function getUsuario()
		{
			return "nome: ".$this->nome."<br>cpf : ".$this->cpf;
		}
		
		public function imprime()
		{
			echo $this->nome."--".$this->cpf."<br>";
		}
	}
	
	class Aluno extends Usuario
	{	
		var $codigo;
		
		public function __Construct($nome,$cpf,$codigo)
		{
			parent::__Construct($nome,$cpf);
			$this->codigo = $codigo;
		}
		
		public function getAluno()
		{
			return parent::getUsuario()."<br>codigo: ".$this->codigo;
		}
		
		public function imprime()
		{
			echo "funcao imprime pai: ";
			parent::imprime();
			echo "<br>funcao imprime filho:" . $this->nome . "--" . $this->cpf . "--" .
                             $this->codigo . "<br>";
		}
	}
	
	
	/**
	 * O polimorfismo por inclusao funciona, pois consigo chamar o método imprime da classe 
         * pai dentro do método imprime da classe filho.
	**/
	$aluno = new Aluno("Tiago",123456,40356788);
	$aluno->imprime();
	
	/**
		resultado impresso: 
		
			funcao imprime pai: Tiago--123456
			funcao imprime filho: Tiago--123456--40356788
	**/
?>