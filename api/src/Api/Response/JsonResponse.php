<?php


namespace App\Api\Response;

use App\Api;
use Symfony\Component\HttpFoundation\JsonResponse as Response;


/**
 * Wrapper for JsonResponse response
 *
 *
 * @package App\Api\Response
 */
class JsonResponse extends Response
{

    /**
     * @inheritdoc
     */
    function update(): static
    {
        // On update request, add "version" on JSON data
        if ($this->data && strrpos($this->data, '}') === strlen($this->data) - 1) {
            $this->data = substr($this->data, 0, -1) . ',"version":"' . addcslashes(Api::VERSION, '"') . '"}';
        }
        return parent::update();
    }

}