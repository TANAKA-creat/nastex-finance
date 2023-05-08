{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
        <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('no_receipt_credits.show2') }}">&laquo 領収書なし支払の詳細に移動</a>
    </div>
    <h1>領収書なし支払 - 登録</h1>
        <div class="form-group">
            <form method="post" action="{{ route('no_receipt_credits.store') }}" >
                @csrf
                {{ csrf_field() }}
                <label>
                    記録日:<input type="date" name="datetime_no_receipt_credit" class="typing_place" value="{{old('datetime_no_receipt_credit')}}">
                </label>
                <label>
                    支払項目:<input type="text" name="no_receipt_credit_creditor" class="typing_place_string" value="{{old('no_receipt_credit_creditor')}}">
                @error('no_receipt_credit_creditor')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                    金額(rmb):<input type="double" name="rmb_no_receipt_credit" class="typing_place" value="{{old('rmb_no_receipt_credit')}}">
                @error('rmb_no_receipt_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                    金額(usd):<input type="double" name="usd_no_receipt_credit"class="typing_place" value="{{old('usd_no_receipt_credit')}}">
                @error('usd_no_receipt_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
              </form>
  {{-- </x-layout> --}}
  @endsection
  