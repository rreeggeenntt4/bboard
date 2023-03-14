Laravel v10.2.0 (PHP v8.2.3)
# bboard

----------------------------------------

Реализовано: авторизация, регистрация, CRUD, разграниение доступа(middleware, policy, provider), валидация, вывод ошибок валидации, локализация(руссификация). 

----------------------------------------

Локализация:

          composer require laravel-lang/common --dev

          php artisan lang:add ru

          php artisan lang:update
          

    далее config\app.php => 'locale' => 'ru',
