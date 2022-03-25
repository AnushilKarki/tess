<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    public function save(Request $request){
      $company= new Company();
      $company->name = $request->name;
        $company->siren = $request->siren;
          $company->siret = $request->siret;
      $company->save();
    }
    public function get(){
      
    }
}
