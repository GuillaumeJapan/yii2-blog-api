<?php

namespace frontend\controllers;

use frontend\resource\Comment;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

/**
 * Comment controller
 */
class CommentController extends ActiveController
{
    public $modelClass = Comment::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider()
    {
        return new ActiveDataProvider([
            'query' => $this->modelClass::find()->andWhere(['post_id' => \Yii::$app->request->get('postId')])
        ]);
    }
}