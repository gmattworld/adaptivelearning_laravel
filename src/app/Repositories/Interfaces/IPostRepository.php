<?php

namespace App\Repositories\Interfaces;

interface IPostRepository
{
    public function SavePost(string $topic, string $brief, string $body, string $cover_img, ?string $post_banner, bool $is_ext_src, int $category_id, int $user_id, bool $is_active);

    public function UpdatePost(string $topic, string $brief, string $body, string $cover_img, ?string $post_banner, bool $is_ext_src, int $category_id, int $id);

    public function CheckPostExist(string $topic, int $category_id, int $exclussion);

    public function TopPost(int $count);

    public function LatestPost(int $count);

    public function GetAllPaginated(int $count);
}
