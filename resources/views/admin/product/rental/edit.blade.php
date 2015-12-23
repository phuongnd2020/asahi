@extends('backend')

@section('content')
{!! HTML::script('ckeditor/ckeditor.js') !!}
<table width="920" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td class="col1">■レンタル商品管理　＞　レンタル商品の新規登録</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  @foreach($data as $rp) @endforeach
{!! Form::open( [ 'id' => 'frmEditRP','method' => 'post', 'url' => 'manage/product/rental/edit/'.$rp->id,'files' => true, 'enctype'=>'multipart/form-data']) !!}  
  <tr>      
    <td>
        <table width="100%" border="1" cellspacing="0" cellpadding="5">   

          @if($errors->any())
            <div class="errors">
                <ul class="msg-validate"> 
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)                     
                          <li>{{ $error }}</li>                                    
                    @endforeach
                    </div> 
                </ul>
            </div>
          @endif          
    
    <tr>
        <td width="20%" class="col3">カテゴリ</td>
        <td>{{$rp->name}}</td>
      </tr>
      <tr>
        <td width="20%" class="col3">商品名 <span class="notnull">[*]</span></td>
        <td>
            <input name="id" type="hidden" id="id" size="60" value="{{$rp->id}}" />
            <input name="order" type="hidden" id="order" size="60" value="{{$rp->order}}" />
            <input name="cat_rental_id" type="hidden" id="cat_rental_id" size="60" value="{{$rp->cat_rental_id}}" />
            <input name="product_name" type="text" id="product_name" size="60" value="{{$rp->product_name}}" />            
        </td>
      </tr>
      <tr>
        <td width="20%" class="col3">商品名（補助用語）</td>
        <td><input name="product_name_auxiliary" type="text" id="product_name_auxiliary" size="60" value="{{$rp->product_name_auxiliary}}"/></td>
      </tr>
      <tr>
        <td width="20%" class="col3">キャッチコピー</td>
        <td><textarea name="copy" cols="60" rows="2" id="copy" value="{{$rp->copy}}">{{$rp->copy}}</textarea></td>
      </tr>
      <tr>
        <td width="20%" class="col3">概要</td>
        <td><textarea name="overview" cols="60" rows="3" id="overview" value="{{$rp->overview}}">{{$rp->overview}}</textarea></td>
      </tr>
      <tr>
        <td width="20%" class="col3">セット内容</td>
        <td><textarea name="set_content" cols="60" rows="5" id="set_content" value="{{nl2br($rp->set_content)}}">{{nl2br($rp->set_content)}}</textarea></td>
      </tr>
      <tr>
        <td width="20%" class="col3">注釈</td>
        <td><textarea name="annotation" cols="60" rows="2" id="annotation" value="{{$rp->annotation}}">{{$rp->annotation}}</textarea></td>
      </tr>
      <tr>
        <td width="20%" class="col3">写真-1</td>
        <td><input type="file" name="image_first" id="image_first" value="{{$rp->image_first}}"/></td>
      </tr>
      <tr>
        <td width="20%" class="col3">写真-2</td>
        <td><input type="file" name="image_second" id="image_second" value="{{$rp->image_second}}"/></td>
      </tr>
      <tr>
        <td width="20%" class="col3">表示設定</td>
        <td><input type="checkbox" name="display" id="display" 
             <?php  if($rp->display) echo 'checked="checked"'; ?>/>
          一時的に一般側画面へ表示しない</td>
      </tr>
      <tr>
        <td colspan="2" class="col2">▼料金</td>
        </tr>
      <tr>
        <td width="20%" class="col3">料金の表示 <span class="notnull">[*]</span></td>
        <td><input name="show_rate" type="radio" id="show_rate" value="1" 
                   <?php if($rp->show_rate == 1) echo 'checked="checked"'; ?>/>
          する（以下を埋めてください）<br />
          <input type="radio" name="show_rate" id="show_rate2" value="2"
                <?php if($rp->show_rate == 2) echo 'checked="checked"'; ?> />
          しない（「価格はお問い合わせください」を表示します）</td>
      </tr>
      <tr>
        <td width="20%" class="col3">1日レンタル料金</td>
        <td><input type="text" name="rental_first_price" id="rental_first_price"  value="{{$rp->rental_first_price}}"/>
          円</td>
      </tr>
      <tr>
        <td width="20%" class="col3">1ヶ月レンタル料金</td>
        <td><input type="text" name="rental_one_month_price" id="rental_one_month_price" value="{{$rp->rental_one_month_price}}" />
円</td>
      </tr>
      <tr>
        <td width="20%" class="col3">整備点検費</td>
        <td><input type="text" name="service_cost" id="service_cost" value="{{$rp->service_cost}}"/>
円</td>
      </tr>
      
      <tr>
        <td width="20%" class="col3">表組み</td>
        
         <td><textarea name="omotekumi" cols="90" rows="30" id="omotekumi" value="{{$rp->omotekumi}}">{{$rp->omotekumi}}</textarea></td> 
            
      </tr>
      
      
        <tr>
            <td colspan="2" class="col2">▼トップページ／おすすめ＜レンタル＞商品</td>
        </tr>
        <tr>
            <td class="col3">表示設定</td>
            <td><input type="checkbox" name="display_top" id="display_top" 
                       <?php  if($rp->display_top) echo 'checked="checked"'; ?>
                       />おすすめ＜レンタル＞商品として表示する</td>
        </tr>
    </table>
    </td>
  </tr>  
         <tr>
        <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="submit" name="button" id="button" value="登録する" />     
  </tr>
  {!! Form::close() !!}
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="button" onClick="location.href='<?php echo url('manage/product/rental/?cr_id='.$rp->cat_rental_id); ?>'" value="登録済みレンタル商品一覧に戻る" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
@endsection
<script type="text/javascript">
    window.onload = function () {
        CKEDITOR.replace('omotekumi', {
            filebrowserBrowseUrl: "{!! url('filemanager/show') !!}",
            enterMode	: Number(2)
        });
    };
</script>