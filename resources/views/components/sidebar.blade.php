<div class="container">
    {{-- @foreach ($major_category_names as $major_category_name)
        <h2>{{ $major_category_name }}</h2>
        @foreach ($categories as $category)
            @if ($category->major_category_name === $major_category_name)
                <label class="money-sidebar-category-label"><a href="#">{{ $category->name }}</a></label>
            @endif
        @endforeach
    @endforeach
</div> --}}
<h1>検索フォーム</h1>
<h4 class="major-sidebar">借方</h4>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('details.show') }}">日本本社「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('details.show') }}">日本本社「顧客指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('within_china_deposits.show') }}">中国国内「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('within_china_deposits.show2') }}">中国国内「顧客指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('other_country_deposits.show') }}">第三国「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('other_country_deposits.show2') }}">第三国「顧客指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('hongkong_deposits.show') }}">香港TAKAGI「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('hongkong_deposits.show') }}">香港TAKAGI「顧客指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('outsourcing_deposits.show') }}">外注先「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('outsourcing_deposits.show2') }}">外注先「顧客指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('other_deposits.show') }}">その他入金「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('other_deposits.show2') }}">その他入金「顧客指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('no_receipt_deposits.show') }}">領収書なし国内入金「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('no_receipt_deposits.show2') }}">領収書なし国内入金「顧客指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('no_receipt_other_deposits.show') }}">領収書なしその他入金「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('no_receipt_other_deposits.show') }}">領収書なしその他入金「顧客指定」</a></h5>
</div>

<h4 class="major-sidebar">貸方</a></h4>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('tax_credits.show') }}">税金「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('tax_credits.show2') }}">税金「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('salary_credits.show') }}">給料「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('salary_credits.show2') }}">給料「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('material_credits.show') }}">資材「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('material_credits.show2') }}">資材「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('auxiliary_material_credits.show') }}">副資材「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('auxiliary_material_credits.show2') }}">副資材「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('logistics_costs.show') }}">物流費用「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('logistics_costs.show2') }}">物流費用「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('entertainment_expenses.show') }}">接待費用「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('entertainment_expenses.show2') }}">接待費用「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('travel_expenses.show') }}">旅費「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('travel_expenses.show') }}">旅費「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('ticket_fees.show') }}">チケット費用「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('ticket_fees.show2') }}">チケット費用「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('miscellaneous_expenses.show') }}">雑費「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('miscellaneous_expenses.show') }}">雑費「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('others.show') }}">その他支払「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('others.show2') }}">その他支払「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('utility_costs.show') }}">光熱費「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('utility_costs.show2') }}">光熱費「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('insurances.show') }}">保険料「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('insurances.show2') }}">保険料「項目指定」</a></h5>
</div>
<div class="category">
<h5 class="sidebar sidebar1"><a href="{{ route('no_receipt_credits.show') }}">領収書なし支払「時間指定」</a></h5>
<h5 class="sidebar"><a href="{{ route('no_receipt_credits.show2') }}">領収書なし支払「項目指定」</a></h5>
</div>


</div>