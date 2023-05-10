<?php


namespace App\Http\Controllers;
use App\Models\Entity;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    //index form
    public function index(){
        return view('user.index',[
            'entities'=>Entity::paginate(5)
        ]);
    }

    //view create form
    public function create(){
        return view('user.create');
    }

    //store info for admin
    public function store(){
        
        // validate and create entities query
        Entity::create($this->validateEntity());

        return redirect('/user/entities/home');
    }

    //view edit form
    public function edit(Entity $entity){
        return view('user.update', ['entity'=>$entity]);
    }

    //update info
    public function update(Entity $entity)
    {
        // validate first
        $attributes = $this->validateEntity($entity);
        //update query
        $entity->update($attributes);

        return redirect('/user/entities/home');
    }

    //delete info
     public function destroy(Entity $entity){
        $entity->delete();
        return redirect('/user/entities/home');
    }
    
    //validate entity code 
    protected function validateEntity(?Entity $entity = null):array{
        //if there is a Post
        //this is just to assist the some especialize validation rules
        $entity ??= new Entity();
        return request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'suffix' => 'nullable']);
    }
}
