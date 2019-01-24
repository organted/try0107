<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
    <div class="panel-body">
<!-- バリデーションエラーの表示に使用-->
@include('common.errors')
<!-- バリデーションエラーの表示に使用-->
<!-- 本登録フォーム -->
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
         
            
                <div style="font-size: 15px;text-align: center;/* width: max-content; */width: 950px;padding: 30px;"
                >OrganDesignはまったく新しいアプローチを提供する歯科技工所です</div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="20">
               </div>
               
                <!--<img src="sample.gif" alt="サンプル" width="300" height="200">-->
                <img src="{{ secure_asset("/picture/Organ_top.png") }}" alt="picture" width="max" height="500">
                
                 <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
               
                <div style="font-size: 28px;text-align: center;/* width: max-content; */width: 950px;padding: 30px;"
                >美しく活き活きした<br>歯をあなたに！</div>
               
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
               
               <div style="text-align:center"><img src="{{ secure_asset("/picture/dish.png") }}"
               alt="picture" width="max" height="500">
               </div>
               
               <div style="font-size: 28px;text-align: center;/* width: max-content; */width: 950px;padding: 30px;"
                >about&nbsp;us</div>
                
                <div style="font-size: 24px;text-align: center;/* width: max-content; */width: 950px;padding: 40px;"
                >私たちは<br>患者さまの失なわれた歯を<br>様々なアプローチを通して<br>回復していくお手伝いをしていきます</div>

                <div style="text-align:center"><img src="{{ secure_asset("/picture/yoga.png") }}"
               alt="picture" width="max" height="500">
               </div>

                <div style="font-size: 28px;text-align: center;/* width: max-content; */width: 950px;padding: 30px;"
                >OrganDesignの定義について</div>
                
                <div style="font-size: 24px;text-align: center;/* width: max-content; */width: 950px;padding: 30px;"
                >Organ=臓器　Design=設計<br>歯は第一の臓器と言われています</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >臓器を設計するコンセプトをもとに</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >失われた歯を確実に取り戻すことで</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >健康を取り戻すことを目指しています</div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
               
                <div style="text-align:center"><img src="{{ secure_asset("/picture/dishes.png") }}"
               alt="picture" width="max" height="500">
               </div>
                
                 <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >what's&nbsp;new&nbsp;?</div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >白く美しい歯を作る事は</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >もちろん大切なことです</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >しかしそれが正しく機能しなければ</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >ストレスの多い生活を過ごすことになります</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >普段の食事や生活の中で細かい問題を抱えている患者さまは</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >意外に沢山いらっしゃいます</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >それらの問題は創り手によって好転可能である事は</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >残念ながらあまり知られていません</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                ></div>
                
                
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/wall_1.png") }}"
               alt="picture" width="max" height="450">
               </div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="70">
               </div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >あなたが歯科技工士を選ぶことで</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >より良い品質を手にする事ができます</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >その選択肢がある事を悩みを抱えた患者さまに</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >知って頂きたいのです</div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >sample&nbsp;cases</div>
                
                 <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/cases_1.png") }}"
               alt="picture" width="max" height="500">
               </div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                <div style="font-size: 24px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >右上②①オールセラミック ス</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >ールセラミック技術によって </div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >歯周組織にとても優しい</div>
                
                <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >より自然で美しい口腔内を</div>
                
                 <div style="font-size: 20px;text-align: center;/* width: max-content; */width: 950px;padding: 10px;"
                >取り戻すことも可能になりました</div>
                
                <div style="text-align:center"><img src="{{ secure_asset("/picture/space.png") }}"
               alt="picture" width="max" height="50">
               </div>
                
                 <div style="font-size: 26px;text-align: center;/* width: max-content; */width: 950px;padding: 20px;"
                >order</div>
                
                
                
                


                
                
                
                
                
                
                
                
                
                <script>
                    
                </script>
                
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
