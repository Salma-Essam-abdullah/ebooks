<?php
namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\BookList;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index' , ['books'=>$books]);
    }

    public function create($list_id){
        $list = BookList::where('id',$list_id)->first();
        return view('books.create', ['list'=>$list_id]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:books|max:255',
            'description' => 'required',
            'price' => 'required',
            'quantity'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $file = $request->file('image');
        $savedFile = $file->store('/public/images');
        $requestdata = request()->all();
        $res = Book::create(
            array('name' => $requestdata['name'],
            'description' => $requestdata['description'],
            'price' => $requestdata['price'],
            'quantity' => $requestdata['quantity'],
            'image'=>$savedFile,
            'list_id' => $requestdata['list_id'],
            )
        );
        return redirect()->route('books.index');
    }

    public function show($BookId){
        $books= Book::find($BookId);
        
        return  view('books.show',['books'=>$books] );
       
        

    }

    public function updateView($bookid){
        $books= Book::find($bookid);
        return  view('books.update',['books'=>$books] );
    }

    public function delete($bookid){
        Book::where('id',$bookid)->delete();
        $books = Book::all();
        return view('books.index' , ['books'=>$books]);
    }
    public function makeUpdate(Request $request){

        $req =  request()->all();
        Book::where('id', $req['id'])->update(
            array('name' => $req['name'],
            'description' => $req['description'],
            'price' => $req['price'],
            'quantity' => $req['quantity'],
            )

        );

        return redirect()->route('books.index');
    }
function about(){
    return  view('books.about');
}
}