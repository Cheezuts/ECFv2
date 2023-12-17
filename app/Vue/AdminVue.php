<?php

namespace app\Vue;


class AdminVue extends RenderGlobalVue
{
    public function render()
    {
        $content = '
            <h1 class="headline">Admin</h1>                    
            <p class="text-body">Bienvenue sur le site de location de voitures</p>
            <a href="?action=list" class="btn" id="btn">Voir la liste des voitures</a>
            <a href="?action=create" class="saumon">Ajouter une voiture</a>
            ';


        $this->print($content);
    }
}
