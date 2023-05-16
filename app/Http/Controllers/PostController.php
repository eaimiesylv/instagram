<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Post_image;
use Illuminate\Http\Request;
use App\Help\Imageupload;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::with('user:id,fullname,username','images:post_id,id,file_path')->get();
        $url=url()->current();
        $exp=explode("/",$url);
         if($exp[count($exp)-1] == 'post_all'){
            return view('post.managepost',array('post'=>$post));
         }
         return view('post.index',array('post'=>$post));
       
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            if($request->hasFile('file_upload')){
               
                
                 $formdata=array_merge($request->except(['file_upload','_token']),array('user_id'=>Auth::user()->id));
                 $result=Post::FirstOrCreate($formdata); 
                forEach($request->file_upload as  $value){
        
                      
                    $path= new Imageupload($value,'post','none');
                        Post_image::Create([
                            'post_id'=>$result->id,
                            'file_path'=>$path->storage_path
                        ]);
                    
                       
                }
                return redirect()->to('/home');
             }
            else{
              
               return $request->all();
                $formdata=$request->all();
                //$result=Project_progress::Create($formdata);
            }
        }catch(Exception $e){
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $post=Post::with('user:id,fullname,username','images:post_id,id,file_path')
                    ->where('link',$id)
                    ->get();
    
        return view('post.index',array('post'=>$post));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Post::findorFail($id);
        $product->update($request->all());
        return redirect()->to('/post_all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        try {
            $game =Post::findorFail($id)->delete();
            //return redirect()->route('/home');
            return redirect()->to('/post_all');
        } catch(Exception $e) {
             return response(['Deletion Not Successful'],401) ->header('Content-Type', 'text/plain');;
        }
    }
}
