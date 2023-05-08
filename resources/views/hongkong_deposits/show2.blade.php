{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>香港TAKAGI入金 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('hongkong_deposits.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('hongkong_deposits.create') }}">&laquo; 香港TAKAGI入金の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('hongkong_deposits.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="hongkong_deposit_customer" placeholder="顧客名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $hongkong_deposits_total = $hongkong_deposits->sum('rmb_hongkong_deposit'); ?>
                      合計： <?php echo number_format($hongkong_deposits_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_hongkong_deposit','記録日')</th>
                            <th>@sortablelink('hongkong_deposit_customer','入金項目')</th>
                            <th>@sortablelink('rmb_hongkong_deposit','金額（RMB）')</th>
                              <th>金額（USD）</th>
                              <th>編集</th>
                              <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($hongkong_deposits as $hongkong_deposit)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $hongkong_deposit->datetime_hongkong_deposit }}</td>
                                  <td>{{ $hongkong_deposit->hongkong_deposit_customer }}</td>
                                  <td>{{ $hongkong_deposit->rmb_hongkong_deposit}}</td>
                                  <td>{{ $hongkong_deposit->usd_hongkong_deposit }}</td>
                                  <td><a href="/hongkong_deposits/edit/{{ $hongkong_deposit->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('hongkong_deposits.destroy', $hongkong_deposit->id) }}"
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
  