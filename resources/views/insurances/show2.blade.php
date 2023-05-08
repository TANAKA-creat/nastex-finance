{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>保険料支払 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('insurances.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('insurances.create') }}">&laquo; 保険料支払の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('insurances.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="insurance_creditor" placeholder="項目名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $insurances_total = $insurances->sum('rmb_insurance'); ?>
                      合計： <?php echo number_format($insurances_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_insurance','記録日')</th>
                            <th class="point">@sortablelink('insurance_creditor','支払項目')</th>
                            <th>@sortablelink('rmb_insurance','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($insurances as $insurance)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $insurance->datetime_insurance}}</td>
                                  <td>{{ $insurance->insurance_creditor}}</td>
                                  <td>{{ $insurance->rmb_insurance }}</td>
                                  <td>{{ $insurance->usd_insurance}}</td>
                                  <td><a href="/insurances/edit/{{ $insurance->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('insurances.destroy', $insurance->id) }}"
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
  