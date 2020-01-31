<?php 

class Character 
{

    //PROPRIETES///////////////////////////////////////////////
    private $_health;
    private $_rage;

    //METHODE D'APPELS (GET/SET)///////////////////////////////
    public function getHealth()
    {
        return $this->_health;
    }

    public function setHealth($health)
    {
        $this->_health = $health;
    }

    public function getRage()
    {
        return $this->_rage;
    }

    public function setRage($rage)
    {
        $this->_rage = $rage;
    }

    //CONSTRUCTEUR///////////////////////////////////////////
    public function __construct($health,$rage)
    {
        
        $this->setHealth($health);
        $this->setRage($rage);

    }

}


?>
