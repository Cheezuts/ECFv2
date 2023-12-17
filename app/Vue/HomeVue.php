<?php

namespace app\Vue;

use app\App;



class HomeVue extends RenderGlobalVue
{
    public function render()
    {
        // Récupérer l'instance de la base de données
        $db = App::getDb();

        // Effectuer la requête à la base de données
        $services = $db->getAllservices();

        $content = '
            <h1 class="headline">Accueil</h1>
            <h2 class="text-body">Accueil</h2>            
            <p class="text-body">Bienvenue sur le site de location de voitures</p>
            <a href="?action=list" class="btn" id="btn">Voir la liste des voitures</a>
            <a href="?action=create" class="saumon">Ajouter une voiture</a>
            
            <div class="container">
            <h1 class="mt-5">Accueil</h1>
            <p>Bienvenue sur le site de location de voitures.</p>
            <a href="?action=list" class="btn btn-primary">Voir la liste des voitures</a>
            <div class="services-list mt-4">
    ';

        // Ajouter le contenu de la table "services" à la Vue
        foreach ($services as $service) {
            $content .= '
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title">' . $service->serv_titre . '</h3>
                        <img src="' . $service->serv_image . '" alt="Image du service">
                        <p class="card-text">' . $service->serv_contenu . '</p>
                    </div>
                </div>
            ';
        }

        $content .= '
            </div>
            </div>
        ';


        $this->print($content);
    }
}
