<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Validator;

class NewsApiController extends Controller
{
    public function create(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'type' => 'required|string|max:100',
            'date' => 'required|date',
        ],[
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'type.required' => 'Type is required',
            'date.required' => 'Date is required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $news = new News();
        $news->title = $req->title;
        $news->description = $req->description;
        $news->type = $req->type;
        $news->date = $req->date;
        $news->save();
        return response()->json($news, 201);
    }
    public function update(Request $req, $id)
    {
        $news = News::findOrFail($id);
        $validator = Validator::make($req->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'type' => 'required|string|max:100',
            'date' => 'required|date',
        ],[
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'type.required' => 'Type is required',
            'date.required' => 'Date is required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        if ($news)
        {
            $news->title = $req->title;
            $news->description = $req->description;
            $news->type = $req->type;
            $news->date = $req->date;
            $news->save();
            return response()->json($news, 200);
        }
        else
        {
            return response()->json(['message' => 'News not found'], 404);
        }
          
    }
    public function delete($id)
    {
        $news = News::findOrFail($id);
        if($news)
        {
            $news->delete();
            return response()->json('Deleted Successfully', 200);
        }
        else
        {
            return response()->json('News not found', 404);
        }
       
       
    }
    public function getNews()
    {
        $news = News::all();
        return response()->json($news, 200);
    }   
    public function getNewsId($id)
    {
        $news = News::findOrFail($id);
        if($news)
        {
            return response()->json($news, 200);
        }
        else
        {
            return response()->json('News not found', 404);
        }

    }
    public function getNewsType($type)
    {
        $news = News::where('type', $type)->get();
        if($news)
        {
            return response()->json($news, 200);
        }
        else
        {
            return response()->json('News not found', 404);
        }
    }
    public function getNewsDate($dates)
    {
        $news = News::where('date', $dates)->get();
        if($news)
        {
            return response()->json($news, 200);
        }
        else
        {
            return response()->json('News not found', 404);
        }
        
    }
    public function getNewsTypeDate($type, $date)
    {
        $news = News::where('type', $type)->where('date', $date)->get();
        if($news)
        {
            return response()->json($news, 200);
        }
        else
        {
            return response()->json('News not found', 404);
        }
        
    }

}
