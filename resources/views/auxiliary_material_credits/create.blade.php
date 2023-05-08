{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
  <div class="back-link">
    <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
    <a href="{{ route('auxiliary_material_credits.show2') }}">&laquo; 副資材支払の詳細に移動</a>
  </div>
  <h1>副資材支払 - 登録</h1>
      <div class="form-group">
          <form method="post" action="{{ route('auxiliary_material_credits.store') }}">
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_auxiliary_material_credit" class="typing_place" value="{{old('datetime_auxiliary_material_credit')}}">
              </label>
              <label>
                  支払項目:<input type="text" name="auxiliary_material_credit_creditor" class="typing_place_string" value="{{old('auxiliary_material_credit_creditor')}}">
              @error('auxiliary_material_credit_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(rmb):<input type="double" name="rmb_auxiliary_material_credit" class="typing_place" value="{{old('rmb_auxiliary_material_credit')}}">
              @error('rmb_auxiliary_material_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(usd):<input type="double" name="usd_auxiliary_material_credit"class="typing_place" value="{{old('usd_auxiliary_material_credit')}}">
              @error('usd_auxiliary_material_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
            </form>
      </div>
{{-- </x-layout> --}}
@endsection
