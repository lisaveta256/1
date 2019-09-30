@extends('layout')
@section('content')
<main>
  <?php
$urls = DB::select('select*from pic.url_table');
    ?>
<section>
    <div class="alert alert-success" role="alert">
  <a href="/bank" style="float:right" id='bank'>

</a>
  <h4 class="alert-heading">Каталог иконок</h4>
  <p>Данный каталог содержит большой выбор иконок, гармоничных и локаничных.</p>
  <hr>
  <p class="mb-0">Если вы не нашли в нашем каталоге необходимые файлы, напишите нам и мы наполним наш каталог необходимым содержимым.</p>
</div>
</section>
 <?php

$idButton = isset($_GET['id'])?$_GET['id']:NULL;
$query='update pic.url_table set bank="true" where id="'.$idButton.'"';
DB::update($query);

?>
   

  <section>
  
  <div class="container-fluid">
  <h2>
  У нас представлен широкий выбор иконок для ваших проектов </h2>
  <hr>
    <div class="row">
    @foreach ($urls as $url)
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 template">
  <div>
<h2>
{{$url->name}}
</h2>


<img src={{$url->url}}  width="60%"><br>
<p>
{{$url->info}}
</p>
<br>
<form method="get">
    <input type="hidden" name='id' value='{{$url->id}}'>
     <input type='submit' value='В корзину' class="btn btn-success">
</form>


</div>
</div>

        @endforeach 
 </div>
    </div>
  </section>
  
  </main>*/
@endsection