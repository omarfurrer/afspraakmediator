<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\RequestsRepositoryInterface;

class RequestsController extends Controller {

    /**
     * @var RequestsRepositoryInterface 
     */
    protected $requestsRepository;

    /**
     * RequestsController Constructor.
     * 
     * @param RequestsRepositoryInterface $requestsRepository
     */
    public function __construct(RequestsRepositoryInterface $requestsRepository)
    {
        $this->requestsRepository = $requestsRepository;
    }

    /**
     * List all content blocks. 
     * 
     * @return \Illuminate\View\View | \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $requests = $this->requestsRepository->all();
        return view('admin.requests.index', compact('requests'));
    }

}
