{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
    <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
    </div>
    <h1>物流費用支払 - 詳細</h1>
    <div class="back-link">
        <a href="{{ route('logistics_costs.show2') }}">&laquo; 項目指定に移動</a>
        <a href="{{ route('logistics_costs.create') }}">&laquo; 物流費用支払の登録に移動</a>
    </div>


    {{-- 時間指定データ取得のための記述 --}}
    <div class="col-md-6">
        <div class="test">
            <form action="{{ route('logistics_costs.test') }}" method="POST">
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
            <?php $logistics_costs_total = $logistics_costs->sum('rmb_logistics_cost'); ?>
            合計： <?php echo number_format($logistics_costs_total, 2); ?>
        </span>

        <table border="2" class="table" style="solid 2px";>
            <thead>
                <tr>
                    <th>@sortablelink('datetime_logistics_cost','記録日')</th>
                    <th class="point">@sortablelink('logistics_cost_creditor','支払項目')</th>
                    <th>@sortablelink('rmb_logistics_cost','金額（RMB）')</th>
                    <th>金額（USD）</th>
                    <th>編集</th>
                    <th>削除</th>
        </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($logistics_costs as $logistics_cost)
                    @if ($loop->iteration % 1 !== 0)
                    @endif
                    <tr>
                        <td>{{ $logistics_cost->datetime_logistics_cost }}</td>
                        <td>{{ $logistics_cost->logistics_cost_creditor }}</td>
                        <td>{{ $logistics_cost->rmb_logistics_cost }}</td>
                        <td>{{ $logistics_cost->usd_logistics_cost }}</td>
                        <td><a href="/logistics_costs/edit/{{ $logistics_cost->id }}">編集</a>
                        </td>
                        <td>
                            <form method="POST"
                                action="{{ route('logistics_costs.destroy', $logistics_cost->id) }}"
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
