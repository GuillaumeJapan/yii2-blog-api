<?php

namespace frontend\controllers;

use common\models\Post;
use yii\rest\ActiveController;

/**
 * Post controller
 */
class PostController extends ActiveController
{
    public $modelClass = Post::class;
}