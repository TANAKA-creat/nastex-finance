{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
          <a href="{{ route('no_receipt_other_deposits.show2') }}">&laquo 領収書なしその他入金の詳細に移動</a>

      </div>
      <h1>領収書なしその他入金 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('no_receipt_other_deposits.update', $no_receipt_other_deposit->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_no_receipt_other_deposit" class="typing_place" value="{{ $no_receipt_other_deposit->datetime_no_receipt_other_deposit }}">
                  @error('datetime_no_receipt_other_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  入金項目:<input type="text" name="no_receipt_other_deposit_customer" class="typing_place_string" value="{{ $no_receipt_other_deposit->no_receipt_other_deposit_customer }}">
                  @error('no_receipt_other_deposit_customer')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(rmb):<input type="float" name="rmb_no_receipt_other_deposit" class="typing_place" value="{{ $no_receipt_other_deposit->rmb_no_receipt_other_deposit }}">
                  @error('rmb_no_receipt_other_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(usd):<input type="float" name="usd_no_receipt_other_deposit"class="typing_place" value="{{ $no_receipt_other_deposit->usd_no_receipt_other_deposit }}">
                  @error('usd_no_receipt_other_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  
          </form>
          {{-- </x-layout> --}}
      @endsection
  