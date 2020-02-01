@extends('layouts.layouts')

@section('content')
    @component('components.navbar')
    @endcomponent

    <div class="wordIndex" id="wordIndex">
        <div class="userName">
            <div class="userNameBox">
                <h1>単語一覧</h1>
            </div>
        </div>
        <ul>
            <li class="result" v-for="word in words" :key="number">
                <div class="buttons">
                    <i class="fa fa-hand-o-right "></i>
                    <i class="fa fa-times-circle-o " @click="deleteWord(word.id)"></i>
                </div>
                <div class="result-box">
                    <div class="result-box-text">
                        <p class="show-switch">意味</p>
                        <p class="show-switch">例文</p>
                        <h1>@{{ word.word }}</h1>
                        <p>@{{ word.sampletext }}</p>
                    </div>
                </div>
            </li>

            <li style="height: 300px; background-color: #eee; border: none;">
            </li>
        </ul>

        <!-- 元の記事に戻る -->
        <a href="/" class="word-button word-article-button">
            <i class="fa fa-reply "></i>
        </a>
    </div>

    <script src="/js/wordIndex.js" type="text/javascript"></script>
    @component('components.footer')
    @endcomponent
@endsection
