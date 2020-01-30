<?php

class Hero extends Character
{
    //PROPRIETE///////////////////////////////////////////////
    private $_heroName;
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;

    //METHODE D'APPELS (GET/SET)//////////////////////////////
    public function getHeroName()
    {
        return $this->_heroName;
    }

    public function setHeroName($heroName)
    {
        $this->_heroName = $heroName;
    }

    public function getWeapon()
    {
        return $this->_weapon;
    }

    public function setWeapon($weapon)
    {
        $this->_weapon = $weapon;
    }

    public function getWeaponDamage()
    {
        return $this->_weaponDamage;
    }

    public function setWeaponDamage($weaponDamage)
    {
        $this->_weaponDamage = $weaponDamage;
    }

    public function getShield()
    {
        return $this->_shield;
    }

    public function setShield($shield)
    {
        $this->_shield = $shield;
    }

    public function getShieldValue()
    {
        return $this->_shieldValue;
    }

    public function setShieldValue($shieldValue)
    {
        $this->_shieldValue = $shieldValue;
    }

    //METHODE D'ACTION////////////////////////////////////////////
    public function Attacked($attacked)
    {
        $this->setHealth($this->getHealth() - ($attacked - $this->_shieldValue));

    }

    public function RageUp($rageUp)
    {
        $this->setRage($this->getRage() + $rageUp);
    }

    //CONSTRUCTEUR//////////////////////////////////////////////////
    function __construct($health, $rage, $heroName, $weapon, $weaponDamage, $shield, $shieldValue)
    {
        parent::setHealth($health);
        parent::setRage($rage);
        $this->setHeroName($heroName);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
    }

    public function __toString()
    {
        return '- Nouveau personnage crée.<br />' . 'Il possède ' . $this->getHealth() . ' points de santé et ' . $this->getRage() . ' point de rage.<br />Ce héro s\'appelle ' . $this->getHeroName() . ' et a choisi l\'arme : ' . $this->getWeapon() . ' avec ' . $this->getWeaponDamage() . ' points de dégâts, ' . ' et l\'armure est : ' . $this->getShield() . ' avec ' . $this->getShieldValue() . ' points de protections.';
    }
}

?>
