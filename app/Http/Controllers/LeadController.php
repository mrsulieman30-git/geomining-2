<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::orderBy('created_at', 'desc')->paginate(15);
        return Inertia::render('Employee/CRM/Leads/Index', [
            'leads' => $leads
        ]);
    }
}
