<?php
/**
 * Created by PhpStorm.
 * User: Sayat
 * Date: 027 27.03.18
 * Time: 12:38
 */

namespace frontend\modules\user\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;

class ProfileController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view',[
            'user' => $this->FindUser($id),
        ]);
    }

    public function FindUser($id)
    {
        if ($user = User::find()-> where (['id' => $id]) -> one()){
            return $user;
        }


    }
}