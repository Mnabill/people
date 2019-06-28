<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\person;
use Symfony\Component\HttpFoundation\Response;

class personcontroller extends Controller
{
    public function show(person $person){

            return $person ;

    }

    public function index(person $person){

        return (person::paginate()) ;

    }

    public function store(Request $request){

        $request->validate([

            'frist_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',


        ]);
             $person= person::create($request->all());

            //  $person = new person ();
            //  $person ->frist_name= 'mohamed';
            //  $person ->last_name= 'nabil';
            //  $person ->email= 'mo@m.come';
            //  $person ->phone='01254587';
            //  $person ->city='cairo';
            //  $person->save();
           
        return $person ;

    }



    public function update(person $person , Request $request){


        $person->update($request->all());

        return ($person) ;

    }

    public function destroy(person $person){

        $person->delete();

        return Response()->json();


    }



}
