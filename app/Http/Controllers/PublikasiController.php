<?php

   namespace App\Http\Controllers;

   use App\Models\Publikasi;
   use Illuminate\Http\Request;

   class PublikasiController extends Controller
   {
public function destroy($id)
{
    Publikasi::findOrFail($id)->delete();
    return redirect('/publikasi');
}    
       public function index()
       {
           $publikasi = Publikasi::all();

           return view('publikasi.index', compact('publikasi'));
       }

       public function create()
       {
           return view('publikasi.create');
       }

       public function store(Request $request)
       {
           $data = $request->validate([
               'judul' => 'required|string|max:255',
               'tanggal_rilis' => 'required|date',
               'sampul' => 'nullable|image|max:2048',
           ]);

           if ($request->hasFile('sampul')) {
               $nama = time() . '_' . $request->file('sampul')->getClientOriginalName();
               $request->file('sampul')->move(public_path('images'), $nama);
               $data['sampul'] = $nama;
           }

           Publikasi::create($data);

           return redirect('/publikasi');
       }
   }
