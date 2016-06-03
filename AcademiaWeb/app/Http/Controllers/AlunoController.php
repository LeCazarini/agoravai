<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$alunos = Aluno::orderBy('id', 'desc')->paginate(10);

		return view('alunos.index', compact('alunos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	 
	 	 public function view()
	 {
	 	return view('professors.view', compact('professor'));
	 }
	 
	 
	public function create()
	{
		
		
		return view('alunos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$aluno = new Aluno();

		$aluno->nome = $request->input("nome");
        $aluno->idade = $request->input("idade");
        $aluno->peso_incial = $request->input("peso_incial");
        $aluno->peso_final = $request->input("peso_final");
        $aluno->id_professor = $request->input("id_professor");

		$aluno->save();

		return redirect()->route('alunos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$aluno = Aluno::findOrFail($id);

		return view('alunos.show', compact('aluno'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$aluno = Aluno::findOrFail($id);

		return view('alunos.edit', compact('aluno'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$aluno = Aluno::findOrFail($id);

		$aluno->nome = $request->input("nome");
        $aluno->idade = $request->input("idade");
        $aluno->peso_incial = $request->input("peso_incial");
        $aluno->peso_final = $request->input("peso_final");
        $aluno->id_professor = $request->input("id_professor");

		$aluno->save();

		return redirect()->route('alunos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$aluno = Aluno::findOrFail($id);
		$aluno->delete();

		return redirect()->route('alunos.index')->with('message', 'Item deleted successfully.');
	}

}
