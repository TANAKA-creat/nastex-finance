{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
              {{-- <div class="col-md-6"> --}}
  
                  <div class="back-link">
                    <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
                    <a href="{{ route('remarks.create') }}">&laquo; メモ・備考欄の登録に移動</a>
                </div>
                  <h1>メモ・備考欄 - 詳細</h1>
  
                      <table border="2" class="table" style="solid 2px";>
  
                          <thead>
                              <tr>
                                  <th>記録日</th>
                                  <th>タイトル</th>
                                  <th>記録内容</th>
                                  <th>編集</th>
                                  <th>削除</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($remarks as $remark)
                                  @if ($loop->iteration % 1 !== 0)
                                  @endif
                                  <tr>
                                      <td>{{ $remark->datetime }}</td>
                                      <td>{{ $remark->title }}</td>
                                      <td>{{ $remark->body }}</td>
                                      <td><a href="/remarks/edit/{{ $remark->id }}">編集</a>
                                      </td>
                                      <td>
                                          <form method="POST"
                                              action="{{ route('remarks.destroy', $remark->id) }}"
                                              id="delete">
                                              @method('DELETE')
                                              @csrf
                                              <button>削除</button>
                                          </form>
                                      </td>
                                      @if ($loop->iteration % 1 === 0)
                                  </tr>
                              @endif
                              @endforeach
                          </tbody>
                      </table>
                  </div>
          </div>
      @endsection
  