<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class permissionController extends Controller
{
    public function index(Request $req)
    {
        $all_per= Permission::get();
        return view('UserManagement.permission',compact('all_per'));
        
    }
    public function addPermission(Request $req)
    {
        $permission = Permission::create([
            'name'=>$req->name,
            'assigned_to'=>$req->assigned_to,
        ]);
        return redirect('/usermanagement/permission');
    }

    public function fetchData(Request $request)
    {
        $query = Permission::query();
        $total=$query->count();
        $query->offset(request('start'))->limit(request('length'));
        $orderArray = $request->get('order');
        $columnNameArray= $request->get('columns');
        $columnIndex = $orderArray[0]['column'];
        $columnName = $columnNameArray[$columnIndex]['data'];
        $columnSortOrder = $orderArray[0]['dir'];
        $query=$query->orderBy($columnName,$columnSortOrder);
        $searchArray = $request->get('search');
        $searchValue = $searchArray['value'];
        if(!empty($searchValue)){
            $query = $query->where('name','like','%'.$searchValue.'%');
        }
        $data=$query->get();
      
        
        return [
            'draw'=>request('draw'),
            "query"=>$query,
            "recordsTotal"=>count($data),
            "recordsFiltered"=>$total,
            'data'=>$data,
        ];  
    }
    
    public function delete(Permission $id)
    {
        $id->delete();
        return redirect('/usermanagement/permission');
    }
   

    public function edit($id)
    {
        $per= Permission::find($id);
        return view('UserManagement.editPermission',compact('per'));
    }
    public function update(Request $req, $id)
    {
        $permission= Permission::find($id);
        $permission->update([
            'name'=>$req->name,
            'assigned_to'=>$req->assigned_to,
        ]);
    }
    public function addedPermission(Request $req)
    {
        Permission::create([
            'name'=>$req->name,
            'assigned_to'=>$req->assigned_to,
        ]);
    }
}

