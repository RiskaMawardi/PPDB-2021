<?php
  
namespace App\Http\Controllers;
  
use App\Ppdb;
use Illuminate\Http\Request;
  
class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdbs = Ppdb::latest()->paginate(5);
  
        return view('ppdbs.index',compact('ppdbs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdbs.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            
        ]);
  
        Ppdb::create($request->all());
   
        return redirect()->route('ppdbs.index')
                        ->with('success','Ppdb created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       // return view('ppdbs.show',compact('ppdb'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        return view('ppdbs.edit',compact('ppdb'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            
        ]);
  
        $ppdb->update($request->all());
  
        return redirect()->route('ppdbs.index')
                        ->with('success','Ppdb updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ppdb $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        $ppdb->delete();
  
        return redirect()->route('ppdbs.index')
                        ->with('success','Ppdb deleted successfully');
    }
}