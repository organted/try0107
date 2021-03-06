<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
    <div class="panel-body">
<!-- バリデーションエラーの表示に使用-->
<!--@include('common.errors')-->
<!-- バリデーションエラーの表示に使用-->
<!-- 本登録フォーム -->
        <form action="{{ url('books') }}" method="POST"
class="form-horizontal">
            {{ csrf_field() }}
<!-- 本のタイトル -->
<div class="form-group">
 <div class="col-sm-6">
<label for="book" class="col-sm-3 control-label">患者名</label>
<input type="text" name="item_name" id="book-name" class="form-control">
</div>
                
<div class="col-sm-6">
<label for="amount" class="col-sm-3 control-label">地域</label>
<input type="text" name="item_amount" id="book-amount" class="form-control">
</div>
<div class="col-sm-6">
<label for="number" class="col-sm-3 control-label">年齢</label>
<input type="text" name="item_number" id="book-number" class="form-control">
</div>
<div class="col-sm-6">
<label for="published" class="col-sm-3 control-label">登録日</label>
<input type="date" name="published" id="book-published" class="form-control">
</div>

</div>
<!-- 本 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> 問い合わせる
                    </button>
                </div>
            </div>
        </form>
        <!-- 現在􏰇本 -->
@if (count($books) > 0)
<div class="panel panel-default">
<div class="panel-heading">登録
</div>
<div class="panel-body">
<table class="table table-striped task-table">
<!-- テーブルヘッダ -->
<thead> <th>患者一覧</th>

<th>&nbsp;</th> 
</thead>
<!-- テーブル本体 -->
<tbody>
@foreach ($books as $book)
<tr>
    <!-- 本タイトル -->
<td class="table-text">
    <div>{{ $book->item_name }}</div>
    </td>
    <!-- 本: 更新ボタン --> <td>
    <form action="{{ url('booksedit/'.$book->id) }}" method="POST">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">
<i class="glyphicon glyphicon-pencil"></i> 更新 
</button>
    </form>
</td>

    <!-- 本: 削除ボタン -->
<td>

<form action="{{ url('book/'.$book->id) }}" method="POST">
           {{ csrf_field() }}
<button type="submit" class="btn btn-danger">
<i class="glyphicon glyphicon-trash"></i> 削除
            </button>
        </form>

</td> </tr>
@endforeach </tbody>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
       {{ $books->links()}}
     </div>
</div>

</table> </div>
</div> @endif
<!-- Book: 既に登録されてる本􏰇リスト -->

</div>
<!-- Book: 既に登録されてる本のリスト -->
@endsection
