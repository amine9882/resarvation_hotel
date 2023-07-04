@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Reservation d'un hebergement</h1>
    </div>
    <table class="table">
        <thead>
          <tr>
            
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Invités</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->date }}</td>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->guests }}</td>
                <!-- Ajoutez ici les autres colonnes à afficher -->
            </tr>
            @endforeach
          
        </tbody>
      </table>
        
    </div>
</div>
@endsection

