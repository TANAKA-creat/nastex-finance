{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>雑費支払 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('miscellaneous_expenses.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('miscellaneous_expenses.create') }}">&laquo; 雑費支払の登録に移動</a>

              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('miscellaneous_expenses.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="miscellaneous_expense_creditor" placeholder="項目名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $miscellaneous_expenses_total = $miscellaneous_expenses->sum('rmb_miscellaneous_expense'); ?>
                      合計： <?php echo number_format($miscellaneous_expenses_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_miscellaneous_expense','記録日')</th>
                            <th class="point">@sortablelink('miscellaneous_expense_creditor','支払項目')</th>
                            <th>@sortablelink('rmb_miscellaneous_expense','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($miscellaneous_expenses as $miscellaneous_expense)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $miscellaneous_expense->datetime_miscellaneous_expense}}</td>
                                  <td>{{ $miscellaneous_expense->miscellaneous_expense_creditor}}</td>
                                  <td>{{ $miscellaneous_expense->rmb_miscellaneous_expense}}</td>
                                  <td>{{ $miscellaneous_expense->usd_miscellaneous_expense}}</td>
                                  <td><a href="/miscellaneous_expenses/edit/{{ $miscellaneous_expense->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('miscellaneous_expenses.destroy', $miscellaneous_expense->id) }}"
                                          id="delete">
                                          @method('DELETE')
                                          @csrf
                                          <button>削除</button>
                                      </form>
                                  </td>
                                  @if ($loop->iteration % 1 === 0)
                                  @endif
                              </tr>
                          @endforeach
  
                      </tbody>
                  </table>
              </div>
  
          </div>
      </div>
  @endsection
  