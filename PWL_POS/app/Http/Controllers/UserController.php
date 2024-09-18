<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user ke m_user
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make ('12345'),
        //     'level_id' => 5
        // ];
        // UserModel::insert($data);

        //tambah data user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama'
        // ];
        // UserModel::where('username', 'customer-1') ->update ($data);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager2',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel:: create($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // -------- [JS4] praktikum 2.1 ----------
        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);
        //------------------------------------------
        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);
        //------------------------------------------
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);
        //------------------------------------------
        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // -------- [JS4] praktikum 2.2 ----------
        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);
        //------------------------------------------
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // -------- [JS4] praktikum 2.3 ----------
        // $user = UserModel::where('level_id', 2)-> count();
        // dd($user);
        // return view('user', ['data' => $user]);

        // $userCount = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $userCount]);

        // -------- [JS4] praktikum 2.4 ----------
        // $user=UserModel::firstOrCreate(
        // [
        //     'username' =>'manager',
        //     'nama' => 'Manager',
        // ],);
        // return view('user', ['data' => $user]);
        //------------------------------------------
        // $user=UserModel::firstOrCreate(
        //     [
        //         'username' =>'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make ('12345'),
        //         'level_id' => 2
        //     ],);
    
        // return view('user', ['data' => $user]);
        //------------------------------------------
        // $user=UserModel::firstOrNew(
        //     [
        //         'username' =>'manager',
        //         'nama' => 'Manager',
        //     ],);
        //     return view('user', ['data' => $user]);
        //------------------------------------------
        $user=UserModel::firstOrNew(
            [
                'username' =>'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make ('12345'),
                'level_id' => 3
            ],);
            $user->save();
    
        return view('user', ['data' => $user]);   

    }
}
