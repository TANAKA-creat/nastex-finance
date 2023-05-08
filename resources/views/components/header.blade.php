<nav class="navbar navbar-expand-md navbar-light shadow-sm nastex-report-header-container">
{{-- <div class="container"> --}}
  <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{asset('img/nastex_logo.png')}}">
  </a>

  <div class="btn-group">
    <button type="button" class="btn btn-warning">繰越金</button>
    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">繰越項目</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="{{ route('money_carried_forwards.create')}}">繰越金</a></li>
    </ul>
  </div>
      
  <div class="btn-group">
    <button type="button" class="btn btn-info">借方</button>
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">入金項目</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{{ route('details.create') }}">日本本社</a></li> 
    <li><a class="dropdown-item" href="{{ route('within_china_deposits.create') }}">中国国内</a></li> 
    <li><a class="dropdown-item" href="{{ route('other_country_deposits.create') }}">第三国</a></li> 
    <li><a class="dropdown-item" href="{{ route('hongkong_deposits.create') }}">香港TAKAGI</a></li> 
    <li><a class="dropdown-item" href="{{ route('outsourcing_deposits.create') }}">外注先</a></li> 
    <li><a class="dropdown-item" href="{{ route('other_deposits.create') }}">その他入金</a></li> 
    <li><a class="dropdown-item" href="{{ route('no_receipt_deposits.create') }}">領収書なし国内入金</a></li> 
    <li><a class="dropdown-item" href="{{ route('no_receipt_other_deposits.create') }}">領収書なしその他入金</a></li> 
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger">貸方</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">支出項目</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{{ route('tax_credits.create') }}">税金</a></li>
    <li><a class="dropdown-item" href="{{ route('salary_credits.create') }}">給料</a></li>

    <li><a class="dropdown-item" href="{{ route('material_credits.create') }}">資材</a></li>
    <li><a class="dropdown-item" href="{{ route('auxiliary_material_credits.create') }}">副資材</a></li>
    <li><a class="dropdown-item" href="{{ route('logistics_costs.create') }}">物流費用</a></li>
    <li><a class="dropdown-item" href="{{ route('entertainment_expenses.create') }}">接待費用</a></li>
    <li><a class="dropdown-item" href="{{ route('travel_expenses.create') }}">旅費</a></li>
    <li><a class="dropdown-item" href="{{ route('ticket_fees.create') }}">チケット費用</a></li>
    <li><a class="dropdown-item" href="{{ route('miscellaneous_expenses.create') }}">雑費</a></li>
    <li><a class="dropdown-item" href="{{ route('others.create') }}">その他支払</a></li>
    <li><a class="dropdown-item" href="{{ route('utility_costs.create') }}">光熱費用</a></li>
    <li><a class="dropdown-item" href="{{ route('insurances.create') }}">保険</a></li>
    <li><a class="dropdown-item" href="{{ route('no_receipt_credits.create') }}">領収書なし支払</a></li>
  </ul>
</div>

{{-- 2023/01/13 提出資料用 --}}
<div class="btn-group">
  <button type="button" class="btn btn-success">報告資料</button>
  <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">資料一覧</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{{ route('totalamount.index')}}">損益計算書</a></li>
    <li><a class="dropdown-item" href="#">貸借対照表</a></li>
    <li><a class="dropdown-item" href="{{ route('totalamount.index3')}}">中国国内入金状況報告書</a></li>
  </ul>
</div>

{{-- 2023/01/23 国内顧客登録用 --}}
<div class="btn-group">
  <button type="button" class="btn btn-primary">顧客データ</button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">中国国内顧客</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{{ route('customers.add')}}">中国国内顧客登録（領収書有り）</a></li>
    <li><a class="dropdown-item" href="{{ route('customer2s.add')}}">中国国内顧客登録（領収書なし）</a></li>
    <li><a class="dropdown-item" href="{{ route('customers.show')}}">中国国内顧客詳細（領収書有り）</a></li>
    <li><a class="dropdown-item" href="{{ route('customer2s.show')}}">中国国内顧客詳細（領収書なし）</a></li>
  </ul>
</div>

{{-- メモ・備考欄 --}}
<div class="btn-group">
  <button type="button" class="btn btn-secondary">メモ・備考欄</button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#"></a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{{ route('remarks.create') }}">メモ帳登録</a></li>
    <li><a class="dropdown-item" href="{{ route('remarks.show') }}">メモ帳詳細</a></li>
    <li><a class="dropdown-item" href="#"></a></li>
  </ul>
</div>




</nav>