<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FootballMatches;
use App\Tickets;
use App\User;
class TicketsController extends Controller
{
    public function index(){
    	return FootballMatches::get('name');
    }

    public function store(Request $request){
        return Tickets::create($request->all());
    }

    public function show(){
    	return Tickets::all();
    }

    public function update(Request $request, $id){
        $ticket = Tickets::findOrFail($id);
        $ticket->update($request->all());
        return $ticket;
    }

    public function search(Request $request, $uemail){
        $nameObj = User::Where('email',$uemail)->get('name');
        foreach ($nameObj as $value) { return $value->name; }
    }
}
