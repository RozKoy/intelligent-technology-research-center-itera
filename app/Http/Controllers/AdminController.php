<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Banner;
use App\Models\Organisasi;

use App\Models\Berita;
use App\Models\ProyekRiset;
use App\Models\Kegiatan;
use App\Models\Produk;

class AdminController extends Controller
{
    public function dashboard () {
        return view('Admin.dashboard', ['page' => 'Admin Dashboard']);
    }

    // ---------------------------------
    public function bannerDashboard () {
        return view('Admin.bannerDashboard', [
            'page' => 'Admin | Banner Dashboard',
            'data' => Banner::latest() -> paginate(10)
        ]);
    }

        public function addBanner (Request $request) {
            $request -> validate(['image' => 'required']);

            $image = $request -> file('image') -> store('bannerImages');

            Banner::create(['image' => $image]);

            return redirect(url() -> previous()) -> with('success', 'Berhasil Menambahkan Data');
        }

        public function deleteBanner (Banner $banner, Request $request) {
            if (isset($request -> confirm)) {
                Storage::delete($banner -> image);
                $banner -> delete();
                return redirect(route('banner')) -> with('success', 'Berhasil Menghapus Data');
            }
            return '<a href="'. url() -> current() . '?confirm=true">Hapus</a> | <a href="'. url() -> previous() .'">Batal</a>';
        }

    // -------------------------------------
    public function organisasiDashboard () {
        return view('Admin.organisasiDashboard', [
            'page' => 'Admin | Organisasi Dashboard',
            'kepala' => Organisasi::firstWhere('position', 'KEPALA'),
            'data' => Organisasi::where('position', '!=', 'KEPALA') -> latest() -> paginate(10)
        ]);
    }

        public function addOrganisasi (Request $request) {
            $data = $request -> validate([
                'name' => 'required',
                'position' => 'required',
                'image' => 'required'
            ]);

            $image = $request -> file('image') -> store('organisasiImages');

            $data['image'] = $image;
            $data['position'] = strtoupper($data['position']);

            Organisasi::create($data);

            return redirect(url() -> previous()) -> with('success', 'Berhasil Menambahkan Data');
        }

        public function deleteOrganisasi (Organisasi $organisasi, Request $request) {
            if (isset($request -> confirm)) {
                Storage::delete($organisasi -> image);
                $organisasi -> delete();
                return redirect(route('organisasi')) -> with('success', 'Berhasil Menghapus Data');
            }
            return '<a href="'. url() -> current() . '?confirm=true">Hapus</a> | <a href="'. url() -> previous() .'">Batal</a>';
        }

    // ----------------------------------
    public function artikelDashboard (Request $request) {
        if (isset($request -> data)) {
            $data = $request -> data;
            $model = null;
            if ($data === 'berita') {
                $model = Berita::paginate(10);
            }else if ($data === 'proyekriset') {
                $model = ProyekRiset::paginate(10);
            }else if ($data === 'kegiatan') {
                $model = Kegiatan::paginate(10);
            }else if ($data === 'produk') {
                $model = Produk::paginate(10);
            }

            if ($model) {
                $page = 'Admin | ' . strtoupper($data) . ' Dashboard';
                return view('Admin.artikelDashboard', [
                    'page' => $page,
                    'data' => $model,
                    'tipe' => strtoupper($data)
                ]);
            }
        }
        return redirect('admin');
    }

        public function addArtikel (Request $request) {
            $request -> validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',
                'tipe' => 'required'
            ]);

            $tipe = $request -> tipe;
            if ($tipe === 'BERITA' || $tipe === 'PROYEKRISET' || $tipe === 'KEGIATAN' || $tipe === 'PRODUK'){
                $data = [
                    'title' => $request -> title,
                    'description' => $request -> description,
                ];

                $folder = strtolower($tipe) . 'Images';
                $image = $request -> file('image') -> store($folder);
                $data['image'] = $image;

                if ($tipe === 'BERITA') {
                    Berita::create($data);
                }else if ($tipe === 'PROYEKRISET') {
                    ProyekRiset::create($data);
                }else if ($tipe === 'KEGIATAN') {
                    Kegiatan::create($data);
                }else {
                    Produk::create($data);
                }

                return redirect(url() -> previous()) -> with('success', 'Berhasil Menambahkan Data');
            }
            return redirect('admin');

        }

        public function deleteArtikel ($id, Request $request) {
            $tipe = strtolower($request -> tipe);
            if (isset($request -> confirm)) {
                $data = ($tipe === 'berita' ? Berita::find($id) : ($tipe === 'proyekriset' ? ProyekRiset::find($id) : ($tipe === 'kegiatan' ? Kegiatan::find($id) : Produk::find($id))));

                Storage::delete($data -> image);

                $data -> delete();

                return redirect(route('artikel', ['data' => $tipe])) -> with('success', 'Berhasil Menghapus Data');
            }
            return '<a href="'. url() -> current() . '?tipe='. $tipe .'&confirm=true">Hapus</a> | <a href="'. url() -> previous() .'">Batal</a>';
        }
}
