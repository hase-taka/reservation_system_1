@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/restaurant-detail.css') }}">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.favorite-btn').click(function() {
                $(this).toggleClass('clicked');
            });
        }); -->
    <!-- </script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('content')
<div class="restaurant__detail-reservation">
    <div class="restaurant-detail">
        <div class="restaurant-detail__header">
            <div class="return-page__btn">
                <a class="return-page__btn-submit" href="/"><</a>
            </div>
            <div class="restaurant-detail-name">
                <h2 class="restaurant-detail-name__inner">{{ $restaurant->name }}</h2>
            </div>
        </div>
        <div class="restaurant-detail-img">
            <img src="{{ $restaurant->img_url}}" alt="店舗画像">
        </div>
        <div class="restaurant__tag">
            <p class="restaurant-tag-item">#{{ $restaurant->area->area_name }}</p>
            <p class="restaurant-tag-item">#{{ $restaurant->genre->genre_name }}</p>
        </div>
        <div class="restaurant__content">
            <p class="restaurant__content-inner">{{ $restaurant->content }}</p>
        </div>
    </div>
    <div class="reservation-form">
        <p class="reservation-form__title">予約</p>
        <form class="reservation-form__inner" action="" id="reservationForm">
            <div clasS="reservation-form__item">
                <input class="reservation-form__item-input-date" type="date" id="dateInput"  placeholder="Enter date" >
                <input class="reservation-form__item-input"  type="time" id="timeInput" name="name"  placeholder="Enter time" step="600">
                <input class="reservation-form__item-input"  type="number" id="partySizeInput" name ="partySize" min="0" placeholder="人数" oninput="displayInput()">
            </div>
            <div class="reservation-confirm">
                <div class="reservation-confirm__inner" id="displayArea"></div>
            </div>
            <script>
        // ページ読み込み時に確認情報を表示する関数
        $(document).ready(function() {
            // 各入力フィールドの初期値を取得
            var date = $('#dateInput').val();
            var time = $('#timeInput').val();
            var partySize = $('#partySizeInput').val();

            // 取得した初期情報を表示する
            var 
            confirmationHTML = '<div class="confirm-container"><p class="confirm-h">Shop</p>   <p class="confirm-d"> {{ $restaurant->name }}</p></div>';
            confirmationHTML += '<div class="confirm-container"><p class="confirm-h">Date</p><p class="confirm-d">'    + date + '</p></div>';
            confirmationHTML += '<div class="confirm-container"><p class="confirm-h">Time</p><p class="confirm-d">'    + time + '</p></div>';
            confirmationHTML += '<div class="confirm-container"><p class="confirm-h">Number</p><p class="confirm-d-n">'  + partySize + '</p></div>';

            $('#displayArea').html(confirmationHTML);
        });
    </script>
            <script>
            // 入力データを表示する関数
            function displayInput() {
                var dateValue = $('#dateInput').val();
                var timeValue = $('#timeInput').val();
                var partySizeValue = $('#partySizeInput').val();

                var displayText = '<div class="confirm-container"><p class="confirm-h">Shop</p>   <p class="confirm-d"> {{ $restaurant->name }}</p></div>';
                displayText += '<div class="confirm-container"><p class="confirm-h">Date</p><p class="confirm-d">'    + dateValue + '</p></div>';
                displayText += '<div class="confirm-container"><p class="confirm-h">Time</p><p class="confirm-d">'    + timeValue + '</p></div>';
                displayText += '<div class="confirm-container"><p class="confirm-h">Number</p><p class="confirm-d-n">'  + partySizeValue + '</p></div>';

                $('#displayArea').html(displayText);
            }

            // 各入力フィールドの input イベントで displayInput 関数を呼び出す
            $(document).ready(function(){
                $('#dateInput, #timeInput, #partySizeInput').on('input', displayInput);
            });
        </script>
        <div class="reservation-btn">
            <button class="reservation-btn__submit" type="submit">予約する</button>
        </div>
        </form>
    </div>
</div>
@endsection
