<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\View;
use App\Entities\SprintModel;
use App\Entities\FunctionalityModel;
use App\Entities\PriorityModel;
use App\Entities\StatusModel;




class HomePageController extends Controller
{   

       
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function ItemColor(){
        return "<p>ola!</p>";
    }

    public function index()
    {   


        $data = array_merge(
            [
                'res' => SprintModel::getAllSprints(),  
                'titlePage'=>'Home Page', 
            ], 
        );
       
        return View('homepage', $data);
       
    }


    public function viewCreatedFunctionalidade($id)
    {
        $data = array_merge(
            [
                'res'       => null,
                'sprint'    => SprintModel::find($id),
                'priority'  => PriorityModel::get(),
                'status'    => StatusModel::get(),
                'titlePage' =>'Cadastra Funcionalidade', 
            ], 
        );

        return View('createfunctionalitysprint', $data);

    }

    public function createFunctionalidade(Request $request, $id)
    {   

        FunctionalityModel::create($request->all());
        return redirect()->route('sprintfunc',['id'=>$id])->with('success', 'Cadastrado com sucesso!');        
    }


    public function editarViewFunctionalidade($idsprint,$idfunc)
    {
        $data = array_merge(
            [
                'res'       => FunctionalityModel::find($idfunc),
                'sprint'    => SprintModel::find($idsprint),
                'priority'  => PriorityModel::get(),
                'status'    => StatusModel::get(),
                'titlePage' =>'Editar Funcionalidade', 
            ], 
        );

        return View('editarfunctionalitysprint', $data);
    }

    public function updateFunctionalidade(Request $request){

        $id = $request->input('id');
        $id_sprint = $request->input('id_sprint');
        $func = FunctionalityModel::find($id);
        $func->update($request->all());
        $func->save();

        return redirect()->route('editarfunctionalitysprint',
        [
            'idsprint' => $id_sprint,
            'idfunc'   => $id
        ])->with('success', 'Salvo com sucesso!');  
    }

    public function deleteFunctionalidade(Request $request)
    {
        $id = $request->input('id');
        $id_sprint = $request->input('id_sprint');

        $func = FunctionalityModel::find($id);
        $func->delete($id);
        return redirect()->route('sprintfunc',['id'=>$id_sprint])->with('success', 'Funcionalidade Deletado com sucesso!');
    }

    public function listaDeFunctionalidadeSemSprint($id)
    {
       
        $data = array_merge(
            [
                'id_sprint' => $id,
                'res'      => FunctionalityModel::getSprintNull(),  
                'titlePage'=>'Lista de Funcionalidade NULL', 
            ], 
        );

        return View('listadefuncitonsemsprint', $data);
        
    }

    public function addFunctionalidadeSemSprint(Request $request)
    {   
        $id = $request->input('id');
        $id_sprint = $request->input('id_sprint');
        $func = FunctionalityModel::find($id);
        $func->id_sprint = $id_sprint;
        $func->save();
        return redirect()->route('listafunctionalitysemsprint',['idsprint'=>$id_sprint])->with('success', 'Funcionalidade Adicionada com sucesso!');
    }


    public function viewCreated(){

        $data = array_merge(
            [
                'res' => null,  
                'priority' => PriorityModel::get(),
                'status'   => StatusModel::get(),
                'titlePage'=>'Editar Sprint', 
            ], 
        );

        return View('createsprintform', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       SprintModel::create($request->all());
       return redirect()->route('homePage')->with('success', 'Cadastrado com sucesso!');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array_merge(
            [
                'res' => FunctionalityModel::getFindByIdSprint($id), 
                'sprint'=> SprintModel::find($id),
                'titlePage'=>'Lista Funcionalidade', 
            ], 
        );
        return View('listefuncio', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array_merge(
            [
                'res'=> SprintModel::find($id),
                'priority' => PriorityModel::get(),
                'status'   => StatusModel::get(),
                'titlePage'=>'Editar Sprint', 
            ], 
        );

        return View('editarsprintform', $data);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   

        $sprint = SprintModel::find($id);
        $sprint->update($request->all());
        $sprint->save();
        return redirect()->route('editesprint', ['id' => $id])->with('success', 'atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $sprint = SprintModel::find($id);
        $sprint->delete($id);
        return redirect()->route('homePage')->with('success', 'Sprint Deletado com sucesso!');
    }
}
