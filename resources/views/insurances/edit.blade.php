{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
      <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('insurances.show2') }}">&laquo 保険料支払の詳細に移動</a>
  </div>
  <h1>保険料支払 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('insurances.update', $insurance->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                記録日:<input type="date" name="datetime_insurance" class="typing_place" value="{{ $insurance->datetime_insurance }}">
                @error('datetime_insurance')
                    <div class="error"> {{ $message }}</div>
                @enderror
              </label>
              <label>
              支払項目:<input type="text" name="insurance_creditor" class="typing_place_string" value="{{$insurance->insurance_creditor}}">
              @error('insurance_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(rmb):<input type="float" name="rmb_insurance" class="typing_place" value="{{$insurance->rmb_insurance}}">
              @error('rmb_insurance')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(usd):<input type="float" name="usd_insurance"class="typing_place" value="{{$insurance->usd_insurance}}">
              @error('usd_insurance')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
      </form>
{{-- </x-layout> --}}
@endsection

