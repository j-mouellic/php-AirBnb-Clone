<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            "Maison moderne avec piscine",
            "Appartement en plein centre-ville",
            "Villa avec vue sur l'océan",
            "Charmante maison de campagne",
            "Spacieux loft en duplex",
            "Maison familiale avec grand jardin",
            "Appartement avec balcon panoramique",
            "Château historique à vendre",
            "Duplex de luxe dans quartier prestigieux",
            "Maison contemporaine avec vue sur la montagne",
        ];

        $descriptions = [
            "Belle maison moderne avec piscine et jardin luxuriant, parfaite pour les familles.",
            "Appartement lumineux en plein centre-ville, à proximité des commerces et des transports.",
            "Villa spacieuse avec vue imprenable sur l'océan, offrant une vie de luxe et de détente.",
            "Charmante maison de campagne nichée au cœur de la nature, idéale pour les amoureux de la nature.",
            "Spacieux loft en duplex au design contemporain, offrant un espace de vie élégant et ouvert.",
            "Maison familiale avec grand jardin et aire de jeux, parfait pour les enfants et les animaux de compagnie.",
            "Appartement élégant avec balcon panoramique offrant une vue spectaculaire sur la ville.",
            "Château historique à vendre, une propriété unique pleine d'histoire et de charme.",
            "Duplex de luxe situé dans un quartier prestigieux, avec des équipements haut de gamme.",
            "Maison contemporaine avec vue panoramique sur la montagne, pour les amateurs de paysages à couper le souffle.",
        ];

        $types = [
            "Maison individuelle",
            "Appartement",
            "Villa",
            "Maison de campagne",
            "Loft",
            "Maison familiale",
            "Château",
            "Duplex",
            "Maison de luxe",
            "Maison contemporaine",
        ];

        $cities = [
            "Paris",
            "Marseille",
            "Lyon",
            "Bordeaux",
            "Toulouse",
            "Nice",
            "Nantes",
            "Strasbourg",
            "Lille",
            "Rennes",
        ];

        $postalCodes = [
            "75001",
            "13001",
            "69001",
            "33000",
            "31000",
            "06000",
            "44000",
            "67000",
            "59000",
            "35000",
        ];

        $addresses = [
            "Rue de la Liberté",
            "Avenue des Champs-Élysées",
            "Boulevard du Commerce",
            "Place de la République",
            "Rue du Vieux-Port",
            "Avenue Jean-Jaurès",
            "Rue de la Paix",
            "Quai Saint-Nicolas",
            "Avenue Foch",
            "Place du Capitole",
        ];



        return [
            "title" => Arr::random($titles),
            "description" => Arr::random($descriptions),
            "home_type" => Arr::random($types),
            "city" => Arr::random($cities),
            "address" => Arr::random($addresses),
            "postal_code" => Arr::random($postalCodes),
            "picture" => "https://source.unsplash.com/random/?house",
            "bedrooms" => rand(2, 7),
            "bathrooms" => rand(1, 3),
            "surface" => rand(120, 450),
            "price_per_night" => rand(100, 500),
            "user_id" => 1,
        ];
    }
}
