123 Milhas - Questão Extra
-> A REST API foi desenvolvida com auxílio do framework Laravel.

Para gerar o Back-end, criar uma base de dados, ajustar o arquivo .env e utilizar o comando:
php artisan migrate

Rotas:
/api/addPizza
    -POST 
    -body[
	'pizza_name' => '',
        'size' => '',
        'flavour' => '',
    ]

/api/editPizza
    -POST 
    -body[
	'id' => '',
	'pizza_name' => '',
        'size' => '',
        'flavour' => '',
    ]

/api/removePizza
    -POST 
    -body[
	'id' => '',
    ]

/api/createOrder
    -POST 
    -body[
	'phone' => '',
        'address' => '',
        'total' => '',
        'pizza_id' => '',
    ]
