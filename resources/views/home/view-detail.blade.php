@extends('layouts.master')
@section('title','Rents || Mero real state')
@section('main-content')
    <section class="w3l-blog post-content py-5" >
        <div class="container py-lg-4 py-md-3 py-2" >
            <div class="inner mb-4">
                <ul class="blog-single-author-date align-items-center">
                    <li>
                        <div class="listing-category"><span>{{ $data->category }}</span></div>
                    </li>
                    <li><span class="fa fa-clock-o"></span>{{ $data->updated_at }}</li>
                    <li><span class="fa fa-eye"></span> </li>
                </ul>
            </div>
            <div class="post-content">
                <h2 class="title-single"> {{ $data->title }}</h2>
            </div>
            <div class="blo-singl mb-4">
                <ul class="blog-single-author-date align-items-center">
                    <li>
                        <p>{{$data->location}}</p>
                    </li>

                </ul>
                <ul class="share-post">
                    <a href="#url" class="cost-estate m-o">Npr. {{ $data->price }}</a>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-8 w3l-news">
                    <div class="blog-single-post">
                        <div class="single-post-image mb-5">
                            <div class="">
                                <div class="item">
                                    <div class="card">
                                        <img src="{{ $data->images }}" class="img-fluid radius-image" alt="{{ $data->title }}">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="single-post-content">
                            <h3 class="post-content-title mb-3">Npr. {{ $data->price }}</h3>
                            <p class="mb-4">
                               {{ $data->short_desc }}
                                </p>
                            <p class="mb-4">
                                {!! $data->description !!}
                            </p>
                            <div class="single-bg-white">
                                <h3 class="post-content-title mb-4"><u>Property detail</u></h3>
                                <ul class="details-list">

                                    <li><strong>Property size :</strong> {{ $data->area }}</li>
                                    <li><strong>Property Location:</strong> {{ $data->location }}</li>
                                    <li><strong>Property Type:</strong> {{ $data->category }}</li>

                                </ul>
                            </div>

                        </div>

                        <div class="single-bg-white">
                            <h3 class="post-content-title mb-4">Location</h3>
                            <div class="agent-map">
                                <iframe
                                    src="{{ $data->maps }}"
                                    frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>

                        <div class="single-bg-white mb-0">
                            <h3 class="post-content-title mb-4">Video</h3>
                            <div class="post-content">
                                <iframe src="{{ $data->video }}" frameborder="0"
                                        allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                    <aside class="sidebar">

                        <!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Contact an Agent</h4>
                            </div>

                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/l5.jpg" class="radius-image" alt="">
                                </figure>
                                <div class="text mb-0"><a href="#blog-single">PrithakRealestate
                                    </a>
                                    <div class="post-info">{{$data->contact_no}}</div>
                                    <div class="post-info">{{ $data->email }}</div>
                                </div>
                            </article>

                        </div>


                        <!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Popular Post</h4>
                            </div>
                                @foreach($populars as $populars)
                            <article class="post">
                                <figure class="post-thumb"><img src="{{ $populars->images }}" class="radius-image" alt="">
                                </figure>
                                <div class="text"><a href="#blog-single">{{ $populars->title }}
                                    </a>
                                    <div class="post-info">Npr. {{ $populars->price }} - {{ date($populars->updated_at) }}</div>
                                </div>
                            </article>
                            @endforeach


                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

<section class="testimonal">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="hea-wh text-center font-weight-bold">You May Also Like</h2><br>
                    <div class="owl-carousel owl-theme">
                        @foreach($similars as $similars)
                        <div class="item"  style="align-items: center; margin-left: 25px;">
                            <a href="{{ route('view_detail', $similars->id) }}">
                                <div class="img-box"><img src="{{ $similars->images }}" alt="{{ $similars->title }}"></div>
                            </a>
                            <br> <div><p>{{ $similars->title }}</p></div>
                                <p class="overview" style="size: 16px;"><strong>{{ $similars->location }}</strong></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /*--
Author: W3layouts
Author URL: http://w3layouts.com
--*/
        /*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */








        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible; }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0.5rem; }

        p {
            margin-top: 0;
            margin-bottom: 1rem; }

        abbr[title],
        abbr[data-original-title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none; }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit; }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem; }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0; }

        dt {
            font-weight: 700; }

        dd {
            margin-bottom: .5rem;
            margin-left: 0; }

        blockquote {
            margin: 0 0 1rem; }

        b,
        strong {
            font-weight: bolder; }

        small {
            font-size: 80%; }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline; }

        sub {
            bottom: -.25em; }

        sup {
            top: -.5em; }

        a {
            color: #f93;
            text-decoration: none;
            background-color: transparent; }
        a:hover {
            color: #e67300;
            text-decoration: underline; }

        a:not([href]) {
            color: inherit;
            text-decoration: none; }
        a:not([href]):hover {
            color: inherit;
            text-decoration: none; }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em; }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto; }

        figure {
            margin: 0 0 1rem; }

        img {
            vertical-align: middle;
            border-style: none; }

        svg {
            overflow: hidden;
            vertical-align: middle; }

        table {
            border-collapse: collapse; }

        caption {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #6c757d;
            text-align: left;
            caption-side: bottom; }

        th {
            text-align: inherit; }

        label {
            display: inline-block;
            margin-bottom: 0.5rem; }

        button {
            border-radius: 0; }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color; }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit; }

        button,
        input {
            overflow: visible; }

        button,
        select {
            text-transform: none; }

        select {
            word-wrap: normal; }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button; }

        button:not(:disabled),
        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled) {
            cursor: pointer; }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            padding: 0;
            border-style: none; }

        input[type="radio"],
        input[type="checkbox"] {
            box-sizing: border-box;
            padding: 0; }

        input[type="date"],
        input[type="time"],
        input[type="datetime-local"],
        input[type="month"] {
            -webkit-appearance: listbox; }

        textarea {
            overflow: auto;
            resize: vertical; }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0; }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal; }
        @media (max-width: 1200px) {
            legend {
                font-size: calc(1.275rem + 0.3vw) ; } }

        progress {
            vertical-align: baseline; }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto; }

        [type="search"] {
            outline-offset: -2px;
            -webkit-appearance: none; }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none; }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button; }

        output {
            display: inline-block; }

        summary {
            display: list-item;
            cursor: pointer; }

        template {
            display: none; }

        [hidden] {
            display: none !important; }

        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2; }

        h1, .h1 {
            font-size: 2.5rem; }
        @media (max-width: 1200px) {
            h1, .h1 {
                font-size: calc(1.375rem + 1.5vw) ; } }

        h2, .h2 {
            font-size: 2rem; }
        @media (max-width: 1200px) {
            h2, .h2 {
                font-size: calc(1.325rem + 0.9vw) ; } }

        h3, .h3 {
            font-size: 1.75rem; }
        @media (max-width: 1200px) {
            h3, .h3 {
                font-size: calc(1.3rem + 0.6vw) ; } }

        h4, .h4 {
            font-size: 1.5rem; }
        @media (max-width: 1200px) {
            h4, .h4 {
                font-size: calc(1.275rem + 0.3vw) ; } }

        h5, .h5 {
            font-size: 1.25rem; }

        h6, .h6 {
            font-size: 1rem; }

        .lead {
            font-size: 1.25rem;
            font-weight: 300; }

        .display-1 {
            font-size: 6rem;
            font-weight: 300;
            line-height: 1.2; }
        @media (max-width: 1200px) {
            .display-1 {
                font-size: calc(1.725rem + 5.7vw) ; } }

        .display-2 {
            font-size: 5.5rem;
            font-weight: 300;
            line-height: 1.2; }
        @media (max-width: 1200px) {
            .display-2 {
                font-size: calc(1.675rem + 5.1vw) ; } }

        .display-3 {
            font-size: 4.5rem;
            font-weight: 300;
            line-height: 1.2; }
        @media (max-width: 1200px) {
            .display-3 {
                font-size: calc(1.575rem + 3.9vw) ; } }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2; }
        @media (max-width: 1200px) {
            .display-4 {
                font-size: calc(1.475rem + 2.7vw) ; } }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1); }


            background-color: #f93;
            border-color: #f93; }
        .btn-primary:hover {
            color: #212529;
            background-color: #ff860d;
            border-color: #ff8000; }
        .btn-primary:focus, .btn-primary.focus {
            color: #212529;
            background-color: #ff860d;
            border-color: #ff8000;
            box-shadow: 0 0 0 0.2rem rgba(222, 136, 50, 0.5); }
        .btn-primary.disabled, .btn-primary:disabled {
            color: #212529;
            background-color: #f93;
            border-color: #f93; }
        .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
        .show > .btn-primary.dropdown-toggle {
            color: #212529;
            background-color: #ff8000;
            border-color: #f27900; }
        .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(222, 136, 50, 0.5); }

        .btn-secondary {
            color: #212529;
            background-color: #68d585;
            border-color: #68d585; }
        .btn-secondary:hover {
            color: #212529;
            background-color: #4acd6d;
            border-color: #40ca65; }
        .btn-secondary:focus, .btn-secondary.focus {
            color: #212529;
            background-color: #4acd6d;
            border-color: #40ca65;
            box-shadow: 0 0 0 0.2rem rgba(93, 187, 119, 0.5); }
        .btn-secondary.disabled, .btn-secondary:disabled {
            color: #212529;
            background-color: #68d585;
            border-color: #68d585; }
        .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
        .show > .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #40ca65;
            border-color: #37c65d; }
        .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(93, 187, 119, 0.5); }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745; }
        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34; }
        .btn-success:focus, .btn-success.focus {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
            box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5); }
        .btn-success.disabled, .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745; }
        .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
        .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430; }
        .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
        .show > .btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5); }

        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8; }
        .btn-info:hover {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b; }
        .btn-info:focus, .btn-info.focus {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b;
            box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5); }
        .btn-info.disabled, .btn-info:disabled {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8; }
        .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
        .show > .btn-info.dropdown-toggle {
            color: #fff;
            background-color: #117a8b;
            border-color: #10707f; }
        .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
        .show > .btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5); }

        .btn-warning {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107; }
        .btn-warning:hover {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00; }
        .btn-warning:focus, .btn-warning.focus {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00;
            box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5); }
        .btn-warning.disabled, .btn-warning:disabled {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107; }
        .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
        .show > .btn-warning.dropdown-toggle {
            color: #212529;
            background-color: #d39e00;
            border-color: #c69500; }
        .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
        .show > .btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5); }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545; }
        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130; }
        .btn-danger:focus, .btn-danger.focus {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
            box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5); }
        .btn-danger.disabled, .btn-danger:disabled {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545; }
        .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
        .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d; }
        .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
        .show > .btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5); }

        .btn-light {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa; }
        .btn-light:hover {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5; }
        .btn-light:focus, .btn-light.focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }
        .btn-light.disabled, .btn-light:disabled {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa; }
        .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
        .show > .btn-light.dropdown-toggle {
            color: #212529;
            background-color: #dae0e5;
            border-color: #d3d9df; }
        .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
        .show > .btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }

        .btn-dark {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40; }
        .btn-dark:hover {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124; }
        .btn-dark:focus, .btn-dark.focus {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124;
            box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5); }
        .btn-dark.disabled, .btn-dark:disabled {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40; }
        .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
        .show > .btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #1d2124;
            border-color: #171a1d; }
        .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
        .show > .btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5); }

        .btn-outline-primary {
            color: #f93;
            border-color: #f93; }
        .btn-outline-primary:hover {
            color: #212529;
            background-color: #f93;
            border-color: #f93; }
        .btn-outline-primary:focus, .btn-outline-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 153, 51, 0.5); }
        .btn-outline-primary.disabled, .btn-outline-primary:disabled {
            color: #f93;
            background-color: transparent; }
        .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
        .show > .btn-outline-primary.dropdown-toggle {
            color: #212529;
            background-color: #f93;
            border-color: #f93; }
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 153, 51, 0.5); }

        .btn-outline-secondary {
            color: #68d585;
            border-color: #68d585; }
        .btn-outline-secondary:hover {
            color: #212529;
            background-color: #68d585;
            border-color: #68d585; }
        .btn-outline-secondary:focus, .btn-outline-secondary.focus {
            box-shadow: 0 0 0 0.2rem rgba(104, 213, 133, 0.5); }
        .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
            color: #68d585;
            background-color: transparent; }
        .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
        .show > .btn-outline-secondary.dropdown-toggle {
            color: #212529;
            background-color: #68d585;
            border-color: #68d585; }
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(104, 213, 133, 0.5); }

        .btn-outline-success {
            color: #28a745;
            border-color: #28a745; }
        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745; }
        .btn-outline-success:focus, .btn-outline-success.focus {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
        .btn-outline-success.disabled, .btn-outline-success:disabled {
            color: #28a745;
            background-color: transparent; }
        .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
        .show > .btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745; }
        .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

        .btn-outline-info {
            color: #17a2b8;
            border-color: #17a2b8; }
        .btn-outline-info:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8; }
        .btn-outline-info:focus, .btn-outline-info.focus {
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
        .btn-outline-info.disabled, .btn-outline-info:disabled {
            color: #17a2b8;
            background-color: transparent; }
        .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
        .show > .btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8; }
        .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

        .btn-outline-warning {
            color: #ffc107;
            border-color: #ffc107; }
        .btn-outline-warning:hover {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107; }
        .btn-outline-warning:focus, .btn-outline-warning.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
        .btn-outline-warning.disabled, .btn-outline-warning:disabled {
            color: #ffc107;
            background-color: transparent; }
        .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
        .show > .btn-outline-warning.dropdown-toggle {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107; }
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

        .btn-outline-danger {
            color: #dc3545;
            border-color: #dc3545; }
        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545; }
        .btn-outline-danger:focus, .btn-outline-danger.focus {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
        .btn-outline-danger.disabled, .btn-outline-danger:disabled {
            color: #dc3545;
            background-color: transparent; }
        .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
        .show > .btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545; }
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

        .btn-outline-light {
            color: #f8f9fa;
            border-color: #f8f9fa; }
        .btn-outline-light:hover {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa; }
        .btn-outline-light:focus, .btn-outline-light.focus {
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
        .btn-outline-light.disabled, .btn-outline-light:disabled {
            color: #f8f9fa;
            background-color: transparent; }
        .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
        .show > .btn-outline-light.dropdown-toggle {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa; }
        .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

        .btn-outline-dark {
            color: #343a40;
            border-color: #343a40; }
        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40; }
        .btn-outline-dark:focus, .btn-outline-dark.focus {
            box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
        .btn-outline-dark.disabled, .btn-outline-dark:disabled {
            color: #343a40;
            background-color: transparent; }
        .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
        .show > .btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40; }
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

        .btn-link {
            font-weight: 400;
            color: #f93;
            text-decoration: none; }
        .btn-link:hover {
            color: #e67300;
            text-decoration: underline; }
        .btn-link:focus, .btn-link.focus {
            text-decoration: underline;
            box-shadow: none; }
        .btn-link:disabled, .btn-link.disabled {
            color: #6c757d;
            pointer-events: none; }

        .btn-lg, .btn-group-lg > .btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem; }

        .btn-sm, .btn-group-sm > .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem; }

        .btn-block {
            display: block;
            width: 100%; }
        .btn-block + .btn-block {
            margin-top: 0.5rem; }

        input[type="submit"].btn-block,
        input[type="reset"].btn-block,
        input[type="button"].btn-block {
            width: 100%; }

        .fade {
            transition: opacity 0.15s linear; }
        @media (prefers-reduced-motion: reduce) {
            .fade {
                transition: none; } }
        .fade:not(.show) {
            opacity: 0; }

        .collapse:not(.show) {
            display: none; }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease; }
        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                transition: none; } }

        .dropup,
        .dropright,
        .dropdown,
        .dropleft {
            position: relative; }

        .dropdown-toggle {
            white-space: nowrap; }
        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent; }
        .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0.125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 0.25rem; }

        .dropdown-menu-left {
            right: auto;
            left: 0; }

        .dropdown-menu-right {
            right: 0;
            left: auto; }

        @media (min-width: 576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0; }
            .dropdown-menu-sm-right {
                right: 0;
                left: auto; } }

        @media (min-width: 768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0; }
            .dropdown-menu-md-right {
                right: 0;
                left: auto; } }

        @media (min-width: 992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0; }
            .dropdown-menu-lg-right {
                right: 0;
                left: auto; } }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0; }
            .dropdown-menu-xl-right {
                right: 0;
                left: auto; } }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0.125rem; }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent; }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: 0.125rem; }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid; }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropright .dropdown-toggle::after {
            vertical-align: 0; }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: 0.125rem; }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: ""; }

        .dropleft .dropdown-toggle::after {
            display: none; }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent; }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0; }

        .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
            right: auto;
            bottom: auto; }

        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef; }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0; }
        .dropdown-item:hover, .dropdown-item:focus {
            color: #16181b;
            text-decoration: none;
            background-color: #f8f9fa; }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #f93; }
        .dropdown-item.disabled, .dropdown-item:disabled {
            color: #6c757d;
            pointer-events: none;
            background-color: transparent; }

        .dropdown-menu.show {
            display: block; }

        .dropdown-header {
            display: block;
            padding: 0.5rem 1.5rem;
            margin-bottom: 0;
            font-size: 0.875rem;
            color: #6c757d;
            white-space: nowrap; }

        .dropdown-item-text {
            display: block;
            padding: 0.25rem 1.5rem;
            color: #212529; }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle; }
        .btn-group > .btn,
        .btn-group-vertical > .btn {
            position: relative;
            flex: 1 1 auto; }
        .btn-group > .btn:hover,
        .btn-group-vertical > .btn:hover {
            z-index: 1; }
        .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
        .btn-group-vertical > .btn:focus,
        .btn-group-vertical > .btn:active,
        .btn-group-vertical > .btn.active {
            z-index: 1; }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; }
        .btn-toolbar .input-group {
            width: auto; }

        .btn-group > .btn:not(:first-child),
        .btn-group > .btn-group:not(:first-child) {
            margin-left: -1px; }

        .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
        .btn-group > .btn-group:not(:last-child) > .btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }

        .btn-group > .btn:not(:first-child),
        .btn-group > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }

        .dropdown-toggle-split {
            padding-right: 0.5625rem;
            padding-left: 0.5625rem; }
        .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after,
        .dropright .dropdown-toggle-split::after {
            margin-left: 0; }
        .dropleft .dropdown-toggle-split::before {
            margin-right: 0; }

        .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
            padding-right: 0.375rem;
            padding-left: 0.375rem; }

        .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
            padding-right: 0.75rem;
            padding-left: 0.75rem; }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center; }
        .btn-group-vertical > .btn,
        .btn-group-vertical > .btn-group {
            width: 100%; }
        .btn-group-vertical > .btn:not(:first-child),
        .btn-group-vertical > .btn-group:not(:first-child) {
            margin-top: -1px; }
        .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical > .btn-group:not(:last-child) > .btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0; }
        .btn-group-vertical > .btn:not(:first-child),
        .btn-group-vertical > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0; }

        .btn-group-toggle > .btn,
        .btn-group-toggle > .btn-group > .btn {
            margin-bottom: 0; }
        .btn-group-toggle > .btn input[type="radio"],
        .btn-group-toggle > .btn input[type="checkbox"],
        .btn-group-toggle > .btn-group > .btn input[type="radio"],
        .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none; }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%; }
        .input-group > .form-control,
        .input-group > .form-control-plaintext,
        .input-group > .custom-select,
        .input-group > .custom-file {
            position: relative;
            flex: 1 1 0%;
            min-width: 0;
            margin-bottom: 0; }
        .input-group > .form-control + .form-control,
        .input-group > .form-control + .custom-select,
        .input-group > .form-control + .custom-file,
        .input-group > .form-control-plaintext + .form-control,
        .input-group > .form-control-plaintext + .custom-select,
        .input-group > .form-control-plaintext + .custom-file,
        .input-group > .custom-select + .form-control,
        .input-group > .custom-select + .custom-select,
        .input-group > .custom-select + .custom-file,
        .input-group > .custom-file + .form-control,
        .input-group > .custom-file + .custom-select,
        .input-group > .custom-file + .custom-file {
            margin-left: -1px; }
        .input-group > .form-control:focus,
        .input-group > .custom-select:focus,
        .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
            z-index: 3; }
        .input-group > .custom-file .custom-file-input:focus {
            z-index: 4; }
        .input-group > .form-control:not(:last-child),
        .input-group > .custom-select:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
        .input-group > .form-control:not(:first-child),
        .input-group > .custom-select:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }
        .input-group > .custom-file {
            display: flex;
            align-items: center; }
        .input-group > .custom-file:not(:last-child) .custom-file-label,
        .input-group > .custom-file:not(:last-child) .custom-file-label::after {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
        .input-group > .custom-file:not(:first-child) .custom-file-label {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }

        .input-group-prepend,
        .input-group-append {
            display: flex; }
        .input-group-prepend .btn,
        .input-group-append .btn {
            position: relative;
            z-index: 2; }
        .input-group-prepend .btn:focus,
        .input-group-append .btn:focus {
            z-index: 3; }
        .input-group-prepend .btn + .btn,
        .input-group-prepend .btn + .input-group-text,
        .input-group-prepend .input-group-text + .input-group-text,
        .input-group-prepend .input-group-text + .btn,
        .input-group-append .btn + .btn,
        .input-group-append .btn + .input-group-text,
        .input-group-append .input-group-text + .input-group-text,
        .input-group-append .input-group-text + .btn {
            margin-left: -1px; }

        .input-group-prepend {
            margin-right: -1px; }

        .input-group-append {
            margin-left: -1px; }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem; }
        .input-group-text input[type="radio"],
        .input-group-text input[type="checkbox"] {
            margin-top: 0; }

        .input-group-lg > .form-control:not(textarea),
        .input-group-lg > .custom-select {
            height: calc(1.5em + 1rem + 2px); }

        .input-group-lg > .form-control,
        .input-group-lg > .custom-select,
        .input-group-lg > .input-group-prepend > .input-group-text,
        .input-group-lg > .input-group-append > .input-group-text,
        .input-group-lg > .input-group-prepend > .btn,
        .input-group-lg > .input-group-append > .btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem; }

        .input-group-sm > .form-control:not(textarea),
        .input-group-sm > .custom-select {
            height: calc(1.5em + 0.5rem + 2px); }

        .input-group-sm > .form-control,
        .input-group-sm > .custom-select,
        .input-group-sm > .input-group-prepend > .input-group-text,
        .input-group-sm > .input-group-append > .input-group-text,
        .input-group-sm > .input-group-prepend > .btn,
        .input-group-sm > .input-group-append > .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem; }

        .input-group-lg > .custom-select,
        .input-group-sm > .custom-select {
            padding-right: 1.75rem; }

        .input-group > .input-group-prepend > .btn,
        .input-group > .input-group-prepend > .input-group-text,
        .input-group > .input-group-append:not(:last-child) > .btn,
        .input-group > .input-group-append:not(:last-child) > .input-group-text,
        .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
        .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }

        .input-group > .input-group-append > .btn,
        .input-group > .input-group-append > .input-group-text,
        .input-group > .input-group-prepend:not(:first-child) > .btn,
        .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
        .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
        .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }

        .custom-control {
            position: relative;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem; }

        .custom-control-inline {
            display: inline-flex;
            margin-right: 1rem; }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.25rem;
            opacity: 0; }
        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            border-color: #f93;
            background-color: #f93; }
        .custom-control-input:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 0.2rem rgba(255, 153, 51, 0.25); }
        .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #ffd9b3; }
        .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
            color: #fff;
            background-color: #fff2e6;
            border-color: #fff2e6; }
        .custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
            color: #6c757d; }
        .custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
            background-color: #e9ecef; }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top; }
        .custom-control-label::before {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: #adb5bd solid 1px; }
        .custom-control-label::after {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: no-repeat 50% / 50% 50%; }

        .custom-checkbox .custom-control-label::before {
            border-radius: 0.25rem; }

        .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e"); }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
            border-color: #f93;
            background-color: #f93; }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e"); }

        .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(255, 153, 51, 0.5); }

        .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
            background-color: rgba(255, 153, 51, 0.5); }

        .custom-radio .custom-control-label::before {
            border-radius: 50%; }

        .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

        .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(255, 153, 51, 0.5); }

        .custom-switch {
            padding-left: 2.25rem; }
        .custom-switch .custom-control-label::before {
            left: -2.25rem;
            width: 1.75rem;
            pointer-events: all;
            border-radius: 0.5rem; }
        .custom-switch .custom-control-label::after {
            top: calc(0.25rem + 2px);
            left: calc(-2.25rem + 2px);
            width: calc(1rem - 4px);
            height: calc(1rem - 4px);
            background-color: #adb5bd;
            border-radius: 0.5rem;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .custom-switch .custom-control-label::after {
                transition: none; } }
        .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
            background-color: #fff;
            transform: translateX(0.75rem); }
        .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(255, 153, 51, 0.5); }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none; }
        .custom-select:focus {
            border-color: #ffd9b3;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(255, 153, 51, 0.25); }
        .custom-select:focus::-ms-value {
            color: #495057;
            background-color: #fff; }
        .custom-select[multiple], .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: 0.75rem;
            background-image: none; }
        .custom-select:disabled {
            color: #6c757d;
            background-color: #e9ecef; }
        .custom-select::-ms-expand {
            display: none; }
        .custom-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057; }

        .custom-select-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            font-size: 0.875rem; }

        .custom-select-lg {
            height: calc(1.5em + 1rem + 2px);
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            font-size: 1.25rem; }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin-bottom: 0; }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin: 0;
            opacity: 0; }
        .custom-file-input:focus ~ .custom-file-label {
            border-color: #ffd9b3;
            box-shadow: 0 0 0 0.2rem rgba(255, 153, 51, 0.25); }
        .custom-file-input[disabled] ~ .custom-file-label,
        .custom-file-input:disabled ~ .custom-file-label {
            background-color: #e9ecef; }
        .custom-file-input:lang(en) ~ .custom-file-label::after {
            content: "Browse"; }
        .custom-file-input ~ .custom-file-label[data-browse]::after {
            content: attr(data-browse); }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem; }
        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + 0.75rem);
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 0.25rem 0.25rem 0; }

        .custom-range {
            width: 100%;
            height: 1.4rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none; }
        .custom-range:focus {
            outline: none; }
        .custom-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(255, 153, 51, 0.25); }
        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(255, 153, 51, 0.25); }
        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(255, 153, 51, 0.25); }
        .custom-range::-moz-focus-outer {
            border: 0; }
        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #f93;
            border: 0;
            border-radius: 1rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none; }
        @media (prefers-reduced-motion: reduce) {
            .custom-range::-webkit-slider-thumb {
                transition: none; } }
        .custom-range::-webkit-slider-thumb:active {
            background-color: #fff2e6; }
        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem; }
        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #f93;
            border: 0;
            border-radius: 1rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none; }
        @media (prefers-reduced-motion: reduce) {
            .custom-range::-moz-range-thumb {
                transition: none; } }
        .custom-range::-moz-range-thumb:active {
            background-color: #fff2e6; }
        .custom-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem; }
        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: 0.2rem;
            margin-left: 0.2rem;
            background-color: #f93;
            border: 0;
            border-radius: 1rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            appearance: none; }
        @media (prefers-reduced-motion: reduce) {
            .custom-range::-ms-thumb {
                transition: none; } }
        .custom-range::-ms-thumb:active {
            background-color: #fff2e6; }
        .custom-range::-ms-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: 0.5rem; }
        .custom-range::-ms-fill-lower {
            background-color: #dee2e6;
            border-radius: 1rem; }
        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #dee2e6;
            border-radius: 1rem; }
        .custom-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd; }
        .custom-range:disabled::-webkit-slider-runnable-track {
            cursor: default; }
        .custom-range:disabled::-moz-range-thumb {
            background-color: #adb5bd; }
        .custom-range:disabled::-moz-range-track {
            cursor: default; }
        .custom-range:disabled::-ms-thumb {
            background-color: #adb5bd; }

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                transition: none; } }


            .mfp-img-mobile .mfp-bottom-bar:empty {
                padding: 0; }
            .mfp-img-mobile .mfp-counter {
                right: 5px;
                top: 3px; }
            .mfp-img-mobile .mfp-close {
                top: 0;
                right: 0;
                width: 35px;
                height: 35px;
                line-height: 35px;
                background: rgba(0, 0, 0, 0.6);
                position: fixed;
                text-align: center;
                padding: 0; } }

        @media all and (max-width: 900px) {
            .mfp-arrow {
                transform: scale(0.75); }
            .mfp-arrow-left {
                transform-origin: 0; }
            .mfp-arrow-right {
                transform-origin: 100%; }
            .mfp-container {
                padding-left: 6px;
                padding-right: 6px; } }

        /* Styles for dialog window */
        #small-dialog, #small-dialog1 {
            max-width: 750px;
            margin: 40px auto;
            position: relative; }

        div#small-dialog iframe, div#small-dialog1 iframe {
            width: 100%;
            height: 420px;
            display: block;
            border-radius: 10px; }

        /**
   * Fade-zoom animation for first dialog
   */
        /* start state */
        .my-mfp-zoom-in .zoom-anim-dialog {
            opacity: 0;
            transition: all 0.2s ease-in-out;
            transform: scale(0.8); }

        /* animate in */
        .my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
            opacity: 1;
            transform: scale(1); }

        /* animate out */
        .my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
            transform: scale(0.8);
            opacity: 0; }

        /* Dark overlay, start state */
        .my-mfp-zoom-in.mfp-bg {
            opacity: 0;
            transition: opacity 0.3s ease-out; }

        /* animate in */
        .my-mfp-zoom-in.mfp-ready.mfp-bg {
            opacity: 0.95; }

        /* animate out */
        .my-mfp-zoom-in.mfp-removing.mfp-bg {
            opacity: 0; }

        /**
   * Fade-move animation for second dialog
   */
        /* at start */
        .my-mfp-slide-bottom .zoom-anim-dialog {
            opacity: 0;
            transition: all 0.2s ease-out;
            transform: translateY(-20px) perspective(600px) rotateX(10deg); }

        /* animate in */
        .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
            opacity: 1;
            transform: translateY(0) perspective(600px) rotateX(0); }

        /* animate out */
        .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
            opacity: 0;
            transform: translateY(-10px) perspective(600px) rotateX(10deg); }

        /* Dark overlay, start state */
        .my-mfp-slide-bottom.mfp-bg {
            opacity: 0;
            transition: opacity 0.3s ease-out; }

        /* animate in */
        .my-mfp-slide-bottom.mfp-ready.mfp-bg {
            opacity: 0.8; }

        /* animate out */
        .my-mfp-slide-bottom.mfp-removing.mfp-bg {
            opacity: 0; }

        .listing-details {
            padding: 30px;
            background: var(--bg-color);
            border-radius: 0px;
            border-bottom-left-radius: var(--border-radius);
            border-bottom-right-radius: var(--border-radius);
            box-shadow: 0px 9px 24px 5px rgba(0, 0, 0, 0.04); }

        .listing-img .box16 {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0; }

        .locations-1 .box16 img {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0; }

        @media only screen and (max-width: 415px) {
            .listing-details {
                padding: 30px 25px; } }

        ul.details-list {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 10px; }

        .single-bg-white {
            background: var(--bg-color);
            padding: 30px;
            border-radius: var(--border-radius);
            margin-bottom: 40px;
            box-shadow: rgba(1, 1, 1, 0.05) 1px 1px 5px 0px; }

        ul.details-list li {
            color: var(--font-color);
            font-size: 18px; }

        ul.details-list li strong {
            color: var(--heading-color); }

        .listing-category span {
            background: rgba(0, 0, 0, 0.35);
            padding: 4px 8px;
            margin-right: 5px;
            font-size: 14px;
            border-radius: 3px;
            color: #fff; }

        .post-content iframe {
            width: 100%;
            height: 400px;
            border-radius: var(--border-radius); }

        .side-post-banner {
            background: url(../images/p1.jpg) no-repeat 0px 0px;
            background-size: cover;
            padding: 3em 2em;
            border-radius: var(--border-radius);
            position: relative;
            z-index: 1;
            min-height: 380px;
            display: grid;
            align-content: flex-end; }

        .side-post-banner:before {
            content: "";
            background: rgba(0, 0, 0, 0.25);
            position: absolute;
            top: 0;
            min-height: 100%;
            left: 0;
            right: 0;
            z-index: -1;
            border-radius: var(--border-radius); }

        .side-post-banner h3 {
            color: #fff;
            font-weight: 600; }

        .side-post-banner a.btn {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content; }

        .user-avatar img {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0; }

        .users_box_info {
            text-align: center;
            padding: 30px 20px;
            background: var(--bg-color);
            border-radius: var(--border-radius);
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            box-shadow: rgba(1, 1, 1, 0.05) 1px 1px 5px 0px; }

        h4.user_title.agent a {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 5px;
            color: var(--heading-color);
            display: block; }

        .users_box:hover .user_title a {
            color: var(--primary-color); }

        p.user_position {
            opacity: .5; }

        span.phone-detail a {
            font-size: 18px;
            opacity: .8;
            display: block;
            margin-top: 15px;
            color: var(--heading-color); }

        span.phone-detail a:hover {
            opacity: 1; }

        ul.social li {
            display: inline-block;
            margin-right: 2px; }

        ul.social li a span.fa {
            width: 34px;
            height: 34px;
            text-align: center;
            line-height: 34px;
            border-radius: 50px;
            font-size: 15px; }

        ul.social li a span.fa-facebook {
            background: #3b5998;
            color: #fff; }

        ul.social li a span.fa-twitter {
            background: #1da1f2;
            color: #fff; }

        .agent-info {
            background: var(--bg-color);
            border-radius: var(--border-radius);
            padding: 20px 20px;
            box-shadow: rgba(1, 1, 1, 0.05) 1px 1px 5px 0px; }

        .team-info p {
            color: var(--heading-color); }

        .team-info p a {
            color: var(--font-color); }

        .team-info p a:hover {
            color: var(--primary-color); }

        a.cost-estate {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
            display: inline-block; }

        ul.estate-info li {
            display: inline-block;
            margin-right: 20px;
            color: var(--heading-color);
            font-weight: 600;
            font-size: 15px; }

        ul.estate-info li span.fa {
            color: var(--font-color);
            width: 22px;
            font-size: 14px;
            opacity: .5; }

        .blog-details .author {
            display: grid;
            grid-template-columns: 55px auto;
            grid-gap: 20px; }

        .blog-details a.comment-img {
            left: 0px;
            top: 0px;
            width: 55px;
            height: 55px;
            overflow: hidden;
            border-radius: 50%;
            display: block; }

        .blog-details ul.blog-meta li a {
            font-size: 18px;
            color: var(--heading-color);
            font-weight: 600;
            line-height: 28px; }

        .agent-form .input-field input, .agent-form .input-field textarea {
            background: var(--bg-grey);
            border: none;
            color: var(--font-color);
            font-size: 16px;
            line-height: 28px;
            padding: 12px 27px;
            width: 100%;
            border-radius: var(--border-radius-full);
            border: 1px solid var(--border-color-light);
            outline: none;
            margin-bottom: 15px;
            resize: none; }

        .agent-form .input-field input:focus, .agent-form .input-field textarea:focus {
            background: var(--bg-color);
            border: 1px solid var(--primary-color); }

        .agent-map iframe {
            width: 100%;
            height: 250px;
            border-radius: var(--border-radius);
            -webkit-filter: var(--iframe-filter);
            -moz-filter: var(--iframe-filter);
            -ms-filter: var(--iframe-filter);
            -o-filter: var(--iframe-filter);
            filter: var(--iframe-filter); }

        @media (max-width: 480px) {
            .side-post-banner {
                min-height: 280px; }
            ul.estate-info li {
                margin-right: 15px;
                font-size: 14px; }
            p.user_position {
                font-size: 16px; }
            a.cost-estate {
                font-size: 20px; }
            h4.user_title.agent a {
                font-size: 18px; }
            .blog-details ul.blog-meta li a {
                font-size: 16px; } }

        ul.page-pagination li {
            display: inline-block; }

        ul.page-pagination li span.current {
            display: block;
            padding: 10px 18px;
            color: #fff;
            border: 1px solid var(--primary-color);
            border-radius: 50px;
            font-weight: 700;
            background: var(--primary-color);
            transition: background-color .15s linear, color .15s linear;
            box-shadow: 0 25px 98px 0 rgba(19, 19, 19, 0.03); }

        ul.page-pagination li a.page-numbers,
        ul.page-pagination li a.next {
            display: block;
            padding: 10px 18px;
            background-color: var(--bg-color);
            border: 1px solid var(--border-color-light);
            border-radius: 50px;
            font-weight: 700;
            color: var(--font-color);
            transition: background-color .15s linear, color .15s linear;
            box-shadow: 0 25px 98px 0 rgba(19, 19, 19, 0.03); }

        ul.page-pagination li a.page-numbers:hover,
        ul.page-pagination li a.next:hover {
            background-color: var(--bg-color);
            color: var(--primary-color);
            border: 1px solid var(--primary-color); }

        @media (max-width: 384px) {
            ul.page-pagination li a.page-numbers,
            ul.page-pagination li a.next,
            ul.page-pagination li span.current {
                padding: 7px 15px; } }

        /*Search Box Widget*/
        .sidebar-title h4 {
            font-size: 22px;
            line-height: 28px;
            color: var(--heading-color);
            font-weight: 600;
            margin-bottom: 30px; }

        .sidebar-widget {
            margin-bottom: 40px;
            padding: 40px 30px;
            background: var(--bg-color);
            border-radius: var(--border-radius);
            box-shadow: rgba(1, 1, 1, 0.05) 1px 1px 5px 0px; }

        .sidebar .search-box .form-group {
            position: relative;
            margin: 0px; }

        .sidebar .search-box .form-group input[type="text"],
        .sidebar .search-box .form-group input[type="search"] {
            position: relative;
            line-height: 28px;
            padding: 10px 50px 10px 20px;
            border: 1px solid var(--border-color);
            background: var(--bg-grey);
            display: block;
            font-size: 19px;
            width: 100%;
            height: 55px;
            color: var(--font-color);
            border-radius: var(--border-radius);
            outline: none; }

        .sidebar .search-box .form-group input[type="text"]:focus,
        .sidebar .search-box .form-group input[type="search"]:focus {
            border: 1px solid #999; }

        .sidebar .search-box .form-group button {
            position: absolute;
            right: 0px;
            top: 0px;
            height: 55px;
            width: 50px;
            font-size: 16px;
            color: #fff;
            line-height: 100%;
            border: none;
            background: none;
            display: inline-block;
            font-weight: normal;
            text-align: center;
            background: var(--primary-color);
            border-radius: var(--border-radius);
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px; }

        /* Blog Category */
        .blog-cat {
            position: relative;
            padding: 0; }

        .blog-cat li {
            position: relative;
            list-style-type: none; }

        .blog-cat li a {
            position: relative;
            color: var(--font-color);
            font-size: 17px;
            font-weight: 500;
            display: block;
            padding: 10px 15px 0px 20px; }

        .blog-cat li a span {
            position: absolute;
            right: 0px;
            top: 15px;
            width: 27px;
            height: 27px;
            font-size: 12px;
            text-align: center;
            line-height: 27px;
            border-radius: var(--border-radius);
            background-color: var(--bg-light); }

        .blog-cat li a:before {
            display: inline-block;
            color: var(--primary-color);
            font-family: 'FontAwesome';
            content: "";
            width: 8px;
            height: 8px;
            background-color: var(--font-color);
            position: absolute;
            top: 20px;
            left: 0px;
            border: 1px solid var(--bg-grey);
            opacity: .3; }

        .twitter-feed li a {
            padding: 10px 15px 0px 30px;
            margin-top: 10px; }

        ul.blog-cat li a span.fa {
            position: static;
            color: var(--primary-color);
            font-size: inherit;
            background: none; }

        .sidebar-sticky-fix {
            position: -webkit-sticky;
            position: sticky;
            top: 100px; }

        .blog-cat li a:hover::before {
            opacity: 1; }

        .sidebar-widget figure {
            margin: 0 0 0rem; }

        .blog-cat li:first-child a {
            padding-top: 0; }

        .blog-cat li:first-child a:before,
        .blog-cat li:first-child a span {
            top: 12px; }

        .blog-cat li.active a,
        .blog-cat li a:hover {
            color: var(--primary-color); }

        /* Post Widget */
        .popular-posts .post {
            position: relative;
            min-height: 100px;
            margin-bottom: 20px;
            border-bottom: 1px solid var(--border-color-light);
            display: grid;
            grid-template-columns: auto 1fr;
            grid-gap: 20px; }

        .popular-posts .post:last-child {
            margin-bottom: 0px;
            border-bottom: 1px solid transparent; }

        .sidebar-widget:last-child {
            margin-bottom: 0px; }

        .popular-posts .post .post-thumb {
            width: 80px;
            overflow: hidden; }

        .popular-posts .post .post-thumb img {
            display: block;
            width: 100%;
            transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease; }

        .popular-posts .post .text {
            position: relative;
            font-size: 22px;
            margin: 0px 0px 10px;
            font-weight: 500;
            color: var(--heading-color);
            line-height: 1.2em;
            align-self: center; }

        .popular-posts .post .text a {
            font-size: 18px;
            line-height: 24px;
            font-weight: 600;
            color: var(--heading-color);
            transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease; }

        .popular-posts .post a:hover {
            color: var(--primary-color); }

        .popular-posts .post-info {
            position: relative;
            font-size: 14px;
            color: var(--font-color);
            font-weight: 400; }

        /*Instagram Widget*/
        .sidebar .instagram-widget .images-outer {
            position: relative;
            margin: 0px -4px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 10px; }

        .sidebar .instagram-widget .image-box1 {
            position: relative;
            float: left;
            width: 33.3333%;
            padding: 0px 6px;
            margin-bottom: 12px; }

        .sidebar .instagram-widget .image-box:nth-child(3),
        .sidebar .instagram-widget .image-box:nth-child(6) {
            margin-right: 0px; }

        .images-outer a img {
            border-radius: 8px; }

        .sidebar .instagram-widget .image-box1 .overlay-box {
            position: absolute;
            content: '';
            left: 14px;
            top: 10px;
            bottom: 10px;
            right: 14px;
            display: block;
            z-index: 1;
            opacity: 0;
            text-align: center;
            padding: 8px;
            color: #ffffff;
            font-size: 24px;
            line-height: 44px;
            transition: all 300ms ease;
            background-color: #49c0b6;
            border-radius: 8px; }

        .sidebar .instagram-widget .image-box .overlay-box:before {
            position: absolute;
            top: 50%;
            margin-left: -12px;
            margin-top: -22px;
            display: inline-block; }

        .sidebar .instagram-widget .image-box:hover .overlay-box {
            opacity: 1; }

        .sidebar .instagram-widget .image-box img {
            position: relative;
            display: block;
            width: 100%;
            border-radius: 8px;
            transition: all 300ms ease; }

        /*Tags*/
        .sidebar .popular-tags a {
            position: relative;
            display: inline-block;
            line-height: 24px;
            padding: 6px 12px 3px;
            margin: 0px 4px 8px 0px;
            color: var(--para-color);
            text-align: center;
            font-size: 16px;
            border: 1px solid var(--border-color-light);
            background-color: var(--bg-color);
            border-radius: var(--border-radius); }

        .sidebar .popular-tags a:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #ffffff; }

        @media (max-width: 992px) {
            .sidebar-widget {
                margin-bottom: 30px; } }

        @media (max-width: 384px) {
            .sidebar-widget {
                padding: 30px 20px; }
            .w3l-blogpost-content a.blog-desc {
                font-size: 1.3rem; }
            .popular-posts .post .text a {
                font-size: 18px;
                line-height: 26px; } }

        .w3l-blog .blog-single-author-date li.circle {
            width: 50px;
            height: 50px;
            display: inline-block;
            overflow: hidden;
            border-radius: 50%; }

        .w3l-blog h2.title-single {
            font-weight: 600; }

        .w3l-blog ul.blog-single-author-date li {
            display: inline-block;
            margin-right: 20px;
            transition: 0.3s ease-in-out; }

        .w3l-blog ul.blog-single-author-date li a {
            color: var(--heading-color);
            font-weight: 600; }

        .w3l-blog ul.blog-single-author-date li a:hover {
            color: var(--primary-color); }

        .w3l-blog .blo-singl {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center; }

        .w3l-blog ul.share-post li {
            display: inline-block;
            text-align: center;
            line-height: 30px;
            border-radius: 3px;
            margin: 0px 3px; }

        .w3l-blog ul.share-post li a {
            display: block; }

        .w3l-blog ul.share-post li a span.fa {
            color: #fff;
            font-size: 14px; }

        .w3l-blog ul.share-post li.facebook {
            background: #3a5998;
            width: 30px;
            height: 30px;
            color: #fff; }

        .w3l-blog ul.share-post li.twitter {
            background: #55acee;
            width: 30px;
            height: 30px;
            color: #fff; }

        .w3l-blog ul.share-post li.google {
            background: #dc4e41;
            width: 30px;
            height: 30px;
            color: #fff; }

        .w3l-blog blockquote {
            padding: 30px 0;
            padding-left: 50px;
            padding-right: 50px;
            border-left: 2px solid var(--primary-color); }

        .w3l-blog blockquote q {
            color: var(--heading-color);
            font-size: 24px;
            line-height: 36px;
            font-weight: 600; }

        .w3l-blog .text-list li {
            font-style: italic;
            display: block;
            line-height: 25px;
            margin: 12px 0;
            font-size: 18px;
            color: var(--font-color); }

        .w3l-blog .img-circle {
            width: 100px;
            height: 100px;
            display: inline-block;
            overflow: hidden;
            border-radius: 50%; }

        .w3l-blog .img-circle img {
            width: 100%;
            min-height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center; }

        .w3l-blog ul.time-rply li {
            display: inline-block;
            color: var(--font-color);
            font-size: 15px; }

        .w3l-blog a.name {
            color: var(--heading-color);
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 4px;
            display: inline-block; }




        .w3l-blog a.author-image {
            width: 130px;
            height: 130px;
            display: inline-block;
            overflow: hidden;
            border-radius: 50%; }

        a.author-name {
            font-size: 20px;
            line-height: 30px;
            color: var(--heading-color);
            display: block;
            margin-bottom: 6px; }

        .author-detalis {
            display: grid;
            grid-template-columns: auto 1fr;
            align-items: center;
            grid-gap: 20px; }

        h3.post-content-title {
            font-size: 26px;
            font-weight: 600; }

    </style>
    @endsection
