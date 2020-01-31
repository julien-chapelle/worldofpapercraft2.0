<?php

class Hero extends Character
{
    //PROPRIETE///////////////////////////////////////////////
    private $_heroName;
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;
    private $_multiplicatorDamage;

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

    public function getMultiplicatorDamage()
    {
        return $this->_multiplicatorDamage;
    }

    public function setMultiplicatorDamage($multiplicatorDamage)
    {
        $this->_multiplicatorDamage = $multiplicatorDamage;
    }

    //METHODE D'ACTION////////////////////////////////////////////
    public function Attack()
    {

        $this->setWeaponDamage(random_int(600, 800));
    }

    public function Attacked($attacked)
    {
        $this->setHealth($this->getHealth() - ($attacked - $this->_shieldValue));
    }

    public function RageUp($rageUp)
    {
        $this->setRage($this->getRage() + $rageUp);
    }


    //CONSTRUCTEUR//////////////////////////////////////////////////
    public function __construct($health, $rage, $heroName, $weapon, $weaponDamage, $shield, $shieldValue, $multiplicatorDamage)
    {
        parent::setHealth($health);
        parent::setRage($rage);
        $this->setHeroName($heroName);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
        $this->Attack();
        $this->setMultiplicatorDamage($multiplicatorDamage);
    }

    public function __toString()
    {
        return '- Nouveau héro créé.<br />' . 'Il possède ' . $this->getHealth() . ' points de santé et ' . $this->getRage() . ' point de rage.<br />Ce héro s\'appelle ' . $this->getHeroName() . ' et a choisi l\'arme : ' . $this->getWeapon() . ' avec ' . $this->getWeaponDamage() . ' points de dégâts avec un multiplicateur critique de ' . $this->getMultiplicatorDamage() . ' et l\'armure est : ' . $this->getShield() . ' avec ' . $this->getShieldValue() . ' points de protections.';
    }
}

?>