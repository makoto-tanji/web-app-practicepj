@extends('layouts.default')
@section('content')
<div class="container">
  <h2 class="ttl_todo">Todo List</h2>

  <div class="main">
    @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <form action="/todo/create" method="POST" class="form_add">
      @csrf
      <input type="text" name="content" class="input_text text_add">
      <input type="submit" class="btn btn_add" value="追加">
    </form>
  
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach ($items as $item)
      <tr>
        <td>{{$item->created_at}}</td>
        <form action="/todo/update?id={{$item->id}}" method="POST">
          @csrf
          <td>
            <input type="text" name="content" class="input_text" value="{{$item->content}}">
          </td>
          <td>
            <input type="submit" class="btn btn_update" value="更新">
          </td>
        </form>
        <td>
          <form action="/todo/delete?id={{$item->id}}" method="POST">
            @csrf
            <input type="submit" class="btn btn_delete" value="削除">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div><!--end main-->
</div><!--end container-->

@endsection