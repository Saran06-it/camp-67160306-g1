@extends('template.default')

@section('content')


    <h1>Pokedex</h1>


    <form action="{{ url('/pokedexs') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-4">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="col-md-4">
            <label for="type">Type</label>
            <input class="form-control" type="text" name="type" id="type">
        </div>

        <div class="col-md-4">
            <label for="species">Species</label>
            <input class="form-control" type="text" name="species" id="species">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <label for="height">Height</label>
            <input class="form-control" type="number" name="height" id="height">
        </div>

        <div class="col-md-4">
            <label for="weight">Weight</label>
            <input class="form-control" type="number" name="weight" id="weight">
        </div>

        <div class="col-md-4">
            <label for="hp">Health</label>
            <input class="form-control" type="number" name="hp" id="hp">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <label for="attack">Attack</label>
            <input class="form-control" type="number" name="attack" id="attack">
        </div>

        <div class="col-md-4">
            <label for="defense">Defense</label>
            <input class="form-control" type="number" name="defense" id="defense">
        </div>

        <div class="col-md-4">
            <label for="image_url">Image_URL</label>
            <input class="form-control" type="url" name="image_url" id="image_url">
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-4">บันทึก</button>
    </form>

    @include('pokedexs.table')

@endsection


