{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>第三国入金 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('other_country_deposits.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('other_country_deposits.create') }}">&laquo; 第三国の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('other_country_deposits.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="other_country_deposit_customer" placeholder="顧客名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $other_country_deposits_total = $other_country_deposits->sum('rmb_other_country_deposit'); ?>
                      合計： <?php echo number_format($other_country_deposits_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_other_country_deposit','記録日')</th>
                            <th>@sortablelink('other_country_deposit_customer','入金項目')</th>
                            <th>@sortablelink('rmb_other_country_deposit','金額（RMB）')</th>
                              <th>金額（USD）</th>
                              <th>編集</th>
                              <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($other_country_deposits as $other_country_deposit)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $other_country_deposit->datetime_other_country_deposit }}</td>
                                  <td>{{ $other_country_deposit->other_country_deposit_customer }}</td>
                                  <td>{{ $other_country_deposit->rmb_other_country_deposit }}</td>
                                  <td>{{ $other_country_deposit->usd_other_country_deposit }}</td>
                                  <td><a href="/other_country_deposits/edit/{{ $other_country_deposit->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('other_country_deposits.destroy', $other_country_deposit->id) }}"
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
  