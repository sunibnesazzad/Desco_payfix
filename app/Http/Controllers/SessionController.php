<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;

class SessionController extends Controller
{
    //showing Log in page
    public function create(){
        return view('Login.create');
    }

    //Showing Detail Page
    public function store(Request $request){

        $this->validate(request(), [
            'desco_id' => 'required',
            'password' => 'required',
        ]);
    
        $user_name = $request->desco_id;
        $password = $request->password;
    
        $sql_username = DB::select("select * from PAY_FIX_2019 where emp_id2='$user_name'");
    
        if (!empty($sql_username)) {
            // Convert the array result into an object
            $user_object = new \stdClass();
            foreach ($sql_username[0] as $key => $value) {
                $user_object->$key = $value;
            }
    
            // Now $user_object contains the data as an object
    
            $birth_date = $user_object->birtdate6;
            //echo "Birthday: " . $birth_date;
            $birth_year = substr($birth_date, 0, 4);
            //echo "Birthyear: " . $birth_year;
            if ($password == $birth_year) {
                $verified_user = 1;
                //echo "Success" . $user_object->name4;
                
            } else {
                $verified_user = 0;
                echo "Wrong Password";
            }
    
            //return view('detail.detail', compact('user_object','verified_user'))->with('title', "DESCO Pay_FIX");
            return view('detail.printDetail', compact('user_object','verified_user'))->with('title', "DESCO Pay_FIX");
        } else {
            echo "No user found.";
        }
    }

    //Showing Print Page
        public function printdetail($user_name)
            {
                $user_object = DB::select("select * from PAY_FIX_2019 where emp_id2='$user_name'");

                if (!empty($sql_username)) {
                // Convert the array result into an object
                    $user_object = new \stdClass();
                    foreach ($sql_username[0] as $key => $value) {
                    $user_object->$key = $value;
                    }
    
                    dd($user_object);
                $pdf = PDF::loadView('detail.printDetail', $user_object);
                return $pdf->download('payfix.pdf');
                }
            }
    
        }

