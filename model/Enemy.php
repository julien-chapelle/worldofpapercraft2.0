<?php

class Enemy extends Character
{
    //PROPRIETE///////////////////////////////////////////////
    private $_enemyName;
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;


    //METHODE D'APPELS (GET/SET)//////////////////////////////
    public function getEnemyName()
    {
        return $this->_enemyName;
    }

    public function setEnemyName($enemyName)
    {
        $this->_enemyName = $enemyName;
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
    function __construct($health, $rage, $enemyName, $weapon, $weaponDamage, $shield, $shieldValue, $multiplicatorDamage)
    {
        parent::setHealth($health);
        parent::setRage($rage);
        $this->setEnemyName($enemyName);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);
        $this->Attack();
        $this->setMultiplicatorDamage($multiplicatorDamage);
    }

    public function __toString()
    {
        return '- Nouvel ennemi créé.<br />' . 'Il possède ' . $this->getHealth() . ' points de santé et ' . $this->getRage() . ' point de rage.<br />Cet ennemi s\'appelle ' . $this->getEnemyName() . ' et a choisi l\'arme : ' . $this->getWeapon() . ' avec ' . $this->getWeaponDamage() . ' points de dégâts avec un multiplicateur critique de ' . $this->getMultiplicatorDamage() . ' et l\'armure est : ' . $this->getShield() . ' avec ' . $this->getShieldValue() . ' points de protections.';
    }
}

?>