<h1>Pokedexs List</h1>

    <table class = "table">
        <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Type</td>
            <td>Species</td>
            <td>Height</td>
            <td>Weight</td>
            <td>Health</td>
            <td>Attack</td>
            <td>Defense</td>
            <td>Image</td>
            <td></td>
        </tr>
        </thead>
        <?php foreach($pokedex as $item) {?>
        <tr>
            <td>{{ $item->id}}</td>
            <td>
                <a href="{{ url('/pokedexs/' . $item->id) }}" class="text-decoration-none fw-bold">
                    {{ $item->name }}
                </a>
            </td>
            <td>{{ $item->type}}</td>
            <td>{{ $item->species}}</td>
            <td>{{ $item->height}}</td>
            <td>{{ $item->weight}}</td>
            <td>{{ $item->hp}}</td>
            <td>{{ $item->attack}}</td>
            <td>{{ $item->defense}}</td>
            <td>
                <img
                src="{{ $item->image_url }}"
                style="width:200px; height:200px; object-fit:cover;"
                >
            </td>
        </tr>
        <?php } ?>
    </table>
