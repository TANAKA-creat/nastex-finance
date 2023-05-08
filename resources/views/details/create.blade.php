{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
    
    <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('details.show2') }}">&laquo 日本本社入金の詳細に移動</a>

    </div>
    <h1>日本本社入金 - 登録</h1>
        <div class="form-group">
            <form method="post" action="{{ route('details.store') }}" >
                @csrf
                {{ csrf_field() }}
                <label>
                    記録日:<input type="date" name="datetime" class="typing_place" value="{{old('datetime')}}">
                </label>
                <label>
                入金項目:<input type="text" name="customer" class="typing_place_string" value="{{old('customer')}}">
                @error('customer')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(rmb):<input type="float" name="rmb" class="typing_place" value="{{old('rmb')}}">
                @error('rmb')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                金額(usd):<input type="float" name="usd"class="typing_place" value="{{old('usd')}}">
                @error('usd')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
            <button type="submit" data-toggle="button" class="btn btn-warning btn-sm shadow">登録</button>
        </form>
{{-- </x-layout> --}}
@endsection

