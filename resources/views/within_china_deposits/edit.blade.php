{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
    <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
        <a href="{{ route('within_china_deposits.show2') }}">&laquo; 中国国内入金の詳細に移動</a>
    </div>
    <h1>中国国内入金 - 編集</h1>
        <div class="form-group">
            <form method="post" action="{{ route('within_china_deposits.update', $within_china_deposit->id) }}">
                @csrf
                {{ csrf_field() }}
                <label>
                記録日:<input type="date" name="datetime_within_china_deposit" class="typing_place" value="{{ $within_china_deposit->datetime_within_china_deposit }}">
                @error('datetime_within_china_deposit')
                    <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                顧客ID:<input type="number" name="within_china_deposit_customer_id"class="typing_place" value="{{old('within_china_deposit_customer_id')}}">
                @error('within_china_deposit_customer_id')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                入金項目:<input type="text" name="within_china_deposit_customer" class="typing_place_string" value="{{$within_china_deposit->within_china_deposit_customer}}">
                @error('within_china_deposit_customer')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(rmb):<input type="float" name="rmb_within_china_deposit" class="typing_place" value="{{$within_china_deposit->rmb_within_china_deposit}}">
                @error('rmb_within_china_deposit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(usd):<input type="float" name="usd_within_china_deposit"class="typing_place" value="{{$within_china_deposit->usd_within_china_deposit}}">
                @error('usd_within_china_deposit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>

                <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  
        </form>
  {{-- </x-layout> --}}
  @endsection
  