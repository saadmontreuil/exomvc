<?php

require "models/VillesManager.class.php";


class VillesController
{
    private $VilleManager;

    public function __construct()
    {
        $this->VilleManager = new VillesManager();
        // on demande au manager de charger tous les utilisateurs depuis la base de données
        $this->VilleManager->loadAllVilles();
    }

    /** fontion appelée par la route /allusers */
    public function display_all_villes()
    {
        // on récupère le tableau des utilisateurs dans une variable $villes
        $villes = $this->VilleManager->getAllVilles() ;
        // et on charge la vue qui utilisera $villes
        require_once "views/users.php";
    }
	
	/** fontion appelée par la route /ville/(:number) */
    public function display_ville($id_ville)
    {
        // on récupère l'utilisateur depuis le manager
        $ville = $this->VilleManager->loadVille($id_ville) ;
        // et on charge la vue qui utilisera $ville
        require_once "views/user.php";
    }
}
