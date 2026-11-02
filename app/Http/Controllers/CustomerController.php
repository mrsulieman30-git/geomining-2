<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'desc')->paginate(15);
        return Inertia::render('Employee/CRM/Customers/Index', [
            'customers' => $customers
        ]);
    }
}
