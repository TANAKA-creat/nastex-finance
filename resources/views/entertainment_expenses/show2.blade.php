{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>接待費用支払 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('entertainment_expenses.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('entertainment_expenses.create') }}">&laquo; 接待費用支払の登録に移動</a>
                </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('entertainment_expenses.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="entertainment_expense_creditor" placeholder="項目名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $entertainment_expenses_total = $entertainment_expenses->sum('rmb_entertainment_expense'); ?>
                      合計： <?php echo number_format($entertainment_expenses_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_entertainment_expense','記録日')</th>
                            <th class="point">@sortablelink('entertainment_expense_creditor','支払項目')</th>
                            <th>@sortablelink('rmb_entertainment_expense','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($entertainment_expenses as $entertainment_expense)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $entertainment_expense->datetime_entertainment_expense}}</td>
                                  <td>{{ $entertainment_expense->entertainment_expense_creditor}}</td>
                                  <td>{{ $entertainment_expense->rmb_entertainment_expense }}</td>
                                  <td>{{ $entertainment_expense->usd_entertainment_expense}}</td>
                                  <td><a href="/entertainment_expenses/edit/{{ $entertainment_expense->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('entertainment_expenses.destroy', $entertainment_expense->id) }}"
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
  