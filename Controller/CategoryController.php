<?php

namespace App\Controller;

class CategoryController extends AbstractController
{
    public function index()
    {
        $this->render('category/view-category');
    }
}
