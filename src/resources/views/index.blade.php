@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
<div class="top__contents">
    <div class="top__content">
        <h2>アットホームな<br>ボォーカル教室</h2>
        <a href="#" class="top__image--link">
            無料レッスンはこちら
        </a>
    </div>
    <div class="char__contents">
        <div class="char__item">
            <div class="char__img">
                <img src="storage/img/mic.png" alt="">
                <p class="char__ttl">初心者歓迎</p>
                <p class="char__dis">初めてでも楽しく学べる</p>
            </div>
        </div>
        <div class="char__item">
            <div class="char__img">
                <img src="storage/img/teacher.png" alt="">
                <p class="char__ttl">プロ講師がサポート</p>
                <p class="char__dis">経験豊富な講師陣</p>
            </div>
        </div>
        <div class="char__item">
            <div class="char__img">
                <img src="storage/img/home.png" alt="">
                <p class="char__ttl">アットホームな雰囲気</p>
                <p class="char__dis">安心して通える教室</p>
            </div>
        </div>
    </div>
    <div class="lesson__contents">
        <div class="lesson__ttl">
            <h3>コース紹介</h3>
        </div>
        <div class="lesson__items">
            <div class="lesson__item">
                <h3 class="lesson__item--ttl">
                    マンツーマン
                </h3>
                <p class="lesson__item--dis">
                    一対一の個別レッスン
                </p>
                <p class="lesson__item--price">
                    ¥8000/1回
                </p>
                <a href="" class="lesson__item--tag">
                    詳しく見る
                </a>
            </div>
            <div class="lesson__item">
                <h3 class="lesson__item--ttl">
                    グループレッスン
                </h3>
                <p class="lesson__item--dis">
                    みんなで楽しくレッスン
                </p>
                <p class="lesson__item--price">
                    ¥6000/1回
                </p>
                <a href="" class="lesson__item--tag">
                    詳しく見る
                </a>
            </div>
        </div>
    </div>

    <div class="voice__contents swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="voice__item">
                    <div class="voice__image">
                        <img src="storage/img/icon(noro).jpeg" alt="">
                    </div>
                    <div class="voice__message">
                        <div class="voice__ttl">
                            <h4>楽しくレッスンを受けています</h4>
                            <p>アットホームな雰囲気で毎回楽しく受けています。友人もできました。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="voice__item">
                    <div class="voice__image">
                        <img src="storage/img/icon.png" alt="">
                    </div>
                    <div class="voice__message">
                        <div class="voice__ttl">
                            <h4>自信がつきます</h4>
                            <p>一年に一回発表会があります。<br>そのおかげでカラオケでも自信を持って歌うことができています</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="voice__item">
                    <div class="voice__image">
                        <img src="storage/img/icon.png" alt="">
                    </div>
                    <div class="voice__message">
                        <div class="voice__ttl">
                            <h4>優秀な先生が教えてくれます</h4>
                            <p>最初は緊張しましたが、先生がとてもフレンドリーで今では楽しく通っています。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="voice__pagination swiper-pagination"></div>
        <div class="voice__button--prev swiper-button-prev"></div>
        <div class="voice__button--next swiper-button-next"></div>
    </div>
</div>
<script src="{{ asset('js/index.js') }}"></script>
@endsection