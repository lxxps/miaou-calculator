<?php

declare(strict_types=1);

namespace App\Api\Controller;

use App\Api\Response\JsonResponse;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;

/**
 * Simple HealthCheckController
 *
 * @see https://minasami.com/2021/06/23/part-1-setup-reactjs-symfony-app-with-hotloading.html
 */
class HealthCheckController extends AbstractFOSRestController
{
    /**
     * A controller action function, defined with the
     * `http` method `GET` to retrieve the server
     * health status.
     *
     * @Get("/api/v1/healthcheck", name="get_health_check")
     */
    public function getHealthCheck()
    {
        return new JsonResponse(["status" => 418, "message" => "I'm a teapot"], 418);
    }
}