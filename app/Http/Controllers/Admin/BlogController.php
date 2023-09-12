<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function index(){

        
        $blogList = DB::table('blogs')
                    ->get();

        return view('back-end.blog.index',compact('blogList'));
    }

    public function add_blog(){

        return view('back-end.blog.add-blog');
    }


    public function store_blog(Request $request){

        if ($request->ajax()) {
            try {               
                           
                $blog_title = trim($request->blog_title);
                $writer_name = trim($request->writer_name);
                $blog_description = trim($request->blog_description);

                $blog_image = $request->file('blog_image');
                $blog_image_file_name = date('Ymd') . time() . '.' . $blog_image->getClientOriginalExtension();
                $directory = 'public/uploads/blogs/';
                $blog = 'blogs/' . $blog_image_file_name;
                $blog_image->move($directory, $blog_image_file_name);            
                                   
                   $store = DB::table('blogs')
                            ->insertGetId([
                            'blog_title'=>$blog_title,
                            'writer_name'=>$writer_name,
                            'blog_description'=>$blog_description,
                            'blog_image' => $blog
                        ]);              

                 if ($store == true) {
                  
                    return response()->json(['success' => true, 'error' => false, 'message' => 'Blog is uploaded successfully!']);
                } else {
                   
                    return response()->json(['success' => false, 'error' => true, 'message' => 'Blog upload is failed !']);
                }            
                
            } 
            catch (\Exception $e) {
                DB::rollback();
                return response()->json(
                    ['success' => false, 'error' => true, 'message' =>  $e->getMessage()]
                );
            }
        } else {
            echo 'This request is not ajax !';
        }

    }



     public function edit_blog($blog_id){

         $blog = DB::table('blogs')
                 ->where('id',$blog_id)
                 ->first();

        return view('back-end.blog.edit-blog',compact('blog'));
    }




    public function update_blog(Request $request){

         if($request->ajax()){
        try{

            $id = trim($request->form_row_id);
            $blog_title = trim($request->blog_title);
            $writer_name = trim($request->writer_name);
            $blog_description = trim($request->blog_description);

            $pic = DB::table('blogs')
                     ->select('blog_image')
                     ->where('id','=',$id)
                     ->first();

              $getPicFromDb = $pic->blog_image;
              $new_blog_image = $request->file('blog_image');


             if(!empty($new_blog_image)){

                    unlink('public/uploads/' . $getPicFromDb);
                    $blogNewImageFileName = date('Ymd') . time() . '.' . $new_blog_image->getClientOriginalExtension();
                    $directory = 'public/uploads/blogs/';
                    $blogNewImageToSaveInDB = 'blogs/' . $blogNewImageFileName;
                    $new_blog_image->move($directory, $blogNewImageFileName);

                    $data = array();
                    $data['blog_title'] = $blog_title;
                    $data['writer_name'] = $writer_name;
                    $data['blog_description'] = $blog_description;
                    $data['blog_image'] = $blogNewImageToSaveInDB;

                    $updated = DB::table('blogs')->where('id', $id)->update($data);

             }else{

                    $data = array();
                    $data['blog_title'] = $blog_title;
                    $data['writer_name'] = $writer_name;
                    $data['blog_description'] = $blog_description;

                    $updated = DB::table('blogs')->where('id', $id)->update($data);
            
             }


            if ($updated == true) {             
                return response()->json(
                    ['success'=>true, 'error' => false, 'message' => 'Data is Updated Successfully']);
            }else{
                
                 return response()->json(
                    ['success'=>false, 'error' => true, 'message' => 'Nothing to update']);
            }
        }
        catch(\Exception $e){

            return response()->json(
                ['success'=>false, 'error'=>true, 'message'=> $e->getMessage()]);

        }

      }else{
        echo "the request is not ajax!";
      }
    }




    public function delete_blog($blog_id)
    {
        $deleted = DB::table('blogs')->where('id', $blog_id)->delete();

        // return redirect('/admin_blogs')->with('alert','Blog is deleted successfully');

        return redirect()->back()->with('success','Blog is deleted successfully');
    }









}
