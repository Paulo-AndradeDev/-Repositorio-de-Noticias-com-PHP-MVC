<?php

use App\Core\Model;

class Note extends Model 
{

	public $titulo;
	public $texto;


	public function getAll()
	{
		$sql = "SELECT * FROM notes";
		$stmt = self::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}


	public function findId($id)
	{
		$sql = "SELECT * FROM notes WHERE id = ?";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,$id);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}


	public function save()
	{

		$sql = "INSERT INTO notes (titulo, texto) VALUES (?,?)";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,$this->titulo);
		$stmt->bindValue(2,$this->texto);

		if($stmt->execute()):
			return "Uma nova notícia foi adicionada com Sucesso!";
		else:
			return "Ocorreu um erro ao tentar adicionar uma notícia!";
		endif;
	}


	public function update($id)
	{
		$sql = "UPDATE notes SET titulo = ?, texto = ? WHERE id = ?";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,$this->titulo);
		$stmt->bindValue(2,$this->texto);
		$stmt->bindValue(3,$id);

		if($stmt->execute()):
			return "Notícia atualizada com sucesso!";
		else:
			return "Erro ao atualizar!";
		endif;

	}

	public function delete($id)
	{

		$sql = "DELETE FROM notes WHERE id = ?";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,$id);

		if($stmt->execute()):
			return "Notícia excluída com sucesso!";
		else:
			return "Ocorreu um erro ao tentar excluir!";
		endif;
	}

	public function search($search)
	{
		$sql = "SELECT * FROM notes WHERE titulo LIKE ? COLLATE utf8mb4_general_ci";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1,"%{$search}%");
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
	}


}

?>