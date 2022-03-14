@extends('layouts.main')

@section('title', 'Listar Produtos')

@section('scripts')
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script> 
    <script src="http://code.highcharts.com/modules/data.js"></script> 
@endsection

@section('content')

<script language="JavaScript">
$(document).ready(function() { 
   var data = {
      table: 'datatable'
   };
   var chart = {
      type: 'column'
   };
   var title = {
      text: 'Lista de Produtos'   
   };      
   var yAxis = {
      allowDecimals: false,
      title: {
         text: 'Unidades'
      }
   };
   var tooltip = {
      formatter: function () {
         return '<b>' + this.series.name + '</b><br/>' +
            this.point.y + ' ' + this.point.name.toLowerCase();
      }
   };
   var credits = {
      enabled: false
   };  
      
   var json = {};   
   json.chart = chart; 
   json.title = title; 
   json.data = data;
   json.yAxis = yAxis;
   json.credits = credits;  
   json.tooltip = tooltip;  
   $('#container').highcharts(json);
});

</script>

    <h1>Essa é a página para Listar Produtos</h1> 
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<table id="datatable" style="display:none">
<thead>
<tr><th></th><th>Estoque</th></tr>
</thead>
<tbody>
    @foreach ($products as $product)
<tr><th>{{$product->name}}</th><td>{{ $product->quantity }}</td></tr>
@endforeach
</tbody>
</table>

@endsection