<ul>
    @foreach ($databasecomics as $comic)
        <li>{{ $comic->name }}</li>
        <li>
            <p>{{ $comic->description }}</p>
        </li>
    @endforeach
</ul>
