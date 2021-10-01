<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="L5 OpenApi",
 *      description="L5 Swagger OpenApi description",
 *      @OA\Contact(
 *          email="ehsan1372d@gmail.com"
 *      ),
 *     @OA\License(
 *         name="Nginx",
 *         url="http://nginx.org/LICENSE"
 *     )
 * )
 *
 * @OA\Server(
 *      url="http://127.0.0.1:8000/",
 *      description="L5 Swagger OpenApi dynamic host server"
 *  )
 *
 * @OA\Server(
 *      url="http://127.0.0.1:8000/",
 *      description="L5 Swagger OpenApi Server"
 * )
 *
 * @OA\OpenApi(
 *   security={
 *     {
 *       "passport": {},
 *     }
 *   }
 * )
 *
 * @OA\Tag(
 *     name="Ehsan",
 *     description="Everything about your Projects",
 *     @OA\ExternalDocumentation(
 *         description="Find out more",
 *         url="http://swagger.io"
 *     )
 * )
 */
/**
 * @OA\Get(
 *     path="/",
 *     description="Home page",
 *     @OA\Response(response="default", description="Welcome page")
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
