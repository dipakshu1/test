<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        $all_menus = Menu::get();
      
        return view('menuList',compact('all_menus'));
    }
    public function addMenu(Request $req)
    {
        $uploaded = null;
        if($req->file('icon')) {
            $req->file('icon')->move(public_path(), $uploaded = $req->file('icon')->getClientOriginalName());
        }
        $output = Menu::create([
            
            'parent_id'=>$req->parent_id,
            'name'=>$req->name,
            'route'=>$req->route,
            'seq'=>$req->seq,
            'sidebar_seq'=>$req->sidebar_seq,
            'icon'=>$uploaded,
            'icon_class'=>$req->icon_class,
            'is_sidebar'=>$req->is_sidebar,
        ]);
        return redirect('/setting/menu');
    }
 
  
public function deleteMenu(Menu $id)
{
    $id->delete();
    return redirect('/setting/menu');
}
public function editMenu($id)
{
    $all_menus = Menu::get();
    $update = Menu::find($id);
    return view('Menu.editMenu',compact('all_menus'));
}

public function update(Request $req,$id)
{
    $all_menus = Menu::get();

   $update= Menu::find($id);

   $update->update([
            'parent_id'=>$req->parent_id,
            'name'=>$req->name,
            'route'=>$req->route,
            'icon'=>$req->icon,
            'icon_class'=>$req->icon_class,
            'is_sidebar'=>$req->is_sidebar,
   ]);
   return redirect('/setting/menu',compact('all_menus'));
}

}



