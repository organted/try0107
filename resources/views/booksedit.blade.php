@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">

@include('common.errors')
<form action="{{ url('books/update') }}" method="POST">
<!-- item_name -->
<div class="form-group">
<label for="item_name">患者名</label>
<input type="text" id="item_name" name="item_name" class="form-control" value="{{$book->item_name}}">
</div>
<!--/ item_name -->
<!-- age -->
<div class="form-group">
<label for="item_number">年齢</label>
<input type="text" id="item_number" name="item_number" class="form-control" value="{{$book->item_number}}">
</div>
<!--/ item_number -->
<!-- area -->
<div class="form-group">
<label for="area">地域</label>
<input type="text" id="area" name="area" class="form-control" value="{{$book->area}}">
</div>
<!--/ area -->
<!-- comment -->
<div class="form-group">
<label for="comment">コメント</label>
<input type="text" id="comment" name="comment" class="form-control" value="{{$book->comment}}"/>
</div>
<!--/ published -->
<!-- 􏰄ave ボタン/Back ボタン -->
<div class="well well-sm">
<button type="submit" class="btn btn-primary">送信</button>
<a class="btn btn-link pull-right" href="{{ url('/') }}">
<i class="glyphicon glyphicon-backward"></i> 戻る
</a> </div>
<!--/ save ボタン/Back ボタン -->
<!-- id 値を送信 -->
<input type="hidden" name="id" value="{{$book->id}}" /> <!--/ id 値を送信 -->
<!-- C􏰄􏰌F -->
{{ csrf_field() }}
<!--/ C􏰄􏰌F -->
</form>
</div> </div>
@endsection
