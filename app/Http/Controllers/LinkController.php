<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;

class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        // dd(array_merge($request->validated(), ['user_id' => auth()->id(),]));

        /** @var User $user */
        $user = auth()->user();
        $user->links()->create($request->validated());

        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        // dump($request->validated(), $link);

        $link->fill($request->validated())->save();

        return to_route('dashboard')->with('message', 'Link alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return to_route('dashboard')->with('message', 'Link removido com sucesso!');
    }

    public function up(Link $link)
    {
        // dump($link->toArray(), __METHOD__);

        $sort = $link->sort;
        $newSort = $sort - 1;

        /** @var User $user */
        $user = auth()->user();

        $swapWith = $user->links()->where('sort', '=', $newSort)->first();

        // dump($link->toArray(), $sort, $newSort, $swapWith->toArray());

        $link->fill(['sort' => $newSort])->save();
        $swapWith->fill(['sort' => $sort])->save();

        return back();
    }

    public function down(Link $link)
    {
        $sort = $link->sort;
        $newSort = $sort + 1;

        /** @var User $user */
        $user = auth()->user();

        $swapWith = $user->links()->where('sort', '=', $newSort)->first();

        $link->fill(['sort' => $newSort])->save();
        $swapWith->fill(['sort' => $sort])->save();

        return back();
    }
}
