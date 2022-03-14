<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class EventController extends Controller
{

        public function index(){
        
            return view('home',);
        }

        public function create(){
            return view('events.create');
        }

        public function store(Request $request){

        $event = new Product();

        $event->name = $request->name;
        $event->quantity = $request->quantity;
        $event->description = $request->description;

        $event->save();

        return redirect('/events/list')->with('msg', 'Produto adicionado com sucesso!');

        
        }

        public function list(){
            $products = Product::all();
            return view('events.list',['products' => $products]);
        }

        public function destroy($id){
            Product::findOrFail($id)->destroy();
            return redirect('/events/list')->with('msg', 'Produto deletado com sucesso!');

        }

        public function remove(){
            return view('events.remove');
        }

        public function contact(){
            return view('contact');
        }
        

}
