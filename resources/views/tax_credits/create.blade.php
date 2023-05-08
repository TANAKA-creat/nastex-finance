{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
   
    <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('tax_credits.show2') }}">&laquo 税金支払いの詳細に移動</a>
    </div>
    <h1>税金支払 - 登録</h1>
        <div class="form-group">
            <form method="post" action="{{ route('tax_credits.store') }}" >
                @csrf
                {{ csrf_field() }}
                <label>
                    記録日:<input type="date" name="datetime_tax_credit" class="typing_place" value="{{old('datetime_tax_credit')}}">
                </label>
                <label>
                    支払項目:<input type="text" name="tax_creditor" class="typing_place_string" value="{{old('tax_creditor')}}">
                @error('tax_creditor')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                    金額(rmb):<input type="double" name="rmb_tax_credit" class="typing_place" value="{{old('rmb_tax_credit')}}">
                @error('rmb_tax_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                    金額(usd):<input type="double" name="usd_tax_credit"class="typing_place" value="{{old('usd_tax_credit')}}">
                @error('usd_tax_credit')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
            </form>
{{-- </x-layout> --}}
@endsection
