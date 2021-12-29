<?php
class Review{
    private $_id_re;
    private $_id_game;
    private $_reviewT;


    public function __construct($id_re,$id_game,$reviewT){
        $this->setIdRe($id_re);
        $this->setIdGame($id_game);
        $this->setReview($reviewT);
        
    }

    public function getIdRe(){
        return $this ->_id_re;
    }
    public function setIdRe($id_re){
        $this ->_id_re = $id_re;
    }
    public function getIdGame(){
        return $this ->_id_game;
    }
    public function setIdGame($id_game){
        $this ->_id_game = $id_game;
    }
    public function getReview(){
        return $this ->_reviewT;
    }
    public function setReview($reviewT){
        $this ->_reviewT = $reviewT;
    }

    public function returnJson(){
        $review = array();
        $review["id_review"]=$this->getIdRe();
        $review["id_game"] =$this->getIdGame();
        $review["reviewT"]=$this->getReview();
        echo json_encode($review);
    }

}

?>