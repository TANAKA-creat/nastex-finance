{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      </div>
      <h1>繰越金 - 登録</h1>
          <div class="form-group">
              <form method="post" action="{{ route('money_carried_forwards.store') }}" >
                  @csrf
                  {{ csrf_field() }}
                  <label>
                  記録日:<input type="date" name="datetime_money_carried_forward" class="typing_place" value="{{old('datetime_money_carried_forward')}}">
                  </label>
                  <label>
                  繰越項目:<input type="text" name="money_carried_forward_customer" class="typing_place_string" value="{{old('money_carried_forward_customer')}}">
                  @error('money_carried_forward_customer')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(rmb):<input type="float" name="rmb_money_carried_forward" class="typing_place" value="{{old('rmb_money_carried_forward')}}">
                  @error('rmb_money_carried_forward')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(usd):<input type="float" name="usd_money_carried_forward"class="typing_place" value="{{old('usd_money_carried_forward')}}">
                  @error('usd_money_carried_forward')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
          </form>
  {{-- </x-layout> --}}
  @endsection
  
  