{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
   
  <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('travel_expenses.show2') }}">&laquo 旅費支払の詳細に移動</a>
  </div>
  <h1>旅費支払 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('travel_expenses.update', $travel_expense->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                記録日:<input type="date" name="datetime_travel_expense" class="typing_place" value="{{ $travel_expense->datetime_travel_expense }}">
                @error('datetime_travel_expense')
                    <div class="error"> {{ $message }}</div>
                @enderror
                </label>
              <label>
              支払項目:<input type="text" name="travel_expense_creditor" class="typing_place_string" value="{{$travel_expense->travel_expense_creditor}}">
              @error('travel_expense_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(rmb):<input type="float" name="rmb_travel_expense" class="typing_place" value="{{$travel_expense->rmb_travel_expense}}">
              @error('rmb_travel_expense')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(usd):<input type="float" name="usd_travel_expense"class="typing_place" value="{{$travel_expense->usd_travel_expense}}">
              @error('usd_travel_expense')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
      </form>
{{-- </x-layout> --}}
@endsection

