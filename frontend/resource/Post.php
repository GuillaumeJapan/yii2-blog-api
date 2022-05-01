<?php

namespace frontend\resource;

use Yii;
use common\models\Post as ModelsPost;

class Post extends ModelsPost
{
    public function fields()
    {
        return ['id', 'title', 'body'];
    }

    public function extraFields()
    {
        return ['comments', 'created_at', 'updated_at', 'created_by'];
    }
    
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
    }
}