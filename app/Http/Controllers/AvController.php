<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\User;
use App\Models\coment;
use Illuminate\Support\Facades\Gate;

class AvController extends Controller
{
    public function Create(){
        Gate::authorize('create', Announcement::class);
        return view('Announcement.Create'); 
    }
    public function welcome(){
        
        $search = request('search');
        if($search){
            $announcement = Announcement::where([
                ['model','like','%'.$search.'%'],
            ])->get();
        }else{
            $announcement = Announcement::all();
        }
        return view('welcome', ['announcement'=>$announcement, 'search'=>$search]);
    }
    public function store(Request $request){
        Gate::authorize('create', Announcement::class);
        $announcement = new Announcement;

        $announcement->mark = $request->mark;
        $announcement->model = $request->model;
        $announcement->year = $request->year;
        $announcement->color = $request->color;
        $announcement->km = $request->km;
        $announcement->multimedia = $request->multimedia;
        $announcement->note = $request->note;
        $announcement->price = $request->price;

        //photo upload
        if($request->hasfile('photo') && $request->file('photo')->isValid()){

            $requestPhoto = $request->photo;
            $extension = $requestPhoto->extension();

            $photoName = md5($requestPhoto->getClientOriginalName() . strtotime("now")). "." . $extension;
            $requestPhoto->move(public_path('img/fotos'),$photoName);
            $announcement-> photo=$photoName;
            
        }
        $user = auth()->user();
        $announcement->user_id = $user->id; 

        $announcement->save();

        return redirect("/")->with('msg', 'Anuncio Criado Com Sucesso!');
        
    }
    public function show($id){
        Gate::authorize('viewAny', Announcement::class);
        
        $announcement = Announcement::findOrFail($id);

        $coments = coment::all();

        $announcementOwner = User::where('id', $announcement->user_id)->first()->toArray();

        return view('Announcement.show', ['announcement'=>$announcement,'announcementOwner'=>$announcementOwner,'coments'=>$coments]);
    } 

    public function destroy($id){
        Gate::authorize('delete', Announcement::class);
        
        Announcement::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Anuncio Excluido Com Sucesso!');
    }

    public function edit($id){
        Gate::authorize('update', Announcement::class);
        $announcement=Announcement::findOrFail($id);
        return view('announcement.edit',['announcement'=>$announcement]);
    }

    public function update(Request $request){
        Gate::authorize('update', Announcement::class);
        Announcement::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg', 'Anuncio Editado Com Sucesso!');
        
    }
    public function financing($id){
        // Gate::authorize('update', Announcement::class);
        $announcement=Announcement::findOrFail($id);
        return view('financing',['announcement'=>$announcement]);
    }
    public function done($id){
        // Gate::authorize('update', Announcement::class);
        
        $announcement=Announcement::findOrFail($id);
        return view('done',['announcement'=>$announcement]);
    }

    public function coment(request $request){
        $coment = new coment;
        $coment->comentario = $request->comentario;
        $user = auth()->user(); 
        $coment->user_id = $user->id;
        $coment->save();
        
        
        return redirect('/')->with('msg', 'comentado Com Sucesso!');
        
        
    }
}
