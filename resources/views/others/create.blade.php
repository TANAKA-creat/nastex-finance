{{-- <x-layout> --}}
 @extends('components.layout')
 
 @section('content')
  <div class="back-link">
      <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      <a href="{{ route('others.show2') }}">&laquo その他支払の詳細に移動</a>

  </div>
  <h1>その他支払 - 登録</h1>
      <div class="form-group">
          <form method="post" action="{{ route('others.store') }}" >
              @csrf
              {{ csrf_field() }}
              <label>
                  記録日:<input type="date" name="datetime_other" class="typing_place" value="{{old('datetime_other')}}">
              </label>
              <label>
                  支払項目:<input type="text" name="other_creditor" class="typing_place_string" value="{{old('other_creditor')}}">
              @error('other_creditor')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(rmb):<input type="double" name="rmb_other" class="typing_place" value="{{old('rmb_other')}}">
              @error('rmb_other')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <label>
                  金額(usd):<input type="double" name="usd_other"class="typing_place" value="{{old('usd_other')}}">
              @error('usd_other')
              <div class="error"> {{ $message }}</div>
              @enderror
              </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
            </form>
{{-- </x-layout> --}}
@endsection
