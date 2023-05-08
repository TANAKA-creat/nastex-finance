{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>中国国内入金 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('within_china_deposits.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('within_china_deposits.create') }}">&laquo; 中国国内入金の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('within_china_deposits.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="within_china_deposit_customer" placeholder="顧客名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $within_china_deposits_total = $within_china_deposits->sum('rmb_within_china_deposit'); ?>
                      合計： <?php echo number_format($within_china_deposits_total, 2); ?>
                    </span>

                    <span class="show-total">
                        <?php $within_china_deposits_total = $within_china_deposits->avg('rmb_within_china_deposit'); ?>
                        平均： <?php echo number_format($within_china_deposits_total, 2); ?>
                      </span>
  
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_within_china_deposit','記録日')</th>
                            <th>@sortablelink('within_china_deposit_customer_id','顧客ID')</th>
                            <th>@sortablelink('within_china_deposit_customer','入金項目')</th>
                            <th>@sortablelink('rmb_within_china_deposit','金額（RMB）')</th>
                              <th>金額（USD）</th>
                              <th>編集</th>
                              <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($within_china_deposits as $within_china_deposit)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $within_china_deposit->datetime_within_china_deposit }}</td>
                                  <td>{{ $within_china_deposit->within_china_deposit_customer_id }}</td>
                                  <td>{{ $within_china_deposit->within_china_deposit_customer }}</td>
                                  <td>{{ $within_china_deposit->rmb_within_china_deposit }}</td>
                                  <td>{{ $within_china_deposit->usd_within_china_deposit }}</td>
                                  <td><a href="/within_china_deposits/edit/{{ $within_china_deposit->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('within_china_deposits.destroy', $within_china_deposit->id) }}"
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
  