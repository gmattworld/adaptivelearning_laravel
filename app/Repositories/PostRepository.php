<?php

namespace App\Repositories;


use App\entity\Post;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\IPostRepository;

class PostRepository extends BaseRepository implements IPostRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SavePost(string $topic, string $brief, string $body, string $cover_img, ?string $post_banner, bool $is_ext_src, int $category_id, int $user_id, bool $is_active)
    {
        return $this->Save([
            'topic' => $topic,
            'brief' => $brief,
            'body' => $body,
            'cover_img' => $cover_img,
            'post_banner' => $post_banner,
            'is_ext_src' => $is_ext_src,
            'category_id' => $category_id,
            'user_id' => $user_id,
            'is_active' => $is_active
        ]);
    }

    public function UpdatePost(string $topic, string $brief, string $body, string $cover_img, ?string $post_banner, bool $is_ext_src, int $category_id, int $id) {
        $data = [
            'topic' => $topic,
            'brief' => $brief,
            'body' => $body,
            'cover_img' => $cover_img,
            'post_banner' => $post_banner,
            'is_ext_src' => $is_ext_src,
            'category_id' => $category_id,
        ];

        return $this->update($data, $id);
    }

    public function CheckPostExist(string $topic, int $category_id, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['topic', '=', $topic], ['category_id', '=', $category_id], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where([['topic', '=', $topic], ['category_id', '=', $category_id]])->exists();
        }
    }

    public function TopPost(int $count){
        return $this->model->where('is_active', true)->orderBy('views', 'desc')->take($count)->get();
    }

    public function LatestPost(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function GetAllPaginated(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->paginate($count);
    }
}
