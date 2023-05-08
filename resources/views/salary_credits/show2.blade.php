{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>給料支払 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('salary_credits.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('salary_credits.create') }}">&laquo; 給料支払の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('salary_credits.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="salary_creditor" placeholder="項目名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $salary_credits_total = $salary_credits->sum('rmb_salary_credit'); ?>
                      合計： <?php echo number_format($salary_credits_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_salary_credit','記録日')</th>
                            <th class="point">@sortablelink('salary_creditor','支払項目')</th>
                            <th>@sortablelink('rmb_salary_credit','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($salary_credits as $salary_credit)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $salary_credit->datetime_salary_credit}}</td>
                                  <td>{{ $salary_credit->salary_creditor}}</td>
                                  <td>{{ $salary_credit->rmb_salary_credit}}</td>
                                  <td>{{ $salary_credit->usd_salary_credit}}</td>
                                  <td><a href="/salary_credits/edit/{{ $salary_credit->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('salary_credits.destroy', $salary_credit->id) }}"
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
  