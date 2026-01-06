@isset($data)
    <p>Name: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
@endisset

@empty($data)
    <p>No data found</p>
@endempty
