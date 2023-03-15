<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [ 'name' => 'Alimentation & Supermarché', 'slug' => 'alimentation-supermarche'],
            [ 'name' => 'Animaux', 'slug' => 'animaux'],
            [ 'name' => 'Assurance & Mutuelle', 'slug' => 'assurance-mutuelle'],
            [ 'name' => 'Auto-Moto', 'slug' => 'auto-moto'],
            [ 'name' => 'Banque & Paiement', 'slug' => 'banque-paiement'],
            [ 'name' => 'Beauté & Santé', 'slug' => 'beaute-sante'],
            [ 'name' => 'Bijoux & Accessoires', 'slug' => 'bijoux-accessoires'],
            [ 'name' => 'Cadeaux & Box', 'slug' => 'cadeaux-box'],
            [ 'name' => 'Cashback', 'slug' => 'cashback'],
            [ 'name' =>  'CD-DVD & Livre', 'slug' => 'cd-dvd-livre'],
            [ 'name' =>  'Chaussure', 'slug' => 'chaussure'],
            [ 'name' =>  'Décoration', 'slug' => 'décoration'],
            [ 'name' =>  'Energies & Bois-Electricité-Gaz', 'slug' => 'energies-bois-electricite-gaz'],
            [ 'name' =>  'Enfant-Bébé & Jouet', 'slug' => 'enfant-bebe-jouet'],
            [ 'name' =>  'Généraliste Vente & Location', 'slug' => 'generaliste-vente-location'],
            [ 'name' =>  'Internet-Hébergement & VPN', 'slug' => 'internet-hebergement-vpn'],
            [ 'name' =>  'Investissement', 'slug' => 'investissement'],
            [ 'name' =>  'Jardin & Fleurs', 'slug' => 'jardin-fleurs'],
            [ 'name' =>  'Jeux-vidéo', 'slug' => 'jeux-video'],
            [ 'name' =>  'Jeux d\'Argent', 'slug' => 'jeux-argent'],
            [ 'name' =>  'Loisirs & Voyage', 'slug' => 'loisirs-voyage'],
            [ 'name' =>  'Matelas & Literie', 'slug' => 'matelas-literie'],
            [ 'name' =>  'Maison & Bricolage', 'slug' => 'maison-bricolage'],
            [ 'name' =>  'Missions & Sondages', 'slug' => 'missons-sondages'],
            [ 'name' =>  'Multimédia & Electroménager', 'slug' => 'multimedia-electromenager'],
            [ 'name' =>  'Mode & Vêtements', 'slug' => 'mode-vetements'],
            [ 'name' =>  'Opérateurs internet & Téléphonie', 'slug' => 'operateurs-internet-telephone'],
            [ 'name' =>  'Optique', 'slug' => 'optique'],
            [ 'name' =>  'Photo & Impression', 'slug' => 'photo-impression'],
            [ 'name' =>  'Rencontre', 'slug' => 'rencontre'],
            [ 'name' =>  'Sport & Plein air', 'slug' => 'sport-plein-air'],
            [ 'name' =>  'Autre', 'slug' => 'autre'],
            [ 'name' =>  'Cryptomonnaie', 'slug' => 'cryptomonnaie'],
            [ 'name' =>  'Transport & Livraison', 'slug' => 'transport-livraison'],
            [ 'name' =>  'Emplois & Formation', 'slug' => 'emplois-formation'],
            [ 'name' =>  'Services', 'slug' => 'services']
            ];

            foreach($categories as $cat)
            {
                Categorie::create($cat);
            }
    }
}
