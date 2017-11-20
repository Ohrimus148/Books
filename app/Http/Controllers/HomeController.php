<?php

namespace App\Http\Controllers;
use App\Book;
use Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }
    
    public function addbook(Request $request)
    {
        
        $n = Null;        
        
   
                    
        if(isset($request->action) && $request->action == 'save'){
        $data = $request->all();
        
            
   
        $rules = array(
          'author' => 'required|max:255',
          'name' => 'required|max:255',
          'publish' => 'required|max:255',
          'date' => 'required|max:255',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000'
        );

        $messages = array(
            'author' => 'auth',
            'name' => 'name',
            'publish' => 'pub',
            'date' => 'date',
            'image' => 'img'
        );

        $validator = Validator::make($data, $rules, $messages);
        
        
        
        
      
        if(!$validator->fails())
        {
           
            if ($request->file('image')->isValid()) 
            {
            $path = $request->image->path();
            $encoded_img=base64_encode(file_get_contents($path));
           
            $book = new Book();
            $book->author = $request->author;
            $book->name = $request->name;
            $book->publish = $request->publish;
            $book->date = $request->date;
            $book->image =$encoded_img;         
            $book->save(); 
            
            }

            echo 'info';
            $n = array( 'message'=>'This book has been saved successfully!',
                     'alert-type'=>'info');
            
             return back()->with($n);
         
        }
        else {
           
            echo 'warning';
              $n = array( 'message'=>'Please fill in all fields correctly!',
                    'alert-type'=>'warning');
               return back()->with($n);
              
             
       
        }
       
        }
        
       
       return view('home');
        
       
    }
  
     public function deletebook($id) {

      return Book::where("id", $id)->delete();         
         
     }
    
     public function showimage($id) {

 
    $data = base64_decode(Book::find($id)->image);
    $im = imagecreatefromstring($data);
    if ($im !== false) {
    imagepng($im);
    imagedestroy($im);
    }
    else 
        {
    echo 'Произошла ошибка.';
     }       
         
     }
    
    
    
    
    
}
