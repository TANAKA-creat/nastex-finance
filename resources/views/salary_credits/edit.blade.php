{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
   
  <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('salary_credits.show2') }}">&laquo 給料支払いの詳細に移動</a>
  </div>
  <h1>給料支払 - 編集</h1>
      <div class="form-group">
          <form method="post" action="{{ route('salary_credits.update', $salary_credit->id) }}">
              @csrf
              {{ csrf_field() }}
              <label>
                記録日:<input type="date" name="datetime_salary_credit" class="typing_place" value="{{ $salary_credit->datetime_salary_credit }}">
                @error('datetime_salary_credit')
                    <div class="error"> {{ $message }}</div>
                @enderror
            </label>
              <label>
              支払項目:<input type="text" name="salary_creditor" class="typing_place_string" value="{{$salary_credit->salary_creditor}}">
              @error('salary_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(rmb):<input type="float" name="rmb_salary_credit" class="typing_place" value="{{$salary_credit->rmb_salary_credit}}">
              @error('rmb_salary_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
              金額(usd):<input type="float" name="usd_salary_credit"class="typing_place" value="{{$salary_credit->usd_salary_credit}}">
              @error('usd_salary_credit')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
      </form>
{{-- </x-layout> --}}
@endsection

