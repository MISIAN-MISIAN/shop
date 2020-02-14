<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Http\Support\Facades\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    public function index(){
        return view('posts/index');
    }
}

?>