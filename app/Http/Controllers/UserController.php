<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class UserController extends Controller
{
    // public function test()
    // {
    //     // Path ke file kredensial Firebase
    //     $serviceAccountPath = base_path('path/cobatest-c4366-firebase-adminsdk-szrh2-196e3bbc1a.json');

    //     // Periksa apakah file kredensial ada
    //     if (!file_exists($serviceAccountPath)) {
    //         dd('File kredensial tidak ditemukan.');
    //     }

    //     // Buat instance Firebase
    //     try {
    //         $firebase = (new Factory)
    //             ->withServiceAccount($serviceAccountPath)
    //             ->withDatabaseUri("https://cobatest-c4366-default-rtdb.asia-southeast1.firebasedatabase.app");

    //         // Dapatkan instance Database
    //         $database = $firebase->createDatabase();

    //         // Uji koneksi dengan mendapatkan referensi ke root Firebase
    //         $reference = $database->getReference('/');
    //         $value = $reference->getValue();

    //         // Tampilkan data yang diterima
    //         dd($value);
    //     } catch (\Exception $e) {
    //         // Tangani kesalahan koneksi
    //         dd("Error: " . $e->getMessage());
    //     }
    // }
    public function getID(Request $request)
    {
        $serviceAccountPath = base_path('path/cobatest-c4366-firebase-adminsdk-szrh2-196e3bbc1a.json');

        try {
            $firebase = (new Factory)
                ->withServiceAccount($serviceAccountPath)
                ->withDatabaseUri("https://cobatest-c4366-default-rtdb.asia-southeast1.firebasedatabase.app");

            // Dapatkan instance Database
            $database = $firebase->createDatabase();


            // Uji koneksi dengan mendapatkan referensi ke root Firebase
            $reference = $database->getReference('/CardId');
            $value = $reference->getValue();

            // return response()->json($value);
            return view('form', [
                'cardId' => $value,
            ]);
        } catch (\Exception $e) {
            // Tangani kesalahan koneksi
            dd("Error: " . $e->getMessage());
        }
    }
    public function send(Request $request)
    {
        $serviceAccountPath = base_path('path/cobatest-c4366-firebase-adminsdk-szrh2-196e3bbc1a.json');
        try {
            $firebase = (new Factory)
                ->withServiceAccount($serviceAccountPath)
                ->withDatabaseUri("https://cobatest-c4366-default-rtdb.asia-southeast1.firebasedatabase.app");

            // Dapatkan instance Database
            $database = $firebase->createDatabase();

            $cardIdReff = $database->getReference('/CardId');
            $value = $cardIdReff->getValue();

            // Uji koneksi dengan mendapatkan referensi ke root Firebase
            $reference = $database->getReference("/form/" . $value);
            $reference->set([
                'nama' => $request->input('nama'),
                'email' => $request->input('email'),
            ]);
            return view('sukses');
        } catch (\Exception $e) {
            // Tangani kesalahan koneksi
            dd("Error: " . $e->getMessage());
        }
    }
    public function closeGate(){
        $serviceAccountPath = base_path('path/cobatest-c4366-firebase-adminsdk-szrh2-196e3bbc1a.json');
        try {
            $firebase = (new Factory)
                ->withServiceAccount($serviceAccountPath)
                ->withDatabaseUri("https://cobatest-c4366-default-rtdb.asia-southeast1.firebasedatabase.app");

            // Dapatkan instance Database
            $database = $firebase->createDatabase();

            $database->getReference('/isGateOpen')->set(false);
            
            
        } catch (\Exception $e) {
            // Tangani kesalahan koneksi
            dd("Error: " . $e->getMessage());
        }
    }
}
