<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Etudiant;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\Hash;

class CoursController extends Controller
{
   

   
    //pour acceder a la page ajouter cour

    public function loogin()
    {
        return view('loogin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function ajoutercours()
    {
        return view('ajoutercours');
    }

    public function cours_single()
    {

        return view('cours-single');
    }
    
  

//***pour creer un compte*** */
function creer_compte(Request $request){
    $this->validate($request, ['email' => 'email|required|unique:etudiants', 
                                'password' => 'required|min:4']);
      $etudiant = new etudiant();
    $etudiant->email = $request->input('email');
    $etudiant->password = bcrypt($request->input('password'));
    $etudiant->save();
    return back()->with ('status','compte bien creer');
}


//**pour acceder a son compte***/

function acceder_compte(Request $request){
    $this->validate($request, ['email' => 'email|required',
                                'password' =>'required']);

                                $etudiant=etudiant::where('email',$request->input('email'))->first();
                                
                                if ($etudiant) {
                                    # code...
                                    if (Hash::check($request->input('password'),$etudiant->password )) {
                                        # code...
                                        Session::put('etudiant',$etudiant);
                                        return redirect ('/cours');
                                    } else {
                                        # code...
                                    return back()->with ('status','mauvais mot de pass ou email ');

                                    }
                                    
                                } else {
                                    # code...
                                    return back()->with ('status','vous n\'avez pas compte ');

                                }
                                
      }

//pour se deconnecter//
      function logout(){
       Session::forget('etudiant');
        return back();
    }
    
    public function affichercours()
    {

        $cours = Cours::get();
        return view('affichercours')->with('cours', $cours);
    }
    
    //pour l'ajout
    public function sauvercours(Request $request)
    {
        $this->validate($request, ['titre' => 'required|unique:cours',
                                      'contenu' => 'required',
                                       'niveau' => 'required',
                                       'status' => 'required']);
        $cour = new Cours();
        $cour->titre = $request->input('titre');
        $cour->contenu = $request->input('contenu');
        $cour->niveau = $request->input('niveau');
        $cour->status = 1;
        $cour->save();
        return redirect('/ajoutercours')->with('status','le cours' . $cour->titre . 'a ete bien ajoute'
        );
    }

    //pour la modification
    public function edit_cours($id)
    {
        $cour = Cours::find($id);
        return view('editcours')->with('cour', $cour);
    }

    public function modifiercours(Request $request)
    {
        $this->validate($request, ['titre' => 'required']);
        $cour->Cours::find($request->input('id'));
        $cour->titre = $request->input('titre');
        $cour->contenu = $request->input('contenu');
        $cour->niveau = $request->input('niveau');
        $cour->update();
        return redirect('/cours')->with(
            'status',
            'la cour' . $cour->titre . 'a ete bien ajoute'
        );
    }

    //pour la suppression
    public function deletecours($id)
    {
        $cour = Cours::find($id);
        $cour->delete();
        return redirect('/cours')->with(
            'status',
            'la cour' . $cour->titre . 'a ete bien supprimer'
        );
    }
    // public function sauverproduit(Request $request){ }
}
