{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
          <a href="{{ route('outsourcing_deposits.show2') }}">&laquo 外注先入金の詳細に移動</a>

      </div>
      <h1>外注先入金 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('outsourcing_deposits.update', $outsourcing_deposit->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_outsourcing_deposit" class="typing_place" value="{{ $outsourcing_deposit->datetime_outsourcing_deposit }}">
                  @error('datetime_outsourcing_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  入金項目:<input type="text" name="outsourcing_deposit_customer" class="typing_place_string" value="{{ $outsourcing_deposit->outsourcing_deposit_customer }}">
                  @error('outsourcing_deposit_customer')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(rmb):<input type="float" name="rmb_outsourcing_deposit" class="typing_place" value="{{ $outsourcing_deposit->rmb_outsourcing_deposit }}">
                  @error('rmb_outsourcing_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <label>
                  金額(usd):<input type="float" name="usd_outsourcing_deposit"class="typing_place" value="{{ $outsourcing_deposit->usd_outsourcing_deposit }}">
                  @error('usd_outsourcing_deposit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  
          </form>
      </div>
          {{-- </x-layout> --}}
      @endsection
  