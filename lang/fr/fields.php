<?php

return [
    'forms' => [
        'product' => [
            'edit' => [
                'title' => 'Modifier le produit',
                'submit' => 'Appliquer les modifications',
            ],
            'create' => [
                'title' => 'Créer un produit',
                'submit' => 'Créer',
            ],
        ],
        'category' => [
            'edit' => [
                'title' => 'Modifier la catégorie',
                'submit' => 'Appliquer les modifications',
            ],
            'create' => [
                'title' => 'Créer une catégorie',
                'submit' => 'Créer',
            ],
        ],
        'brand' => [
            'edit' => [
                'title' => 'Modifier la marque',
                'submit' => 'Appliquer les modifications',
            ],
            'create' => [
                'title' => 'Créer une marque',
                'submit' => 'Créer',
            ],
        ],
        'field' => [
            'name' => [
                'label' => 'Nom',
                'placeholder' => 'Entrez le nom'
            ],
            'price' => [
                'label' => 'Prix',
                'placeholder' => 'Entrer le prix'
            ],
            'parent_category' => [
                'label' => 'Catégorie associée',
                'first_choice' => 'Sélectionner une catégorie'
            ],
            'brand' => [
                'label' => 'Marque',
                'first_choice' => 'Sélectionner une marque'
            ],
            'product_category' => [
                'label' => 'Catégories associées',
                'none_chice' => 'Aucune catégorie'
            ],
        ],

    ],
    'login' => [
        'title' => 'Connexion',
        'email' => [
            'label' => 'E-mail:',
            'placeholder' => 'Entrez votre email',
        ],
        'password' => [
            'label' => 'Mot de passe',
            'placeholder' => 'Entrez votre mot de passe'
        ],
        'remember_me' => 'Souvenez-vous de moi',
        'submit' => 'Connexion',
    ],
    'signup' => [
        'title' => 'Inscription',
        'name' => [
            'label' => 'Nom :',
            'placeholder' => 'Entrez le nom',
        ],
        'email' => [
            'label' => 'E-mail:',
            'placeholder' => 'Entrer l´e-mail',
        ],
        'password' => [
            'label' => 'Mot de passe:',
            'placeholder' => 'Entrer le mot de passe'
        ],
        'confirm_password' => [
            'label' => 'Confirmer le mot de passe :',
            'placeholder' => 'Confirmer le mot de passe',
        ],
        'submit' => 'Inscription',

    ],
    'navbar' => [
        'home' => 'Maison',
        'log_in' => 'Connexion',
        'sign_up' => 'Inscription',
        'log_out' => 'Déconnexion',
        'option1' => 'Produits',
        'option2' => 'Catégories',
        'option3' => 'Marques',
    ],
    'table' => [
        'create'=>'créer',
        'relation'=>'Relation avec: ',
        'orderly'=>'Ordonné: ',
        'thead'=>[
            'name'=>'Nom',
            'price'=>'Prix',
            'brand_id'=>'Marques',
            'parent_category'=>'Relation',
            'product_category'=>'Relation'
        ],
        'edit' => 'Modifier',
        'delete' => 'Éliminer',
        'product' => [
            'title' => 'Liste des produits',
            'btn_create' => 'Ajouter un produit',
            'filter_price' => [
                'label' => 'Trier par prix',
                'first_choice' => 'Sélectionner une option',
                'option' => [
                    'option1' => 'Du plus grand au plus petit',
                    'option2' => 'Du plus petit au plus grand',
                ],
            ],
        ],
        'category' => [
            'title' => 'Liste des catégories',
            'btn_create' => 'Ajouter une catégorie',
            'filter_category' => [
                'label' => 'Trier par catégorie supprimée',
                'first_choice' => 'Sélectionnez une catégorie'
            ],
        ],
        'brand' => [
            'title' => 'Liste des marques',
            'btn_create' => 'Ajouter une marque',
            'filter_alfa' => [
                'label' => 'Trier par ordre alphabétique',
                'first_choice' => 'Sélectionner une option',
                'option' => [
                    'option1' => 'A à Z',
                    'option2' => 'Z à A',
                ],
            ],
        ],
    ],

];
