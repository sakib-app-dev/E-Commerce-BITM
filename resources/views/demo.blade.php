<?php

?>
<h1>Hello Laravel</h1>
<p>
    You're using the default database name laravel. This database does not exist.

Edit the .env file and use the correct database name in the DB_DATABASE key
</p>

@foreach($arrData as $data)
{{$data['Course']}}<br>
@endforeach
