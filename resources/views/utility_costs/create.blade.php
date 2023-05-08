{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
   
  <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('utility_costs.show2') }}">&laquo 光熱費用支払の詳細に移動</a>
  </div>
  <h1>光熱費用支払 - 登録</h1>
      <div class="form-group">
          <form method="post" action="{{ route('utility_costs.store') }}" >
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_utility_cost" class="typing_place" value="{{old('datetime_utility_cost')}}">
              </label>
              <label>
                  支払項目:<input type="text" name="utility_cost_creditor" class="typing_place_string" value="{{old('utility_cost_creditor')}}">
              @error('utility_cost_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(rmb):<input type="double" name="rmb_utility_cost" class="typing_place" value="{{old('rmb_utility_cost')}}">
              @error('rmb_utility_cost')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(usd):<input type="double" name="usd_utility_cost"class="typing_place" value="{{old('usd_utility_cost')}}">
              @error('usd_utility_cost')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
            </form>
{{-- </x-layout> --}}
@endsection
