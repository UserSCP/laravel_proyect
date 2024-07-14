<?php

return [
    'forms' => [
        'product' => [
            'edit' => [
                'title' => '商品の編集',
                'submit' => '変更を適用',
            ],
            'create' => [
                'title' => '商品の作成',
                'submit' => '作成',
            ],
        ],
        'category' => [
            'edit' => [
                'title' => 'カテゴリーの編集',
                'submit' => '変更を適用',
            ],
            'create' => [
                'title' => 'カテゴリーの作成',
                'submit' => '作成',
            ],
        ],
        'brand' => [
            'edit' => [
                'title' => 'ブランドの編集',
                'submit' => '変更を適用',
            ],
            'create' => [
                'title' => 'ブランドを作成',
                'submit' => '作成',
            ],
        ],
        'field' => [
            'name' => [
                'label' => '名前',
                'placeholder' => '名前を入力'
            ],
            'price' => [
                'label' => '価格',
                'placeholder' => '価格を入力してください'
            ],
            'parent_category' => [
                'label' => '
                カテゴリー',
                'first_choice' => '
                カテゴリを選んでください'
            ],
            'brand' => [
                'label' => 'ブランド',
                'first_choice' => 'ブランドを選択'
            ],
            'product_category' => [
                'label' => 'カテゴリ',
                'none_choice' => 'カテゴリーを選択'
            ],
        ],

    ],
    ////////////////
    'login' => [
        'title' => 'ログイン',
        'email' => [
            'label' => 'メールアドレス:',
            'placeholder' => 'メールアドレスを入力してください',
        ],
        'password' => [
            'label' => 'パスワード',
            'placeholder' => 'パスワードを入力してください'
        ],
        'remember_me' => 'ログイン情報を記憶する',
        'submit' => 'ログイン',
    ],
    'signup' => [
        'title' => 'サインアップ',
        'name' => [
            'label' => '名前:',
            'placeholder' => '名前を入力してください',
        ],
        'email' => [
            'label' => 'メールアドレス:',
            'placeholder' => 'メールアドレスを入力してください',
        ],
        'password' => [
            'label' => 'パスワード',
            'placeholder' => 'パスワードを入力'
        ],
        'confirm_password' => [
            'label' => 'パスワードの確認:',
            'placeholder' => 'パスワードを確認',
        ],
        'submit' => 'サインアップ',

    ],
    'navbar' => [
        'home' => 'ホーム',
        'log_in' => 'ログイン',
        'sign_up' => 'サインアップ',
        'log_out' => 'ログアウト',
        'option1' => '製品',
        'option2' => 'カテゴリ',
        'option3' => 'ブランド',
    ],
    'table' => [
        'orderly'=>'秩序ある: ',
        'create'=>'作成する',
        'thead' => [
            'name' => '名前',
            'price' => '価格',
            'brand_id' => 'ブランド',
            'parent_category' => '関係',
            'product_category' => 'カテゴリ'
        ],
        'edit' => '編集',
        'delete' => '削除',
        'product' => [
            'title' => '商品リスト',
            'btn_create' => '商品を追加',
            'filter_price' => [
                'label' => '価格で並べ替え',
                'first_choice' => 'オプションを選択',
                'option' => [
                    'option1' => '大きい順',
                    'option2' => '小さい順',
                ],
            ],
        ],
        'category' => [
            'title' => 'カテゴリのリスト',
            'btn_create' => 'カテゴリの追加',
            'filter_category' => [
                'label' => '関連カテゴリで並べ替え',
                'first_choice' => 'カテゴリの選択'
            ],
        ],
        'brand' => [
            'title' => 'ブランドのリスト',
            'btn_create' => 'ブランドの追加',
            'filter_alfa' => [
                'label' => 'アルファベット順に並べ替え',
                'first_choice' => 'オプションの選択',
                'option' => [
                    'option1' => 'AからZ',
                    'option2' => 'ZからA',
                ],
            ],
        ],
    ],

];
