<?php 
 class AbstractContent{
 	public $title 		= "";
 	public $desc   		= "";
 	public $imgsrc 		= "";
 	public $author  	= "";
 	public $comments 	= "";


 	public function getTitle(){
 		return $this->title;
 	}
 	public function getDesc(){
 		return $this->desc;
 	}
 	public function getImgsrc(){
 		return $this->imgsrc;
 	}
 	public function getAuthor(){
 		return $this->author;
 	}
 	public function getComments(){
 		return $this->comments;
 	}


 	public function setTitle($title){
 		$this->title = $title;
 	}
 	public function setDesc($desc){
 		$this->desc = $desc;
 	}
 	public function setImgsrc($imgsrc){
 		$this->imgsrc = $imgsrc;
 	}
 	public function setAuthor($author){
 		$this->author = $author;
 	}
 	public function setComments($comments){
 		$this->comments = $comments;
 	}

 	function __construct($title,$desc,$imgsrc,$author,$comments){
 		$this->setTitle($title);
 		$this->setDesc($desc);
 		$this->setImgsrc($imgsrc);
 		$this->setAuthor($author);
 		$this->setComments($comments);
 	}



 }
?>