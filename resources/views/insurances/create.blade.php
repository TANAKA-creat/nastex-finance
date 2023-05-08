{{-- <x-layout> --}}
@extends('components.layout')

@section('content')

  <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('insurances.show2') }}">&laquo 保険料支払の詳細に移動</a>
  </div>
  <h1>保険料支払 - 登録</h1>
      <div class="form-group">
          <form method="post" action="{{ route('insurances.store') }}" >
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_insurance" class="typing_place" value="{{old('datetime_insurance')}}">
              </label>
              <label>
                  支払項目:<input type="text" name="insurance_creditor" class="typing_place_string" value="{{old('insurance_creditor')}}">
              @error('insurance_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(rmb):<input type="double" name="rmb_insurance" class="typing_place" value="{{old('rmb_insurance')}}">
              @error('rmb_insurance')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(usd):<input type="double" name="usd_insurance"class="typing_place" value="{{old('usd_insurance')}}">
              @error('usd_insurance')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
            </form>
{{-- </x-layout> --}}
@endsection
