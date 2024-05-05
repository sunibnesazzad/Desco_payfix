<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mpdf\MpdfException;
use PDF;
//use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;

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
    
                $pdf = PDF::loadView('detail.printDetail', $user_object);
                return $pdf->download('payfix.pdf');
                }
            }


            public function printdetail_1864($user_name){
                $sql_username = DB::select("select * from PAY_FIX_2019 where emp_id2='$user_name'");
                if (!empty($sql_username)) {
                    // Convert the array result into an object
                        $user_object = new \stdClass();
                        foreach ($sql_username[0] as $key => $value) {
                        $user_object->$key = $value;
                        }
                //var_dump($user_object);
                $data = [
                    'name4' => $user_object->name4,
                    'emp_id2' => $user_object->emp_id2,
                    'office5' => $user_object->office5,
                    'birtdate6' => $user_object->birtdate6,
                    'firstjoiningdate7' => $user_object->firstjoiningdate7,
                    'postname12' => $user_object->postname12,
                    'joindate15' => $user_object->joindate15,
                    'basic14' => $user_object->basic14,
                    'grade13' => $user_object->grade13,
                    'pastpost8' => $user_object->pastpost8,
                    'pastpostjoindate9' => $user_object->pastpostjoindate9,
                    'pastpostbasic10' => $user_object->pastpostbasic10,
                    'pastpostgrossbasic11' => $user_object->pastpostgrossbasic11,
                    'grade3' => $user_object->grade3,
                    'sl16' => $user_object->sl16,
                    'sl17' => $user_object->sl17,
                    'sl182' => $user_object->sl182,
                    'sl181' => $user_object->sl181,
                    'sl20' => $user_object->sl20,
                    'sl19' => $user_object->sl19
                ];
                //var_dump($data);
                //return $user_object;
                
                $pdf = PDF::loadView('detail.print_view', $data);
                //return $pdf->download('payfix.pdf');
                return $pdf->stream();
                //return view('detail.print_view', compact('data'));
            }
            
            
    
        }

    }
