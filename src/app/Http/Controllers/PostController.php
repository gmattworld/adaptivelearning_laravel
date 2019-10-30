<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IPostRepository;
use App\Repositories\Interfaces\ICategoryRepository;
use App\Post;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Http\Requests\Post\PostCreateRequest;

class PostController extends Controller
{
    protected $Post;
    protected $Category;
    public function __construct(IPostRepository $IPost, ICategoryRepository $ICategory)
    {
        $this->Post = $IPost;
        $this->Category = $ICategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->Post->GetAll();
        return view("admin.posts.index")->with(['active'=>'posts', 'subactive'=>'post', 'model'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        return view("admin.posts.create")->with(['active'=>'posts', 'subactive'=>'post', 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        //Handle File Upload
        if ($request->hasFile('cover_img')) {
            $ext = $request->file('cover_img')->getClientOriginalExtension();
            $cover_img = 'CI_' . time() . '.' . $ext;
            $path = $request->file('cover_img')->storeAs('public/cover_images', $cover_img);
        } else {
            $cover_img = 'default.jpg';
        }

        // Create Post
        $entity = $this->Post->SavePost(
            $data["topic"],
            $data["brief"],
            $data["body"],
            $cover_img,
            null,
            false,
            $data["category_id"],
            auth()->user()->id,
            true
        );

        // Check post created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while creating post, Please try again!', 'categories'=>$categories]);
        }
        return redirect("/admin/posts")->with(['success' => $entity->topic.' Post Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $postType
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $model = $this->Post->GetByID($id);
        if ($model == null) {
            return redirect('/admin/posts')->with(['error' => 'Posts not found!']);
        }
        return view("admin.posts.details")->with(['active'=>'posts', 'subactive'=>'post', 'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $postType
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');
        $model = $this->Post->GetByID($id);
        if ($model == null) {
            return redirect('/admin/posts')->with(['error' => 'Posts not found!']);
        }
        return view("admin.posts.edit")->with(['active'=>'posts', 'subactive'=>'post', 'model'=>$model, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $postType
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, int $id)
    {
        $categories = $this->Category->GetAllAndOrder('name', 'asc')->pluck('name', 'id');

        // Validated Request
        $data = $request->validated();

        $newFile = false;
        $cover_img = "";

        //Handle File Upload
        if ($request->hasFile('cover_img')) {
            $ext = $request->file('cover_img')->getClientOriginalExtension();
            $cover_img = 'CI_' . time() . '.' . $ext;
            $path = $request->file('cover_img')->storeAs('public/cover_images', $cover_img);
            $newFile = true;
        }

        // Save Post
        $entity = $this->Post->UpdatePost(
            $data["topic"],
            $data["brief"],
            $data["body"],
            $cover_img,
            null,
            false,
            $data["category_id"],
            $id
        );

        // Check post created
        if ($entity == null) {
            return redirect()->back()->withInput()->with(['error' => 'Error encountered while updating post, Please try again!', 'categories'=>$categories]);
        }

        return redirect("/admin/posts")->with(['success' => $entity->topic.' Post Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $postType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $postType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $postType
     * @return \Illuminate\Http\Response
     */
    public function status(int $id)
    {
        $model = $this->Post->GetByID($id);
        if ($model == null) {
            return redirect('/admin/posts')->with(['error' => 'Posts not found!']);
        }
        $model->is_logged_out = !$model->is_logged_out;
        $entity = $this->Post->Update($model->toArray(), $id);
        if ($entity == null) {
            return redirect('/admin/posts')->with(['error' => 'Error encountered while updating post, Please try again!']);
        }

        return redirect("/admin/posts")->with(['success' => $entity->topic.' Post Status Updated!']);
    }
}
