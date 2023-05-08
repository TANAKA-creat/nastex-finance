{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
        <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('no_receipt_credits.show2') }}">&laquo 領収書なし支払の詳細に移動</a>

    </div>
    <h1>領収書なし支払 - 編集</h1>
        <div class="form-group">
            <form method="post" action="{{ route('no_receipt_credits.update', $no_receipt_credit->id) }}">
                @csrf
                {{ csrf_field() }}
                <label>
                  記録日:<input type="date" name="datetime_no_receipt_credit" class="typing_place" value="{{ $no_receipt_credit->datetime_no_receipt_credit }}">
                  @error('datetime_no_receipt_credit')
                      <div class="error"> {{ $message }}</div>
                  @enderror
                </label>
                <label>
                支払項目:<input type="text" name="no_receipt_credit_creditor" class="typing_place_string" value="{{$no_receipt_credit->no_receipt_credit_creditor}}">
                @error('no_receipt_credit_creditor')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(rmb):<input type="float" name="rmb_no_receipt_credit" class="typing_place" value="{{$no_receipt_credit->rmb_no_receipt_credit}}">
                @error('rmb_no_receipt_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(usd):<input type="float" name="usd_no_receipt_credit"class="typing_place" value="{{$no_receipt_credit->usd_no_receipt_credit}}">
                @error('usd_no_receipt_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
        </form>
  {{-- </x-layout> --}}
  @endsection
  
  