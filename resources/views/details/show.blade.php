{{-- <x-layout> --}}
@extends('components.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="back-link">
                    <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
                </div>
                <h1>日本本社入金 - 詳細</h1>
                <div class="back-link">
                    <a href="{{ route('details.show2') }}">&laquo; 顧客指定に移動</a>
                    <a href="{{ route('details.create') }}">&laquo; 日本本社入金の登録に移動</a>
                </div>
                    
                {{-- 時間指定データ取得のための記述 --}}
                <div class="col-md-6">
                    <div class="test">
                        <form action="{{ route('details.test') }}" method="POST">
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
                        <?php $details_total = $details->sum('rmb'); ?>
                        合計： <?php echo number_format($details_total,2); ?>
                    </span>
                    
                    
                    <table border="2" class="table" style="solid 2px";>
                        <thead>
                            <tr>
                                <th>@sortablelink('datetime','記録日')</th>
                                <th>@sortablelink('customer','入金項目')</th>
                                <th>@sortablelink('rmb','金額（RMB）')</th>
                                <th>金額（USD）</th>
                                <th>編集</th>
                                <th>削除</th>
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
                                    <td><a href="/details/edit/{{ $detail->id }}">編集</a>
                                    </td>
                                    <td>
                                        <form method="POST"
                                            action="{{ route('details.destroy', $detail->id) }}" id="delete">
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

        </div>
    </div>
@endsection
