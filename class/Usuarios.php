<?php 

	require_once 'Crud.php';

	class Usuarios extends Crud{

		protected $table = 'pessoa';
		private $nome;
		private $telefone;

		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}

		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		
		public function getTelefone(){
			return $this->telefone;
		}

		public function insert(){
			$sql = "INSERT INTO $this->table (nome, telefone) values (:nome, :telefone)";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
			$stmt->bindParam(':telefone', $this->telefone);
			return $stmt->execute();
		}

		public function update($id){
			$sql = "UPDATE $this->table SET nome= :nome, telefone=:telefone WHERE ID = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
			$stmt->bindParam(':telefone', $this->telefone);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();
		}
	}