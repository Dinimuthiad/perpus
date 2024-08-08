<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from users;
        $datas = Book::with('category')->get();
        return view('books.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = new Book;
        $books->category_id  = $request->category_id;
        $books->judul        = $request->judul;
        $books->jumlah       = $request->jumlah;
        $books->penerbit     = $request->penerbit;
        $books->tahun_terbit = $request->tahun_terbit;
        $books->penulis      = $request->penulis;
        $books->save();

        // CARA KE 2
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        // CARA KE 3
        // User::create($request->all());

        return redirect()->to('book')->with('massage', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Book::find($id);

        // CARA KE 2
        // $edit = User::where('id',$id)->first();

        return view('books.edit', compact('edit'));
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
        Book::where('id', $id)->update([
            'category_id' => $request->category_id,
            'judul'       => $request->judul,
            'jumlah'      => $request->jumlah,
            'penerbit'    => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'penulis'     => $request->penulis,
        ]);

        // CARA KE 2
        // $user = User::find($id);
        // $user->name     = $request->name;
        // $user->email    = $request->email;
        // $user->password = $request->password;
        // $user->save();

        return redirect()->to('book')->with('massage', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect()->to('book')->with('massage', 'Data berhasil di hapus');
    }
}
