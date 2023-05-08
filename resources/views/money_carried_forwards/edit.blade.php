{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      </div>
      <h1>繰越金 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('money_carried_forwards.update', $money_carried_forward->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_money_carried_forward" class="typing_place" value="{{ $money_carried_forward->datetime_money_carried_forward }}">
                  @error('datetime_money_carried_forward')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  繰越項目:<input type="text" name="money_carried_forward_customer" class="typing_place_string" value="{{ $money_carried_forward->money_carried_forward_customer }}">
                  @error('money_carried_forward_customer')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(rmb):<input type="float" name="rmb_money_carried_forward" class="typing_place" value="{{ $money_carried_forward->rmb_money_carried_forward }}">
                  @error('rmb_money_carried_forward')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(usd):<input type="float" name="usd_money_carried_forward"class="typing_place" value="{{ $money_carried_forward->usd_money_carried_forward }}">
                  @error('usd_money_carried_forward')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  
          </form>
          {{-- </x-layout> --}}
      @endsection
  