<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebService\StoreTagRequest;
use App\Http\Requests\WebService\UpdateTagRequest;
use App\Http\Resources\WebService\TagResource;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // get all tags
        $tags = DB::select('select * from tags ');
        // pagination
        $tags = $this->arrayPaginator($tags, $request);
        return  $this->success_response(TagResource::collection($tags), "");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $tag = Tags::create($request->validated());
        return  $this->success_response(new TagResource($tag), "Tag Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tags $tag)
    {
        $tag->update($request->validated());
        return  $this->success_response(new TagResource($tag), "Tag Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tags $tag)
    {
        $tag->delete();
        return  $this->success_response( "", "Tag Deleted Successfully");

    }
}
