<?php

//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',


    '/hardwarehacking' => '../App/Controllers/HardwareHackingController.php@index',
    '/hardwarehacking/create' => '../App/Controllers/HardwareHackingController.php@create',
    '/hardwarehacking/store' => '../App/Controllers/HardwareHackingController.php@store',
    '/hardwarehacking/edit/{id}' => '../App/Controllers/HardwareHackingController.php@edit',
    '/hardwarehacking/update/{id}' => '../App/Controllers/HardwareHackingController.php@update',
    '/hardwarehacking/delete/{id}' => '../App/Controllers/HardwareHackingController.php@delete',
    '/hardwarehacking/destroy/{id}' => '../App/Controllers/HardwareHackingController.php@destroy',
    '/hardwarehacking/confirm-delete/{id}' => '../App/Controllers/HardwareHackingController.php@confirmDelete',
];
