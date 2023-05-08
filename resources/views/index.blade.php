{{-- <x-layout> --}}

@extends('components.layout')

@section('content')
    <div class="row">
        <div class="col-md-2">
            @component('components.sidebar', ['categories' => $categories, 'major_category_names' => $major_category_names])
            @endcomponent
        </div>

       <div class="col-md-10">
            <div class="container">
                {{-- <div class="registers-border">
                <h1>登録項目</h1>
                <h1>
                    <div class="inport">  --}}

                        {{-- 繰越金 --}}
                        {{-- <div class="money_carried_forward">
                            <a href="{{ route('money_carried_forwards.create') }}"><button type="submit"
                                    class="btn btn-outline-success btn-sm">繰越金</button></a>
                        </div> --}}

                            {{-- <div class="in"> <a href="{{ route('details.create') }}">[入金]</a></div> --}}
                            {{-- <div class="in"> --}}
                                {{-- <a href="{{ route('details.create') }}"><button type="submit"
                                        class="btn btn-outline-info btn-sm">日本本社入金</button></a> --}}

                                {{-- <a href="{{ route('within_china_deposits.create') }}"><button type="submit"
                                        class="btn btn-outline-info btn-sm">中国国内入金</button></a> --}}

                                {{-- <a href="{{ route('other_country_deposits.create') }}"><button type="submit"
                                        class="btn btn-outline-info btn-sm">第三国入金</button></a> --}}

                                {{-- <a href="{{ route('hongkong_deposits.create') }}"><button type="submit"
                                        class="btn btn-outline-info btn-sm">香港TAKAGI入金</button></a> --}}

                                {{-- <a href="{{ route('outsourcing_deposits.create') }}"><button type="submit"
                                        class="btn btn-outline-info btn-sm">外注先入金</button></a> --}}

                                {{-- <a href="{{ route('other_deposits.create') }}"><button type="submit"
                                        class="btn btn-outline-info btn-sm">その他入金</button></a> --}} 

                                {{-- <a href="{{ route('no_receipt_deposits.create') }}"><button type="submit"
                                    class="btn btn-outline-info btn-sm">領収書なし国内入金</button></a> --}}

                                {{-- <a href="{{ route('no_receipt_other_deposits.create') }}"><button type="submit"
                                    class="btn btn-outline-info btn-sm">領収書なしその他入金</button></a>
                            </div>  --}}

                           {{-- <div class="out">  --}}
                                {{-- <a href="{{ route('tax_credits.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">税金支払</button></a>
                                <a href="{{ route('salary_credits.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">給料支払</button></a> --}} 
                                {{-- <a href="{{ route('material_credits.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">資材支払</button></a>
                                <a href="{{ route('auxiliary_material_credits.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">副資材支払</button></a>
                                <a href="{{ route('logistics_costs.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">物流費用支払</button></a>
                                <a href="{{ route('entertainment_expenses.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">接待費用支払</button></a>
                                <a href="{{ route('travel_expenses.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">旅費支払</button></a>
                                <a href="{{ route('ticket_fees.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">チケット費用支払</button></a>
                                <a href="{{ route('miscellaneous_expenses.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">雑費支払</button></a>
                                <a href="{{ route('others.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">その他支払</button></a>
                                <a href="{{ route('utility_costs.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">光熱費用支払</button></a>
                                <a href="{{ route('insurances.create') }}"><button type="submit"
                                        class="btn btn-outline-danger btn-sm">保険料支払</button></a>
                                <a href="{{ route('no_receipt_credits.create') }}"><button type="submit"
                                    class="btn btn-outline-danger btn-sm">領収書なし支払</button></a>
                            </div> --}}

                             {{-- 国内顧客登録ページ
                            <div class="customers">
                                <a href="{{ route('customers.add') }}"><button type="submit"
                                        class="btn btn-outline-primary btn-sm">顧客登録</button></a>
                            </div>
 
                            {{-- メモ・備考欄ページ --}}
                            {{-- <div class="customers">
                            <a href="{{ route('remarks.create') }}"><button type="submit"
                                    class="btn btn-outline-secondary btn-sm">メモ・備考登録</button></a>
                            </div>
                            

                        </div>
                </h1>
                </div> --}}


                <div class="auxiliary_information">
                    <div class="money_carried_forwards" id="money_carried_forwards">
                        <h2>繰越金</h2>
                        <table border="2" class="table1">
                            <thead>
                                <tr>
                                    <th>記録日</th>
                                    <th>繰越項目</th>
                                    <th>金額（RMB）</th>
                                    <th>金額（USD）</th>
                                    <th>編集</th>
                                    <th>削除</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($money_carried_forwards as $money_carried_forward)
                                    @if ($loop->iteration % 1 !== 0)
                                        <tr>
                                    @endif
                                    <td>{{ $money_carried_forward->datetime_money_carried_forward }}</td>
                                    <td>{{ $money_carried_forward->money_carried_forward_customer }}</td>
                                    <td>{{ $money_carried_forward->rmb_money_carried_forward }}</td>
                                    <td>{{ $money_carried_forward->usd_money_carried_forward }}</td>
                                    <td><a href="/money_carried_forwards/edit/{{ $money_carried_forward->id }}">編集</a></td>
                                    <td><form method="POST" action="{{ route('money_carried_forwards.destroy', $money_carried_forward->id) }}" id="delete">
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

                    <div class="bank_balance" id="bank_balance">
                        <div class="sum">
                            <h2>総合計金額</h2>
                            <?php $data_total = $money_carried_forwards->sum('rmb_money_carried_forward') + $details->sum('rmb') + $within_china_deposits->sum('rmb_within_china_deposit') + $other_country_deposits->sum('rmb_other_country_deposit') + $hongkong_deposits->sum('rmb_hongkong_deposit') + $outsourcing_deposits->sum('rmb_outsourcing_deposit') + $other_deposits->sum('rmb_other_deposit') + $no_receipt_deposits->sum('rmb_no_receipt_deposit') - ($tax_credits->sum('rmb_tax_credit') + $salary_credits->sum('rmb_salary_credit') + $material_credits->sum('rmb_material_credit') + $auxiliary_material_credits->sum('rmb_auxiliary_material_credit') + $logistics_costs->sum('rmb_logistics_cost') + $entertainment_expenses->sum('rmb_entertainment_expense') + $travel_expenses->sum('rmb_travel_expense') + $ticket_fees->sum('rmb_ticket_fee') + $miscellaneous_expenses->sum('rmb_miscellaneous_expense') + $others->sum('rmb_other') + $utility_costs->sum('rmb_utility_cost') + $insurances->sum('rmb_insurance')); ?>
                            <span> 合計： <?php echo number_format($data_total,2); ?></span>
                        </div>
                    </div>
                </div>

    <!--一番トップにあるrow-->
    {{-- </x-layout> --}}
<script>
    'use strict'; {
        document.getElementById('delete')
        .addEventListener('submit', e => {
            e.preventDefault();
            if (!confirm('本当に削除しますか？'))
            {
                return;
            }
            e.target.submit();
        });
    }
</script>
@endsection
