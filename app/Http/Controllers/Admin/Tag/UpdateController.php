<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $updateRequest, Tag $tag) {
        $data = $updateRequest->validated();
        $tag->update($data);

        return view('admin.tags.show', compact('tag'));
    }
}
