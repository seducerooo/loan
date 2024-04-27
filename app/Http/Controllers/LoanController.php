<?php

namespace App\Http\Controllers;

use App\Models\Month;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoanController extends Controller
{
    //
    public function LoanIndexPage(){

        return Inertia::render('Loan',['months' => Month::pluck('number_of_months', 'name')]);
    }
}
