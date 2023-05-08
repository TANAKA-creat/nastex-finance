{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="back-link">
          <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
      </div>
      <h1>接待費用支払 - 詳細</h1>
      <div class="back-link">
          <a href="{{ route('auxiliary_material_credits.show2') }}">&laquo; 項目指定に移動</a>
          <a href="{{ route('auxiliary_material_credits.create') }}">&laquo; 副資材支払の登録に移動</a>
      </div>
  
  
      {{-- 時間指定データ取得のための記述 --}}
      <div class="col-md-6">
          <div class="test">
              <form action="{{ route('auxiliary_material_credits.test') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <input type="date" name="from" placeholder="from_date">
                      <span class="mx-3 text-grey"></span>
                      <input type="date" name="until" placholder="until_date">
                      <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                  </div>
              </form>
          </div>
  
          <span class="show-total">
              <?php $auxiliary_material_credits_total = $auxiliary_material_credits->sum('rmb_auxiliary_material_credit'); ?>
              合計： <?php echo number_format($auxiliary_material_credits_total, 2); ?>
          </span>
  
          <table border="2" class="table" style="solid 2px";>
              <thead>
                  <tr>
                      <th>@sortablelink('datetime_auxiliary_material_credit','記録日')</th>
                      <th class="point">@sortablelink('auxiliary_material_credit_creditor','支払項目')</th>
                      <th>@sortablelink('rmb_auxiliary_material_credit','金額（RMB）')</th>
                      <th>金額（USD）</th>
                      <th>編集</th>
                      <th>削除</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($auxiliary_material_credits as $auxiliary_material_credit)
                      @if ($loop->iteration % 1 !== 0)
                      @endif
                      <tr>
                          <td>{{ $auxiliary_material_credit->datetime_auxiliary_material_credit }}</td>
                          <td>{{ $auxiliary_material_credit->auxiliary_material_credit_creditor }}</td>
                          <td>{{ $auxiliary_material_credit->rmb_auxiliary_material_credit }}</td>
                          <td>{{ $auxiliary_material_credit->usd_auxiliary_material_credit }}</td>
                          <td><a href="/auxiliary_material_credits/edit/{{ $auxiliary_material_credit->id }}">編集</a>
                          </td>
                          <td>
                              <form method="POST"
                                  action="{{ route('auxiliary_material_credits.destroy', $auxiliary_material_credit->id) }}"
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