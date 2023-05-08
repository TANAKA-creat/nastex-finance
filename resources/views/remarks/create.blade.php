  @extends('components.layout')

  @section('content')
      
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
      </div>
      <h1>メモ・備考欄 - 登録</h1>
          <div class="form-group remarks-group">
              <form method="post" action="{{ route('remarks.store') }}" class="remarks" >
                  @csrf
                  {{ csrf_field() }}
                  <label>
                      記録日:<input type="date" name="datetime" class="textarea_date" value="{{old('datetime')}}">
                  </label>
                  <label>
                  タイトル:<input type="string" name="title" class="textarea_title" value="{{old('title')}}">
                  @error('title')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
                  <label>
                  記録内容:<input type="string" name="body" class="textarea_body" value="{{old('body')}}">
                  @error('body')
                  <div class="error"> {{ $message }}</div>
                  @enderror
                  </label>
              <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
          </form>
          </div>
  @endsection
  
  