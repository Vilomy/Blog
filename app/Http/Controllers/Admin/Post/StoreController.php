<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Request\Admin\Post;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $storeRequest)
    {
        return view('admin.post.store');
    }
}
