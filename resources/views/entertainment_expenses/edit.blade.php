{{-- <x-layout> --}}
@extends('components.layout')

@section('content')

  <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('entertainment_expenses.show2') }}">&laquo 接待費用支払の詳細に移動</a>
  </div>
  <h1>接待費用支払 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('entertainment_expenses.update', $entertainment_expense->id) }}">
              @csrf
              {{ csrf_field() }}
            <label>
                記録日:<input type="date" name="datetime_entertainment_expense" class="typing_place" value="{{$entertainment_expense->datetime_entertainment_expense}}">
                @error('datetime_entertainment_expense')
                <div class="error"> {{ $message }}</div>
                @enderror
  
            </label>
            <label>
              支払項目:<input type="text" name="entertainment_expense_creditor" class="typing_place_string" value="{{$entertainment_expense->entertainment_expense_creditor}}">
              @error('entertainment_expense_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(rmb):<input type="float" name="rmb_entertainment_expense" class="typing_place" value="{{$entertainment_expense->rmb_entertainment_expense}}">
              @error('rmb_entertainment_expense')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(usd):<input type="float" name="usd_entertainment_expense"class="typing_place" value="{{$entertainment_expense->usd_entertainment_expense}}">
              @error('usd_entertainment_expense')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
      </form>
{{-- </x-layout> --}}
@endsection