<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = \App\Models\Book::all(); //book모델에 모든 데이트 추출 ->$books라는 변수에 담기
        return view('index', ['books' => $books]); //$books 데이터와 함께 뷰로 이동 index 뷰에 페이지 이름
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//신규 등록을 위한 화면 표시
    {
        //create.blade.php 보여주세요
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $book = new \App\Models\Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->published_on = $request->published_on;
        $book->save();
        return redirect(route('books.index'));
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
        // ddd($id);
        $book = \App\Models\Book::find($id); // $id의 데이터를 유출
        return view('show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = \App\Models\Book::find($id);
        return view('edit', ['book' => $book]);
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
        //
        $book = \App\Models\Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->published_on = $request->published_on;
        $book->save();
        return redirect(route('books.show', $book->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = \App\Models\Book::find($id);
        $book->delete();
        return redirect(route('books.index'));
    }
}
