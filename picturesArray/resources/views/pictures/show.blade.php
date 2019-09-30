@extends('layout')
@section('content')
  <?php

$idButton = isset($_GET['id'])?$_GET['id']:NULL;
 //echo "The id of the button clicked is ".$idButton;
$query='update pic.url_table set bank="false" where id="'.$idButton.'"';
DB::update($query);
$bank = DB::select('select*from pic.url_table where bank="true"');
?>
  <section id="hide">

 
  <div class="container-fluid">
    <h2>
 Корзина
  </h2>
   <hr>
    <div class="row">
    @foreach ($bank as $element)
<div class="col-2 template">
    <div>
<h2>
{{$element->name}}
</h2>


<img src={{$element->url}}  width="80%"><br>
<p>
{{$element->info}}
</p>
<br>
<form method="get">
    <input type="hidden" name='id' value='{{$element->id}}'>
     <input type='submit' value='Убрать из корзины' class="btn btn-success">
</form>
</div>
</div>

        @endforeach 
    </div>
    </div>

  </section>
  
@endsection

