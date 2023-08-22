<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BarangController extends CustomController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|string
     */
    public function index()
    {
        if (\request()->isMethod('POST')) {
            return $this->create();
        }
        $data = Barang::all();

        return view('admin.barang', ['sidebar' => 'barang', 'data' => $data]);
    }

    /**
     * @return string
     */
    public function create()
    {
        //
        $field = request()->validate(
            [
                'nama'  => 'required',
                'harga' => 'required',
                'kategori' => 'required',
            ]
        );

        $data            = Barang::find(request('id'));
        $oldImg          = null;
        $imageName       = $this->generateImageName('image');
        $destinationPath = public_path() . '/images/barang/';
        $field           = request()->all();

        if (request()->has('image')) {
            $field['image'] = '/images/barang/' . $imageName;
        }

        if ($data) {
            $oldImg = $data->image;
            $data->update($field);
            $text = 'Berhasil edit data';
        } else {
            Barang::create($field);
            $text = 'Berhasil simpan data';
        }

        if (request()->has('image')) {
            $file = request()->file('image');
            $this->saveImage($imageName, $file, $destinationPath, $oldImg);
        }

        return 'berhasil';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }


    public function saveImage($fileName, $file, $destinationPath, $old = null)
    {
        $file->move($destinationPath, $fileName);
        if ($old) {
            if (file_exists(public_path() . $old)) {
                unlink(public_path() . $old);
            }
        }
    }
}
