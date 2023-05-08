<?php


namespace App\Http\Controllers;
use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    //index form
    public function index(){
        return view('user.index',[
            'entities'=>Entity::paginate(50)
        ]);
    }
    //view create form
    public function create(){
        return view('user.create');
    }

    //store post for admin
    public function store(){
        $attributes = request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'suffix' => 'nullable'
        ]);
        Entity::create($attributes);
        return redirect('/dashboard');
    }

    //view edit form
    public function edit(Entity $entity){
        return view('user.edit', ['entity'=>$entity]);
    }

    public function update(Entity $entity)
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'suffix' => 'nullable'
        ]);

        $entity->update($attributes);

        return redirect('/dashboard');
    }


}
