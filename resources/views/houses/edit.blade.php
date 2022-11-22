@extends('layouts.app')


@section('content')
    <h1>EDIT A HOUSE</h1>
    <form method="POST" action="{{ route('houses.update', $house->id) }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="dimensione">dimensione</label>
            <input type="text" name="dimensione" value="{{ old('dimensione', $house->dimensione) }}" />
            @error('dimensione')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="descrizione">descrizione</label>
            <input type="text" name="descrizione" value="{{ old('descrizione', $house->descrizione) }}" />
            @error('descrizione')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="prezzo">prezzo</label>
            <input type="text" name="prezzo" value="{{ old('prezzo', $house->prezzo) }}" />
            @error('prezzo')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="classe_energetica">classe_energetica</label>
            <input type="text" name="classe_energetica"
                value="{{ old('classe_energetica', $house->classe_energetica) }}" />
            @error('classe_energetica')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="indirizzo">indirizzo</label>
            <input type="text" name="indirizzo" value="{{ old('indirizzo', $house->indirizzo) }}" />
            @error('indirizzo')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="piani">piani</label>
            <input type="text" name="piani" value="{{ old('piani', $house->piani) }}" />
            @error('piani')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="proprietario">proprietario</label>
            <input type="text" name="proprietario" value="{{ old('proprietario', $house->proprietario) }}" />
            @error('proprietario')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="numero_di_stanze">numero_di_stanze</label>
            <input type="text" name="numero_di_stanze"
                value="{{ old('numero_di_stanze', $house->numero_di_stanze) }}" />
            @error('numero_di_stanze')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="data_di_costruzione">data_di_costruzione</label>
            <input type="text" name="data_di_costruzione"
                value="{{ old('data_di_costruzione', $house->data_di_costruzione) }}" />
            @error('data_di_costruzione')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="garage">garage</label>
            <input type="text" name="garage" value="{{ old('garage', $house->garage) }}" />
            @error('garage')
                {{ $message }}
            @enderror
        </div>

        <div>
            <select name="agent_id" >
                @foreach ($agents as $agent)
                    <option value="{{ $agent->id }}" {{ $agent->id == $house->agent->id ? 'selected' : '' }}>{{ $agent->FullName }}</option>
                @endforeach

            </select>
            @error('agent_id')
                {{ $message }}
            @enderror
        </div>

        <input type="submit" value="SALVA">
    </form>
@endsection
