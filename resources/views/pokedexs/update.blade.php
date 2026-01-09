@extends('template.default')

@section('content')

<h1 class="mb-3">Edit Pokedex</h1>

<form action="{{ url('/pokedexs/'.$pokedex_update->id) }}" method="POST" class="pokedex-form">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value = "{{$pokedex_update->name}}">
    </div>

    <div class="mb-3" >
        <label>Type</label>
        <input class="form-control" type="text" name="type" value = "{{$pokedex_update->type}}">
    </div>

    <div class="mb-3">
        <label>Species</label>
        <input class="form-control" type="text" name="species" value = "{{$pokedex_update->species}}">
    </div>

    <div class="mb-3">
        <label>Height</label>
        <input class="form-control" type="number" name="height" value = "{{$pokedex_update->height}}">
    </div>

    <div class="mb-3">
        <label>Weight</label>
        <input class="form-control" type="number" name="weight" value = "{{$pokedex_update->weight}}">
    </div>

    <div class="mb-3">
        <label>Health</label>
        <input class="form-control" type="number" name="hp" value = "{{$pokedex_update->hp}}">
    </div>

    <div class="mb-3">
        <label>Attack</label>
        <input class="form-control" type="number" name="attack" value = "{{$pokedex_update->attack}}">
    </div>

    <div class="mb-3">
        <label>Defense</label>
        <input class="form-control" type="number" name="defense" value = "{{$pokedex_update->defense}}">
    </div>

    <div class="mb-3">
        <label>Image URL</label>
        <input class="form-control" type="url" name="image_url" value = "{{$pokedex_update->image_url}}">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success px-5">บันทึก</button>
    </div>
</form>

@include('pokedexs.info')

@endsection
