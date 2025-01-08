<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Http\Requests\PaymentMethodRequest;

/**
 * Class PaymentMethodController
 * @package App\Http\Controllers
 */
class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentMethods = PaymentMethod::orderBy('created_at', 'desc')->get();
        $title = 'Data Metode Pembayaran';

        return view('payment_method.index', compact('paymentMethods', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paymentMethod = new PaymentMethod();
        return view('payment_method.create', compact('paymentMethod'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentMethodRequest $request)
    {
        PaymentMethod::create($request->validated());

        return redirect()->route('payment_method.index')
            ->with('success', 'Tambah Payment Method Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        return view('payment_method.show', compact('paymentMethod'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        $title = 'Data Metode Pembayaran';

        return view('payment_method.edit', compact('paymentMethod', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentMethodRequest $request,  $id)
    {
        PaymentMethod::find($id)->update($request->validated());

        return redirect()->route('payment_method.index')
            ->with('success', 'Update Payment Method Berhasil');
    }

    public function destroy($id)
    {
        PaymentMethod::find($id)->delete();

        return redirect()->route('payment_method.index')
            ->with('success', 'Hapus Payment Method Berhasil');
    }
}
