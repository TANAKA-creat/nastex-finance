{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
              <div class="col-md-6">
  
                  <div class="back-link">
                      <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
                      <a href="{{ route('money_carried_forwards.create') }}">&laquo; 繰越金の登録に移動</a>
                  </div>
                  <h1>繰越金</h1>
                  <table border="2" class="table1">
  
                      <thead>
                          <tr>
                              <th>記録日</th>
                              <th>繰越項目</th>
                              <th>金額（RMB）</th>
                              <th>金額（USD）</th>
                              <th>編集</th>
                              <th>削除</th>                
                          </tr>
                                    </tr>
                      </thead>
                      <tbody>
                          @foreach ($money_carried_forwards as $money_carried_forward)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $money_carried_forward->datetime_money_carried_forward }}</td>
                                  <td>{{ $money_carried_forward->money_carried_forward_customer }}</td>
                                  <td>{{ $money_carried_forward->rmb_money_carried_forward }}</td>
                                  <td>{{ $money_carried_forward->usd_money_carried_forwardt }}</td>
                                  <td><a href="/money_carried_forwards/edit/{{ $money_carried_forward->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('money_carried_forwards.destroy', $money_carried_forward->id) }}"
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
  
              {{-- <div class="col-md-6">
                  <div class="test">
                      <form action="#" method="GET">
  
                          <div class="form-group">
                              <input type="date" name="from" placeholder="これから">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="ここまで">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div> --}}
  
                  {{-- <table border="2" class="table1">
  
                      <thead>
                          <tr>
                              <th>記録日</th>
                              <th>入金項目</th>
                              <th>金額（RMB）</th>
                              <th>金額（USD）</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($details as $detail)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $detail->datetime }}</td>
                                  <td>{{ $detail->customer }}</td>
                                  <td>{{ $detail->rmb }}</td>
                                  <td>{{ $detail->usd }}</td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div> --}}
      </div>
      </div>
  @endsection
  