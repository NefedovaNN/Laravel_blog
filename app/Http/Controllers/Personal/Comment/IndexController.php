<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
   public function __invoke()
   {
      $comments = auth()->user()->coments;
    return view('personal.comment.index', compact('comments'));
   }
}
