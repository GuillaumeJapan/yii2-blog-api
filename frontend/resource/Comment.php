<?php

namespace frontend\resource;

use common\models\Comment as ModelsComment;
use Yii;

class Comment extends ModelsComment
{
    public function fields()
    {
        return ['id', 'title', 'body'];
    }

    public function extraFields()
    {
        return ['post', 'created_at', 'updated_at', 'created_by'];
    }
    
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }
}