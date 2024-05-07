<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->validate([
            'plan' => "required",
            'card_name' =>  "required",
            "card_number" => "required",
            "card_expiry_month" => "required",
            "card_expiry_year" => "required",
            "card_cvv" => "required",
        ]);

        $plans = ['startup' => 10, 'advanced' => 30, 'enterprise' => 50];
        $plans_price = ['startup' => 4, 'advanced' => 8, 'enterprise' => 11];
        $user = User::find(auth()->user()->id);


        if (!isset($plans[$form['plan']])) return abort(500, 'Plan not Found!');
        if (!$user) return abort(500, 'User not Found!');

        // TODO: should be here API FOR PAYMENT
        sleep(3);

        // update user
        $plan = $plans[$form['plan']];
        $user->increment('available_projects', $plan);

        // record the payment
        Payment::create([
            'currency' => "USD",
            'paid' => $plans_price[$form['plan']],
            'user_id' => auth()->user()->id,
            'projects' => $plans[$form['plan']],
        ]);


        return view('payment.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function transactions(Payment $payment)
    {
        return view('payment.transactions')->with('transactions', Payment::where('user_id', auth()->user()->id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
