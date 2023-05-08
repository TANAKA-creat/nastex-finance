{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
      <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('logistics_costs.show2') }}">&laquo 物流費用支払の詳細に移動</a>

  </div>
  <h1>物流費用支払 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('logistics_costs.update', $logistics_cost->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                記録日:<input type="date" name="datetime_logistics_cost" class="typing_place" value="{{ $logistics_cost->datetime_logistics_cost }}">
                @error('datetime_logistics_cost')
                    <div class="error"> {{ $message }}</div>
                @enderror
              </label>
              <label>
              支払項目:<input type="text" name="logistics_cost_creditor" class="typing_place_string" value="{{$logistics_cost->logistics_cost_creditor}}">
              @error('logistics_cost_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(rmb):<input type="float" name="rmb_logistics_cost" class="typing_place" value="{{$logistics_cost->rmb_logistics_cost}}">
              @error('rmb_logistics_cost')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(usd):<input type="float" name="usd_logistics_cost"class="typing_place" value="{{$logistics_cost->usd_logistics_cost}}">
              @error('usd_logistics_cost')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
      </form>
{{-- </x-layout> --}}
@endsection
