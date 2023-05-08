{{-- <x-layout> --}}
  @extends('components.layout')

  @section('content')
      
    <div class="back-link">
        <a href="{{ route('details.index') }}">&laquo トップページに戻る</a>
        <a href="{{ route('customer2s.show') }}">&laquo 中国国内顧客データ（領収書なし）の詳細に移動</a>
    </div>
    <h1>中国国内顧客データ（領収書なし）- 編集</h1>
        <div class="form-group">
            <form method="post" action="{{ route('customer2s.update', $customer2->id) }}">
                @csrf
                {{ csrf_field() }}
                    
                <label>
                顧客名:<input type="text" name="customer2_name" class="typing_place" value="{{$customer2->customer2_name}}">
                @error('customer2_name')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>
                <label>
                顧客ID:<input type="text" name="customer2_id" class="typing_place" value="{{$customer2->customer2_id}}">
                @error('customer2_id')
                <div class="error"> {{ $message }}</div>
                @enderror
                </label>

                <button type="submit" class="btn btn-warning btn-sm shadow-lg">編集</button>
  
        </form>
  {{-- </x-layout> --}}
  @endsection
  