<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('members.index', [
            'members' => Member::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request) : RedirectResponse
    {
        Members::create($request->all());
        return redirect()->route('members.index')
                ->withSuccess('New member is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member) : View
    {
        return view('members.show', [
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member) : View
    {
        return view('members.edit', [
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMmeberRequest $request, Member $member) : RedirectResponse
    {
        $member->update($request->all());
        return redirect()->back()
                ->withSuccess('member is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member) : RedirectResponse
    {
        $member->delete();
        return redirect()->route('members.index')
                ->withSuccess('Member is deleted successfully.');
    }
}