<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Participations;

class AdminController extends Controller
{
    public function participations(){
        $participations = Participations::paginate(30);
        return view('admin.participations',['participations' => $participations]);
    }
   
   
    public function participationsEdit(Participations $participation) {
       return view('admin.participationsEdit', ['participations' => $participation]);
    }

 
    public function  participationsUpdate(Participations $participation) {
        $participation->update($this->data());
        return redirect()->route('admin.participations');
    }

    public function participationsDestroy(Participations $participation) {
       // if ($new->image) { Storage::disk('public')->delete($new->image); }
        $participation->delete();
        return back();
    }

    private function data() {
        return request()->validate([
           
            'name' => 'filled|string|max:255',
            'firstname' => 'filled|string|max:255',
            'gift' => 'filled',
            'city' => 'filled',
            'email' => 'filled|email',
            'question1' => 'filled',
            'question2' => 'filled',

        ]);
    }

    public function export()
    {
        $data = Participations::orderBy('city')->get();

        $handle = fopen(storage_path('app/public/export.csv'), 'w');
        
        fputcsv($handle, [
            "Date",
            "Ville",
            "Nom",
            "Prénom",
            "Cadeau",
            "Email",
            "Question 1",
            "Question 2",
        ], ';');
        
        foreach ($data as $row) {
	        fputcsv($handle, [
                $row->created_at,
                $row->city,
                $row->name,
                $row->firstname,
                $row->gift,
                $row->email,
                $row->question1,
                $row->question2,

            ], ';');
        }


      

        fclose($handle);

        return response()->download(storage_path('app/public/export.csv'));
    }

 

}
