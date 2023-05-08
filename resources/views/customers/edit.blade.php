{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
    <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('customers.show') }}">&laquo 中国国内顧客データ（領収書有り）の詳細に移動</a>
  </div>
    <h1>中国国内顧客データ（領収書有り） - 編集</h1>
        <div class="form-group">
            <form method="post" action="{{ route('customers.update', $customer->id) }}">
                @csrf
                {{ csrf_field() }}
                    
                <label>
                顧客名:<input type="text" name="customer_name" class="typing_place" value="{{$customer->customer_name}}">
                @error('customer_name')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                顧客ID:<input type="text" name="customer_id" class="typing_place" value="{{$customer->customer_id}}">
                @error('customer_id')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>

                <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  
        </form>
  {{-- </x-layout> --}}
  @endsection
  