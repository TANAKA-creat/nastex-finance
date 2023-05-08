{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('remarks.show') }}">&laquo メモ・備考欄の詳細に移動</a>
    </div>
      <h1>メモ・備考欄 - 編集</h1>
      <div class="form-group remarks-group">
          <form method="post" action="{{ route('remarks.update', $remark->id) }}" class="remarks">
              @csrf
              {{ csrf_field() }}
              <label>
                記録日:<input type="date" name="datetime" class="textarea_date" value="{{ $remark->datetime }}">
            </label>
            <label>
            タイトル:<input type="text" name="title" class="textarea_title" value="{{ $remark->title }}">
            @error('title')
            <div class="error"> {{ $message }}</div>
            @enderror
            </label>
            <label>
            記録内容:<input type="text" name="body" class="textarea_body" value="{{ $remark->body }}">
            @error('body')
            <div class="error"> {{ $message }}</div>
            @enderror
            </label>
            <button type="submit" class="btn btn-warning btn-sm shadow">登録</button>
          </form>
      </div>
      @endsection
  