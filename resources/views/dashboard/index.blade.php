@component('layouts.app')
    <h1>Les pertes recensées</h1>
    <table>
        <tr>
            <th>Date de la perte</th>
            <th>Nom de l’animal</th>
            <th>Nom du propriétaire</th>
        </tr>
        @foreach($losses as $loss)
            <tr>
                <td>{{ $loss->lost_at->toFormattedDateString() }}</td>
                <td>{{ $loss->pet->name }}</td>
                <td>{{ $loss->pet_owner->name }}</td>
            </tr>
        @endforeach
    </table>
@endcomponent