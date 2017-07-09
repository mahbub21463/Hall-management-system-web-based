<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Payment;
use Auth;
use Datatables;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->user_type==='supervisor' || Auth::user()->user_type==='provost')
        {
            
            $payments = Payment::all();
       
            return view('payments.showAll',compact('payments'));
        }
        else if(Auth::user()->user_type==='student')
        {
             $payments = Payment::where('student_id',Auth::user()->username);
       
            return view('payments.mypayments',compact('payments'));
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         if(Auth::user()->user_type==='supervisor' || Auth::user()->user_type==='provost')
        {
            return view('payments.create');
        }
        else
        {
            return redirect()->back();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->user_type==='supervisor')
        {

         $payment = new Payment;
         $payment->student_id = $request->input('student_id1');
         $payment->fee_type = $request->input('fee_type1');
         $payment->amount = $request->input('amount1');
         $payment->payment_date = $request->input('payment_date1');
         $payment->bank_scroll = $request->input('bankscroll1');
         $payment->payment_id = $payment->bank_scroll.'-'.$payment->payment_date;
         if($payment->student_id != null && $payment->amount != null && $payment->bank_scroll != null )
         {
            $payment->save();
         }
         

         $payment = new Payment;
         $payment->student_id = $request->input('student_id2');
         $payment->fee_type = $request->input('fee_type2');
         $payment->amount = $request->input('amount2');
         $payment->payment_date = $request->input('payment_date2');
         $payment->bank_scroll = $request->input('bankscroll2');
         $payment->payment_id = $payment->bank_scroll.'-'.$payment->payment_date;

         if($payment->student_id != null && $payment->amount != null && $payment->bank_scroll != null )
         {
            $payment->save();
         }
         $payment = new Payment;
         $payment->student_id = $request->input('student_id3');
         $payment->fee_type = $request->input('fee_type3');
         $payment->amount = $request->input('amount3');
         $payment->payment_date = $request->input('payment_date3');
         $payment->bank_scroll = $request->input('bankscroll3');
         $payment->payment_id = $payment->bank_scroll.'-'.$payment->payment_date;

        if($payment->student_id != null && $payment->amount != null && $payment->bank_scroll != null )
         {
            $payment->save();
         }

         $payment = new Payment;
         $payment->student_id = $request->input('student_id4');
         $payment->fee_type = $request->input('fee_type4');
         $payment->amount = $request->input('amount4');
         $payment->payment_date = $request->input('payment_date4');
         $payment->bank_scroll = $request->input('bankscroll4');
         $payment->payment_id = $payment->bank_scroll.'-'.$payment->payment_date;

         if($payment->student_id != null && $payment->amount != null && $payment->bank_scroll != null )
         {
            $payment->save();
         }

         $payment = new Payment;
         $payment->student_id = $request->input('student_id5');
         $payment->fee_type = $request->input('fee_type1');
         $payment->amount = $request->input('amount5');
         $payment->payment_date = $request->input('payment_date5');
         $payment->bank_scroll = $request->input('bankscroll5');
         $payment->payment_id = $payment->bank_scroll.'-'.$payment->payment_date;

         if($payment->student_id != null && $payment->amount != null && $payment->bank_scroll != null )
         {
            $payment->save();
         }
         
         return redirect()->route('payments.create');
       }
        else
        {
            return redirect()->back();
        }
        // $this->validate($request,[
        //     'student_id' => 'required|integer',
        //     'fee_type' => 'required|max:10',
        //     'amount' => 'required|numeric',
        //     'payment_date' => 'required|date_format:d/m/Y',
        //     'bank_scroll' => 'required|integer',

        //     ]);
        
    }

  /* payment_date*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addPayments()
    {
        return view('pages.supervisor-update-payments');
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function anyData()
    // {
    //     return Datatables::of(Payment::query())->make(true);
    // }
}
