{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>光熱費用支払 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('utility_costs.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('utility_costs.create') }}">&laquo; 光熱費用支払の登録に移動</a>

              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('utility_costs.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="utility_cost_creditor" placeholder="項目名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $utility_costs_total = $utility_costs->sum('rmb_utility_cost'); ?>
                      合計： <?php echo number_format($utility_costs_total, 2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_utility_cost','記録日')</th>
                            <th class="point">@sortablelink('utility_cost_creditor','支払項目')</th>
                            <th>@sortablelink('rmb_utility_cost','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($utility_costs as $utility_cost)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $utility_cost->datetime_utility_cost}}</td>
                                  <td>{{ $utility_cost->utility_cost_creditor}}</td>
                                  <td>{{ $utility_cost->rmb_utility_cost}}</td>
                                  <td>{{ $utility_cost->usd_utility_cost}}</td>
                                  <td><a href="/utility_costs/edit/{{ $utility_cost->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('utility_costs.destroy', $utility_cost->id) }}"
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
  