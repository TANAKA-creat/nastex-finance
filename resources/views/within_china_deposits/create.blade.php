{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
      <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
        <a href="{{ route('within_china_deposits.show2') }}">&laquo; 中国国内入金の詳細に移動</a>
        <a href="{{ route('customers.show') }}">&laquo; 中国国内顧客データ（領収書有り）の詳細に移動</a>
    </div>
      <h1>中国国内入金 - 登録</h1>
          <div class="form-group">
              <form method="post" action="{{ route('within_china_deposits.store') }}" >
                  @csrf
                  {{ csrf_field() }}
                  <label>
                  記録日:<input type="date" name="datetime_within_china_deposit" class="typing_place" value="{{old('datetime_within_china_deposit')}}">
                  </label>
                  <label>
                  顧客ID:<input type="number" name="within_china_deposit_customer_id"class="typing_place" value="{{old('within_china_deposit_customer_id')}}">
                  @error('within_china_deposit_customer_id')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  入金項目:<input type="text" name="within_china_deposit_customer" class="typing_place_string" value="{{old('within_china_deposit_customer')}}">
                  @error('within_china_deposit_customer')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(rmb):<input type="float" name="rmb_within_china_deposit" class="typing_place" value="{{old('rmb_within_china_deposit')}}">
                  @error('rmb_within_china_deposit')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  金額(usd):<input type="float" name="usd_within_china_deposit"class="typing_place" value="{{old('usd_within_china_deposit')}}">
                  @error('usd_within_china_deposit')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
          </form>

          {{-- <div class="form-group">
            <form method="post" action="{{ route('customers.customer_id') }}" >
                @csrf
                {{ csrf_field() }}
                                <label>
                                    入金項目:<input type="text" name="customer_name" class="typing_place_string" value="{{old('customer_name')}}">
                                    </label>
                    <button type="submit" class="btn btn-warning btn-sm shadow">検索</button>
            </form>
          </div> --}}



    


  {{-- </x-layout> --}}
  @endsection
  
  