{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
      <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('material_credits.show2') }}">&laquo 資材支払の詳細に移動</a>
  </div>
  <h1>資材支払 - 登録</h1>
      <div class="form-group">
          <form method="post" action="{{ route('material_credits.store') }}" >
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_material_credit" class="typing_place" value="{{old('datetime_material_credit')}}">
              </label>
              <label>
                  支払項目:<input type="text" name="material_creditor" class="typing_place_string" value="{{old('material_creditor')}}">
              @error('material_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(rmb):<input type="double" name="rmb_material_credit" class="typing_place" value="{{old('rmb_material_credit')}}">
              @error('rmb_material_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(usd):<input type="double" name="usd_material_credit"class="typing_place" value="{{old('usd_material_credit')}}">
              @error('usd_material_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
            </form>
{{-- </x-layout> --}}
@endsection