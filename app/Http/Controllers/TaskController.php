<?php

namespace App\Http\Controllers;

use App\HelperService\Helpers;
use App\Task;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class TaskController extends Controller
{

    protected $user;
    private $helpers;
    private $created;
    private $createdCode;
    private $badRequest;
    private $badRequestCode;
    private $unauthorized;
    private $unauthorizedCode;
    private $accepted;
    private $acceptedCode;
    private $internalError;
    private $internalErrorCode;

    public function __construct(
        Helpers $helpers
    )
    {
        $this->user = JWTAuth::parseToken()->authenticate();
        $this->created = 'Created';
        $this->createdCode = 201;
        $this->badRequest = 'Bad Request';
        $this->badRequestCode = 400;
        $this->unauthorized = 'Unauthorized';
        $this->unauthorizedCode = 401;
        $this->accepted = 'Accept';
        $this->acceptedCode = 200;
        $this->internalError = 'Internal Error';
        $this->internalErrorCode = 500;
        $this->helpers = $helpers;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Task::get();
        return $this->helpers->response(true, $this->accepted, [
            "tasks" => $response
        ], null, $this->acceptedCode);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
