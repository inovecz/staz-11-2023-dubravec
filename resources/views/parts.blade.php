@extends('welcome')

@section('title', 'Kúpa Autodielov')

@section('content')
    <div class="part-container">
        <h1>Vyberte si Autodiely</h1>

        <div class="part">
            <h2>Diely na Brzdy</h2>
            <p>Popis a informácie o dieloch na brzdy.</p>
            <form action="{{ route('add-to-cart') }}" method="post">
                @csrf
                <input type="hidden" name="part" value="Brzdy">
                <button type="submit">Pridať do košíka</button>
            </form>
        </div>

        <div class="part">
            <h2>Olejové Filtre</h2>
            <p>Popis a informácie o olejových filtrách.</p>
            <form action="{{ route('add-to-cart') }}" method="post">
                @csrf
                <input type="hidden" name="part" value="Olejový Filter">
                <button type="submit">Pridať do košíka</button>
            </form>
        </div>

        <!-- Ďalšie diely môžete pridať podľa potreby -->

        <h2>Košík</h2>
        <div id="cart"></div>
    </div>
@endsection
