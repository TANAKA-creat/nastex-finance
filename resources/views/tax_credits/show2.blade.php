{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>税金支払 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('tax_credits.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('tax_credits.create') }}">&laquo; 税金支払の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('tax_credits.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="tax_creditor" placeholder="項目名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $tax_credits_total = $tax_credits->sum('rmb_tax_credit'); ?>
                      合計： <?php echo number_format($tax_credits_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_tax_credit','記録日')</th>
                            <th class="point">@sortablelink('tax_creditor','支払項目')</th>
                            <th>@sortablelink('rmb_tax_credit','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($tax_credits as $tax_credit)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $tax_credit->datetime_tax_credit}}</td>
                                  <td>{{ $tax_credit->tax_creditor}}</td>
                                  <td>{{ $tax_credit->rmb_tax_credit}}</td>
                                  <td>{{ $tax_credit->usd_tax_credit}}</td>
                                  <td><a href="/tax_credits/edit/{{ $tax_credit->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('tax_credits.destroy', $tax_credit->id) }}"
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
  