<?php

namespace App\Controllers;

class Result extends BaseController
{
    
    public function index()
    {
        $data = [];
        $tran_id = '';
        for ($i = 0; $i < 16; $i++) {
            $tran_id .= mt_rand(0, 9);
        }
        $data = [
            "name" => $this->request->getVar('fname')." ".$this->request->getVar('lname'),
            "contact_no" => $this->request->getVar('phno'),
            "email" => $this->request->getVar('email'),
            "address" => $this->request->getVar('address'),
            "pincode" => $this->request->getVar('pincode'),
            "city" => $this->request->getVar('city'),
            "state" => $this->request->getVar('state'),
            'transaction_id' => $tran_id,
        ];

        return view('result', $data);
    }
}
