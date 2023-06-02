<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
class members extends Controller
{
    //
    // function operations(){
    //     return DB::table('members')
    //     if(){
    //     ->insert([
    //         'username'=>'nabeel',
    //         'password'=>'763478',
    //         'operations'=>'pass'
    //     ]);}
    //     // return view('list',['data'=>$data]);
    // }


//     function operations()
// {
//     $userId = 5; // Replace with the actual user ID you want to check

//     $existingUser = DB::table('members')->where('id', $userId)->first();

//     if ($existingUser) {
//         // User ID exists in the table
//         echo "You are already logged in.";
//     } else {
//         // User ID does not exist in the table, insert data
//         DB::table('members')->insert([
//             'id' => $userId,
//             'username' => 'gdyfsydvy',
//             'password' => '636273',
//             'operations' => 'fail'
//         ]);

//         echo "Data inserted successfully.";
//     }
// }

    //     function operations(){
    //     return DB::table('members')->select(DB::raw("min(id) as min_price, max(id) as max_price"))->get();

      
    // }



    function getdata(){
       return $data = DB::table('employee')
       ->rightjoin('company','employee.sno','=','company.employee_id')->get();
    //    ->select('company.*','employee.*')->get();
    }


}
