{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>外注先入金 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('outsourcing_deposits.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('outsourcing_deposits.create') }}">&laquo; 外注先入金の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('outsourcing_deposits.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="outsourcing_deposit_customer" placeholder="顧客名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $outsourcing_deposits_total = $outsourcing_deposits->sum('rmb_outsourcing_deposit'); ?>
                      合計： <?php echo $outsourcing_deposits_total; ?>
                  </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_outsourcing_deposit','記録日')</th>
                            <th class="point">@sortablelink('outsourcing_deposit_customer','入金項目')</th>
                            <th>@sortablelink('rmb_outsourcing_deposit','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($outsourcing_deposits as $outsourcing_deposit)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $outsourcing_deposit->datetime_outsourcing_deposit}}</td>
                                  <td>{{ $outsourcing_deposit->outsourcing_deposit_customer}}</td>
                                  <td>{{ $outsourcing_deposit->rmb_outsourcing_deposit}}</td>
                                  <td>{{ $outsourcing_deposit->usd_outsourcing_deposit}}</td>
                                  <td><a href="/outsourcing_deposits/edit/{{ $outsourcing_deposit->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('outsourcing_deposits.destroy', $outsourcing_deposit->id) }}"
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
  