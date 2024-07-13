<?php

return [
    'forms' => [
        'product' => [
            'edit' => [
                'title' => 'Edit Product',
                'submit' => 'Apply changes',
            ],
            'create' => [
                'title' => 'Create Product',
                'submit' => 'Create',
            ],
        ],
        'category' => [
            'edit' => [
                'title' => 'Edit Category',
                'submit' => 'Apply changes',
            ],
            'create' => [
                'title' => 'Create Category',
                'submit' => 'Create',
            ],
        ],
        'brand' => [
            'edit' => [
                'title' => 'Edit Brand',
                'submit' => 'Apply changes',
            ],
            'create' => [
                'title' => 'Create Brand',
                'submit' => 'Create',
            ],
        ],
        'field' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Enter name'
            ],
            'price' => [
                'label' => 'Price',
                'placeholder' => 'Enter price'
            ],
            'parent_category' => [
                'label' => 'Related Category',
                'first_choice' => 'Select Category'
            ],
            'brand' => [
                'label' => 'Brand',
                'first_choice' => 'Select Brand'
            ],
            'product_category' => [
                'label' => 'Related Categories',
                'none_chice' => 'None Category'
            ],
        ],

    ],
    ////////////////7
    'login' => [
        'title' => 'Log In',
        'email' => [
            'label' => 'Email:',
            'placeholder' => 'Enter your Email',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Enter your Password'
        ],
        'remember_me' => 'Remember Me',
        'submit' => 'Log In',
    ],
    'signup' => [
        'title' => 'Sign Up',
        'name' => [
            'label' => 'Name:',
            'placeholder' => 'Enter name',
        ],
        'email' => [
            'label' => 'Email:',
            'placeholder' => 'Enter Email',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Enter Password'
        ],
        'confirm_password' => [
            'label' => 'Confirm Password:',
            'placeholder' => 'Confirm the Password',
        ],
        'submit' => 'Sign Up',

    ],
    'navbar' => [
        'home' => 'Home',
        'log_in' => 'Log In',
        'sign_up' => 'Sign Up',
        'log_out' => 'Log Out',
        'option1' => 'Products',
        'option2' => 'Categories',
        'option3' => 'Brands',
    ],
    'table' => [
        'thead'=>[
            'name'=>'Name',
            'price'=>'Price',
            'brand_id'=>'Brands',
            'parent_category'=>'Relationship',
            'product_category'=>'Categories'
        ],
        'edit' => 'Edit',
        'delete' => 'Eliminate',
        'product' => [
            'title' => 'List of Products',
            'btn_create' => 'Add Product',
            'filter_price' => [
                'label' => 'Sort by Price',
                'first_choice' => 'Select an Option',
                'option' => [
                    'option1' => 'Largest to Smallest',
                    'option2' => 'Smallest to Largest',
                ],
            ],
        ],
        'category' => [
            'title' => 'List of Categories',
            'btn_create' => 'Add Category',
            'filter_category' => [
                'label' => 'Sort by Releted Category',
                'first_choice' => 'Select a Category'
            ],
        ],
        'brand' => [
            'title' => 'List of Brands',
            'btn_create' => 'Add Brand',
            'filter_alfa' => [
                'label' => 'Sort Alphabetically',
                'first_choice' => 'Select an Option',
                'option' => [
                    'option1' => 'A to Z',
                    'option2' => 'Z to A',
                ],
            ],
        ],
    ],

];
