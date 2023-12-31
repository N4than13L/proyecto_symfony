<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/user']], [], []],
    'tasks' => [[], ['_controller' => 'App\\Controller\\TaskController::index'], [], [['text', '/tareas']], [], []],
    'task_detail' => [['id'], ['_controller' => 'App\\Controller\\TaskController::detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/tarea']], [], []],
    'task_edit' => [['id'], ['_controller' => 'App\\Controller\\TaskController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/editar-tarea']], [], []],
    'task_creation' => [[], ['_controller' => 'App\\Controller\\TaskController::creation'], [], [['text', '/crear-tarea']], [], []],
    'task_delete' => [['id'], ['_controller' => 'App\\Controller\\TaskController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/eliminar/tarea']], [], []],
    'my_tasks' => [[], ['_controller' => 'App\\Controller\\TaskController::myTasks'], [], [['text', '/mis-tareas']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/registro']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
