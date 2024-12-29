<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use Authorizable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'event';

        $this->middleware('role:Admin|Humas|Operator');
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['events'] = Event::orderBy('id', 'ASC')->paginate(5);

        return view('pages.admin.event.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.event.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/event/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
            ];
        }

        if (Event::create($params)) {
            return redirect()->route('event.index')->with('success', 'Event berhasil ditambahkan');
        }

        return redirect()->route('event.index')->with('error', 'Event gagal ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        $this->data['event'] = $event;

        return view('pages.admin.event.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        $event = Event::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/event/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
            ];
        }

        if ($event->update($params)) {
            return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui');
        }

        return redirect()->route('event.index')->with('error', 'Event gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->delete()) {
            return redirect()->route('event.index')->with('success', 'Event berhasil dihapus');
        }

        return redirect()->route('event.index')->with('error', 'Event gagal dihapus');
    }
}
