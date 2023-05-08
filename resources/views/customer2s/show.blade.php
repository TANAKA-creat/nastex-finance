{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      <div class="container">
          <div class="row">
  
              <div class="col-md-6">
                  <div class="back-link">
                      <a href="{{ route('details.index') }}">&laquo; トップページに戻る</a>
                  </div>
                  <div class="back-link">
                      <a href="{{ route('customer2s.add') }}">&laquo; 中国国内顧客データ（領収書なし）の登録に移動</a>
                      <a href="{{ route('no_receipt_deposits.create') }}">&laquo; 領収書なし国内入金の登録に移動</a>
                  </div>

            {{-- 顧客名取得のための記述 --}}
              <div class="col-md-6">
                <div class="test">
                    <div class="form-group">
                    <form action="{{ route('customer2s.name') }}" method="POST">
                        @csrf
                            <input type="string" name="customer2_name" placeholder="顧客名">
                            <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">検索</button>
                        </form>
                    </div>
                </div>

                  <h1>中国国内顧客データ（領収書なし） - 詳細</h1>
  
                  <table border="2" class="table">
                      <thead>
                          <tr>
                              <th>@sortablelink('customer2_name','顧客名')</th>
                              <th>@sortablelink('customer2_id','顧客ID')</th>
                              <th>編集</th>
                              <th>削除</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($customer2s as $customer2)
                              @if ($loop->iteration % 1 !== 0)
                                  <tr>
                              @endif
                              <td>{{ $customer2->customer2_name }}</td>
                              <td>{{ $customer2->customer2_id }}</td>
                              <td><a href="/customer2s/edit/{{ $customer2->id }}">編集</a></td>
                              <td>
                                  <form method="POST" action="{{ route('customer2s.destroy', $customer2->id) }}" id="delete">
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
                  <form action="{{ route('customers.test1') }}" method="POST">
                      @csrf
                      <div class="form-group">
                          <input type="text" name="customer_name" placeholder="" value="北京JUSCO收款001">
                          <span class="mx-3 text-grey"></span>
                          <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">顧客名検索</button>
                      </div>
                  </form>
                  <form action="{{ route('customers.test2') }}" method="POST">
                      @csrf
                      <div class="form-group">
                          <span class="mx-3 text-grey"></span>
                          <input type="number" name="customer_name" placholder="" value='1'>
                          <button type="submit" data-toggle="button" class="btn btn-primary shadow-lg btn-sm">顧客ID検索</button>
                      </div>
                  </form>
                  <table>
                      <thead>
                          <tr>
                              <th>顧客名</th>
                              <th>顧客ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($customers as $customer)
                              @if ($loop->iteration % 1 !== 0)
                                  <tr>
                              @endif
                              <td>{{ $customer->customer_name }}</td>
                              <td>{{ $customer->customer_id }}</td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div> --}}
          </div>
      </div>
  @endsection
  