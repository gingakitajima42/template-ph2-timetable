<?php

namespace App\Http\Controllers;

use App\Models\TimetableEntry;
use Illuminate\Http\Request;

class TimetableEntryController extends Controller
{
    public function index()
    {
        $entries = TimetableEntry::orderBy('day')
            ->orderBy('period')
            ->get();

        $dayNames = [1 => '月', 2 => '火', 3 => '水', 4 => '木', 5 => '金'];

        return view('entries.index', [
            'entries' => $entries,
            'dayNames' => $dayNames,
        ]);
    }
    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        TimetableEntry::create($request->only([
            'day',
            'period',
            'title',
            'room',
        ]));

        return redirect('/entries');
    }
}
