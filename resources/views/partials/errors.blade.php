@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            </li>
        @endforeach
    </ul>
@endif