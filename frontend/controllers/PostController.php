<?php

namespace frontend\controllers;

use frontend\resource\Post;
use yii\rest\ActiveController;

/**
 * Post controller
 */
class PostController extends ActiveController
{
    public $modelClass = Post::class;
}