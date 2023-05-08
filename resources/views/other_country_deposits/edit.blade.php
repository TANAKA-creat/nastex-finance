{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
          <a href="{{ route('other_country_deposits.show2') }}">&laquo 第三国入金の詳細に移動</a>
      </div>
      <h1>第三国入金 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('other_country_deposits.update', $other_country_deposit->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_other_country_deposit" class="typing_place" value="{{ $other_country_deposit->datetime_other_country_deposit }}">
                  @error('datetime_other_country_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  入金項目:<input type="text" name="other_country_deposit_customer" class="typing_place_string" value="{{ $other_country_deposit->other_country_deposit_customer }}">
                  @error('other_country_deposit_customer')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(rmb):<input type="float" name="rmb_other_country_deposit" class="typing_place" value="{{ $other_country_deposit->rmb_other_country_deposit }}">
                  @error('rmb_other_country_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(usd):<input type="float" name="usd_other_country_deposit"class="typing_place" value="{{ $other_country_deposit->usd_other_country_deposit }}">
                  @error('usd_other_country_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  
          </form>
          {{-- </x-layout> --}}
      @endsection
  