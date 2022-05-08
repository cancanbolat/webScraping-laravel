<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JsonModel;
use App\Models\SQLServerModel;
use Illuminate\Support\Facades\DB;

class JsonController extends Controller
{
    public function Index(){
        //$path = storage_path('jsons') . "/urunler.json"; 
        //$json = json_decode(file_get_contents($path), true); 

        /* echo "<pre>";
        print_r($json[0]["title"]);
        print_r($json[0]["price"]);
        echo "</pre>"; */
        
        /* foreach ($json as $key => $value) {
            echo "<pre>";
            echo 'title => '. $value["title"]."<br>";
            echo 'price => '. $value["price"];
            echo "</pre>";
        } */

        /* foreach ($json as $key => $value) {
            $jsonModel = new JsonModel();
            $jsonModel->Title = $value["title"];
            $jsonModel->Price = $value["price"];
            $jsonModel->save();
        } */
        $readJson = JsonModel::all();

        return view("jsonread", compact('readJson'));
    }

    /*  MYSQL Connection
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=123456789
    */
    
    /* SQL SERVER Connection
    DB_CONNECTION=sqlsrv
    DB_HOST=WIN-401QH6I8IG7
    DB_PORT=
    DB_DATABASE=APIdb
    DB_USERNAME=
    DB_PASSWORD=
    */

    public function mssql(){
        $path = storage_path('jsons') . "/film.json"; 
        $json = json_decode(file_get_contents($path), true); 

        
        foreach ($json as $key => $value) {
            $model = new SQLServerModel();

            $model->Title = $value["title"];
            //$model->Author = $value["author"];

            $model->save();
        }

        $readDatas = DB::select("SELECT * FROM Languages");
        return view('mssql', compact('readDatas'));
    }
}
