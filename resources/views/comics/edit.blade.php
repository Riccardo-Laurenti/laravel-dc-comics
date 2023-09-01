<div class="container mt-4">

    <form method="POST" action="{{ route('comics.update', $comic) }}" novalidate>

        @csrf
        @method('put')


        <div class="row">

            {{-- name --}}
            <div class="col-3">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" placeholder="name" value="{{ old('name', $comic->name) }}" required>
                </div>
                <input type="submit" value="SALVA">
            </div>
        </div>
    </form>
</div>
