@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Luogo di partenza</th>
                    <th scope="col">Luogo di arrivo</th>
                    <th scope="col">Data e ora partenza</th>
                    <th scope="col">Data e ora di arrivo</th>
                </tr>
            </thead>
            <tbody>


                @forelse ($trains as $train)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $train->Azienda }}</td>
                        <td>{{ $train->Stazione_partenza }}</td>
                        <td>{{ $train->Stazione_arrivo }}</td>
                        <td>{{ $train->Orario_partenza }}</td>
                        <td>{{ $train->Orario_arrivo }}</td>
                    @empty
                        <h3>Non ci sono treni in partenza</h3>
                @endforelse

                </tr>
            </tbody>
        </table>
    </div>
@endsection
