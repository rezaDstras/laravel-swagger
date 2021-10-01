<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @OA\Get(
     *     path="/api/posts",
     *     tags={"Posts"},
     *     security={{"passport": {}}},
     *     operationId="GetAllPosts",
     *     description="Get All Posts.",
     *     @OA\Parameter(
     *         description="Id for filter post id",
     *         in="query",
     *         name="id",
     *         required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         description="Title for filter post by title like",
     *         in="query",
     *         name="title",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         description="Created At for filter post by created at greater than date - (example: 2012-11-30 18:00:00)",
     *         in="query",
     *         name="created_at_from",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         description="Created At for filter post by created at less than date - (example: 1972-11-08 21:10:00)",
     *         in="query",
     *         name="created_at_to",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         description="Updated At for filter post by updated at greater than date - (example: 2012-11-30 18:00:00)",
     *         in="query",
     *         name="updated_at_from",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         description="Updated At for filter post by updated at less than date - (example: 1972-11-08 21:10:00)",
     *         in="query",
     *         name="updated_at_to",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         description="Deleted At for filter post by deleted at greater than date - (example: 2012-11-30 18:00:00)",
     *         in="query",
     *         name="deleted_at_from",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         description="Deleted At for filter post by deleted at less than date - (example: 1972-11-08 21:10:00)",
     *         in="query",
     *         name="deleted_at_to",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="All Post response",
     *         @OA\JsonContent(ref="#/components/schemas/Post")
     *     )
     * )
     *
     */
    public function index()
    {
        $posts = ['ehsan','reza','hasan'];
        return PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @OA\Post(
     *     path="/api/post",
     *     tags={"Posts"},
     *     security={{"passport": {}}},
     *     operationId="CreatePost",
     *     description="Create a new Post.",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/PostRequest")
     *      ),
     *     @OA\Response(
     *         response=201,
     *         description="Post response",
     *         @OA\JsonContent(ref="#/components/schemas/Post")
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     * )
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * @OA\Get(
     *      path="/api/post/{id}",
     *      operationId="getPostById",
     *      tags={"Posts"},
     *      summary="Get post information",
     *      description="Returns post data",
     *      @OA\Parameter(
     *          name="id",
     *          description="post id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Post")
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     *    security={
     *           {"api_key_security_example": {}}
     *       }
     * )
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return Post::find($id);
    }
    /**
     * Update the specified resource in storage.
     *
     * @OA\Patch(
     *     path="/api/post/{id}",
     *     tags={"Posts"},
     *     security={{"passport": {}}},
     *     operationId="UpdatePost",
     *     description="Update a Post.",
     *     @OA\Parameter(
     *         description="Post id which is going to update",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="integer", format="int64")
     *     ),
     *     @OA\Parameter(
     *         description="Post title which is going to update",
     *         in="path",
     *         name="title",
     *         required=false,
     *         @OA\Schema(type="string" ,format="byte")
     *     ),
     *     @OA\RequestBody(
     *         description="Post to update",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Post response",
     *          @OA\JsonContent(ref="#/components/schemas/Post")
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @OA\Delete(
     *     path="/api/post/{id}",
     *     tags={"Posts"},
     *     security={{"sanctum": {}}},
     *     operationId="DeletePost",
     *     description="Delete Post.",
     *     @OA\Parameter(
     *         description="Post id which is going to fetch",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="integer", format="int64")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Type response",
     *         @OA\JsonContent(ref="#/components/schemas/Post")
     *     )
     * )
     */
    public function destroy($id)
    {
        //
    }
}
