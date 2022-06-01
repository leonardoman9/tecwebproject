
@isset($alloggi)
{{$alloggi}}
 @isset($request)
 @foreach($request as $req)
 {{$req}}
 @endforeach
 @endisset
@endisset
