{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
          <a href="{{ route('customers.show') }}">&laquo; 中国国内顧客データの詳細に移動</a>
      </div>
      <h1>中国国内顧客データ - 登録</h1>
          <div class="form-group">
              <form method="post" action="{{ route('within_china_deposits.add_customer') }}" >
                  @csrf
                  {{ csrf_field() }}
                  <label>
                  顧客名:<input type="text" name="within_china_deposit_customer" class="typing_place" value="{{old('within_china_deposit_customer')}}">
                  @error('within_china_deposit_customer')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  顧客ID:<input type="number" name="within_china_deposit_customer_id" class="typing_place" value="{{old('within_china_deposit_customer_id')}}">
                  @error('within_china_deposit_customer_id')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
          </form>
  {{-- </x-layout> --}}
  @endsection
  
  