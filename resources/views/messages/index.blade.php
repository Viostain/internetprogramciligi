@extends('../layout')
@section('main')
    <table class="table">
        <thead>
        <tr>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Email</th>
            <th>İşlem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message -> first_name }}</td>
            <td>{{ $message -> last_name }}</td>
            <td>{{ $message -> email }}</td>
            <td>
                <a href="/messages/{{ $message->id }}/show" class="btn btn-primary">Oku</a>
                <a href="/messages/{{ $message->id }}/delete" class="btn btn-danger">Sil</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
