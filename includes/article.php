<?php
class Article {
	public function fetch_all(){
		global $pdo;
		$query = $pdo->prepare("SELECT * FROM articles");
		$query->execute();
		return $query->fetchAll();
	}


	public function fetch_data($article_id){
		global $pdo;
		$q = $pdo->prepare("SELECT * from articles where article_id=?");
		$q->bindValue(1, $article_id);
		$q->execute();
		return $q->fetch();
	}

}
?>
