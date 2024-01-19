<!-- this if mean when you click submit in create.blade.php a 
session will created named message, if you refresh your page this
session will be discard, so when you lunch your page for first time
there is no session named message
 -->
@if(session()->has('message'))
<div class="flash">
   {{$message}}
</div>
@endif
