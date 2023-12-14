<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index()
    {
        $suppliers = [
            ['name' => 'supllier1', 'status' => 'N', 'postcode' => 12, 'cnpj' => '14.000.000/000-00'],
            ['name' => 'supllier2', 'status' => 'S', 'postcode' => 11, 'cnpj' => '00.555.000/000-00'],
            ['name' => 'supllier3', 'status' => 'N', 'postcode' => 56, 'cnpj' => '00.000.888/000-00'],
            ['name' => 'supllier 4', 'status' => 'S', 'postcode' => 13,],
        ];
        return view("app.suppliers.index", compact('suppliers'));
        // return view("app.suppliers.index");
    }
}
