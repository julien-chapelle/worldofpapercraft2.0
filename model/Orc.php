<?php

class Orc extends Character
{
    //PROPRIETE///////////////////////////////////////////////
    private $_orcName;
    private $_damage;


    //METHODE D'APPELS (GET/SET)//////////////////////////////
    public function getOrcName()
    {
        return $this->_orcName;
    }

    public function setOrcName($orcName)
    {
        $this->_orcName = $orcName;
    }

    public function getDamage()
    {
        return $this->_damage;
    }

    public function setDamage($damage)
    {
        $this->_damage = $damage;
    }

    //METHODE D'ACTION////////////////////////////////////////////
    public function Attack()
    {

        $this->setDamage(random_int(600,800));
    }

    public function CounterAttacked($counterAttacked)
    {
        $this->setHealth($this->getHealth() - $counterAttacked);

    }

    //CONSTRUCTEUR//////////////////////////////////////////////////
    function __construct($health, $orcName)
    {
        parent::setHealth($health);
        $this->setOrcName($orcName);
        $this->Attack();
    }

    public function __toString()
    {
        return '- Nouveau personnage crée.<br />' . 'Il possède ' . $this->getHealth() . ' points de santé.<br />Cet orc s\'appelle ' . $this->getOrcName();
    }
}

?>


