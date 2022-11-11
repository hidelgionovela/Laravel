
@if (session('sucesso'))
<p style="color:green;">
        {{session('sucesso')}}  
        </p>
@else
<p style="color:red;">
        {{session('danger')}}  
        </p> 
@endif