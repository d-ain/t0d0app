@extends('layouts.default')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title', 'ToDo List')

@section('content')

<form action="{{url('/add')}}" method="post">
  @csrf
  <input type="text" name="content">
  <button type="submit">追加</button>
</form>

<table>
  @foreach ($items as $item)
  <tr>
    <td>
      作成日：{{$item->updated_at}}
    </td>
    <td>
      <form action="{{url('/update',$item->id)}}" method="post">
      @csrf
      タスク名：<input type="text" name="content" value="{{$item->content}}">
    <td>
      <button type="submit">更新</button>
    </td>
      </form>
    </td>
    <td>
      <form action="{{url('/delete',$item->id)}}" method="post">
      @csrf
      <button type="submit">削除</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>



@endsection