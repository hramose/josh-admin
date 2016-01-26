<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\BlogCategoryRequest;
use App\BlogCategory;

class BlogCategoryController extends JoshController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        // Grab all the blog category
        $blogscategories = BlogCategory::all();
        // Show the page
        return View('admin.blogcategory.index', compact('blogscategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        return view('admin.blogcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate(BlogCategoryRequest $request)
    {
        $blogcategory = new BlogCategory($request->all());
        $blogcategory->save();
        return redirect('admin/blogcategory');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEdit(BlogCategory $blogcategory)
    {
        return view('admin.blogcategory.edit', compact('blogcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function postEdit(BlogCategoryRequest $request, BlogCategory $blogcategory)
    {
        $blogcategory->update($request->all());
        return redirect('admin/blogcategory');
    }

    /**
     * Remove blog.
     *
     * @param $website
     * @return Response
     */
    public function getModalDelete(BlogCategory $blogcategory)
    {
        $model = 'blogcategory';
        $confirm_route = $error = null;
        try {
            $confirm_route =  route('delete/blogcategory',['id'=>$blogcategory->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = trans('blogcategory/message.error.delete', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete(BlogCategory $blogcategory)
    {
        $blogcategory->delete();
        return redirect('admin/blogcategory');
    }

}
