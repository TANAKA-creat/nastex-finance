<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer>
    </script>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <?php date_default_timezone_set('Asia/Tokyo'); ?>
    <title>中国国内入金状況報告書</title>
</head>

<body>
    {{-- <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm">中国国内入金状況報告書</button>
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">領収書有り</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#totalamout2022">2022年度</a></li>
            <li><a class="dropdown-item" href="#totalamout2023">2023年度</a></li>
            <li><a class="dropdown-item" href="#totalamout2024">2024年度</a></li>
            <li><a class="dropdown-item" href="#">---</a></li>
            <li><a class="dropdown-item" href="#">---</a></li>
            <li><a class="dropdown-item" href="#">領収書無し</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('totalamount.index4') }}">2022年度</a></li>
            <li><a class="dropdown-item" href="{{ route('totalamount.index4') }}">2023年度</a></li>
            <li><a class="dropdown-item" href="{{ route('totalamount.index4') }}">2024年度</a></li>
            <li><a class="dropdown-item" href="{{ route('totalamount.index2') }}">---</a></li>
            <li><a class="dropdown-item" href="{{ route('totalamount.index2') }}">---</a></li>

        </ul>
    </div> --}}

    <div class="container profit-and-loss-container">{{-- 表の全体をdivで囲む --}}
        <div class="row">

            <div class="totalamount2023" id="totalamout2023">
                <div class="recording-period">
                    <h3>中国国内入金状況報告書（領収書無し）</h3>
                    <span>記録期間: [2023-01-01]-[2023-12-31]</span>
                    <span class="reportor">報告者: 吴玉霞</span>
                </div>

                <table class="table_top">
                  <thead>
                    <tr>
                    <th class="list"></th>
                    <th class="list">1月</th>
                    <th class="list">2月</th>
                    <th class="list">3月</th>
                    <th class="list">4月</th>
                    <th class="list">5月</th>
                    <th class="list">6月</th>
                    <th class="list">7月</th>
                    <th class="list">8月</th>
                    <th class="list">9月</th>
                    <th class="list">10月</th>
                    <th class="list">11月</th>
                    <th class="list">12月</th>
                    <th class="list">合計</th>
                    <th class="list">平均</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td class="list_total">合計金額</td>
                    <td class="list">
                      <?php $no_receipt_deposits_total1 = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '1')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '2')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '3')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '4')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '5')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '6')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '7')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '8')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '9')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '10')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '11')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '12')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '13')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '14')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '15')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '16')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '17')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '18')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '19')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '20')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '21')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '22')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '23')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '24')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '25')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '26')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '27')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '28')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '29')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '30')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '31')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '32')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '33')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '34')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '35')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '36')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '37')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '38')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '39')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '40')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '41')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '42')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '43')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '44')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '45')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '46')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '47')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '48')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '49')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                              ->where('no_receipt_deposit_customer_id', '=', '50')
                              ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                              ->sum('rmb_no_receipt_deposit') 
                        ;?>
                        <?php echo number_format($no_receipt_deposits_total1, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                            $no_receipt_deposits_total2 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                             $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                              $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                            ->sum('rmb_no_receipt_deposit') 
                           ; ?>
                        <?php echo number_format($no_receipt_deposits_total2, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                            $no_receipt_deposits_total3 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                            ->sum('rmb_no_receipt_deposit') 
                        ; ?>
                        <?php echo number_format($no_receipt_deposits_total3, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total4 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                            ->sum('rmb_no_receipt_deposit') 
                        ; ?>
                        <?php echo number_format($no_receipt_deposits_total4, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total5 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total5, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total6 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total6, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total7 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total7, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total8 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total8, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total9 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total9, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total10 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total10, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total11 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total11, 2); ?>
                    </td>
                    <td class="list">
                        <?php 
                        $no_receipt_deposits_total12 = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '1')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '2')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '3')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '4')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '5')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '6')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '7')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '8')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '9')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '10')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '11')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '12')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '13')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '14')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '15')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '16')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '17')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '18')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '19')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '20')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '21')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '22')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '23')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '24')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '25')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '26')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '27')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '28')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '29')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '30')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '31')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '32')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '33')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '34')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '35')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '36')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '37')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '38')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '39')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '40')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '41')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '42')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '43')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '44')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '45')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '46')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '47')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '48')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '49')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') +
                            $no_receipt_deposits_total = $no_receipt_deposits
                            ->where('no_receipt_deposit_customer_id', '=', '50')
                            ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                            ->sum('rmb_no_receipt_deposit') 
                            ; ?>
                        <?php echo number_format($no_receipt_deposits_total12, 2); ?>
                    </td>
                    <td class="list">
                        <?php $no_receipt_deposits_total_all =
                            $no_receipt_deposits_total1 +
                            $no_receipt_deposits_total2 +
                            $no_receipt_deposits_total3 +
                            $no_receipt_deposits_total4 +
                            $no_receipt_deposits_total5 +
                            $no_receipt_deposits_total6 +
                            $no_receipt_deposits_total7 +
                            $no_receipt_deposits_total8 +
                            $no_receipt_deposits_total9 +
                            $no_receipt_deposits_total10 +
                            $no_receipt_deposits_total11 +
                            $no_receipt_deposits_total12 
                        ; ?>
                         <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                    </td>
                    <td class="list">
                        <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                        <?php echo number_format($no_receipt_deposits_av, 2); ?>
                    </td>

                        





                    </tr>
                  </tbody>
                </table>


                      


                <table>
                    <thead>
                        <tr>
                            <th class="th">顧客名</th>
                            <th class="list">1月</th>
                            <th class="list">2月</th>
                            <th class="list">3月</th>
                            <th class="list">4月</th>
                            <th class="list">5月</th>
                            <th class="list">6月</th>
                            <th class="list">7月</th>
                            <th class="list">8月</th>
                            <th class="list">9月</th>
                            <th class="list">10月</th>
                            <th class="list">11月</th>
                            <th class="list">12月</th>
                            <th class="list">合計</th>
                            <th class="list">平均</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- ------------------------------------------------ customer2_name1 --------------------------------customer2_name1-------------------------- --}}
                        <tr>
                           @foreach ($customer2_name as $a)
                                <th class="th">
                                    {{ $a }}
                                </th>
                            @endforeach 
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total = $no_receipt_deposits
                                    ->where('no_receipt_deposit_customer_id', '=', '1')
                                    ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                    ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_total_all =
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                        ->sum('rmb_no_receipt_deposit') +
                                    $no_receipt_deposits
                                        ->where('no_receipt_deposit_customer_id', '=', '1')
                                        ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                        ->sum('rmb_no_receipt_deposit'); ?>
                                <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                            </td>
                            <td class="list">
                                <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                                <?php echo number_format($no_receipt_deposits_av, 2); ?>
                            </td>
                        </tr>

                        {{-- ------------------------------------------------ customer2_name2 --------------------------------customer2_name2-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name2 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '2')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name3 --------------------------------customer2_name3-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name3 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '3')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '3')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name4 --------------------------------customer2_name4-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name4 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '4')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '4')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name5 --------------------------------customer2_name5-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name5 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '5')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '5')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name6 --------------------------------customer2_name6-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name6 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '6')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '6')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name7 --------------------------------customer2_name7-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name7 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '7')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '2')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '7')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name8 --------------------------------customer2_name8-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name8 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '8')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '8')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>
                       

                        {{-- ------------------------------------------------ customer2_name9 --------------------------------customer2_name9-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name9 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '9')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '9')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name10 --------------------------------customer2_name10-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name10 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '10')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '10')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name11 --------------------------------customer2_name11-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name11 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '11')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '11')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name12 --------------------------------customer2_name12-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name12 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '12')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '12')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name13 --------------------------------customer2_name13-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name13 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '13')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '13')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name14 --------------------------------customer2_name14-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name14 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '14')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '14')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name15 --------------------------------customer2_name15-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name15 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '15')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '15')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name16 --------------------------------customer2_name16-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name16 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '16')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '16')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name17 --------------------------------customer2_name17-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name17 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '17')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '17')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name18 --------------------------------customer2_name18-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name18 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '18')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '18')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name19 --------------------------------customer2_name19-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name19 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '19')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '19')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name20 --------------------------------customer2_name20-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name20 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '20')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '20')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name21 --------------------------------customer2_name21-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name21 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '21')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '21')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name22 --------------------------------customer2_name22-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name22 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '22')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '22')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name23 --------------------------------customer2_name23-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name23 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '23')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '23')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name24 --------------------------------customer2_name24-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name24 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '24')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '24')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name25 --------------------------------customer2_name25-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name25 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '25')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '25')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name26 --------------------------------customer2_name26-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name26 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '26')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '26')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name27 --------------------------------customer2_name27-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name27 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '27')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '27')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name28 --------------------------------customer2_name28-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name28 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '28')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '28')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name29 --------------------------------customer2_name29-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name29 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '29')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '29')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name30 --------------------------------customer2_name30-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name30 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '30')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '30')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name31 --------------------------------customer2_name31-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name31 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '31')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '31')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name32 --------------------------------customer2_name32-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name32 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '32')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '32')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name33 --------------------------------customer2_name33-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name33 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '33')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '33')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name34 --------------------------------customer2_name34-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name34 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '34')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '34')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name35 --------------------------------customer2_name35-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name35 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '35')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '35')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name36 --------------------------------customer2_name36-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name36 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '36')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '36')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name37 --------------------------------customer2_name37-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name37 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '37')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '37')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name38 --------------------------------customer2_name38-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name38 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '38')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '38')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name39 --------------------------------customer2_name39-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name39 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '39')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '39')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name40 --------------------------------customer2_name40-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name40 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '40')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '40')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name41 --------------------------------customer2_name41-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name41 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '41')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '41')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name42 --------------------------------customer2_name42-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name42 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '42')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '42')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name43 --------------------------------customer2_name43-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name43 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '43')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '43')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name44 --------------------------------customer2_name44-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name44 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '44')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '44')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name45 --------------------------------customer2_name45-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name45 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '45')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '45')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name46 --------------------------------customer2_name46-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name46 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '46')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '46')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                       {{-- ------------------------------------------------ customer2_name47 --------------------------------customer2_name47-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name47 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '47')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '47')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>


                        {{-- ------------------------------------------------ customer2_name48 --------------------------------customer2_name48-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name48 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '48')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '48')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name49 --------------------------------customer2_name49-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name49 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '49')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '49')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                        {{-- ------------------------------------------------ customer2_name50 --------------------------------customer2_name50-------------------------- --}}
                        <tr>
                          @foreach ($customer2_name50 as $a)
                               <th class="th">
                                   {{ $a }}
                               </th>
                           @endforeach 
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total = $no_receipt_deposits
                                   ->where('no_receipt_deposit_customer_id', '=', '50')
                                   ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                   ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_total_all =
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])
                                       ->sum('rmb_no_receipt_deposit') +
                                   $no_receipt_deposits
                                       ->where('no_receipt_deposit_customer_id', '=', '50')
                                       ->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])
                                       ->sum('rmb_no_receipt_deposit'); ?>
                               <?php echo number_format($no_receipt_deposits_total_all, 2); ?>
                           </td>
                           <td class="list">
                               <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12'; ?>
                               <?php echo number_format($no_receipt_deposits_av, 2); ?>
                           </td>
                       </tr>

                      </tbody>
                </table>
                <div class="footer">青岛那须藤家庭用品有限公司</div>
            </div>
        </div>
    </div>
</body>
</html>


                      

