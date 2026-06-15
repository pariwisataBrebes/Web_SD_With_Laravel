<?php

namespace App\Http\Controllers;

use App\Models\LectureAndStaff;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class LectureAndStaffController extends Controller
{
    private $views      = 'admin/lecture-staff/';
    private $url        = 'admin/lecture-staff/';
    private $title      = 'Lecture and Staff';

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
        $lectureAndStaff = LectureAndStaff::query();

        return DataTables::of($lectureAndStaff)
            ->addColumn('checkbox', fn($item) => '
                <div class="flex items-center">
                    <input type="checkbox" value="'.$item->id.'"
                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary">
                </div>
            ')
            ->addColumn('name', function ($item) {
                return '
                    <div class="flex items-center">
                        <img src="'  . asset('storage/lecture-staff/' . $item->image) .  '" alt="Berita" class="w-10 h-10 rounded object-cover mr-3">
                        <span class="font-medium text-gray-800">'.$item->name.'</span>
                    </div>
                ';
            })
            ->addColumn('description', fn($item) => '<span class="text-gray-600 text-sm">' . $item->description . '</span>')
            ->addColumn('position', fn($item) => '<span class="text-gray-600 text-sm">' . $item->position . '</span>')
            ->addColumn('aksi', function ($item) {
                return '
                    <div class="flex space-x-2">
                        <button onclick="location.href=\'/admin/lecture-staff/edit/' . $item->id . '\'" class="text-gray-600 hover:text-primary transition-colors duration-300" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button data-id="' . $item->id . '" class="text-gray-600 hover:text-red-600 transition-colors duration-300 delete-lecture-staff" title="Hapus">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                ';
            })
            ->rawColumns(['checkbox', 'name', 'description', 'position', 'aksi'])
            ->make(true);
    }

    public function create()
    {
        $data = [
            'title'  => 'Create ' . $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'formUrl' => route('lecture-staff.store'),
            'formMethod' => "POST",
        ];

        return view($this->views . 'create-edit', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'position' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('lecture-staff', $filename, 'public');
        }

        LectureAndStaff::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'position' => $validated['position'],
            'image' => $filename,
        ]);

        return redirect()->route('lecture-staff.index');
    }

    public function edit($id)
    {
        $lectureAndStaff = LectureAndStaff::findOrFail($id);

        $data = [
            'title'  => "Edit " . $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
            'lectureAndStaff' => $lectureAndStaff,
            'formUrl' => route('lecture-staff.change', ['id' => $id]),
            'formMethod' => "PUT",
        ];

        return view($this->views . 'create-edit', $data);
    }

    public function change(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        $lectureAndStaff = LectureAndStaff::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('lecture-staff', $filename, 'public');
            $validated['image'] = $filename;
        } else {
            $validated['image'] = $lectureAndStaff->image;
        }

        $lectureAndStaff->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'position' => $validated['position'],
            'image' => $validated['image'],
        ]);

        return redirect()->route('lecture-staff.index');
    }

    public function destroy($id)
    {
        $lectureAndStaff = LectureAndStaff::find($id)->delete();

        return response()->json(['message' => 'Lecture and Staff successfully deleted', 'data' => $lectureAndStaff], 200);
    }
}
