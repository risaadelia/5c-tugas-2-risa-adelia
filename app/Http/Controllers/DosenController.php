<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosens;

class DosenController extends Controller
{
    public function insert(){

        //RAW
        $sql = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('200012', 'Purwantoro M.Kom','laki-laki','Jl.Sunflowers No.05','Karawang','1985-02-17','pb.png',now(),now())");
        dump($sql);

        //SB
        $sql1 = DB::table('dosens')->insert(
            [
                'nidn' => '200010',
                'nama' => 'Apriade Voutama, M.Kom',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Sunflowers No.10',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1988-01-01',
                'photo' => 'AV.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '200011',
                'nama' => 'Betha Nurina Sari, M.Kom.',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Sunflowers No.11',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '1988-01-02',
                'photo' => 'bethans.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM dosens");
        dd($sql);

        //SB
        $sql2 = DB::table('dosens')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update(){

        // RAW
        $sql = DB::update("UPDATE dosens SET alamat='JL.Cheese No.12',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('dosens')
        ->where('id','3')
        ->update(
            [
                'alamat' => 'JL.Cheese No.12',
                'updated_at' => now(),
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Dosen::where('id','1')->first()->update([
            'alamat' => 'JL.Cheese No.12',
            'updated_at' => now(),
        ]);
        dd($sql2);


    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?",['200010']);
        dd($sql);

        //SB
        $sql1 = DB::table('dosens')
        ->where('nidn','200010')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','200010')->delete();
        dd($sql2);
    }
}

