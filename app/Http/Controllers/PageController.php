<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Organisasi;

use App\Models\Berita;
use App\Models\ProyekRiset;
use App\Models\Kegiatan;
use App\Models\Produk;

class PageController extends Controller
{
    public function ainovacPengumuman()
    {
        return view('General.ainovacPengumuman', [
            'page' => 'Pengumuman | AI Novac',
        ]);
    }
    public function ainovac()
    {
        return view('General.ainovac', [
            'page' => 'AI Novac',
            'deadline' => 'Aug 31, 2024 23:59:59',
        ]);
    }

    public function home()
    {
        return view('General.home', [
            'page' => 'Beranda',
            'banner' => Banner::all(),
            'berita' => Berita::latest()->limit(8)->get(),
        ]);
    }

    public function profile()
    {
        return view('General.profile', [
            'page' => 'Profil'
        ]);
    }

    public function organisasi()
    {
        return view('General.organisation', [
            'page' => 'Organisasi',
            'kepala' => Organisasi::firstWhere('position', 'KEPALA'),
            'data' => Organisasi::where('position', '!=', 'KEPALA')->get()
        ]);
    }

    public function berita()
    {
        return view('General.article', [
            'page' => 'Berita',
            'data' => Berita::latest()->paginate(3),
            'side1' => [ProyekRiset::inRandomOrder()->first(), 'Proyek Riset'],
            'side2' => [Kegiatan::inRandomOrder()->first(), 'Kegiatan'],
            'side3' => [Produk::inRandomOrder()->first(), 'Produk'],
        ]);
    }

    public function proyekRiset()
    {
        return view('General.article', [
            'page' => 'Proyek Riset',
            'data' => ProyekRiset::latest()->paginate(3),
            'side3' => [Berita::inRandomOrder()->first(), 'Berita'],
            'side1' => [Kegiatan::inRandomOrder()->first(), 'Kegiatan'],
            'side2' => [Produk::inRandomOrder()->first(), 'Produk'],
        ]);
    }

    public function kegiatan()
    {
        return view('General.article', [
            'page' => 'Kegiatan',
            'data' => Kegiatan::latest()->paginate(3),
            'side2' => [Berita::inRandomOrder()->first(), 'Berita'],
            'side3' => [ProyekRiset::inRandomOrder()->first(), 'Proyek Riset'],
            'side1' => [Produk::inRandomOrder()->first(), 'Produk'],
        ]);
    }

    public function produk()
    {
        return view('General.article', [
            'page' => 'Produk',
            'data' => Produk::latest()->paginate(3),
            'side1' => [Berita::inRandomOrder()->first(), 'Berita'],
            'side2' => [ProyekRiset::inRandomOrder()->first(), 'Proyek Riset'],
            'side3' => [Kegiatan::inRandomOrder()->first(), 'Kegiatan'],
        ]);
    }

    public function kontak()
    {
        return view('General.contact', [
            'page' => 'Kontak'
        ]);
    }

    public function baca($id, $tipe)
    {
        $data = null;
        $side1 = null;
        $side2 = null;
        $side3 = null;
        if ($tipe === 'Berita') {
            $data = Berita::find($id);
            $side1 = [ProyekRiset::inRandomOrder()->first(), 'Proyek Riset'];
            $side2 = [Kegiatan::inRandomOrder()->first(), 'Kegiatan'];
            $side3 = [Produk::inRandomOrder()->first(), 'Produk'];
        } else if ($tipe === 'Proyek Riset') {
            $data = ProyekRiset::find($id);
            $side3 = [Berita::inRandomOrder()->first(), 'Berita'];
            $side1 = [Kegiatan::inRandomOrder()->first(), 'Kegiatan'];
            $side2 = [Produk::inRandomOrder()->first(), 'Produk'];
        } else if ($tipe === 'Kegiatan') {
            $data = Kegiatan::find($id);
            $side2 = [Berita::inRandomOrder()->first(), 'Berita'];
            $side3 = [ProyekRiset::inRandomOrder()->first(), 'Proyek Riset'];
            $side1 = [Produk::inRandomOrder()->first(), 'Produk'];
        } else if ($tipe === 'Produk') {
            $data = Produk::find($id);
            $side1 = [Berita::inRandomOrder()->first(), 'Berita'];
            $side2 = [ProyekRiset::inRandomOrder()->first(), 'Proyek Riset'];
            $side3 = [Kegiatan::inRandomOrder()->first(), 'Kegiatan'];
        }
        if ($data) {
            return view('General.detail', [
                'page' => $tipe,
                'data' => $data,
                'side1' => $side1,
                'side2' => $side2,
                'side3' => $side3
            ]);
        }
        return back();
    }
}
