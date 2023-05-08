{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
     <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('ticket_fees.show2') }}">&laquo チケット費用支払の詳細に移動</a>
  </div>
  <h1>チケット費用支払 - 登録</h1>
      <div class="form-group">
          <form method="post" action="{{ route('ticket_fees.store') }}" >
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_ticket_fee" class="typing_place" value="{{old('datetime_ticket_fee')}}">
              </label>
              <label>
                  支払項目:<input type="text" name="ticket_fee_creditor" class="typing_place_string" value="{{old('ticket_fee_creditor')}}">
              @error('ticket_fee_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(rmb):<input type="double" name="rmb_ticket_fee" class="typing_place" value="{{old('rmb_ticket_fee')}}">
              @error('rmb_ticket_fee')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(usd):<input type="double" name="usd_ticket_fee"class="typing_place" value="{{old('usd_ticket_fee')}}">
              @error('usd_ticket_fee')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
            </form>
{{-- </x-layout> --}}
@endsection
