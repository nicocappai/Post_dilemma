<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor' , NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();


        return view('admin.dashboard' , compact('adminRequests', 'revisorRequests' , 'writerRequests'));
    }

    public function setAdmin (User $user){
        $user->update([
            'is_admin' => true,
        ]);

        return redirect(route('admin.dashboard'))->with('message' , 'Hai corretamente reso amministratore l\'utente scelto');
    }

    public function setRevisor (User $user){
        $user->update([
            'is_revisor' => true,
        ]);

        return redirect(route('admin.dashboard'))->with('message' , 'Hai corretamente reso Revisore l\'utente scelto');
    }

    public function setWriter (User $user){
        $user->update([
            'is_writer' => true,
        ]);

        return redirect(route('admin.dashboard'))->with('message' , 'Hai corretamente reso Redattore l\'utente scelto');
    }

    public function setAdminR (User $user){
        $user->update([
            'is_admin' => false,
        ]);

        return redirect(route('admin.dashboard'))->with('message' , 'L\'utente scelto non può diventare amministratore');
    }

    public function setRevisorR (User $user){
        $user->update([
            'is_revisor' => false,
        ]);

        return redirect(route('admin.dashboard'))->with('message' , 'L\'utente scelto non può diventare revisore');
    }

    public function setWriterR (User $user){
        $user->update([
            'is_writer' => false,
        ]);

        return redirect(route('admin.dashboard'))->with('message' , 'L\'utente scelto non può diventare redattore');
    }

}
