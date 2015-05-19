<?php 
 class AbstractContent{
 	public $id	 		= "";
 	public $title 		= "";
 	public $img 		= "";
 	public $summary		= "";
 	public $description	= "";
 	public $author 		= "";
 	public $rating	 	= "";
 	public $noofviews 	= "";
 	public $createdts	= "";


 	public function getId(){
 		return $this->id;
 	}
 	public function getTitle(){
 		return $this->title;
 	}
 	public function getImg(){
 		return $this->img;
 	}
 	public function getSummary(){
 		return $this->summary;
 	}
 	public function getDescription(){
 		return $this->description;
 	}
 	public function getAuthor(){
 		return $this->author;
 	}
 	public function getRating(){
 		return $this->rating;
 	}
 	public function getNoofviews(){
 		return $this->noofviews;
 	}
 	public function getCreatedts(){
 		return $this->createdts;
 	}


 	public function setId($id){
 		$this->id = $id;
 	}
 	public function setTitle($title){
 		$this->title =  (string)$title;
 	}
 	public function setImg($img){
 		$this->img = (string)$img;
 	}
 	public function setDescription($desc){
 		$this->description = (string)$desc;
 	}
 	public function setSummary($summary){
 		$this->summary = (string)$summary;
 	} 
 	public function setAuthor($author){
 		$this->author = $author;
 	}
 	public function setRating($rating){
 		$this->rating = $rating;
 	}
 	public function setNoofviews($noofviews){
 		$this->noofviews = $noofviews;
 	}
 	public function setCreatedts($createdts){
 		$this->createdts = $createdts;
 	}

 	function __construct($id,$title,$img,$summary,$desc,$author,$rating,$noofviews,$createdts){

 		$this->setId($id);
 		$this->setTitle($title);
 		$this->setImg($img);
 		$this->setSummary($summary);
 		$this->setDescription($desc);
 		$this->setAuthor($author);
 		$this->setRating($rating);
 		$this->setNoofviews($noofviews);
 		$this->setCreatedts($createdts);
 	}



 }
?>