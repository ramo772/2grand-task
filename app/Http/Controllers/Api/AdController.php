<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WebService\AdResource;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ads = Ad::get();
        //tag filter
        if ($request->query('tag_name') && $request->query('tag_name') != 'none') {
            $tagName = $request->query('tag_name');
            $ads = Ad::whereHas('tags', function ($query) use ($tagName) {
                $query->whereTitle($tagName);
            })->get();
        }
        //category filter
        if ($request->query('category_name') && $request->query('category_name') != 'none') {
            $categoryName = $request->query('category_name');
            $category_id = Category::where('title', $categoryName)->get()->implode('id');
            $ads = Ad::where('category_id', $category_id)->get();
        }
        //paginate
        $ads = $this->arrayPaginator($ads, $request);

        return  $this->success_response(AdResource::collection($ads), "");
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
