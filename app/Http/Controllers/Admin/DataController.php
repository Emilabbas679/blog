<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataController extends Controller
{
    public function users()
    {
        $data = User::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>

                <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);


        return DataTables::of(User::query())->make(true);

    }
}
