{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="back-link">
                  <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
              </div>
              <h1>資材支払 - 詳細</h1>
              <div class="back-link">
                  <a href="{{ route('material_credits.show') }}">&laquo; 時間指定に移動</a>
                  <a href="{{ route('material_credits.create') }}">&laquo; 資材支払の登録に移動</a>
              </div>

  
              {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                  <div class="test">
                      <form action="{{ route('material_credits.name') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <input type="text" name="material_creditor" placeholder="項目名">
                              <input type="date" name="from" placeholder="from_date">
                              <span class="mx-3 text-grey"></span>
                              <input type="date" name="until" placholder="until_date">
                              <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                          </div>
                      </form>
                  </div>
  
                  <span class="show-total">
                      <?php $material_credits_total = $material_credits->sum('rmb_material_credit'); ?>
                      合計： <?php echo number_format($material_credits_total,2); ?>
                    </span>
  
  
                  <table border="2" class="table" style="solid 2px";>
                      <thead>
                          <tr>
                            <th>@sortablelink('datetime_material_credit','記録日')</th>
                            <th class="point">@sortablelink('material_credit_creditor','支払項目')</th>
                            <th>@sortablelink('rmb_material_credit','金額（RMB）')</th>
                            <th>金額（USD）</th>
                            <th>編集</th>
                            <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($material_credits as $material_credit)
                              @if ($loop->iteration % 1 !== 0)
                              @endif
                              <tr>
                                  <td>{{ $material_credit->datetime_material_credit}}</td>
                                  <td>{{ $material_credit->material_creditor}}</td>
                                  <td>{{ $material_credit->rmb_material_credit}}</td>
                                  <td>{{ $material_credit->usd_material_credit}}</td>
                                  <td><a href="/material_credits/edit/{{ $material_credit->id }}">編集</a>
                                  </td>
                                  <td>
                                      <form method="POST"
                                          action="{{ route('material_credits.destroy', $material_credit->id) }}"
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
  