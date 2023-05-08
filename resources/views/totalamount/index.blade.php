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
    <title>損益計算書（領収書無し含む）</title>
</head>

<body>

    <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm">損益計算書</button>
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">領収書無し含む</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#totalamout2022">2022年度</a></li> 
        <li><a class="dropdown-item" href="#totalamout2023">2023年度</a></li> 
        <li><a class="dropdown-item" href="#totalamout2024">2024年度</a></li> 
        <li><a class="dropdown-item" href="#">---</a></li> 
        <li><a class="dropdown-item" href="#">---</a></li> 
        <li><a class="dropdown-item" href="#">領収書有りのみ</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('totalamount.index2')}}">2022年度</a></li> 
        <li><a class="dropdown-item" href="{{ route('totalamount.index2')}}">2023年度</a></li> 
        <li><a class="dropdown-item" href="{{ route('totalamount.index2')}}">2024年度</a></li> 
        <li><a class="dropdown-item" href="{{ route('totalamount.index2')}}">---</a></li> 
        <li><a class="dropdown-item" href="{{ route('totalamount.index2')}}">---</a></li> 
        
      </ul>
    </div>

<section class="page">
    {{-- @extends('components.layout')

@section('content') --}}
    <div class="container profit-and-loss-container">{{-- 表の全体をdivで囲む --}}
        <div class="row">

            <div class="totalamount2022" id="totalamout2022">
                <div  class="recording-period">
                <h3>損益計算書（領収書無し含む）</h3>
                <span>記録期間: [2022-01-01]-[2022-12-31]</span>
                <span class="reportor">報告者: 吴玉霞</span>        
                </div>

                <table>
                    <thead>
                        <tr>
                            <th class="th"></th>
                            <th class="th"></th>
                            <th class="th"></th>
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
                    <tr>
                        <th class="th">Ⅰ 売上高</th>
                        <th class="th">日本加工賃入金</th>
                        <th class="th"></th>

                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-01-01', '2022-01-31'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-02-01', '2022-02-28'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-03-01', '2022-03-31'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-04-01', '2022-04-30'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-05-01', '2022-05-31'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-06-01', '2022-06-30'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-07-01', '2022-07-31'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-08-01', '2022-08-31'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-09-01', '2022-09-30'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-10-01', '2022-10-31'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-11-01', '2022-11-30'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total = $details->whereBetween('datetime', ['2022-12-01', '2022-12-31'])->sum('rmb'); ?>
                            <?php echo number_format($details_total, 2); ?>
                        </td>
                        <td class="list">
                            <?php $details_total_all = 
                            $details->whereBetween('datetime', ['2022-01-01', '2022-01-31'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-02-01', '2022-02-28'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-03-01', '2022-03-31'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-04-01', '2022-04-30'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-05-01', '2022-05-31'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-06-01', '2022-06-30'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-07-01', '2022-07-31'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-08-01', '2022-08-31'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-09-01', '2022-09-30'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-10-01', '2022-10-31'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-11-01', '2022-11-30'])->sum('rmb')
                            + $details->whereBetween('datetime', ['2022-12-01', '2022-12-31'])->sum('rmb')
                            ;?>
                            <?php echo number_format($details_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $details_av = $details_total_all / '12' ; ?>
                            <?php echo number_format($details_av,2) ;?>
                        </td>
                    </tr>


                    <tr>
                        <th class="th"></th>
                        <th class="th">第三国入金</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_country_deposit'); ?>
                            <?php echo number_format($other_country_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_total_all = 
                            $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_country_deposit')
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_country_deposit')
                            ;?>
                            <?php echo number_format($other_country_deposits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $other_country_deposits_av = $other_country_deposits_total_all / '12' ; ?>
                            <?php echo number_format($other_country_deposits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">中国国内入金</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_within_china_deposit'); ?>
                            <?php echo number_format($within_china_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_total_all = 
                            $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_within_china_deposit')
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_within_china_deposit')
                            ;?>
                            <?php echo number_format($within_china_deposits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $within_china_deposits_av = $within_china_deposits_total_all / '12' ; ?>
                            <?php echo number_format($within_china_deposits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">領収書なし国内入金</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_deposit'); ?>
                            <?php echo number_format($no_receipt_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_total_all = 
                            $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_deposit')
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_deposit')
                            ;?>
                            <?php echo number_format($no_receipt_deposits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12' ; ?>
                            <?php echo number_format($no_receipt_deposits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">香港TAKAGI入金</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_hongkong_deposit'); ?>
                            <?php echo number_format($hongkong_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_total_all = 
                            $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_hongkong_deposit')
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_hongkong_deposit')
                            ;?>
                            <?php echo number_format($hongkong_deposits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $hongkong_deposits_av = $hongkong_deposits_total_all / '12' ; ?>
                            <?php echo number_format($hongkong_deposits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">外注先入金</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_outsourcing_deposit'); ?>
                            <?php echo number_format($outsourcing_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_total_all = 
                            $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_outsourcing_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_outsourcing_deposit')
                            ;?>
                            <?php echo number_format($outsourcing_deposits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $outsourcing_deposits_av = $outsourcing_deposits_total_all / '12' ; ?>
                            <?php echo number_format($outsourcing_deposits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">その他入金</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_deposit'); ?>
                            <?php echo number_format($other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_total_all = 
                            $other_deposits->whereBetween('datetime_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_deposit')
                            ;?>
                            <?php echo number_format($other_deposits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $other_deposits_av = $other_deposits_total_all / '12' ; ?>
                            <?php echo number_format($other_deposits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">領収書なしその他入金</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                            <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_total_all = 
                            $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_other_deposit')
                            ;?>
                            <?php echo number_format($no_receipt_other_deposits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_other_deposits_av = $no_receipt_other_deposits_total_all / '12' ; ?>
                            <?php echo number_format($no_receipt_other_deposits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th">Ⅱ 売上原価</th>
                        <th class="th">資材支払</th>
                        <th class="th"></th>

                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_material_credit'); ?>
                            <?php echo number_format($material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_total_all = 
                            $material_credits->whereBetween('datetime_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_material_credit')
                            + $material_credits->whereBetween('datetime_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_material_credit')
                            ;?>
                            <?php echo number_format($material_credits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $material_credits_av = $material_credits_total_all / '12' ; ?>
                            <?php echo number_format($material_credits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">副資材支払</th>
                        <th class="th"></th>

                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_auxiliary_material_credit'); ?>
                            <?php echo number_format($auxiliary_material_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_total_all = 
                            $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_auxiliary_material_credit')
                            + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_auxiliary_material_credit')
                            ;?>
                            <?php echo number_format($auxiliary_material_credits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $auxiliary_material_credits_av = $auxiliary_material_credits_total_all / '12' ; ?>
                            <?php echo number_format($auxiliary_material_credits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th-twin">売上純利益</th>
                        <th class="th-twin"></th>
                        <th class="th-twin"></th> 
                        
                        <td class="list-twin">
                            <?php $w1 = $details->whereBetween('datetime', ['2022-01-01', '2022-01-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w1,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w2 = $details->whereBetween('datetime', ['2022-02-01', '2022-02-28'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w2,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w3 = $details->whereBetween('datetime', ['2022-03-01', '2022-03-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w3,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w4 = $details->whereBetween('datetime', ['2022-04-01', '2022-04-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w4,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w5 = $details->whereBetween('datetime', ['2022-05-01', '2022-05-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w5,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w6 = $details->whereBetween('datetime', ['2022-06-01', '2022-06-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w6,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w7 = $details->whereBetween('datetime', ['2022-07-01', '2022-07-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w7,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w8 = $details->whereBetween('datetime', ['2022-08-01', '2022-08-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w8,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w9 = $details->whereBetween('datetime', ['2022-09-01', '2022-09-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w9,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w10 = $details->whereBetween('datetime', ['2022-10-01', '2022-10-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w10,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w11 = $details->whereBetween('datetime', ['2022-11-01', '2022-11-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w11,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w12 = $details->whereBetween('datetime', ['2022-12-01', '2022-12-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_auxiliary_material_credit')
                            ; ?>
                            <?php echo number_format($w12,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $w_all = $w1+$w2+$w3+$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12 ;?>
                            <?php echo number_format($w_all,2) ;?>
                        </td>
                        <td class="list-twin">
                            <?php $w_av = $w_all / '12' ;?>
                            <?php echo number_format($w_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th">Ⅲ 販売員及び一般管理費</th>
                        <th class="th"></th>
                        <th class="th"></th>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                        <td class="list"></td>
                    </tr>
                    <tr>
                        <th class="th"></th>
                        <th class="th">1 貸倒引当金繰入額</th>
                        <th class="th"></th>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">2 従業員給与手当</th>
                        <th class="th">給料支払</th>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_salary_credit'); ?>
                            <?php echo number_format($salary_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_total_all = 
                            $salary_credits->whereBetween('datetime_salary_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_salary_credit')
                            + $salary_credits->whereBetween('datetime_salary_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_salary_credit')
                            ;?>
                            <?php echo number_format($salary_credits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $salary_credits_av = $salary_credits_total_all / '12' ; ?>
                            <?php echo number_format($salary_credits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th"></th>
                        <th class="th">保険料支払</th>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-01-01', '2022-01-31'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-02-01', '2022-02-28'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-03-01', '2022-03-31'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-04-01', '2022-04-30'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-05-01', '2022-05-31'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-06-01', '2022-06-30'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-07-01', '2022-07-31'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-08-01', '2022-08-31'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-09-01', '2022-09-30'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-10-01', '2022-10-31'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-11-01', '2022-11-30'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2022-12-01', '2022-12-31'])->sum('rmb_insurance'); ?>
                            <?php echo number_format($insurances_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $insurances_total_all = 
                            $insurances->whereBetween('datetime_insurance', ['2022-01-01', '2022-01-31'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-02-01', '2022-02-28'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-03-01', '2022-03-31'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-04-01', '2022-04-30'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-05-01', '2022-05-31'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-06-01', '2022-06-30'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-07-01', '2022-07-31'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-08-01', '2022-08-31'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-09-01', '2022-09-30'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-10-01', '2022-10-31'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-11-01', '2022-11-30'])->sum('rmb_insurance')
                            + $insurances->whereBetween('datetime_insurance', ['2022-12-01', '2022-12-31'])->sum('rmb_insurance')
                            ;?>
                            <?php echo number_format($insurances_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $insurances_av = $insurances_total_all / '12' ; ?>
                            <?php echo number_format($insurances_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">3 賞与引当繰入額</th>
                        <th class="th"></th>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                    </tr>
                    <tr>
                        <th class="th"></th>
                        <th class="th">4 退職給付費用</th>
                        <th class="th"></th>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                    </tr>
                    <tr>
                        <th class="th"></th>
                        <th class="th">5 福利厚生費用</th>
                        <th class="th"></th>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                    </tr>
                    <tr>
                        <th class="th"></th>
                        <th class="th">6 旅費及び交通費</th>
                        <th class="th">チケット費用支払</th>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-01-01', '2022-01-31'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-02-01', '2022-02-28'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $insurances->whereBetween('datetime_ticket_fee', ['2022-03-01', '2022-03-31'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-04-01', '2022-04-30'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-05-01', '2022-05-31'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-06-01', '2022-06-30'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-07-01', '2022-07-31'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-08-01', '2022-08-31'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-09-01', '2022-09-30'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-10-01', '2022-10-31'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-11-01', '2022-11-30'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-12-01', '2022-12-31'])->sum('rmb_ticket_fee'); ?>
                            <?php echo number_format($ticket_fees_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_total_all = 
                            $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-01-01', '2022-01-31'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-02-01', '2022-02-28'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-03-01', '2022-03-31'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-04-01', '2022-04-30'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-05-01', '2022-05-31'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-06-01', '2022-06-30'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-07-01', '2022-07-31'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-08-01', '2022-08-31'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-09-01', '2022-09-30'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-10-01', '2022-10-31'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-11-01', '2022-11-30'])->sum('rmb_ticket_fee')
                            + $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-12-01', '2022-12-31'])->sum('rmb_ticket_fee')
                            ;?>
                            <?php echo number_format($ticket_fees_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $ticket_fees_av = $ticket_fees_total_all / '12' ; ?>
                            <?php echo number_format($ticket_fees_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th"></th>
                        <th class="th">旅費支払</th>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_travel_expense'); ?>
                            <?php echo number_format($travel_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_total_all = 
                            $travel_expenses->whereBetween('datetime_travel_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_travel_expense')
                            + $travel_expenses->whereBetween('datetime_travel_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_travel_expense')
                            ;?>
                            <?php echo number_format($travel_expenses_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $travel_expenses_av = $travel_expenses_total_all / '12' ; ?>
                            <?php echo number_format($travel_expenses_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">7 光熱+通信費用</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-01-01', '2022-01-31'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-02-01', '2022-02-28'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-03-01', '2022-03-31'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-04-01', '2022-04-30'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-05-01', '2022-05-31'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-06-01', '2022-06-30'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-07-01', '2022-07-31'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-08-01', '2022-08-31'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-09-01', '2022-09-30'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-10-01', '2022-10-31'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-11-01', '2022-11-30'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2022-12-01', '2022-12-31'])->sum('rmb_utility_cost'); ?>
                            <?php echo number_format($utility_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_total_all = 
                            $utility_costs->whereBetween('datetime_utility_cost', ['2022-01-01', '2022-01-31'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-02-01', '2022-02-28'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-03-01', '2022-03-31'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-04-01', '2022-04-30'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-05-01', '2022-05-31'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-06-01', '2022-06-30'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-07-01', '2022-07-31'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-08-01', '2022-08-31'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-09-01', '2022-09-30'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-10-01', '2022-10-31'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-11-01', '2022-11-30'])->sum('rmb_utility_cost')
                            + $utility_costs->whereBetween('datetime_utility_cost', ['2022-12-01', '2022-12-31'])->sum('rmb_utility_cost')
                            ;?>
                            <?php echo number_format($utility_costs_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $utility_costs_av = $utility_costs_total_all / '12' ; ?>
                            <?php echo number_format($utility_costs_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">8 租税公課</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_tax_credit'); ?>
                            <?php echo number_format($tax_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_total_all = 
                            $tax_credits->whereBetween('datetime_tax_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_tax_credit')
                            + $tax_credits->whereBetween('datetime_tax_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_tax_credit')
                            ;?>
                            <?php echo number_format($tax_credits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $tax_credits_av = $tax_credits_total_all / '12' ; ?>
                            <?php echo number_format($tax_credits_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">9 減価償却</th>
                        <th class="th"></th>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">10 連結調整勘定償却額</th>
                        <th class="th"></th>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                        <td class="list"><?php echo number_format(0,2); ?></td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">11 その他</th>
                        <th class="th">雑費支払</th>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_miscellaneous_expense'); ?>
                            <?php echo number_format($miscellaneous_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_total_all = 
                            $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_miscellaneous_expense')
                            + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_miscellaneous_expense')
                            ;?>
                            <?php echo number_format($miscellaneous_expenses_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $miscellaneous_expenses_av = $miscellaneous_expenses_total_all / '12' ; ?>
                            <?php echo number_format($miscellaneous_expenses_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th"></th>
                        <th class="th">接待費用支払</th>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_entertainment_expense'); ?>
                            <?php echo number_format($entertainment_expenses_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_total_all = 
                            $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_entertainment_expense')
                            + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_entertainment_expense')
                            ;?>
                            <?php echo number_format($entertainment_expenses_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $entertainment_expenses_av = $entertainment_expenses_total_all / '12' ; ?>
                            <?php echo number_format($entertainment_expenses_av,2) ;?>
                        </td>
                    </tr>
                   
                    <tr>
                        <th class="th"></th>
                        <th class="th"></th>
                        <th class="th">物流費用支払</th>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-01-01', '2022-01-31'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-02-01', '2022-02-28'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-03-01', '2022-03-31'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-04-01', '2022-04-30'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-05-01', '2022-05-31'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-06-01', '2022-06-30'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-07-01', '2022-07-31'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-08-01', '2022-08-31'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-09-01', '2022-09-30'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-10-01', '2022-10-31'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-11-01', '2022-11-30'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-12-01', '2022-12-31'])->sum('rmb_logistics_cost'); ?>
                            <?php echo number_format($logistics_costs_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_total_all = 
                            $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-01-01', '2022-01-31'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-02-01', '2022-02-28'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-03-01', '2022-03-31'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-04-01', '2022-04-30'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-05-01', '2022-05-31'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-06-01', '2022-06-30'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-07-01', '2022-07-31'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-08-01', '2022-08-31'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-09-01', '2022-09-30'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-10-01', '2022-10-31'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-11-01', '2022-11-30'])->sum('rmb_logistics_cost')
                            + $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-12-01', '2022-12-31'])->sum('rmb_logistics_cost')
                            ;?>
                            <?php echo number_format($logistics_costs_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $logistics_costs_av = $logistics_costs_total_all / '12' ; ?>
                            <?php echo number_format($logistics_costs_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th"></th>
                        <th class="th">その他支払</th>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-01-01', '2022-01-31'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-02-01', '2022-02-28'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-03-01', '2022-03-31'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-04-01', '2022-04-30'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-05-01', '2022-05-31'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-06-01', '2022-06-30'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-07-01', '2022-07-31'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-08-01', '2022-08-31'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-09-01', '2022-09-30'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-10-01', '2022-10-31'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-11-01', '2022-11-30'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total = $others->whereBetween('datetime_other', ['2022-12-01', '2022-12-31'])->sum('rmb_other'); ?>
                            <?php echo number_format($others_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $others_total_all = 
                            $others->whereBetween('datetime_other', ['2022-01-01', '2022-01-31'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-02-01', '2022-02-28'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-03-01', '2022-03-31'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-04-01', '2022-04-30'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-05-01', '2022-05-31'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-06-01', '2022-06-30'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-07-01', '2022-07-31'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-08-01', '2022-08-31'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-09-01', '2022-09-30'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-10-01', '2022-10-31'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-11-01', '2022-11-30'])->sum('rmb_other')
                            + $others->whereBetween('datetime_other', ['2022-12-01', '2022-12-31'])->sum('rmb_other')
                            ;?>
                            <?php echo number_format($others_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $others_av = $others_total_all / '12' ; ?>
                            <?php echo number_format($others_av,2) ;?>
                        </td>
                    </tr>

                    <tr>
                        <th class="th"></th>
                        <th class="th">12 領収書なし支払</th>
                        <th class="th"></th>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_credit'); ?>
                            <?php echo number_format($no_receipt_credits_total,2); ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_total_all = 
                            $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_credit')
                            + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_credit')
                            ;?>
                            <?php echo number_format($no_receipt_credits_total_all,2) ; ?>
                        </td>
                        <td class="list">
                            <?php $no_receipt_credits_av = $no_receipt_credits_total_all / '12' ; ?>
                            <?php echo number_format($no_receipt_credits_av,2) ;?>
                        </td>
                    </tr>



                    <tr>
                        <th class="th-twin">営業利益</th>
                        <th class="th-twin"></th>
                        <th class="th-twin"></th>

                        <td class="list-twin">
                            <?php $x1 = $details->whereBetween('datetime', ['2022-01-01', '2022-01-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-01-01', '2022-01-31'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-01-01', '2022-01-31'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-01-01', '2022-01-31'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-01-01', '2022-01-31'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-01-01', '2022-01-31'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-01-01', '2022-01-31'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-01-01', '2022-01-31'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x1,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x2 = $details->whereBetween('datetime', ['2022-02-01', '2022-02-28'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-02-01', '2022-02-28'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-02-01', '2022-02-28'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-02-01', '2022-02-28'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-02-01', '2022-02-28'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-02-01', '2022-02-28'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-02-01', '2022-02-28'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-02-01', '2022-02-28'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x2,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x3 = $details->whereBetween('datetime', ['2022-03-01', '2022-03-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-03-01', '2022-03-31'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-03-01', '2022-03-31'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-03-01', '2022-03-31'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-03-01', '2022-03-31'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-03-01', '2022-03-31'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-03-01', '2022-03-31'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-03-01', '2022-03-31'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x3,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x4 = $details->whereBetween('datetime', ['2022-04-01', '2022-04-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-04-01', '2022-04-30'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-04-01', '2022-04-30'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-04-01', '2022-04-30'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-04-01', '2022-04-30'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-04-01', '2022-04-30'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-04-01', '2022-04-30'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-04-01', '2022-04-30'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x4,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x5 = $details->whereBetween('datetime', ['2022-05-01', '2022-05-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-05-01', '2022-05-31'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-05-01', '2022-05-31'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-05-01', '2022-05-31'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-05-01', '2022-05-31'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-05-01', '2022-05-31'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-05-01', '2022-05-31'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-05-01', '2022-05-31'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x5,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x6 = $details->whereBetween('datetime', ['2022-06-01', '2022-06-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-06-01', '2022-06-30'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-06-01', '2022-06-30'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-06-01', '2022-06-30'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-06-01', '2022-06-30'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-06-01', '2022-06-30'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-06-01', '2022-06-30'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-06-01', '2022-06-30'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x6,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x7 = $details->whereBetween('datetime', ['2022-07-01', '2022-07-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-07-01', '2022-07-31'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-07-01', '2022-07-31'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-07-01', '2022-07-31'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-07-01', '2022-07-31'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-07-01', '2022-07-31'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-07-01', '2022-07-31'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-07-01', '2022-07-31'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x7,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x8 = $details->whereBetween('datetime', ['2022-08-01', '2022-08-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-08-01', '2022-08-31'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-08-01', '2022-08-31'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-08-01', '2022-08-31'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-08-01', '2022-08-31'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-08-01', '2022-08-31'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-08-01', '2022-08-31'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-08-01', '2022-08-31'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x8,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x9 = $details->whereBetween('datetime', ['2022-09-01', '2022-09-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-09-01', '2022-09-30'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-09-01', '2022-09-30'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-09-01', '2022-09-30'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-09-01', '2022-09-30'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-09-01', '2022-09-30'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-09-01', '2022-09-30'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-09-01', '2022-09-30'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x9,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x10 = $details->whereBetween('datetime', ['2022-10-01', '2022-10-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-10-01', '2022-10-31'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-10-01', '2022-10-31'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-10-01', '2022-10-31'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-10-01', '2022-10-31'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-10-01', '2022-10-31'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-10-01', '2022-10-31'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-10-01', '2022-10-31'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x10,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x11 = $details->whereBetween('datetime', ['2022-11-01', '2022-11-30'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-11-01', '2022-11-30'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-11-01', '2022-11-30'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-11-01', '2022-11-30'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-11-01', '2022-11-30'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-11-01', '2022-11-30'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-11-01', '2022-11-30'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-11-01', '2022-11-30'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x11,2); ?>
                        </td>
                        <td class="list-twin">
                            <?php $x12 = $details->whereBetween('datetime', ['2022-12-01', '2022-12-31'])->sum('rmb') 
                            + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_country_deposit') 
                            + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_within_china_deposit') 
                            + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_deposit') 
                            + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_hongkong_deposit')
                            + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_outsourcing_deposit')
                            + $other_deposits->whereBetween('datetime_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_other_deposit')
                            + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_other_deposit')
                            - $material_credits->whereBetween('datetime_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_material_credit')
                            - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_auxiliary_material_credit')
                            - $salary_credits->whereBetween('datetime_salary_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_salary_credit')
                            - $insurances->whereBetween('datetime_insurance', ['2022-12-01', '2022-12-31'])->sum('rmb_insurance')
                            - $ticket_fees->whereBetween('datetime_ticket_fee', ['2022-12-01', '2022-12-31'])->sum('rmb_ticket_fee')
                            - $travel_expenses->whereBetween('datetime_travel_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_travel_expense')
                            - $utility_costs->whereBetween('datetime_utility_cost', ['2022-12-01', '2022-12-31'])->sum('rmb_utility_cost')
                            - $tax_credits->whereBetween('datetime_tax_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_tax_credit')
                            - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_miscellaneous_expense')
                            - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2022-12-01', '2022-12-31'])->sum('rmb_entertainment_expense')
                            - $logistics_costs->whereBetween('datetime_logistics_cost', ['2022-12-01', '2022-12-31'])->sum('rmb_logistics_cost')
                            - $others->whereBetween('datetime_other', ['2022-12-01', '2022-12-31'])->sum('rmb_other')
                            - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2022-12-01', '2022-12-31'])->sum('rmb_no_receipt_credit')
                            ; ?>
                            <?php echo number_format($x12,2); ?>
                        </td>

                        <td class="list-twin">
                            <?php $x_all = $x1+$x2+$x3+$x4+$x5+$x6+$x7+$x8+$x9+$x10+$x11+$x12 ;?>
                            <?php echo number_format($x_all,2) ; ?>
                        </td>
                        <td class="list-twin">
                            <?php $x_av = $x_all / '12' ;?>
                            <?php echo number_format($x_av,2) ; ?>
                        </td>
                    </tr>
                </table>
                <div class="footer">青岛那须藤家庭用品有限公司</div>
        </div>


{{-- 2023年度 --------------------------------------------------------------------------------------------------}}
    <div class="totalamount2023" id="totalamout2023">
        <div  class="recording-period">
        <h3>損益計算書（領収書無し含む）</h3>
        <span>記録期間: [2023-01-01]-[2023-12-31]</span>
        <span class="reportor">報告者: 吴玉霞</span>        
        </div>

        <table>
            <thead>
                <tr>
                    <th class="th"></th>
                    <th class="th"></th>
                    <th class="th"></th>
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
            <tr>
                <th class="th">Ⅰ 売上高</th>
                <th class="th">日本加工賃入金</th>
                <th class="th"></th>

                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-01-01', '2023-01-31'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-02-01', '2023-02-28'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-03-01', '2023-03-31'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-04-01', '2023-04-30'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-05-01', '2023-05-31'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-06-01', '2023-06-30'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-07-01', '2023-07-31'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-08-01', '2023-08-31'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-09-01', '2023-09-30'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-10-01', '2023-10-31'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-11-01', '2023-11-30'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total = $details->whereBetween('datetime', ['2023-12-01', '2023-12-31'])->sum('rmb'); ?>
                    <?php echo number_format($details_total, 2); ?>
                </td>
                <td class="list">
                    <?php $details_total_all = 
                    $details->whereBetween('datetime', ['2023-01-01', '2023-01-31'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-02-01', '2023-02-28'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-03-01', '2023-03-31'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-04-01', '2023-04-30'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-05-01', '2023-05-31'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-06-01', '2023-06-30'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-07-01', '2023-07-31'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-08-01', '2023-08-31'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-09-01', '2023-09-30'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-10-01', '2023-10-31'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-11-01', '2023-11-30'])->sum('rmb')
                    + $details->whereBetween('datetime', ['2023-12-01', '2023-12-31'])->sum('rmb')
                    ;?>
                    <?php echo number_format($details_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $details_av = $details_total_all / '12' ; ?>
                    <?php echo number_format($details_av,2) ;?>
                </td>
            </tr>


            <tr>
                <th class="th"></th>
                <th class="th">第三国入金</th>
                <th class="th"></th>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_country_deposit'); ?>
                    <?php echo number_format($other_country_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_total_all = 
                    $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_country_deposit')
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_country_deposit')
                    ;?>
                    <?php echo number_format($other_country_deposits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $other_country_deposits_av = $other_country_deposits_total_all / '12' ; ?>
                    <?php echo number_format($other_country_deposits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">中国国内入金</th>
                <th class="th"></th>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_within_china_deposit'); ?>
                    <?php echo number_format($within_china_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_total_all = 
                    $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_within_china_deposit')
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_within_china_deposit')
                    ;?>
                    <?php echo number_format($within_china_deposits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $within_china_deposits_av = $within_china_deposits_total_all / '12' ; ?>
                    <?php echo number_format($within_china_deposits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">領収書なし国内入金</th>
                <th class="th"></th>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_deposit'); ?>
                    <?php echo number_format($no_receipt_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_total_all = 
                    $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_deposit')
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_deposit')
                    ;?>
                    <?php echo number_format($no_receipt_deposits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12' ; ?>
                    <?php echo number_format($no_receipt_deposits_av,2) ;?>
                </td>
            </tr>


            <tr>
                <th class="th"></th>
                <th class="th">香港TAKAGI入金</th>
                <th class="th"></th>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_hongkong_deposit'); ?>
                    <?php echo number_format($hongkong_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_total_all = 
                    $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_hongkong_deposit')
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_hongkong_deposit')
                    ;?>
                    <?php echo number_format($hongkong_deposits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $hongkong_deposits_av = $hongkong_deposits_total_all / '12' ; ?>
                    <?php echo number_format($hongkong_deposits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">外注先入金</th>
                <th class="th"></th>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_outsourcing_deposit'); ?>
                    <?php echo number_format($outsourcing_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_total_all = 
                    $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_outsourcing_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_outsourcing_deposit')
                    ;?>
                    <?php echo number_format($outsourcing_deposits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $outsourcing_deposits_av = $outsourcing_deposits_total_all / '12' ; ?>
                    <?php echo number_format($outsourcing_deposits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">その他入金</th>
                <th class="th"></th>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_deposit'); ?>
                    <?php echo number_format($other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $other_deposits_total_all = 
                    $other_deposits->whereBetween('datetime_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_deposit')
                    ;?>
                    <?php echo number_format($other_deposits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $other_deposits_av = $other_deposits_total_all / '12' ; ?>
                    <?php echo number_format($other_deposits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">領収書なしその他入金</th>
                <th class="th"></th>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                    <?php echo number_format($no_receipt_other_deposits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_total_all = 
                    $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_other_deposit')
                    ;?>
                    <?php echo number_format($no_receipt_other_deposits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $no_receipt_other_deposits_av = $no_receipt_other_deposits_total_all / '12' ; ?>
                    <?php echo number_format($no_receipt_other_deposits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th">Ⅱ 売上原価</th>
                <th class="th">資材支払</th>
                <th class="th"></th>

                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_material_credit'); ?>
                    <?php echo number_format($material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $material_credits_total_all = 
                    $material_credits->whereBetween('datetime_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_material_credit')
                    + $material_credits->whereBetween('datetime_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_material_credit')
                    ;?>
                    <?php echo number_format($material_credits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $material_credits_av = $material_credits_total_all / '12' ; ?>
                    <?php echo number_format($material_credits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">副資材支払</th>
                <th class="th"></th>

                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_auxiliary_material_credit'); ?>
                    <?php echo number_format($auxiliary_material_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_total_all = 
                    $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_auxiliary_material_credit')
                    + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_auxiliary_material_credit')
                    ;?>
                    <?php echo number_format($auxiliary_material_credits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $auxiliary_material_credits_av = $auxiliary_material_credits_total_all / '12' ; ?>
                    <?php echo number_format($auxiliary_material_credits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th-twin">売上純利益</th>
                <th class="th-twin"></th>
                <th class="th-twin"></th> 
                
                <td class="list-twin">
                    <?php $w1 = $details->whereBetween('datetime', ['2023-01-01', '2023-01-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w1,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w2 = $details->whereBetween('datetime', ['2023-02-01', '2023-02-28'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w2,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w3 = $details->whereBetween('datetime', ['2023-03-01', '2023-03-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w3,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w4 = $details->whereBetween('datetime', ['2023-04-01', '2023-04-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w4,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w5 = $details->whereBetween('datetime', ['2023-05-01', '2023-05-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w5,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w6 = $details->whereBetween('datetime', ['2023-06-01', '2023-06-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w6,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w7 = $details->whereBetween('datetime', ['2023-07-01', '2023-07-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w7,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w8 = $details->whereBetween('datetime', ['2023-08-01', '2023-08-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w8,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w9 = $details->whereBetween('datetime', ['2023-09-01', '2023-09-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w9,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w10 = $details->whereBetween('datetime', ['2023-10-01', '2023-10-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w10,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w11 = $details->whereBetween('datetime', ['2023-11-01', '2023-11-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w11,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w12 = $details->whereBetween('datetime', ['2023-12-01', '2023-12-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_auxiliary_material_credit')
                    ; ?>
                    <?php echo number_format($w12,2); ?>
                </td>
                <td class="list-twin">
                    <?php $w_all = $w1+$w2+$w3+$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12 ;?>
                    <?php echo number_format($w_all,2) ;?>
                </td>
                <td class="list-twin">
                    <?php $w_av = $w_all / '12' ;?>
                    <?php echo number_format($w_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th">Ⅲ 販売員及び一般管理費</th>
                <th class="th"></th>
                <th class="th"></th>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
                <td class="list"></td>
            </tr>
            <tr>
                <th class="th"></th>
                <th class="th">1 貸倒引当金繰入額</th>
                <th class="th"></th>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">2 従業員給与手当</th>
                <th class="th">給料支払</th>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_salary_credit'); ?>
                    <?php echo number_format($salary_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $salary_credits_total_all = 
                    $salary_credits->whereBetween('datetime_salary_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_salary_credit')
                    + $salary_credits->whereBetween('datetime_salary_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_salary_credit')
                    ;?>
                    <?php echo number_format($salary_credits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $salary_credits_av = $salary_credits_total_all / '12' ; ?>
                    <?php echo number_format($salary_credits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th"></th>
                <th class="th">保険料支払</th>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-01-01', '2023-01-31'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-02-01', '2023-02-28'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-03-01', '2023-03-31'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-04-01', '2023-04-30'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-05-01', '2023-05-31'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-06-01', '2023-06-30'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-07-01', '2023-07-31'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-08-01', '2023-08-31'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-09-01', '2023-09-30'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-10-01', '2023-10-31'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-11-01', '2023-11-30'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2023-12-01', '2023-12-31'])->sum('rmb_insurance'); ?>
                    <?php echo number_format($insurances_total,2); ?>
                </td>
                <td class="list">
                    <?php $insurances_total_all = 
                    $insurances->whereBetween('datetime_insurance', ['2023-01-01', '2023-01-31'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-02-01', '2023-02-28'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-03-01', '2023-03-31'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-04-01', '2023-04-30'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-05-01', '2023-05-31'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-06-01', '2023-06-30'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-07-01', '2023-07-31'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-08-01', '2023-08-31'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-09-01', '2023-09-30'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-10-01', '2023-10-31'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-11-01', '2023-11-30'])->sum('rmb_insurance')
                    + $insurances->whereBetween('datetime_insurance', ['2023-12-01', '2023-12-31'])->sum('rmb_insurance')
                    ;?>
                    <?php echo number_format($insurances_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $insurances_av = $insurances_total_all / '12' ; ?>
                    <?php echo number_format($insurances_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">3 賞与引当繰入額</th>
                <th class="th"></th>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
            </tr>
            <tr>
                <th class="th"></th>
                <th class="th">4 退職給付費用</th>
                <th class="th"></th>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
            </tr>
            <tr>
                <th class="th"></th>
                <th class="th">5 福利厚生費用</th>
                <th class="th"></th>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
            </tr>
            <tr>
                <th class="th"></th>
                <th class="th">6 旅費及び交通費</th>
                <th class="th">チケット費用支払</th>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-01-01', '2023-01-31'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-02-01', '2023-02-28'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $insurances->whereBetween('datetime_ticket_fee', ['2023-03-01', '2023-03-31'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-04-01', '2023-04-30'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-05-01', '2023-05-31'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-06-01', '2023-06-30'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-07-01', '2023-07-31'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-08-01', '2023-08-31'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-09-01', '2023-09-30'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-10-01', '2023-10-31'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-11-01', '2023-11-30'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-12-01', '2023-12-31'])->sum('rmb_ticket_fee'); ?>
                    <?php echo number_format($ticket_fees_total,2); ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_total_all = 
                    $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-01-01', '2023-01-31'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-02-01', '2023-02-28'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-03-01', '2023-03-31'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-04-01', '2023-04-30'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-05-01', '2023-05-31'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-06-01', '2023-06-30'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-07-01', '2023-07-31'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-08-01', '2023-08-31'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-09-01', '2023-09-30'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-10-01', '2023-10-31'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-11-01', '2023-11-30'])->sum('rmb_ticket_fee')
                    + $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-12-01', '2023-12-31'])->sum('rmb_ticket_fee')
                    ;?>
                    <?php echo number_format($ticket_fees_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $ticket_fees_av = $ticket_fees_total_all / '12' ; ?>
                    <?php echo number_format($ticket_fees_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th"></th>
                <th class="th">旅費支払</th>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_travel_expense'); ?>
                    <?php echo number_format($travel_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_total_all = 
                    $travel_expenses->whereBetween('datetime_travel_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_travel_expense')
                    + $travel_expenses->whereBetween('datetime_travel_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_travel_expense')
                    ;?>
                    <?php echo number_format($travel_expenses_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $travel_expenses_av = $travel_expenses_total_all / '12' ; ?>
                    <?php echo number_format($travel_expenses_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">7 光熱+通信費用</th>
                <th class="th"></th>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-01-01', '2023-01-31'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-02-01', '2023-02-28'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-03-01', '2023-03-31'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-04-01', '2023-04-30'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-05-01', '2023-05-31'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-06-01', '2023-06-30'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-07-01', '2023-07-31'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-08-01', '2023-08-31'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-09-01', '2023-09-30'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-10-01', '2023-10-31'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-11-01', '2023-11-30'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2023-12-01', '2023-12-31'])->sum('rmb_utility_cost'); ?>
                    <?php echo number_format($utility_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $utility_costs_total_all = 
                    $utility_costs->whereBetween('datetime_utility_cost', ['2023-01-01', '2023-01-31'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-02-01', '2023-02-28'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-03-01', '2023-03-31'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-04-01', '2023-04-30'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-05-01', '2023-05-31'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-06-01', '2023-06-30'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-07-01', '2023-07-31'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-08-01', '2023-08-31'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-09-01', '2023-09-30'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-10-01', '2023-10-31'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-11-01', '2023-11-30'])->sum('rmb_utility_cost')
                    + $utility_costs->whereBetween('datetime_utility_cost', ['2023-12-01', '2023-12-31'])->sum('rmb_utility_cost')
                    ;?>
                    <?php echo number_format($utility_costs_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $utility_costs_av = $utility_costs_total_all / '12' ; ?>
                    <?php echo number_format($utility_costs_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">8 租税公課</th>
                <th class="th"></th>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_tax_credit'); ?>
                    <?php echo number_format($tax_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $tax_credits_total_all = 
                    $tax_credits->whereBetween('datetime_tax_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_tax_credit')
                    + $tax_credits->whereBetween('datetime_tax_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_tax_credit')
                    ;?>
                    <?php echo number_format($tax_credits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $tax_credits_av = $tax_credits_total_all / '12' ; ?>
                    <?php echo number_format($tax_credits_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">9 減価償却</th>
                <th class="th"></th>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">10 連結調整勘定償却額</th>
                <th class="th"></th>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
                <td class="list"><?php echo number_format(0,2); ?></td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">11 その他</th>
                <th class="th">雑費支払</th>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_miscellaneous_expense'); ?>
                    <?php echo number_format($miscellaneous_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_total_all = 
                    $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_miscellaneous_expense')
                    + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_miscellaneous_expense')
                    ;?>
                    <?php echo number_format($miscellaneous_expenses_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $miscellaneous_expenses_av = $miscellaneous_expenses_total_all / '12' ; ?>
                    <?php echo number_format($miscellaneous_expenses_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th"></th>
                <th class="th">接待費用支払</th>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_entertainment_expense'); ?>
                    <?php echo number_format($entertainment_expenses_total,2); ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_total_all = 
                    $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_entertainment_expense')
                    + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_entertainment_expense')
                    ;?>
                    <?php echo number_format($entertainment_expenses_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $entertainment_expenses_av = $entertainment_expenses_total_all / '12' ; ?>
                    <?php echo number_format($entertainment_expenses_av,2) ;?>
                </td>
            </tr>
           
            <tr>
                <th class="th"></th>
                <th class="th"></th>
                <th class="th">物流費用支払</th>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-01-01', '2023-01-31'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-02-01', '2023-02-28'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-03-01', '2023-03-31'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-04-01', '2023-04-30'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-05-01', '2023-05-31'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-06-01', '2023-06-30'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-07-01', '2023-07-31'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-08-01', '2023-08-31'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-09-01', '2023-09-30'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-10-01', '2023-10-31'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-11-01', '2023-11-30'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-12-01', '2023-12-31'])->sum('rmb_logistics_cost'); ?>
                    <?php echo number_format($logistics_costs_total,2); ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_total_all = 
                    $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-01-01', '2023-01-31'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-02-01', '2023-02-28'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-03-01', '2023-03-31'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-04-01', '2023-04-30'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-05-01', '2023-05-31'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-06-01', '2023-06-30'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-07-01', '2023-07-31'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-08-01', '2023-08-31'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-09-01', '2023-09-30'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-10-01', '2023-10-31'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-11-01', '2023-11-30'])->sum('rmb_logistics_cost')
                    + $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-12-01', '2023-12-31'])->sum('rmb_logistics_cost')
                    ;?>
                    <?php echo number_format($logistics_costs_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $logistics_costs_av = $logistics_costs_total_all / '12' ; ?>
                    <?php echo number_format($logistics_costs_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th"></th>
                <th class="th">その他支払</th>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-01-01', '2023-01-31'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-02-01', '2023-02-28'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-03-01', '2023-03-31'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-04-01', '2023-04-30'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-05-01', '2023-05-31'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-06-01', '2023-06-30'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-07-01', '2023-07-31'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-08-01', '2023-08-31'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-09-01', '2023-09-30'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-10-01', '2023-10-31'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-11-01', '2023-11-30'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total = $others->whereBetween('datetime_other', ['2023-12-01', '2023-12-31'])->sum('rmb_other'); ?>
                    <?php echo number_format($others_total,2); ?>
                </td>
                <td class="list">
                    <?php $others_total_all = 
                    $others->whereBetween('datetime_other', ['2023-01-01', '2023-01-31'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-02-01', '2023-02-28'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-03-01', '2023-03-31'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-04-01', '2023-04-30'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-05-01', '2023-05-31'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-06-01', '2023-06-30'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-07-01', '2023-07-31'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-08-01', '2023-08-31'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-09-01', '2023-09-30'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-10-01', '2023-10-31'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-11-01', '2023-11-30'])->sum('rmb_other')
                    + $others->whereBetween('datetime_other', ['2023-12-01', '2023-12-31'])->sum('rmb_other')
                    ;?>
                    <?php echo number_format($others_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $others_av = $others_total_all / '12' ; ?>
                    <?php echo number_format($others_av,2) ;?>
                </td>
            </tr>

            <tr>
                <th class="th"></th>
                <th class="th">12 領収書なし支払</th>
                <th class="th"></th>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_credit'); ?>
                    <?php echo number_format($no_receipt_credits_total,2); ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_total_all = 
                    $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_credit')
                    + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_credit')
                    ;?>
                    <?php echo number_format($no_receipt_credits_total_all,2) ; ?>
                </td>
                <td class="list">
                    <?php $no_receipt_credits_av = $no_receipt_credits_total_all / '12' ; ?>
                    <?php echo number_format($no_receipt_credits_av,2) ;?>
                </td>
            </tr>



            <tr>
                <th class="th-twin">営業利益</th>
                <th class="th-twin"></th>
                <th class="th-twin"></th>

                <td class="list-twin">
                    <?php $x1 = $details->whereBetween('datetime', ['2023-01-01', '2023-01-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-01-01', '2023-01-31'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-01-01', '2023-01-31'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-01-01', '2023-01-31'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-01-01', '2023-01-31'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-01-01', '2023-01-31'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-01-01', '2023-01-31'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-01-01', '2023-01-31'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x1,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x2 = $details->whereBetween('datetime', ['2023-02-01', '2023-02-28'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-02-01', '2023-02-28'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-02-01', '2023-02-28'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-02-01', '2023-02-28'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-02-01', '2023-02-28'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-02-01', '2023-02-28'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-02-01', '2023-02-28'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-02-01', '2023-02-28'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x2,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x3 = $details->whereBetween('datetime', ['2023-03-01', '2023-03-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-03-01', '2023-03-31'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-03-01', '2023-03-31'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-03-01', '2023-03-31'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-03-01', '2023-03-31'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-03-01', '2023-03-31'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-03-01', '2023-03-31'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-03-01', '2023-03-31'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x3,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x4 = $details->whereBetween('datetime', ['2023-04-01', '2023-04-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-04-01', '2023-04-30'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-04-01', '2023-04-30'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-04-01', '2023-04-30'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-04-01', '2023-04-30'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-04-01', '2023-04-30'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-04-01', '2023-04-30'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-04-01', '2023-04-30'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x4,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x5 = $details->whereBetween('datetime', ['2023-05-01', '2023-05-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-05-01', '2023-05-31'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-05-01', '2023-05-31'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-05-01', '2023-05-31'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-05-01', '2023-05-31'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-05-01', '2023-05-31'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-05-01', '2023-05-31'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-05-01', '2023-05-31'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x5,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x6 = $details->whereBetween('datetime', ['2023-06-01', '2023-06-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-06-01', '2023-06-30'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-06-01', '2023-06-30'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-06-01', '2023-06-30'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-06-01', '2023-06-30'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-06-01', '2023-06-30'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-06-01', '2023-06-30'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-06-01', '2023-06-30'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x6,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x7 = $details->whereBetween('datetime', ['2023-07-01', '2023-07-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-07-01', '2023-07-31'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-07-01', '2023-07-31'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-07-01', '2023-07-31'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-07-01', '2023-07-31'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-07-01', '2023-07-31'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-07-01', '2023-07-31'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-07-01', '2023-07-31'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x7,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x8 = $details->whereBetween('datetime', ['2023-08-01', '2023-08-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-08-01', '2023-08-31'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-08-01', '2023-08-31'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-08-01', '2023-08-31'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-08-01', '2023-08-31'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-08-01', '2023-08-31'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-08-01', '2023-08-31'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-08-01', '2023-08-31'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x8,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x9 = $details->whereBetween('datetime', ['2023-09-01', '2023-09-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-09-01', '2023-09-30'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-09-01', '2023-09-30'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-09-01', '2023-09-30'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-09-01', '2023-09-30'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-09-01', '2023-09-30'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-09-01', '2023-09-30'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-09-01', '2023-09-30'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x9,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x10 = $details->whereBetween('datetime', ['2023-10-01', '2023-10-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-10-01', '2023-10-31'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-10-01', '2023-10-31'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-10-01', '2023-10-31'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-10-01', '2023-10-31'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-10-01', '2023-10-31'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-10-01', '2023-10-31'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-10-01', '2023-10-31'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x10,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x11 = $details->whereBetween('datetime', ['2023-11-01', '2023-11-30'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-11-01', '2023-11-30'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-11-01', '2023-11-30'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-11-01', '2023-11-30'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-11-01', '2023-11-30'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-11-01', '2023-11-30'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-11-01', '2023-11-30'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-11-01', '2023-11-30'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x11,2); ?>
                </td>
                <td class="list-twin">
                    <?php $x12 = $details->whereBetween('datetime', ['2023-12-01', '2023-12-31'])->sum('rmb') 
                    + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_country_deposit') 
                    + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_within_china_deposit') 
                    + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_deposit') 
                    + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_hongkong_deposit')
                    + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_outsourcing_deposit')
                    + $other_deposits->whereBetween('datetime_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_other_deposit')
                    + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_other_deposit')
                    - $material_credits->whereBetween('datetime_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_material_credit')
                    - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_auxiliary_material_credit')
                    - $salary_credits->whereBetween('datetime_salary_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_salary_credit')
                    - $insurances->whereBetween('datetime_insurance', ['2023-12-01', '2023-12-31'])->sum('rmb_insurance')
                    - $ticket_fees->whereBetween('datetime_ticket_fee', ['2023-12-01', '2023-12-31'])->sum('rmb_ticket_fee')
                    - $travel_expenses->whereBetween('datetime_travel_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_travel_expense')
                    - $utility_costs->whereBetween('datetime_utility_cost', ['2023-12-01', '2023-12-31'])->sum('rmb_utility_cost')
                    - $tax_credits->whereBetween('datetime_tax_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_tax_credit')
                    - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_miscellaneous_expense')
                    - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2023-12-01', '2023-12-31'])->sum('rmb_entertainment_expense')
                    - $logistics_costs->whereBetween('datetime_logistics_cost', ['2023-12-01', '2023-12-31'])->sum('rmb_logistics_cost')
                    - $others->whereBetween('datetime_other', ['2023-12-01', '2023-12-31'])->sum('rmb_other')
                    - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2023-12-01', '2023-12-31'])->sum('rmb_no_receipt_credit')
                    ; ?>
                    <?php echo number_format($x12,2); ?>
                </td>

                <td class="list-twin">
                    <?php $x_all = $x1+$x2+$x3+$x4+$x5+$x6+$x7+$x8+$x9+$x10+$x11+$x12 ;?>
                    <?php echo number_format($x_all,2) ; ?>
                </td>
                <td class="list-twin">
                    <?php $x_av = $x_all / '12' ;?>
                    <?php echo number_format($x_av,2) ; ?>
                </td>
            </tr>
        </table>
        <div class="footer">青岛那须藤家庭用品有限公司</div>
</div>


{{-- 2024年度 --------------------------------------------------------------------------------------------------}}
<div class="totalamount2024" id="totalamout2024">
    <div  class="recording-period">
    <h3>損益計算書（領収書無し含む）</h3>
    <span>記録期間: [2024-01-01]-[2024-12-31]</span>
    <span class="reportor">報告者: 吴玉霞</span>        
    </div>

    <table>
        <thead>
            <tr>
                <th class="th"></th>
                <th class="th"></th>
                <th class="th"></th>
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
        <tr>
            <th class="th">Ⅰ 売上高</th>
            <th class="th">日本加工賃入金</th>
            <th class="th"></th>

            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-01-01', '2024-01-31'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-02-01', '2024-02-29'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-03-01', '2024-03-31'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-04-01', '2024-04-30'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-05-01', '2024-05-31'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-06-01', '2024-06-30'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-07-01', '2024-07-31'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-08-01', '2024-08-31'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-09-01', '2024-09-30'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-10-01', '2024-10-31'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-11-01', '2024-11-30'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total = $details->whereBetween('datetime', ['2024-12-01', '2024-12-31'])->sum('rmb'); ?>
                <?php echo number_format($details_total, 2); ?>
            </td>
            <td class="list">
                <?php $details_total_all = 
                $details->whereBetween('datetime', ['2024-01-01', '2024-01-31'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-02-01', '2024-02-29'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-03-01', '2024-03-31'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-04-01', '2024-04-30'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-05-01', '2024-05-31'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-06-01', '2024-06-30'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-07-01', '2024-07-31'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-08-01', '2024-08-31'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-09-01', '2024-09-30'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-10-01', '2024-10-31'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-11-01', '2024-11-30'])->sum('rmb')
                + $details->whereBetween('datetime', ['2024-12-01', '2024-12-31'])->sum('rmb')
                ;?>
                <?php echo number_format($details_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $details_av = $details_total_all / '12' ; ?>
                <?php echo number_format($details_av,2) ;?>
            </td>
        </tr>


        <tr>
            <th class="th"></th>
            <th class="th">第三国入金</th>
            <th class="th"></th>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total = $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_country_deposit'); ?>
                <?php echo number_format($other_country_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_total_all = 
                $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_country_deposit')
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_country_deposit')
                ;?>
                <?php echo number_format($other_country_deposits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $other_country_deposits_av = $other_country_deposits_total_all / '12' ; ?>
                <?php echo number_format($other_country_deposits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">中国国内入金</th>
            <th class="th"></th>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total = $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_within_china_deposit'); ?>
                <?php echo number_format($within_china_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_total_all = 
                $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_within_china_deposit')
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_within_china_deposit')
                ;?>
                <?php echo number_format($within_china_deposits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $within_china_deposits_av = $within_china_deposits_total_all / '12' ; ?>
                <?php echo number_format($within_china_deposits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">領収書なし国内入金</th>
            <th class="th"></th>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total = $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_deposit'); ?>
                <?php echo number_format($no_receipt_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_total_all = 
                $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-02-01', '2024-02-28'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_deposit')
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_deposit')
                ;?>
                <?php echo number_format($no_receipt_deposits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $no_receipt_deposits_av = $no_receipt_deposits_total_all / '12' ; ?>
                <?php echo number_format($no_receipt_deposits_av,2) ;?>
            </td>
        </tr>


        <tr>
            <th class="th"></th>
            <th class="th">香港TAKAGI入金</th>
            <th class="th"></th>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total = $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_hongkong_deposit'); ?>
                <?php echo number_format($hongkong_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_total_all = 
                $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_hongkong_deposit')
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_hongkong_deposit')
                ;?>
                <?php echo number_format($hongkong_deposits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $hongkong_deposits_av = $hongkong_deposits_total_all / '12' ; ?>
                <?php echo number_format($hongkong_deposits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">外注先入金</th>
            <th class="th"></th>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total = $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_outsourcing_deposit'); ?>
                <?php echo number_format($outsourcing_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_total_all = 
                $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_outsourcing_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_outsourcing_deposit')
                ;?>
                <?php echo number_format($outsourcing_deposits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $outsourcing_deposits_av = $outsourcing_deposits_total_all / '12' ; ?>
                <?php echo number_format($outsourcing_deposits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">その他入金</th>
            <th class="th"></th>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total = $other_deposits->whereBetween('datetime_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_deposit'); ?>
                <?php echo number_format($other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $other_deposits_total_all = 
                $other_deposits->whereBetween('datetime_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_deposit')
                ;?>
                <?php echo number_format($other_deposits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $other_deposits_av = $other_deposits_total_all / '12' ; ?>
                <?php echo number_format($other_deposits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">領収書なしその他入金</th>
            <th class="th"></th>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-02-01', '2024-02-28'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total = $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_other_deposit'); ?>
                <?php echo number_format($no_receipt_other_deposits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_total_all = 
                $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_other_deposit')
                ;?>
                <?php echo number_format($no_receipt_other_deposits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $no_receipt_other_deposits_av = $no_receipt_other_deposits_total_all / '12' ; ?>
                <?php echo number_format($no_receipt_other_deposits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th">Ⅱ 売上原価</th>
            <th class="th">資材支払</th>
            <th class="th"></th>

            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total = $material_credits->whereBetween('datetime_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_material_credit'); ?>
                <?php echo number_format($material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $material_credits_total_all = 
                $material_credits->whereBetween('datetime_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-02-01', '2024-02-28'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_material_credit')
                + $material_credits->whereBetween('datetime_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_material_credit')
                ;?>
                <?php echo number_format($material_credits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $material_credits_av = $material_credits_total_all / '12' ; ?>
                <?php echo number_format($material_credits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">副資材支払</th>
            <th class="th"></th>

            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total = $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_auxiliary_material_credit'); ?>
                <?php echo number_format($auxiliary_material_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_total_all = 
                $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_auxiliary_material_credit')
                + $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_auxiliary_material_credit')
                ;?>
                <?php echo number_format($auxiliary_material_credits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $auxiliary_material_credits_av = $auxiliary_material_credits_total_all / '12' ; ?>
                <?php echo number_format($auxiliary_material_credits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th-twin">売上純利益</th>
            <th class="th-twin"></th>
            <th class="th-twin"></th> 
            
            <td class="list-twin">
                <?php $w1 = $details->whereBetween('datetime', ['2024-01-01', '2024-01-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w1,2); ?>
            </td>
            <td class="list-twin">
                <?php $w2 = $details->whereBetween('datetime', ['2024-02-01', '2024-02-29'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w2,2); ?>
            </td>
            <td class="list-twin">
                <?php $w3 = $details->whereBetween('datetime', ['2024-03-01', '2024-03-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w3,2); ?>
            </td>
            <td class="list-twin">
                <?php $w4 = $details->whereBetween('datetime', ['2024-04-01', '2024-04-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w4,2); ?>
            </td>
            <td class="list-twin">
                <?php $w5 = $details->whereBetween('datetime', ['2024-05-01', '2024-05-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w5,2); ?>
            </td>
            <td class="list-twin">
                <?php $w6 = $details->whereBetween('datetime', ['2024-06-01', '2024-06-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w6,2); ?>
            </td>
            <td class="list-twin">
                <?php $w7 = $details->whereBetween('datetime', ['2024-07-01', '2024-07-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w7,2); ?>
            </td>
            <td class="list-twin">
                <?php $w8 = $details->whereBetween('datetime', ['2024-08-01', '2024-08-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w8,2); ?>
            </td>
            <td class="list-twin">
                <?php $w9 = $details->whereBetween('datetime', ['2024-09-01', '2024-09-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w9,2); ?>
            </td>
            <td class="list-twin">
                <?php $w10 = $details->whereBetween('datetime', ['2024-10-01', '2024-10-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w10,2); ?>
            </td>
            <td class="list-twin">
                <?php $w11 = $details->whereBetween('datetime', ['2024-11-01', '2024-11-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w11,2); ?>
            </td>
            <td class="list-twin">
                <?php $w12 = $details->whereBetween('datetime', ['2024-12-01', '2024-12-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_auxiliary_material_credit')
                ; ?>
                <?php echo number_format($w12,2); ?>
            </td>
            <td class="list-twin">
                <?php $w_all = $w1+$w2+$w3+$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12 ;?>
                <?php echo number_format($w_all,2) ;?>
            </td>
            <td class="list-twin">
                <?php $w_av = $w_all / '12' ;?>
                <?php echo number_format($w_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th">Ⅲ 販売員及び一般管理費</th>
            <th class="th"></th>
            <th class="th"></th>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
            <td class="list"></td>
        </tr>
        <tr>
            <th class="th"></th>
            <th class="th">1 貸倒引当金繰入額</th>
            <th class="th"></th>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">2 従業員給与手当</th>
            <th class="th">給料支払</th>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total = $salary_credits->whereBetween('datetime_salary_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_salary_credit'); ?>
                <?php echo number_format($salary_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $salary_credits_total_all = 
                $salary_credits->whereBetween('datetime_salary_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_salary_credit')
                + $salary_credits->whereBetween('datetime_salary_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_salary_credit')
                ;?>
                <?php echo number_format($salary_credits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $salary_credits_av = $salary_credits_total_all / '12' ; ?>
                <?php echo number_format($salary_credits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th"></th>
            <th class="th">保険料支払</th>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-01-01', '2024-01-31'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-02-01', '2024-02-29'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-03-01', '2024-03-31'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-04-01', '2024-04-30'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-05-01', '2024-05-31'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-06-01', '2024-06-30'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-07-01', '2024-07-31'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-08-01', '2024-08-31'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-09-01', '2024-09-30'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-10-01', '2024-10-31'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-11-01', '2024-11-30'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total = $insurances->whereBetween('datetime_insurance', ['2024-12-01', '2024-12-31'])->sum('rmb_insurance'); ?>
                <?php echo number_format($insurances_total,2); ?>
            </td>
            <td class="list">
                <?php $insurances_total_all = 
                $insurances->whereBetween('datetime_insurance', ['2024-01-01', '2024-01-31'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-02-01', '2024-02-29'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-03-01', '2024-03-31'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-04-01', '2024-04-30'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-05-01', '2024-05-31'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-06-01', '2024-06-30'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-07-01', '2024-07-31'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-08-01', '2024-08-31'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-09-01', '2024-09-30'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-10-01', '2024-10-31'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-11-01', '2024-11-30'])->sum('rmb_insurance')
                + $insurances->whereBetween('datetime_insurance', ['2024-12-01', '2024-12-31'])->sum('rmb_insurance')
                ;?>
                <?php echo number_format($insurances_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $insurances_av = $insurances_total_all / '12' ; ?>
                <?php echo number_format($insurances_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">3 賞与引当繰入額</th>
            <th class="th"></th>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
        </tr>
        <tr>
            <th class="th"></th>
            <th class="th">4 退職給付費用</th>
            <th class="th"></th>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
        </tr>
        <tr>
            <th class="th"></th>
            <th class="th">5 福利厚生費用</th>
            <th class="th"></th>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
        </tr>
        <tr>
            <th class="th"></th>
            <th class="th">6 旅費及び交通費</th>
            <th class="th">チケット費用支払</th>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-01-01', '2024-01-31'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-02-01', '2024-02-29'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $insurances->whereBetween('datetime_ticket_fee', ['2024-03-01', '2024-03-31'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-04-01', '2024-04-30'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-05-01', '2024-05-31'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-06-01', '2024-06-30'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-07-01', '2024-07-31'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-08-01', '2024-08-31'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-09-01', '2024-09-30'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-10-01', '2024-10-31'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-11-01', '2024-11-30'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total = $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-12-01', '2024-12-31'])->sum('rmb_ticket_fee'); ?>
                <?php echo number_format($ticket_fees_total,2); ?>
            </td>
            <td class="list">
                <?php $ticket_fees_total_all = 
                $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-01-01', '2024-01-31'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-02-01', '2024-02-29'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-03-01', '2024-03-31'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-04-01', '2024-04-30'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-05-01', '2024-05-31'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-06-01', '2024-06-30'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-07-01', '2024-07-31'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-08-01', '2024-08-31'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-09-01', '2024-09-30'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-10-01', '2024-10-31'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-11-01', '2024-11-30'])->sum('rmb_ticket_fee')
                + $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-12-01', '2024-12-31'])->sum('rmb_ticket_fee')
                ;?>
                <?php echo number_format($ticket_fees_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $ticket_fees_av = $ticket_fees_total_all / '12' ; ?>
                <?php echo number_format($ticket_fees_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th"></th>
            <th class="th">旅費支払</th>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total = $travel_expenses->whereBetween('datetime_travel_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_travel_expense'); ?>
                <?php echo number_format($travel_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $travel_expenses_total_all = 
                $travel_expenses->whereBetween('datetime_travel_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_travel_expense')
                + $travel_expenses->whereBetween('datetime_travel_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_travel_expense')
                ;?>
                <?php echo number_format($travel_expenses_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $travel_expenses_av = $travel_expenses_total_all / '12' ; ?>
                <?php echo number_format($travel_expenses_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">7 光熱+通信費用</th>
            <th class="th"></th>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-01-01', '2024-01-31'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-02-01', '2024-02-29'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-03-01', '2024-03-31'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-04-01', '2024-04-30'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-05-01', '2024-05-31'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-06-01', '2024-06-30'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-07-01', '2024-07-31'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-08-01', '2024-08-31'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-09-01', '2024-09-30'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-10-01', '2024-10-31'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-11-01', '2024-11-30'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total = $utility_costs->whereBetween('datetime_utility_cost', ['2024-12-01', '2024-12-31'])->sum('rmb_utility_cost'); ?>
                <?php echo number_format($utility_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $utility_costs_total_all = 
                $utility_costs->whereBetween('datetime_utility_cost', ['2024-01-01', '2024-01-31'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-02-01', '2024-02-29'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-03-01', '2024-03-31'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-04-01', '2024-04-30'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-05-01', '2024-05-31'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-06-01', '2024-06-30'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-07-01', '2024-07-31'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-08-01', '2024-08-31'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-09-01', '2024-09-30'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-10-01', '2024-10-31'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-11-01', '2024-11-30'])->sum('rmb_utility_cost')
                + $utility_costs->whereBetween('datetime_utility_cost', ['2024-12-01', '2024-12-31'])->sum('rmb_utility_cost')
                ;?>
                <?php echo number_format($utility_costs_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $utility_costs_av = $utility_costs_total_all / '12' ; ?>
                <?php echo number_format($utility_costs_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">8 租税公課</th>
            <th class="th"></th>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total = $tax_credits->whereBetween('datetime_tax_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_tax_credit'); ?>
                <?php echo number_format($tax_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $tax_credits_total_all = 
                $tax_credits->whereBetween('datetime_tax_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_tax_credit')
                + $tax_credits->whereBetween('datetime_tax_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_tax_credit')
                ;?>
                <?php echo number_format($tax_credits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $tax_credits_av = $tax_credits_total_all / '12' ; ?>
                <?php echo number_format($tax_credits_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">9 減価償却</th>
            <th class="th"></th>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">10 連結調整勘定償却額</th>
            <th class="th"></th>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
            <td class="list"><?php echo number_format(0,2); ?></td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">11 その他</th>
            <th class="th">雑費支払</th>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>2024
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total = $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_miscellaneous_expense'); ?>
                <?php echo number_format($miscellaneous_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_total_all = 
                $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_miscellaneous_expense')
                + $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_miscellaneous_expense')
                ;?>
                <?php echo number_format($miscellaneous_expenses_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $miscellaneous_expenses_av = $miscellaneous_expenses_total_all / '12' ; ?>
                <?php echo number_format($miscellaneous_expenses_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th"></th>
            <th class="th">接待費用支払</th>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total = $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_entertainment_expense'); ?>
                <?php echo number_format($entertainment_expenses_total,2); ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_total_all = 
                $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_entertainment_expense')
                + $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_entertainment_expense')
                ;?>
                <?php echo number_format($entertainment_expenses_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $entertainment_expenses_av = $entertainment_expenses_total_all / '12' ; ?>
                <?php echo number_format($entertainment_expenses_av,2) ;?>
            </td>
        </tr>
       
        <tr>
            <th class="th"></th>
            <th class="th"></th>
            <th class="th">物流費用支払</th>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-01-01', '2024-01-31'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-02-01', '2024-02-29'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-03-01', '2024-03-31'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-04-01', '2024-04-30'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-05-01', '2024-05-31'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-06-01', '2024-06-30'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-07-01', '2024-07-31'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-08-01', '2024-08-31'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-09-01', '2024-09-30'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-10-01', '2024-10-31'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-11-01', '2024-11-30'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total = $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-12-01', '2024-12-31'])->sum('rmb_logistics_cost'); ?>
                <?php echo number_format($logistics_costs_total,2); ?>
            </td>
            <td class="list">
                <?php $logistics_costs_total_all = 
                $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-01-01', '2024-01-31'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-02-01', '2024-02-29'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-03-01', '2024-03-31'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-04-01', '2024-04-30'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-05-01', '2024-05-31'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-06-01', '2024-06-30'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-07-01', '2024-07-31'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-08-01', '2024-08-31'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-09-01', '2024-09-30'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-10-01', '2024-10-31'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-11-01', '2024-11-30'])->sum('rmb_logistics_cost')
                + $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-12-01', '2024-12-31'])->sum('rmb_logistics_cost')
                ;?>
                <?php echo number_format($logistics_costs_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $logistics_costs_av = $logistics_costs_total_all / '12' ; ?>
                <?php echo number_format($logistics_costs_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th"></th>
            <th class="th">その他支払</th>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-01-01', '2024-01-31'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-02-01', '2024-02-29'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-03-01', '2024-03-31'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-04-01', '2024-04-30'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-05-01', '2024-05-31'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-06-01', '2024-06-30'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-07-01', '2024-07-31'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-08-01', '2024-08-31'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-09-01', '2024-09-30'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-10-01', '2024-10-31'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-11-01', '2024-11-30'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total = $others->whereBetween('datetime_other', ['2024-12-01', '2024-12-31'])->sum('rmb_other'); ?>
                <?php echo number_format($others_total,2); ?>
            </td>
            <td class="list">
                <?php $others_total_all = 
                $others->whereBetween('datetime_other', ['2024-01-01', '2024-01-31'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-02-01', '2024-02-29'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-03-01', '2024-03-31'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-04-01', '2024-04-30'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-05-01', '2024-05-31'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-06-01', '2024-06-30'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-07-01', '2024-07-31'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-08-01', '2024-08-31'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-09-01', '2024-09-30'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-10-01', '2024-10-31'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-11-01', '2024-11-30'])->sum('rmb_other')
                + $others->whereBetween('datetime_other', ['2024-12-01', '2024-12-31'])->sum('rmb_other')
                ;?>
                <?php echo number_format($others_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $others_av = $others_total_all / '12' ; ?>
                <?php echo number_format($others_av,2) ;?>
            </td>
        </tr>

        <tr>
            <th class="th"></th>
            <th class="th">12 領収書なし支払</th>
            <th class="th"></th>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total = $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_credit'); ?>
                <?php echo number_format($no_receipt_credits_total,2); ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_total_all = 
                $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_credit')
                + $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_credit')
                ;?>
                <?php echo number_format($no_receipt_credits_total_all,2) ; ?>
            </td>
            <td class="list">
                <?php $no_receipt_credits_av = $no_receipt_credits_total_all / '12' ; ?>
                <?php echo number_format($no_receipt_credits_av,2) ;?>
            </td>
        </tr>



        <tr>
            <th class="th-twin">営業利益</th>
            <th class="th-twin"></th>
            <th class="th-twin"></th>

            <td class="list-twin">
                <?php $x1 = $details->whereBetween('datetime', ['2024-01-01', '2024-01-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-01-01', '2024-01-31'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-01-01', '2024-01-31'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-01-01', '2024-01-31'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-01-01', '2024-01-31'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-01-01', '2024-01-31'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-01-01', '2024-01-31'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-01-01', '2024-01-31'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x1,2); ?>
            </td>
            <td class="list-twin">
                <?php $x2 = $details->whereBetween('datetime', ['2024-02-01', '2024-02-29'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-02-01', '2024-02-29'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-02-01', '2024-02-29'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-02-01', '2024-02-29'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-02-01', '2024-02-29'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-02-01', '2024-02-29'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-02-01', '2024-02-29'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-02-01', '2024-02-29'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x2,2); ?>
            </td>
            <td class="list-twin">
                <?php $x3 = $details->whereBetween('datetime', ['2024-03-01', '2024-03-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-03-01', '2024-03-31'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-03-01', '2024-03-31'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-03-01', '2024-03-31'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-03-01', '2024-03-31'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-03-01', '2024-03-31'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-03-01', '2024-03-31'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-03-01', '2024-03-31'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x3,2); ?>
            </td>
            <td class="list-twin">
                <?php $x4 = $details->whereBetween('datetime', ['2024-04-01', '2024-04-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-04-01', '2024-04-30'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-04-01', '2024-04-30'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-04-01', '2024-04-30'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-04-01', '2024-04-30'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-04-01', '2024-04-30'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-04-01', '2024-04-30'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-04-01', '2024-04-30'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x4,2); ?>
            </td>
            <td class="list-twin">
                <?php $x5 = $details->whereBetween('datetime', ['2024-05-01', '2024-05-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-05-01', '2024-05-31'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-05-01', '2024-05-31'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-05-01', '2024-05-31'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-05-01', '2024-05-31'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-05-01', '2024-05-31'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-05-01', '2024-05-31'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-05-01', '2024-05-31'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x5,2); ?>
            </td>
            <td class="list-twin">
                <?php $x6 = $details->whereBetween('datetime', ['2024-06-01', '2024-06-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-06-01', '2024-06-30'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-06-01', '2024-06-30'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-06-01', '2024-06-30'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-06-01', '2024-06-30'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-06-01', '2024-06-30'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-06-01', '2024-06-30'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-06-01', '2024-06-30'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x6,2); ?>
            </td>
            <td class="list-twin">
                <?php $x7 = $details->whereBetween('datetime', ['2024-07-01', '2024-07-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-07-01', '2024-07-31'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-07-01', '2024-07-31'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-07-01', '2024-07-31'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-07-01', '2024-07-31'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-07-01', '2024-07-31'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-07-01', '2024-07-31'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-07-01', '2024-07-31'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x7,2); ?>
            </td>
            <td class="list-twin">
                <?php $x8 = $details->whereBetween('datetime', ['2024-08-01', '2024-08-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-08-01', '2024-08-31'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-08-01', '2024-08-31'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-08-01', '2024-08-31'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-08-01', '2024-08-31'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-08-01', '2024-08-31'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-08-01', '2024-08-31'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-08-01', '2024-08-31'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x8,2); ?>
            </td>
            <td class="list-twin">
                <?php $x9 = $details->whereBetween('datetime', ['2024-09-01', '2024-09-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-09-01', '2024-09-30'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-09-01', '2024-09-30'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-09-01', '2024-09-30'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-09-01', '2024-09-30'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-09-01', '2024-09-30'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-09-01', '2024-09-30'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-09-01', '2024-09-30'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x9,2); ?>
            </td>
            <td class="list-twin">
                <?php $x10 = $details->whereBetween('datetime', ['2024-10-01', '2024-10-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-10-01', '2024-10-31'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-10-01', '2024-10-31'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-10-01', '2024-10-31'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-10-01', '2024-10-31'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-10-01', '2024-10-31'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-10-01', '2024-10-31'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-10-01', '2024-10-31'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x10,2); ?>
            </td>
            <td class="list-twin">
                <?php $x11 = $details->whereBetween('datetime', ['2024-11-01', '2024-11-30'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-11-01', '2024-11-30'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-11-01', '2024-11-30'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-11-01', '2024-11-30'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-11-01', '2024-11-30'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-11-01', '2024-11-30'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-11-01', '2024-11-30'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-11-01', '2024-11-30'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x11,2); ?>
            </td>
            <td class="list-twin">
                <?php $x12 = $details->whereBetween('datetime', ['2024-12-01', '2024-12-31'])->sum('rmb') 
                + $other_country_deposits->whereBetween('datetime_other_country_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_country_deposit') 
                + $within_china_deposits->whereBetween('datetime_within_china_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_within_china_deposit') 
                + $no_receipt_deposits->whereBetween('datetime_no_receipt_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_deposit') 
                + $hongkong_deposits->whereBetween('datetime_hongkong_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_hongkong_deposit')
                + $outsourcing_deposits->whereBetween('datetime_outsourcing_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_outsourcing_deposit')
                + $other_deposits->whereBetween('datetime_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_other_deposit')
                + $no_receipt_other_deposits->whereBetween('datetime_no_receipt_other_deposit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_other_deposit')
                - $material_credits->whereBetween('datetime_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_material_credit')
                - $auxiliary_material_credits->whereBetween('datetime_auxiliary_material_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_auxiliary_material_credit')
                - $salary_credits->whereBetween('datetime_salary_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_salary_credit')
                - $insurances->whereBetween('datetime_insurance', ['2024-12-01', '2024-12-31'])->sum('rmb_insurance')
                - $ticket_fees->whereBetween('datetime_ticket_fee', ['2024-12-01', '2024-12-31'])->sum('rmb_ticket_fee')
                - $travel_expenses->whereBetween('datetime_travel_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_travel_expense')
                - $utility_costs->whereBetween('datetime_utility_cost', ['2024-12-01', '2024-12-31'])->sum('rmb_utility_cost')
                - $tax_credits->whereBetween('datetime_tax_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_tax_credit')
                - $miscellaneous_expenses->whereBetween('datetime_miscellaneous_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_miscellaneous_expense')
                - $entertainment_expenses->whereBetween('datetime_entertainment_expense', ['2024-12-01', '2024-12-31'])->sum('rmb_entertainment_expense')
                - $logistics_costs->whereBetween('datetime_logistics_cost', ['2024-12-01', '2024-12-31'])->sum('rmb_logistics_cost')
                - $others->whereBetween('datetime_other', ['2024-12-01', '2024-12-31'])->sum('rmb_other')
                - $no_receipt_credits->whereBetween('datetime_no_receipt_credit', ['2024-12-01', '2024-12-31'])->sum('rmb_no_receipt_credit')
                ; ?>
                <?php echo number_format($x12,2); ?>
            </td>

            <td class="list-twin">
                <?php $x_all = $x1+$x2+$x3+$x4+$x5+$x6+$x7+$x8+$x9+$x10+$x11+$x12 ;?>
                <?php echo number_format($x_all,2) ; ?>
            </td>
            <td class="list-twin">
                <?php $x_av = $x_all / '12' ;?>
                <?php echo number_format($x_av,2) ; ?>
            </td>
        </tr>
    </table>
    <div class="footer">青岛那须藤家庭用品有限公司</div>
</div>
</div>




</section>
</body>
</html>

































