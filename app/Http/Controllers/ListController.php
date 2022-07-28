<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookList;
class ListController extends Controller
{
   public function listindex(){

    return view('list.booklist');
   }
}
