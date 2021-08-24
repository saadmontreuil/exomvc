<?php
require_once "Model.class.php";
require_once "Ville.class.php";

/*******
 * Class UsersManager
 * La classe UserSManager a pour vocation de gérer les objets Users que l'applictaion va créer et manipuler
 */

class VillesManager extends Model
{
    // on conserve les villes dans un tableau privé
    private $villes;


    /****
     * @param $ville
     * Ajout d'un ville au tableau $villes
     */
    public function addVille($ville)
    {
        $this->villes[$ville->getId()] = $ville;

    }

    //retourne un tableau
    public function getAllVilles()
    {
        return $this->villes;
    }

    // charge tous les villes dans le manager
    public function loadAllVilles()
    {
        /** vous pouvez écrire les requêtes pour les différents managers de DB, ou bien vous focaliser sur celui de votre choix */
        if (DB_MANAGER == PDO) // version PDO
        {
            $req = $this->getDatabase()->prepare("SELECT * FROM villes_france ");
            $req->execute();
            $villes = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
        } else if (DB_MANAGER == MEDOO) // version MEDOO
        {
            $villes = $this->getDatabase()->select("villes_france", "*");
        }

        // on a récupéré tous les utilisateurs, on les ajoute au manager de villes
        foreach ($villes as $ville) {
            $new_ville = new Ville(
                $ville['id'],
                $ville['departement'],
                $ville['nom'],
                $ville['code_postal'],
                $ville['canton'],
                $ville['population'],
                $ville['densite'],
                $ville['surface']
            );
            $this->addVille($new_ville);
        }
    }


    // charge un utilisateur depuis son id
    public function loadVille($codepostal)
    {
        /** vous pouvez écrire les requêtes pour les différents managers de DB, ou bien vous focaliser sur celui de votre choix */
        if (DB_MANAGER == PDO) // version PDO
        {
            $req = $this->getDatabase()->prepare("SELECT * FROM villes_france");
            $req->execute();
            $villes = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
        } else if (DB_MANAGER == MEDOO) // version MEDOO
        {
            $villes = $this->getDatabase()->select("villes_france", "*", ["code_postal[~]" => $codepostal]);
        }

        if (!$villes){echo "Aucune ville n'a été trouvé avec ce code postal."; die;}
        // on a récupéré tous les utilisateurs, on les ajoute au manager de villes
        foreach ($villes as $ville) {
            $new_ville = new Ville(
                $ville['id'],
                $ville['departement'],
                $ville['nom'],
                $ville['code_postal'],
                $ville['canton'],
                $ville['population'],
                $ville['densite'],
                $ville['surface']
            );
            return $new_ville;
        }
    }


    public function loadPopulation($codepostal)
    {
        /** vous pouvez écrire les requêtes pour les différents managers de DB, ou bien vous focaliser sur celui de votre choix */
        if (DB_MANAGER == PDO) // version PDO
        {
            $req = $this->getDatabase()->prepare("SELECT * FROM villes_france");
            $req->execute();
            $villes = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
        } else if (DB_MANAGER == MEDOO) // version MEDOO
        {
            $villes = $this->getDatabase()->select("villes_france", "*", ["code_postal[~]" => $codepostal]);
        }

        if (!$villes){echo "Aucune ville n'a été trouvé avec ce code postal."; die;}
        // on a récupéré tous les utilisateurs, on les ajoute au manager de villes
        foreach ($villes as $ville) {
            $new_ville = new Ville(
                $ville['id'],
                $ville['departement'],
                $ville['nom'],
                $ville['code_postal'],
                $ville['canton'],
                $ville['population'],
                $ville['densite'],
                $ville['surface']
            );
            return $new_ville;
        }
    }
    public function loadSuperficie($codepostal)
    {
        /** vous pouvez écrire les requêtes pour les différents managers de DB, ou bien vous focaliser sur celui de votre choix */
        if (DB_MANAGER == PDO) // version PDO
        {
            $req = $this->getDatabase()->prepare("SELECT * FROM villes_france");
            $req->execute();
            $villes = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
        } else if (DB_MANAGER == MEDOO) // version MEDOO
        {
            $villes = $this->getDatabase()->select("villes_france", "*", ["code_postal[~]" => $codepostal]);
        }

        if (!$villes){echo "Aucune ville n'a été trouvé avec ce code postal."; die;}
        // on a récupéré tous les utilisateurs, on les ajoute au manager de villes
        foreach ($villes as $ville) {
            $new_ville = new Ville(
                $ville['id'],
                $ville['departement'],
                $ville['nom'],
                $ville['code_postal'],
                $ville['canton'],
                $ville['population'],
                $ville['densite'],
                $ville['surface']
            );
            return $new_ville;
        }
    }
    public function loadVillesDepartement($departement)
    {
        /** vous pouvez écrire les requêtes pour les différents managers de DB, ou bien vous focaliser sur celui de votre choix */
        if (DB_MANAGER == PDO) // version PDO
        {
            $req = $this->getDatabase()->prepare("SELECT * FROM villes_france");
            $req->execute();
            $villes = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
        } else if (DB_MANAGER == MEDOO) // version MEDOO
        {
            $villes = $this->getDatabase()->select("villes_france", "*", ["departement" => $departement]);
        }

        if (!$villes){echo "Aucune ville n'a été trouvé avec ce code postal."; die;}
        // on a récupéré tous les utilisateurs, on les ajoute au manager de villes
        foreach ($villes as $ville) {
            $new_ville = new Ville(
                $ville['id'],
                $ville['departement'],
                $ville['nom'],
                $ville['code_postal'],
                $ville['canton'],
                $ville['population'],
                $ville['densite'],
                $ville['surface']
            );
            return $new_ville;
        }
    }
}