<?php

namespace frontend\resource;

use common\models\Post as ModelsPost;
use Yii;

class Post extends ModelsPost
{
    public function fields()
    {
        return ['id', 'title', 'body'];
    }

    public function extraFields()
    {
        return ['created_at', 'updated_at', 'created_by'];
    }
}