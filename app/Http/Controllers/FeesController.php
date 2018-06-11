<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Fees;
use App\Student;

class FeesController extends Controller
{
	public function saveFeesPayment(Request $req)
	{
		$validatedData = $req->validate([
        'student_number' => 'required|max:255|exists:students,student_number',
        'full_name' => 'required',
        'date_of_payment' => 'required',
        'amount' => 'required',


         

    ]); 

  
 


 //if(Student::where('student_number','=',Input::get('student_number'))->exists()){
		$student_number = $req->input('student_number');
		$full_name =$req->input('full_name');
		$date_of_payment =$req->input('date_of_payment');
		$amount = $req->input('amount');

		$data = array('student_number' =>$student_number,'full_name' =>$full_name,'date_of_payment' => $date_of_payment,'amount' => $amount, );
 
       $fee = new Fees;
       $fee->student_number = $student_number;
       $fee->full_name = $full_name;
       $fee->date_of_payment = $date_of_payment;
       $fee->amount = $amount;

       $fee->save();

  
       return back()->with('message', 'Successfully Recorded fees payment');
  // }
   //else
   //{
   	 //echo "<script>alert('Student Number Does Not Exists')</script>";
      // return view('94231.fees');
  // }
       
 
	}

	public function checkFees(Request $req)
	{

		  
		$student_number = $req->input('student_number');

		$fee = Fees::where('student_number',$student_number)->get();

	     $sum = $fee->sum('amount');
		
		return view('94231.viewfees',compact('fee'),compact('sum'));
	
		 

	}

	public function feesall()
	{
		$fee= Fees::all();

		$sum = $fee->sum('amount');
		
		return view('94231.viewall',compact('fee'),compact('sum'));
	}
    //
}
