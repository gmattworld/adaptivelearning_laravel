<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\Interfaces\ICategoryRepository;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;

class CategoryController  extends Controller
{
    protected $Category;
    public function __construct(ICategoryRepository $ICategory)
    {
        // $this->middleware('auth');
        $this->Category = $ICategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->Category->GetAll();
        return view("admin.categories.index")->with(['active'=>'category', 'subactive'=>'category', 'model'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create")->with(['active'=>'category', 'subactive'=>'category']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        // Validated Request
        $data = $request->validated();

        // Save Category
        $entity = $this->Category->SaveCategory(
            $data['name'],
            $data['code'],
            $data['description'],
            true
        );

        // Check user type created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating user, Please try again!']);
        }

        return redirect("/admin/categories")->with(['success' => $entity->name.' Category Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Category->GetByID($id);
        if ($model == null) {
            return redirect('/admin/categories')->with(['error' => 'Categories not found!']);
        }
        return view("admin.categories.details")->with(['active'=>'category', 'subactive'=>'category', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $model = $this->Category->GetByID($id);
        if ($model == null) {
            return redirect('/admin/categories')->with(['error' => 'Categories not found!']);
        }
        return view("admin.categories.edit")->with(['active'=>'category', 'subactive'=>'category', 'model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, int $id)
    {
        // Validated Request
        $data = $request->validated();

        $entity = $this->Category->UpdateCategory(
            $data['name'],
            $data['code'],
            $data['description'],
            $id
        );

        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/categories")->with(['success' => $entity->name.' Category Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Category->GetByID($id);
        if ($model == null) {
            return redirect('/admin/categories')->with(['error' => 'Categories not found!']);
        }
        $model->is_active = !$model->is_active;
        $entity = $this->Category->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/categories')->with(['error' => 'Error encountered while updating user, Please try again!']);
        }

        return redirect("/admin/categories")->with(['success' => $entity->name.' Category Status Updated!']);
    }
}
