<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    public function gejala()
    {
        $data = DB::table('gejala')->orderByDesc('id')->get();
        return view('admin/gejala', [
            "data" => $data
        ]);
        //
    }
    public function knowledge()
    {
        $data = DB::table('knowledge')->orderByDesc('id')->get();
        return view('admin/knowledge', [
            "data" => $data
        ]);
        //
    }
    public function penyakit()
    {
        $data = DB::table('penyakit')->orderByDesc('id')->get();
        return view('admin/penyakit', [
            "data" => $data
        ]);
        //
    }


    public function input_gejala(Request $request)
    {
        $insert = DB::table('gejala')->insert([
            "kode" => $request->kode,
            "nama" => $request->nama,
            "pertanyaan" => $request->pertanyaan,
        ]);

        if ($insert) {
            return redirect('gejala')->with('success', "success");
        }
    }
    public function input_penyakit(Request $request)
    {
        $insert = DB::table('penyakit')->insert([
            "kode" => $request->kode,
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "pengendalian" => $request->pengendalian,
        ]);

        if ($insert) {
            return redirect('penyakit')->with('success', "success");
        }
    }
    public function input_knowledge(Request $request)
    {
        $insert = DB::table('knowledge')->insert([
            "if" => $request->if,
            "then" => $request->then,
            "if_not_then" => $request->if_not_then,
        ]);

        if ($insert) {
            return redirect('knowledge')->with('success', "success");
        }
    }


    public function delete_gejala($id)
    {
        $delete = DB::table('gejala')->where('id', $id)->delete();

        if ($delete) {
            return redirect('gejala')->with('success', "success");
        }
    }
    public function delete_penyakit($id)
    {
        $delete = DB::table('penyakit')->where('id', $id)->delete();

        if ($delete) {
            return redirect('penyakit')->with('success', "success");
        }
    }
    public function delete_knowledge($id)
    {
        $delete = DB::table('knowledge')->where('id', $id)->delete();

        if ($delete) {
            return redirect('knowledge')->with('success', "success");
        }
    }
    public function detail_edit_gejala($id)
    {
        $data = DB::table('gejala')->where('id', $id)->first();

        if ($data) {
            return view('admin/detail_edit_gejala', [
                "data" => $data
            ]);
        }
    }
    public function detail_edit_penyakit($id)
    {
        $data = DB::table('penyakit')->where('id', $id)->first();

        if ($data) {
            return view('admin/detail_edit_penyakit', [
                "data" => $data
            ]);
        }
    }
    public function detail_edit_knowledge($id)
    {
        $data = DB::table('knowledge')->where('id', $id)->first();

        if ($data) {
            return view('admin/detail_edit_knowledge', [
                "data" => $data
            ]);
        }
    }


    public function update_data_gejala(Request $request, $id)
    {
        $update = DB::table('gejala')->where('id', $id)->update([
            "nama" => $request->nama,
            "kode" => $request->kode,
            "pertanyaan" => $request->pertanyaan,
        ]);

        if ($update) {
            return redirect('gejala')->with('success', "success");
        }
    }
    public function update_data_penyakit(Request $request, $id)
    {
        $update = DB::table('penyakit')->where('id', $id)->update([
            "nama" => $request->nama,
            "kode" => $request->kode,
            "deskripsi" => $request->deskripsi,
            "pengendalian" => $request->pengendalian,
        ]);

        if ($update) {
            return redirect('penyakit')->with('success', "success");
        }
    }
    public function update_data_knowledge(Request $request, $id)
    {
        $update = DB::table('knowledge')->where('id', $id)->update([
            "if" => $request->if,
            "then" => $request->then,
            "if_not_then" => $request->if_not_then,
        ]);

        if ($update) {
            return redirect('knowledge')->with('success', "success");
        }
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
    }
}
