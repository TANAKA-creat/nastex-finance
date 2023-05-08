{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
                  <div class="back-link">
                      <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
                  </div>
                  <h1>領収書なしその他入金 - 詳細</h1>
                  <div class="back-link">
                    <a href="{{ route('no_receipt_other_deposits.show2') }}">&laquo; 顧客指定に移動</a>
                    <a href="{{ route('no_receipt_other_deposits.create') }}">&laquo; 領収書なしその他入金の登録に移動</a>
                  </div>

  
                  {{-- 時間指定データ取得のための記述 --}}
                  <div class="col-md-6">
                      <div class="test">
                          <form action="{{ route('no_receipt_other_deposits.test') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                  <input type="date" name="from" placeholder="from_date">
                                  <span class="mx-3 text-grey"></span>
                                  <input type="date" name="until" placholder="until_date">
                                  <button type="submit" data-toggle="button"
                                      class="btn btn-primary shadow-lg btn-sm">検索</button>
                              </div>
                          </form>
                      </div>
  
                      <span class="show-total">
                          <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->sum('rmb_no_receipt_other_deposit'); ?>
                          合計： <?php echo number_format($no_receipt_other_deposits_total, 2); ?>
                      </span>
  
  
                      <table border="2" class="table" style="solid 2px";>
                          <thead>
                              <tr>
                                <th>@sortablelink('datetime_no_receipt_deposit','記録日')</th>
                                <th>@sortablelink('no_receipt_deposit_customer','入金項目')</th>
                                <th>@sortablelink('no_receipt_deposit','金額（RMB）')</th>
                                  <th>金額（USD）</th>
                                  <th>編集</th>
                                  <th>削除</th>                
                              </tr>
                                           
                          </thead>
                          <tbody>
                              @foreach ($no_receipt_other_deposits as $no_receipt_other_deposit)
                                  @if ($loop->iteration % 1 !== 0)
                                  @endif
                                  <tr>
                                      <td>{{ $no_receipt_other_deposit->datetime_no_receipt_other_deposit }}</td>
                                      <td>{{ $no_receipt_other_deposit->no_receipt_other_deposit_customer }}</td>
                                      <td>{{ $no_receipt_other_deposit->rmb_no_receipt_other_deposit }}</td>
                                      <td>{{ $no_receipt_other_deposit->usd_no_receipt_other_deposit }}</td>
                                      <td><a href="/no_receipt_other_deposits/edit/{{ $no_receipt_other_deposit->id }}">編集</a>
                                      </td>
                                      <td>
                                          <form method="POST"
                                              action="{{ route('no_receipt_other_deposits.destroy', $no_receipt_other_deposit->id) }}"
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
  