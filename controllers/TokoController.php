<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class TokoController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionShop()
    {
        return $this->render('shop');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionProduct()
    {
        return $this->render('product-details');
    }

    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    public function actionCart()
    {
        return $this->render('cart');
    }
    
    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionContactus()
    {
        return $this->render('contactus');
    }
}
