<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showForm()
    {
        return view('gas-consumption-form');
    }

    public function calculateGasConsumption(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $kilometersDriven = $request->input('kilometers_driven');
        $gasPrice = $request->input('gas_price');
        $perKilometer = $request->input('per_kilometer');

        $totalGasCost = $kilometersDriven * $perKilometer * $gasPrice;

        return view('gas-consumption-result', [
            'kilometersDriven' => $kilometersDriven,
            'gasPrice' => $gasPrice,
            'perKilometer' => $perKilometer,
            'totalGasCost' => $totalGasCost,
        ]);
    }
}

