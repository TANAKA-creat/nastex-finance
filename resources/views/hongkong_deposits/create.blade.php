{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
          <a href="{{ route('hongkong_deposits.show2') }}">&laquo 香港TAKAGI入金の詳細に移動</a>
      </div>
      <h1>香港TAKAGI入金 - 登録</h1>
          <div class="form-group">
              <form method="post" action="{{ route('hongkong_deposits.store') }}" >
                  @csrf
                  {{ csrf_field() }}
                  <label>
                      記録日:<input type="date" name="datetime_hongkong_deposit" class="typing_place" value="{{old('datetime_hongkong_deposit')}}">
                  </label>
                  <label>
                  入金項目:<input type="text" name="hongkong_deposit_customer" class="typing_place_string" value="{{old('hongkong_deposit_customer')}}">
                  @error('hongkong_deposit_customer')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(rmb):<input type="float" name="rmb_hongkong_deposit" class="typing_place" value="{{old('rmb_hongkong_deposit')}}">
                  @error('rmb_hongkong_deposit')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(usd):<input type="float" name="usd_hongkong_deposit"class="typing_place" value="{{old('usd_hongkong_deposit')}}">
                  @error('usd_hongkong_deposit')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
          </form>
  {{-- </x-layout> --}}
  @endsection
  
  