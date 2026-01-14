<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarInquiry;

class CarInquiryController extends Controller
{
    public function create()
    {
        return view('car-inquiry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:10',
            'email' => 'required|email',
            'address' => 'required|string|min:5',
            'car_types' => 'required|array|min:1',
        ]);


        CarInquiry::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'car_types' => $request->car_types,
        ]);

        return back()->with('success', 'Your enquiry has been submitted successfully!');
    }
}
