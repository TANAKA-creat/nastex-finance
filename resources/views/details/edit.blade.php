{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
    <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('details.show2') }}">&laquo 日本本社入金の詳細に移動</a>
    </div>
    <h1>日本本社入金 - 編集</h1>
    <div class="form-group">
        <form method="post" action="{{ route('details.update', $detail->id) }}">
            @csrf
            {{ csrf_field() }}
            <label>
                記録日:<input type="date" name="datetime" class="typing_place" value="{{ $detail->datetime }}">
                @error('datetime')
                    <div class="error"> {{ $message }}</div>
                @enderror
            </label>
            <label>
                入金項目:<input type="text" name="customer" class="typing_place_string" value="{{ $detail->customer }}">
                @error('customer')
                    <div class="error"> {{ $message }}</div>
                @enderror
            </label>
            <label>
                金額(rmb):<input type="float" name="rmb" class="typing_place" value="{{ $detail->rmb }}">
                @error('rmb')
                    <div class="error"> {{ $message }}</div>
                @enderror
            </label>
            <label>
                金額(usd):<input type="float" name="usd"class="typing_place" value="{{ $detail->usd }}">
                @error('usd')
                    <div class="error"> {{ $message }}</div>
                @enderror
            </label>
            <button type="submit" data-toggle="button" class="btn btn-warning btn-sm shadow-lg">編集</button>

        </form>
        {{-- </x-layout> --}}
    @endsection
