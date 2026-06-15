<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    private $views      = 'admin/news/';
    private $url        = 'admin/news/';
    private $title      = 'Berita';

    public function index()
    {
        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
        ];

        return view($this->views . 'index', $data);
    }

    public function all()
    {
        $news = News::with('user');

        return DataTables::of($news)
            ->addColumn('checkbox', fn($item) => '
                <div class="flex items-center">
                    <input type="checkbox" value="'.$item->id.'"
                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary">
                </div>
            ')
            ->addColumn('judul', function ($item) {
                $image = 'https://hebbkx1anhila5yf.public.blob.vercel-storage.com/FireShot%20Capture%20001%20-%20HOME%20-%20sdnbanyumanik02.dikdas.semarangkota.go.id-JfNpiHGxFqSX42Sb6ZFZ3dpH4P1x7x.png';
                return '
                    <div class="flex items-center">
                        <img src="'  . asset('storage/news/' . $item->main_image) .  '" alt="Berita" class="w-10 h-10 rounded object-cover mr-3">
                        <span class="font-medium text-gray-800">'.$item->title.'</span>
                    </div>
                ';
            })
            ->addColumn('kategori', fn($item) => '
                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">'.ucfirst($item->category).'</span>
            ')
            ->addColumn('penulis', fn($item) => '<span class="text-gray-600 text-sm">'.$item->user->name.'</span>')
            ->addColumn('tanggal', fn($item) => '<span class="text-gray-600 text-sm">'.($item->published_at?->format('d M Y') ?? '-').'</span>')
            ->addColumn('status', function ($item) {
                $text = ucfirst($item->status);
                $color = $item->status === 'dipublikasi' ? 'green' : 'yellow';
                return '<span class="px-2 py-1 bg-'.$color.'-100 text-'.$color.'-800 rounded-full text-xs">'.$text.'</span>';
            })
            ->addColumn('aksi', function ($item) {
                return '
                    <div class="flex space-x-2">
                        <button onclick="location.href=\'/admin/news/edit/'.$item->id.'\'" class="text-gray-600 hover:text-primary transition-colors duration-300" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button onclick="location.href=\'/news/'.$item->slug.'\'" class="text-gray-600 hover:text-blue-600 transition-colors duration-300 hidden sm:block" title="Lihat">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button data-id="' . $item->id . '" class="text-gray-600 hover:text-red-600 transition-colors duration-300 delete-news" title="Hapus">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                ';
            })
            ->rawColumns(['checkbox', 'judul', 'kategori', 'penulis', 'tanggal', 'status', 'aksi'])
            ->make(true);
    }


    public function create()
    {
        $data = [
            'title'  => 'Create '.$this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'formUrl' => route('news.store'),
            'formMethod' => "POST",
        ];

        return view($this->views . 'create-edit', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news,slug',
            'category' => 'required|string|max:100',
            'summary' => 'required|string|max:500',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
            'status' => 'required|in:published,draft',
            'main_image' => 'required',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'string',
            'tags' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = $request->input('slug') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('news', $filename, 'public');
        }

        News::create([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'category' => $validated['category'],
            'summary' => $validated['summary'],
            'content' => $validated['content'],
            'published_at' => $validated['published_at'] ?? now(),
            'status' => $validated['status'],
            'main_image' => $filename,
            'gallery_images' => json_encode($validated['gallery_images'] ?? []),
            'tags' => $validated['tags'] ?? '',
            'user_id' => 1,
        ]);

        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);

        $data = [
            'title'  => "Edit ".$this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'news'   => $news,
            'formUrl' => route('news.change', ['id' => $id]),
            'formMethod' => "PUT",
        ];

        return view($this->views . 'create-edit', $data);
    }

    public function change(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news,slug,' . $id,
            'category' => 'required|string|max:100',
            'summary' => 'required|string|max:500',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
            'status' => 'required|in:published,draft',
            'main_image' => '',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'string',
            'tags' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();


        $news = News::findOrFail($id);

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = $request->input('slug') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('news', $filename, 'public');
            $validated['main_image'] = $filename;
        } else {
            // Jika tidak ada file baru, gunakan nama lama (opsional)
            $validated['main_image'] = $news->main_image;
        }

        $news->update([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'category' => $validated['category'],
            'summary' => $validated['summary'],
            'content' => $validated['content'],
            'published_at' => $validated['published_at'] ?? null,
            'status' => $validated['status'],
            'main_image' => $validated['main_image'],
            'gallery_images' => isset($validated['gallery_images']) ? json_encode($validated['gallery_images']) : null,
            'tags' => $validated['tags'] ?? null,
        ]);

        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        $school = News::find($id)->delete();

        return response()->json(['message' => 'Sekolah berhasil dihapus', 'data' => $school], 200);
    }

}
