<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;
use App\models\Demo;


class TodoListController extends Controller
{
    public function index() {
       return view('welcome', ['listItems' => Listitem::Where('is_complete',0)->get()]);
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
      
      return view('jadual.table', $data);
    }
    
    public function markComplete($id) {
      $listItem = ListItem::find($id);
      $listItem->is_complete = 1;
      $listItem->save();
      return redirect('/jadual');
      // return view('jadual', ['listItems' => Listitem::all()]);
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


    public function delete($id)
     {

      
      DB::table('jadual')->where('id',$id )->delete();
         return redirect('/jadual')->with('status', 'success delete!');

     }







}