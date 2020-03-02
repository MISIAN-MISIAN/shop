<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Http\Support\Facades\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index',['posts' => $posts]);
        // return view('posts/index',compact('posts'));
    }

    public function new(){
        return view('posts/new');
        
    }

    public function create(Request $request){
        $post = new Post;
        $form = $request->all();

        // 最低限なバリデーション処理です。ここでは特に説明はしません。
        $rules = [
            'name' => 'required',
            'brand' => 'required',
            'image' => 'required',
            'user_id' => 'integer|required', // 2項目以上条件がある場合は「 | 」を挟む
        ];
        $message = [
            'name.required'=> '靴の名前が入力されていません',
            'brand.required'=> 'ブランド名が入力されていません',
            'image.required' => '靴の写真が入力されていません',
            'user_id.integer' => 'System Error',
            'user_id.required' => 'System Error',
        ];

        $validator = Validator::make($form, $rules, $message);

        if($validator->fails()){
            return redirect('posts/new')
                ->withErrors($validator)
                ->withInput();
        }else{
            unset($form['_token']);
            $post->name = $request->name;
            $post->brand = $request->brand;
            $post->image = $request->image;
            $post->user_id = $request->user_id;
            $post->save();
            return redirect('/');
        }
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts/show',compact('post'));
    }
}

?>