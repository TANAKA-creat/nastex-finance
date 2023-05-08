{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
          <a href="{{ route('no_receipt_deposits.show2') }}">&laquo 領収書なし国内入金の詳細に移動</a>
          <a href="{{ route('customer2s.show') }}">&laquo 中国顧客データ（領収書なし）の詳細に移動</a>
      </div>
      <h1>領収書なし国内入金 - 登録</h1>
          <div class="form-group">
              <form method="post" action="{{ route('no_receipt_deposits.store') }}" >
                  @csrf
                  {{ csrf_field() }}
                  <label>
                      記録日:<input type="date" name="datetime_no_receipt_deposit" class="typing_place" value="{{old('datetime_no_receipt_deposit')}}">
                  </label>
                  <label>
                    顧客ID:<input type="text" name="no_receipt_deposit_customer_id" class="typing_place" value="{{old('no_receipt_deposit_customer_id')}}">
                    @error('no_receipt_deposit_customer_id')
                    <div class="error"> {{ $message }}</div>
                    @enderror
                    </label>
                  <label>
                  入金項目:<input type="text" name="no_receipt_deposit_customer" class="typing_place_string" value="{{old('no_receipt_deposit_customer')}}">
                  @error('no_receipt_deposit_customer')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(rmb):<input type="float" name="rmb_no_receipt_deposit" class="typing_place" value="{{old('rmb_no_receipt_deposit')}}">
                  @error('rmb_no_receipt_deposit')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(usd):<input type="float" name="usd_no_receipt_deposit"class="typing_place" value="{{old('usd_no_receipt_deposit')}}">
                  @error('usd_no_receipt_deposit')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
          </form>
  {{-- </x-layout> --}}
  @endsection
  
  