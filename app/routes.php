<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Application\Controller\HomeController;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/stage', [HomeController::class, 'stage']);
    $app->get('/entreprise', [HomeController::class, 'entreprise']);
    $app->get('/souhait', [HomeController::class, 'souhait']);
    $app->get('/politique', [HomeController::class, 'politique']);
    $app->get('/role', [HomeController::class, 'role']);
    $app->get('/connexion', [HomeController::class, 'connexion']);
    $app->get('/creation_entreprise', [HomeController::class, 'creation_entreprise']);
    $app->get('/gestion_etudiants', [HomeController::class, 'gestion_etudiants']);
    $app->get('/gestion_pilotes', [HomeController::class, 'gestion_pilotes']);
    $app->get('/gestion_offres', [HomeController::class, 'gestion_offres']);
    $app->get('/creation_compte', [HomeController::class, 'creation_compte']);
    $app->get('/mentions', [HomeController::class, 'mentions']);
};
