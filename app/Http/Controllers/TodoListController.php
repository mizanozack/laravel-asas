<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;
use App\models\Demo;

class TodoListController extends Controller
{
    public function index() {
       return view('style', ['listItems' => Listitem::all()]);
    }

    public function jadual() {
      $data['listItems'] =  Listitem::all();
      $data['remarks']  = $this->dalamnije();
      $data['demo'] = Demo::all();
      $data['sample'] = [
        'bilik master',
        'bilik bawah',
        'bilik atas'
      ];
      // dd($data);
      return view('jadual.table', $data);
    }
    
    public function markComplete() {
        return view('welcome', ['listItems' => Listitem::all()]);
    }

    public function saveItem(Request $request) {
    
      $newListItem = new ListItem;
      $newListItem->name = $request->listitem;
      $newListItem->is_complete = 0;
      $newListItem->save();

     return redirect('/');
    }

    private function dalamnije(){
      $data = Listitem::all();
      return $data;
    }
}