<?php

use App\Models\Category;

if (!function_exists('category')) {
  function category()
  {
    $category = Category::all();

    return $category;
  }

}
