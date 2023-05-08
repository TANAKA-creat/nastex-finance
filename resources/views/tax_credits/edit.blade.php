{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
     <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('tax_credits.show2') }}">&laquo 税金支払いの詳細に移動</a>

  </div>
  <h1>税金支払 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('tax_credits.update', $tax_credit->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                記録日:<input type="date" name="datetime_tax_credit" class="typing_place" value="{{ $tax_credit->datetime_tax_credit }}">
                @error('datetime_tax_credit')
                    <div class="error"> {{ $message }}</div>
                @enderror
                </label>

              <label>
              支払項目:<input type="text" name="tax_creditor" class="typing_place_string" value="{{$tax_credit->tax_creditor}}">
              @error('tax_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(rmb):<input type="float" name="rmb_tax_credit" class="typing_place" value="{{$tax_credit->rmb_tax_credit}}">
              @error('rmb_tax_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(usd):<input type="float" name="usd_tax_credit"class="typing_place" value="{{$tax_credit->usd_tax_credit}}">
              @error('usd_tax_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
      </form>
{{-- </x-layout> --}}
@endsection

