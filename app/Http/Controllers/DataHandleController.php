<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class DataHandleController extends Controller
{
        public function handlePathVariable($id){
            return $id;

    }
    public function handleQueryString(Request $req){
        $firstName = $req->get('firstName') ;
        $lastName = $req->get('lastName') ;
        $email = $req->get('email') ;
      return view('/Handle/dataHandle',[
              'email' => $email,
              'firstName' => $firstName,
              'lastName' => $lastName
      ]);
    }
    public function returnForm(){
            return view('/Handle/form-data');
    }
    public function processForm(Request $req){
            $eventname = $req->get("eventName");
            $bandnames = $req->get("bandNames");
            $startdate = $req->get("startDate");
            $enddate = $req->get("endDate");
            $portfolio = $req->get("portfolio");
            $ticketprice = $req->get("ticketPrice");
            $status = $req->get("status");
            return view('/Handle/formSucess',[
                'eventname' => $eventname,
                'bandname' => $bandnames,
                'startdate' => $startdate,
                'enddate' => $enddate,
                'portfolio' => $portfolio,
                'ticketprice' => $ticketprice,
                'status' => $status,

            ]);
    }
}
