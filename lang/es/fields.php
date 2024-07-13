
<?php


return [
    'forms' => [
        'product' => [
            'edit' => [
                'title' => 'Editar Producto',
                'submit' => 'Aplicar Cambios',
            ],
            'create' => [
                'title' => 'Crear Producto',
                'submit' => 'Crear',
            ],
        ],
        'category' => [
            'edit' => [
                'title' => 'Editar Categoria',
                'submit' => 'Aplicar Cambios',
            ],
            'create' => [
                'title' => 'Crear Categoria',
                'submit' => 'Crear',
            ],
        ],
        'brand' => [
            'edit' => [
                'title' => 'Editar Marca',
                'submit' => 'Aplicar Cambios',
            ],
            'create' => [
                'title' => 'Crear Marca',
                'submit' => 'Crear',
            ],
        ],
        'field' => [
            'name' => [
                'label' => 'Nombre',
                'placeholder' => 'Ingrese el Nombre'
            ],
            'price' => [
                'label' => 'Precio',
                'placeholder' => 'Ingrese el Precio'
            ],
            'parent_category' => [
                'label' => 'Categoría Relacionada',
                'first_choice' => 'Seleccione una Categoría'
            ],
            'brand' => [
                'label' => 'Marca',
                'first_choice' => 'Selecione una Marca'
            ],
            'product_category' => [
                'label' => 'Categorias Relacionadas',
                'none_choice' => 'Ninguna Categoria'
            ],
        ],
    ],
    ///////////
    'login' => [
        'title' => 'Iniciar Sesión',
        'email_label' => 'Correo Electronico:',
        'email_placeholder' => 'Ingrese su Correo Electronico',
        'password_label' => 'Contraseña:',
        'password_placeholder' => 'Ingrese su Contraseña',
        'remember_me' => 'Recordarme',
        'submit' => 'Iniciar Sesion',
    ],
    'signup' => [
        'title' => 'Registrarse',
        'name_label' => 'Nombre:',
        'name_placeholder' => 'Ingrese el nombre',
        'email_label' => 'Correo Electronico:',
        'email_placeholder' => 'Ingrese Correo Electronico',
        'password_label' => 'Contraseña:',
        'password_placeholder' => 'Ingrese la Contraseña',
        'password_confirm_label' => 'Confirmar Contraseña:',
        'password_confirm_placeholder' => 'Confirme la Contraseña',
        'submit' => 'Registrarse',

    ],
    'navbar' => [
        'home' => 'Inicio',
        'log_in' => 'Iniciar Secion',
        'sign_up' => 'Registrarse',
        'log_out' => 'Cerrar Sesion',
        'option1' => 'Productos',
        'option2' => 'Categorias',
        'option3' => 'Marcas',
    ],
    'table' => [
        'thead'=>[
            'name'=>'Nombre',
            'price'=>'Precio',
            'brand_id'=>'Marcas',
            'parent_category'=>'Relacion',
            'product_category'=>'Categorias'
        ],
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'product' => [
            'title' => 'Lista de Productos',
            'btn_create' => 'Agregar Producto',
            'filter_price' => [
                'label' => 'Ordenar por precio',
                'first_choice' => 'Seleccione una opcion',
                'option' => [
                    'option1' => 'Mayor a menor',
                    'option2' => 'Menor a mayor',
                ],
            ],
        ],
        'category' => [
            'title' => 'Lista de Categorias',
            'create' => 'Agregar Categoria',
            'filter_categorys' => [
                'label' => 'Ordenar por Relacion de Categoria',
                'first_choice' => 'Seleccione una Categoria'
            ],
        ],
        'brand' => [
            'title' => 'Lista de Marcas',
            'create' => 'Agregar Marca',
            'filter_Alfa' => [
                'label' => 'Ordenar Alfabeticamente',
                'first_choice' => 'Seleccione una opcions',
                'option' => [
                    'option1' => 'A a Z',
                    'option2' => 'Z a A',
                ],
            ],
        ],
    ],
];
