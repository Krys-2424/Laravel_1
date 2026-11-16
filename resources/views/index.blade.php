<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les dragooooons</title>
</head>
<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Taille</th>
            <th>Type</th>
            <th>Niveau</th>
            <th>Date naissance</th>
            <th>Equipe ?</th>
            <th>Image</th>
        </tr>

        @foreach($dragons as $dragon)
            <tr>
                <td>{{ $dragon->id }}</td>
                <td>{{ $dragon->name }}</td>
                <td>{{ $dragon->height }}m</td>
                <td>{{ $dragon->type }}</td>
                <td>{{ $dragon->level }}</td>
                <td>{{ $dragon->born_at }}</td>
                <td>{{ $dragon->is_in_team ? 'Oui' : 'Non' }}</td>
                <td><img width="150" 
                    src="{{ $dragon->image_path }}"    
                         alt="Image de {{ $dragon->name }}"> </td>
            </tr>
        @endforeach
    </table>


</body>
</html>