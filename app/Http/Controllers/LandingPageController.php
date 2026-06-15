<?php

namespace App\Http\Controllers;

use App\Models\LectureAndStaff;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    private $views      = 'landing/';
    private $url        = 'landing/';
    private $title      = 'SDN Banyumanik 2';

    public function index(Request $request) {
        $news = News::take(3)->get();

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'news'   => $news,
        ];

        return view($this->views . 'index', $data);
    }

    public function profilSekolah(Request $request) {

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
        ];

        return view($this->views . 'profil/sekolah', $data);
    }

    public function profilGuru(Request $request) {

        $lectureAndStaff = LectureAndStaff::paginate(12);

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'lectureAndStaff' => $lectureAndStaff,
        ];

        return view($this->views . 'profil/guru', $data);
    }

    public function profilSiswa(Request $request) {

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
        ];

        return view($this->views . 'profil/siswa', $data);
    }

    public function lombaIndex(Request $request) {

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
        ];

        return view($this->views . 'lomba/index', $data);
    }

    public function kontakIndex(Request $request) {

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
        ];

        return view($this->views . 'kontak/index', $data);
    }

    public function newsIndex(Request $request) {
        $query = News::query();

        $query->where('status', 'published')
          ->whereDate('published_at', '<=', Carbon::today());

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('tag')) {
            $query->where('tags', 'like', '%' . $request->tag . '%');
        }

        $news = $query->latest()->paginate(6)->withQueryString();

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'news'   => $news,
        ];


        return view($this->views . 'news/index', $data);
    }

    public function newsShow($slug) {
        $news = News::where('slug', $slug)
            ->where('status', 'published')
            ->whereDate('published_at', '<=', Carbon::today())
            ->latest()->first();
        $recentNews = News::take(5)
            ->where('status', 'published')
            ->whereDate('published_at', '<=', Carbon::today())
            ->latest()->get();
        $relatedNews = News::take(3)
            ->where('status', 'published')
            ->whereDate('published_at', '<=', Carbon::today())
            ->latest()->get();

        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'news'   => $news,
            'recentNews'   => $recentNews,
            'relatedNews'   => $relatedNews,
        ];


        return view($this->views . 'news/show', $data);
    }
}
