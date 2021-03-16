@foreach($peoples as $key => $people)   
   <a href="/people/{{ $key+1 }}">{{ $people->name }}</a>
   <br><br>
@endforeach