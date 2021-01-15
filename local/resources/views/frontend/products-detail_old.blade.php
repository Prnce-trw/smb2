<!doctype html>
<html lang="en">

<head>
    <title>Products - SMB</title>
    @include('frontend.header')
    <style>
        .sticky-offset {
            top: 56px;
        }

        #body-row {
            margin-left: 0;
            margin-right: 0;
        }

        #sidebar-container {
            min-height: 100vh;
            background-color: #f7f7f7;
            padding: 0;
        }

        /* Sidebar sizes when expanded and expanded */
        .sidebar-expanded {
            width: 230px;
        }

        .sidebar-collapsed {
            width: 60px;
        }

        /* Menu item*/
        #sidebar-container .list-group a {
            height: 50px;
            color: #000;
        }

        /* Submenu item*/
        #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
        }

        .sidebar-submenu {
            font-size: 0.9rem;
        }

        /* Separators */
        .sidebar-separator-title {
            background-color: #fff;
            height: 35px;
        }

        .sidebar-separator {
            background-color: #fff;
            height: 25px;
        }

        .logo-separator {
            background-color: #fff;
            height: 60px;
        }

        /* Closed submenu icon */
        #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
            content: " \f0d7";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
        }

        /* Opened submenu icon */
        #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
            content: " \f0da";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
        }

        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #000;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .text_product h4 {
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.3px;
            padding-bottom: 15px;
        }

        .text_product h6 {
            font-size: 20px;
            font-weight: 500 !important;
            letter-spacing: 0.3px;
            padding-bottom: 0px;
            padding-top: 0px;
        }

        .text_product h5 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
            font-weight: 300;
            letter-spacing: 0.3px;
            font-size: 15px;
            padding-top: 15px;
        }

        .text_product p {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
            padding-bottom: 10px;
            color: #666;
            letter-spacing: 0.3px;
        }

        .text_product {
            margin: 10px 0 25px;
        }

        .pad-banner {
            padding: 8px 0 0px;
        }

        .nopan {
            padding: 0;
        }

        .banner h2 {
            position: absolute;
            left: 50%;
            top: 60%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 40px;
            font-weight: 600;
            color: #fff;
            z-index: 1;
            letter-spacing: 3px;
            font-family: 'Poppins', sans-serif;
            text-shadow: 1.5px 1.5px 1px #666666a3;
        }

        .banner p {
            position: absolute;
            left: 50%;
            top: 60%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 16px;
            color: #1b75bc;
            z-index: 1;
            letter-spacing: 1px;
        }

        .banner img {
            position: relative;
        }


        .product-quantity {
            margin-left: 0px;
            padding-bottom: 0px;
            border: 1px solid #e1e1e1;
        }

        .buttom_register a {
            color: #fff;
            border: 1px solid #fff;
            background-color: #000;
            display: inline-block;
            padding: 2px 10px;
            line-height: 33px;
            text-transform: uppercase;
            transition: 0.5s;
            font-size: 16px;
            width: 100%;
            text-align: center;
        }

        svg:not(:root).svg-inline--fa {
            overflow: visible
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -.125em
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -.225em
        }

        .svg-inline--fa.fa-w-1 {
            width: .0625em
        }

        .svg-inline--fa.fa-w-2 {
            width: .125em
        }

        .svg-inline--fa.fa-w-3 {
            width: .1875em
        }

        .svg-inline--fa.fa-w-4 {
            width: .25em
        }

        .svg-inline--fa.fa-w-5 {
            width: .3125em
        }

        .svg-inline--fa.fa-w-6 {
            width: .375em
        }

        .svg-inline--fa.fa-w-7 {
            width: .4375em
        }

        .svg-inline--fa.fa-w-8 {
            width: .5em
        }

        .svg-inline--fa.fa-w-9 {
            width: .5625em
        }

        .svg-inline--fa.fa-w-10 {
            width: .625em
        }

        .svg-inline--fa.fa-w-11 {
            width: .6875em
        }

        .svg-inline--fa.fa-w-12 {
            width: .75em
        }

        .svg-inline--fa.fa-w-13 {
            width: .8125em
        }

        .svg-inline--fa.fa-w-14 {
            width: .875em
        }

        .svg-inline--fa.fa-w-15 {
            width: .9375em
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em
        }

        .svg-inline--fa.fa-w-17 {
            width: 1.0625em
        }

        .svg-inline--fa.fa-w-18 {
            width: 1.125em
        }

        .svg-inline--fa.fa-w-19 {
            width: 1.1875em
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: .3em;
            width: auto
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: .3em;
            width: auto
        }

        .svg-inline--fa.fa-border {
            height: 1.5em
        }

        .svg-inline--fa.fa-li {
            width: 2em
        }

        .svg-inline--fa.fa-fw {
            width: 1.25em
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -.125em;
            width: 1em
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .fa-layers-counter {
            background-color: #ff253a;
            border-radius: 1em;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            height: 1.5em;
            line-height: 1;
            max-width: 5em;
            min-width: 1.5em;
            overflow: hidden;
            padding: .25em;
            right: 0;
            text-overflow: ellipsis;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top right;
            transform-origin: top right
        }

        .fa-layers-bottom-right {
            bottom: 0;
            right: 0;
            top: auto;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right
        }

        .fa-layers-bottom-left {
            bottom: 0;
            left: 0;
            right: auto;
            top: auto;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left
        }

        .fa-layers-top-right {
            right: 0;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top right;
            transform-origin: top right
        }

        .fa-layers-top-left {
            left: 0;
            right: auto;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top left;
            transform-origin: top left
        }

        .fa-lg {
            font-size: 1.3333333333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-xs {
            font-size: .75em
        }

        .fa-sm {
            font-size: .875em
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit
        }

        .fa-border {
            border: solid .08em #eee;
            border-radius: .1em;
            padding: .2em .25em .15em
        }

        .fa-pull-left {
            float: left
        }

        .fa-pull-right {
            float: right
        }

        .fa.fa-pull-left,
        .fab.fa-pull-left,
        .fal.fa-pull-left,
        .far.fa-pull-left,
        .fas.fa-pull-left {
            margin-right: .3em
        }

        .fa.fa-pull-right,
        .fab.fa-pull-right,
        .fal.fa-pull-right,
        .far.fa-pull-right,
        .fas.fa-pull-right {
            margin-left: .3em
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8)
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1)
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1)
        }

        :root .fa-flip-both,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-rotate-90 {
            -webkit-filter: none;
            filter: none
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            position: relative;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em
        }

        .fa-inverse {
            color: #fff
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1)
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: .4;
            opacity: var(--fa-secondary-opacity, .4)
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: .4;
            opacity: var(--fa-secondary-opacity, .4)
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1)
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: #000
        }

        .fad.fa-inverse {
            color: #fff
        }

        .product-quantity-subtract,
        .product-quantity-add {
            padding-left: 11px;
            background-color: #fff;
            width: 30px;
            height: 30px;
            color: #000;
            font-size: 10px;
            line-height: 34px;
        }

        .flex-direction-nav a:before {
            font-size: 20px;
        }

        .flex-direction-nav a {
            height: 18px;
        }

        .flexslider {
            margin: 0 0 5px;
            background: none;
        }

        .flexslider img {
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        .product-quantity * {
            display: inline-block;
        }

        #product-quantity-input {
            text-align: center;
            background-color: #fff;
            border: none;
            width: 30px;
            height: 30px;
            line-height: 34px;
            font-size: 15px;
            outline: none;
            border-radius: 0;
        }

        @media (max-width: 991px) {
            .flex-direction-nav a:before {
                font-size: 16px;
            }

            .flex-direction-nav a {
                height: 17px;
            }
        }

        @media (max-width: 767px) {
            .flex-direction-nav a:before {
                font-size: 14px;
            }

            .flex-direction-nav a {
                height: 17px;
            }
        }


        @media screen and (max-width: 860px) {
            .flex-direction-nav .flex-prev {
                opacity: 1;
                left: 10px;
            }

            .flex-direction-nav .flex-next {
                opacity: 1;
                right: 10px;
            }
        }



        svg:not(:root).svg-inline--fa {
            overflow: visible
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -.125em
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -.225em
        }

        .svg-inline--fa.fa-w-1 {
            width: .0625em
        }

        .svg-inline--fa.fa-w-2 {
            width: .125em
        }

        .svg-inline--fa.fa-w-3 {
            width: .1875em
        }

        .svg-inline--fa.fa-w-4 {
            width: .25em
        }

        .svg-inline--fa.fa-w-5 {
            width: .3125em
        }

        .svg-inline--fa.fa-w-6 {
            width: .375em
        }

        .svg-inline--fa.fa-w-7 {
            width: .4375em
        }

        .svg-inline--fa.fa-w-8 {
            width: .5em
        }

        .svg-inline--fa.fa-w-9 {
            width: .5625em
        }

        .svg-inline--fa.fa-w-10 {
            width: .625em
        }

        .svg-inline--fa.fa-w-11 {
            width: .6875em
        }

        .svg-inline--fa.fa-w-12 {
            width: .75em
        }

        .svg-inline--fa.fa-w-13 {
            width: .8125em
        }

        .svg-inline--fa.fa-w-14 {
            width: .875em
        }

        .svg-inline--fa.fa-w-15 {
            width: .9375em
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em
        }

        .svg-inline--fa.fa-w-17 {
            width: 1.0625em
        }

        .svg-inline--fa.fa-w-18 {
            width: 1.125em
        }

        .svg-inline--fa.fa-w-19 {
            width: 1.1875em
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: .3em;
            width: auto
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: .3em;
            width: auto
        }

        .svg-inline--fa.fa-border {
            height: 1.5em
        }

        .svg-inline--fa.fa-li {
            width: 2em
        }

        .svg-inline--fa.fa-fw {
            width: 1.25em
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -.125em;
            width: 1em
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .fa-layers-counter {
            background-color: #ff253a;
            border-radius: 1em;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            height: 1.5em;
            line-height: 1;
            max-width: 5em;
            min-width: 1.5em;
            overflow: hidden;
            padding: .25em;
            right: 0;
            text-overflow: ellipsis;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top right;
            transform-origin: top right
        }

        .fa-layers-bottom-right {
            bottom: 0;
            right: 0;
            top: auto;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right
        }

        .fa-layers-bottom-left {
            bottom: 0;
            left: 0;
            right: auto;
            top: auto;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left
        }

        .fa-layers-top-right {
            right: 0;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top right;
            transform-origin: top right
        }

        .fa-layers-top-left {
            left: 0;
            right: auto;
            top: 0;
            -webkit-transform: scale(.25);
            transform: scale(.25);
            -webkit-transform-origin: top left;
            transform-origin: top left
        }

        .fa-lg {
            font-size: 1.3333333333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-xs {
            font-size: .75em
        }

        .fa-sm {
            font-size: .875em
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit
        }

        .fa-border {
            border: solid .08em #eee;
            border-radius: .1em;
            padding: .2em .25em .15em
        }

        .fa-pull-left {
            float: left
        }

        .fa-pull-right {
            float: right
        }

        .fa.fa-pull-left,
        .fab.fa-pull-left,
        .fal.fa-pull-left,
        .far.fa-pull-left,
        .fas.fa-pull-left {
            margin-right: .3em
        }

        .fa.fa-pull-right,
        .fab.fa-pull-right,
        .fal.fa-pull-right,
        .far.fa-pull-right,
        .fas.fa-pull-right {
            margin-left: .3em
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8)
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1)
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1)
        }

        :root .fa-flip-both,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-rotate-90 {
            -webkit-filter: none;
            filter: none
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            position: relative;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em
        }

        .fa-inverse {
            color: #fff
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1)
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: .4;
            opacity: var(--fa-secondary-opacity, .4)
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: .4;
            opacity: var(--fa-secondary-opacity, .4)
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1)
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: #000
        }

        .fad.fa-inverse {
            color: #fff
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .product-quantity-subtract,
        .product-quantity-add {
            padding-left: 5px;
            background-color: #fff;
            width: 30px;
            height: 30px;
            color: #000;
            font-size: 10px;
            line-height: 34px;
        }

        .product-quantity * {
            display: inline-block;
        }

        #product-quantity-input {
            text-align: center;
            background-color: #fff;
            border: none;
            width: 50px;
            height: 46px;
            line-height: 34px;
            font-size: 15px;
            outline: none;
            border-radius: 0;
        }

        @media (max-width: 991px) {
            .flex-direction-nav a:before {
                font-size: 16px;
            }

            .flex-direction-nav a {
                height: 17px;
            }
        }

        @media (max-width: 767px) {
            .flex-direction-nav a:before {
                font-size: 14px;
            }

            .flex-direction-nav a {
                height: 17px;
            }
        }

        @media (max-width: 320px) {
            .flex-direction-nav a:before {
                font-size: 16px;
            }

            .flex-direction-nav a {
                height: 17px;
            }
        }

        @media (max-width: 375px) {
            .flex-direction-nav a:before {
                font-size: 14px;
            }

            .flex-direction-nav a {
                height: 17px;
            }
        }

        @media (max-width: 425px) {
            .flex-direction-nav a:before {
                font-size: 14px;
            }

            .flex-direction-nav a {
                height: 17px;
            }
        }

        .nav-toggle {
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            cursor: pointer;
            height: 2rem;
            left: 30px;
            position: fixed;
            top: 1.1rem;
            width: 3.6rem;
            z-index: 10;
        }

        .nav-toggle.expanded .nav-toggle-bar::after,
        .nav-toggle.expanded .nav-toggle-bar::before {
            background: #000;
            margin-top: 0;
        }

        .nav-toggle.expanded .nav-toggle-bar::after {
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .nav-toggle.expanded .nav-toggle-bar {
            background: transparent;
        }

        .nav-toggle .nav-toggle-bar {
            margin-top: 0;
        }

        .nav-toggle .nav-toggle-bar,
        .nav-toggle .nav-toggle-bar::after,
        .nav-toggle .nav-toggle-bar::before {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            background: #0000009c;
            content: '';
            height: 2.5px;
            width: 33px;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }


        .nav ul {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav.expanded {
            left: 0;
            border-left: 1px solid rgba(0, 0, 0, 0.04);
        }

        .nav-toggle .nav-toggle-bar::before {
            margin-top: -8px;
        }

        .nav-toggle .nav-toggle-bar::after {
            margin-top: 8px;
        }

        .nav-toggle.expanded .nav-toggle-bar::before {
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .nav a {
            color: inherit;
            cursor: pointer;
            text-decoration: none;
        }

        .nav a:hover {
            color: #00cbd2;
            text-decoration: none;
        }

        .logo_menu {
            display: flex;
            padding: 7px 0px 0 20px;
        }

        .bg_menu {
            background-color: #fff;
            position: fixed;
            left: 0;
            z-index: 99;
            width: 100%;
            margin: 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .logo_menu img {
            width: 54px;
        }

        .menutext p {
            text-align: right;
            padding: 21px 0;
            margin: 0;
        }

        .language {
            padding: 8px 0;
            list-style: none;
            display: inline-flex;
            margin: 0;
        }

        .language li {
            padding: 13px;
            color: #737580;
        }

        .language a {
            color: #0000009c;
        }

        .language a:hover {
            text-decoration: none;
        }

        .language .active {
            border-bottom: 2px solid #0000009c;
        }

        .language div {
            margin-top: 18px;
            background-color: #0000002b;
            width: 1.7px;
            height: 17px;
        }

        .user div {
            margin-top: 4px;
            background-color: #0000002b;
            width: 2px;
            height: 17px;
            float: left;
            margin-right: 20px;
        }

        .user {
            text-align: left;
            padding-top: 21px;
            margin: 0;
            padding-right: 5px;
        }

        .user a:hover {
            text-decoration: none;
        }

        .user a {
            color: #0000009c;
            padding-right: 25px;
        }

        .user img {
            width: 22px;
            padding-right: 5px;
            margin-top: -3px;
        }

        .pad_user {
            padding-left: 5px;
        }

        .icon_shopmenu {
            width: 29px;
            padding-right: 10px;
        }

        .subtotal h6 {
            font-size: 14px;
        }

        .box_cart p {
            padding: 29px 0;
        }

        .box_cart i {
            float: right;
            font-size: 12px;
        }

        .subtotal p {
            text-align: right;
            margin: 0;
            font-size: 14px;
        }

        .p_productcart {
            padding-bottom: 10px;
        }

        .flex-control-nav {
            z-index: 20;
        }

        .language_xs {
            display: none;
        }

        .cart_xs {
            display: none;
        }

        .language_menu {
            float: right;
            padding-right: 30px;
        }

        @media (max-width: 1199px) {
            .user {
                margin-right: 22px;
            }

            .user a {
                padding-right: 14px;
            }

            .menutext p {
                margin-left: -30px;
            }
        }

        @media (max-width: 991px) {
            .menutext p {
                margin-left: 0px;
            }

            .user {
                padding-right: 0;
                margin-right: 0;
            }

            .nav {
                width: 16rem;
                font-size: 1rem;
                line-height: 56px;
            }
        }

        @media (max-width: 767px) {
            .cart_xs {
                display: block;
            }

            .cart_xs a {
                color: #00cbd2;
                border: 1px solid #00cbd2;
                display: inline-block;
                padding: 0px 20px;
                line-height: 30px;
                text-transform: uppercase;
                transition: 0.5s;
                font-size: 15px;
                width: 100%;
                text-align: center;
            }

            .nav ul li {
                border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            }

            .nav ul {
                width: 75%;
            }

            .language_xs {
                display: block;
            }

            .language_xs .active {
                border-bottom: 2px solid #00cbd2;
                margin: 0 10px;
            }

            .language_xs a {
                color: #00cbd2;
            }

            .language_xs p {
                color: #737580;
                margin: 0;
            }

            .user {
                margin-right: -46px;
            }

            .menutext p {
                margin-left: 40px;
            }

            .slidecaption a {
                font-size: 12px;
                padding: 2px 12px;
                height: 25px;
                line-height: 20px;
            }

            .language {
                display: none;
            }

            .wrap_slidecaption {
                top: 26%;
            }

            .wrap_slidecaption h2 {
                font-size: 17px;
                padding-bottom: 12px;
                line-height: 10px;
            }

            .wrap_slidecaption h1 {
                font-size: 31px;
                letter-spacing: 2px;
                margin-bottom: 11px;
            }

            .logo_menu {
                padding: 9px 0px 0 15px;
            }

            .nav-toggle {
                width: 3rem;
                right: 0;
            }

            .btn {
                color: #fff !important;
            }

            .btn-black {
                background-color: #000 !important;
                color: none !important;
            }
        }

        .crl7WW {
            -webkit-flex-basis: 32.1875rem;
            -ms-flex-preferred-size: 32.1875rem;
            flex-basis: 32.1875rem;
            max-width: 32.1875rem;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .product-variation--selected {
            color: #ee4d2d;
            border-color: #ee4d2d;
        }

        .product-variation {
            cursor: pointer;
            min-height: 2.125rem;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: .25rem .75rem;
            margin: 0 0px 8px 0;
            color: rgba(0, 0, 0, .8);
            text-align: left;
            border-radius: 2px;
            border: 1px solid rgba(0, 0, 0, .09);
            position: relative;
            background: #fff;
            outline: 0;
            word-break: break-word;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .product-text {
            margin-top: 6px;
            margin-bottom: 0px;
        }

        .images-mar {
            margin-right: 10px;
        }

        .nav-tabs {
            display: block;
        }

        .img-flex {
            display: flex;
            padding-left: 25px;
        }

        @media(min-width:768px) {
            .nav-tabs {
                display: flex;
            }

            .card {
                border: none;
            }

            .card .card-header {
                display: none;
            }

            .card .collapse {
                display: block;
            }
        }

        .tab-contents>.tab-pane {
            display: block !important;
            opacity: 1;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ff8200;
            border-color: #fff;
            background-color: #fff;
            font-weight: 500;
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            color: #000;
            padding-top: 20px;
            padding-right: 45px;
            background-color: #fff;
            font-size: 18px;
            font-weight: 500;
        }

        .afk {
            color: #fff !important;
        }

        .last1 {
            color: #ff8200 !important;
            background-color: #fff !important;
            border-bottom: 5px solid #ff8200 !important;
            border-color: #fff !important;
            font-size: 18px !important;
            font-weight: 500 !important;
        }

        .last2 {
            border: 1px solid transparent !important;
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
            color: #000 !important;
            padding-top: 20px !important;
            padding-right: 45px !important;
            background-color: #fff !important;
            font-size: 18px !important;
            font-weight: 500 !important;
        }

        .card.newsIndex .card-img-top {
            width: 100%;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px);
        }

        .owl-carousel .owl-nav button.owl-prev {
            position: absolute;
            left: -50px;
            top: 33%;
            border-radius: 0;
            width: 34px;
            background-color: none;
            height: 34px;
            outline: none;
            background-image: url();
        }

        .owl-carousel .owl-nav button.owl-next {
            background-image: url();
            position: absolute;
            right: -50px;
            outline: none;
            background-color: none;
            top: 33%;
            border-radius: 0;
            width: 34px;
            height: 34px;
        }

    </style>
</head>
<script type="text/javascript">
    $(document).ready(function() {
        $(".select-display-slide > li").click(function() {
            var rel = $(this).attr("rel");
            console.log(rel);
            $('.display-slide').hide();
            $('.display-slide[rel=' + rel + ']').fadeIn();
            $(".select-display-slide > li").removeClass("active");
            $(this).addClass("active");
        });
    });

</script>
<body>
    @include('frontend.navbar')
    <div class="banner-page head-about-us-5 ">
        <div class="centered headPage-text">
            <a id="orange18" style="padding-left: 15px">หน้าหลัก / สินค้า {{$product->getBrand->brand_name}} /</a><a id="orange17"> {{$product->product_name}}</a>
        </div>
    </div>
    <div class="container mt-5 mb-5" id="textproductI">
        <div class="row">
            <div class="col-lg-5">
                <div class="society-set select-display-slide">
                    @foreach ($product->getProductImgSets as $key => $item)
                    <li class="{{ $key == 0 ? "active" : "" }}" rel="{{$key}}">
                        <a href="javascript:void(0)"><img src="{{asset('local/storage/app/productgallery/'.$item->product_imgset_name.'')}}" class="img-fluid"></a>
                    </li>
                    @endforeach
                </div>
                <div class="society-content">
                    @foreach ($product->getProductImgSets as $key => $item)
                    <div class="display-slide" rel="{{$key}}" style="{{ $key == 0 ? "display:block;" : "" }}">
                        <img src="{{asset('local/storage/app/productgallery/'.$item->product_imgset_name.'')}}" class="img-fluid">
                    </div>
                    @endforeach
                </div>
                <div class="">
                    <div class="products-wheel wrapper_hover owl-carousel owl-theme">
                        @foreach ($product->getProductImgSets as $item)
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('local/storage/app/productgallery/'.$item->product_imgset_name.'')}}" class="img-fluid">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7" id="idpt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-text">
                            <img src="{{asset('local/storage/app/brand/'.$product->getBrand->brand_img.'')}}"  height="80">
                        </div>
                        <div class="product-text mt-2">
                            <h5 id="textproducTss_name" class="text-black font-weight-medium">{{$product->product_name}}</h5>
                        </div>
                        <div class="product-text">
                            <h2 id="textproducTss" class="text-black font-weight-medium">{{$product->product_series}}</h2>
                        </div>
                        <div class="product-text">
                            <a>ราคา </a><a id="orange14">
                                @if ($product->product_price_discount == null)
                                {{$product->product_price}}
                                @else
                                {{$product->product_price_discount}}
                                @endif
                            </a><a>บาท</a>
                        </div>
                        <div class="product-text">
                            <a>MATERIAL : {{$product->product_material}},</a>
                        </div>
                        <div class="product-text">
                            <a>SIZE : @foreach ($product->getProductSizes as $value_size)
                                {{$value_size->size_diameter}}x{{$value_size->size_width}},
                                @endforeach</a>
                        </div>
                        <div class="product-text">
                            <a>PCD :  @foreach ($product->getProductPcds as $value_pcd)
                                {{$value_pcd->pcd_name}},
                                @endforeach</a>
                        </div>
                        <div class="product-text">
                            <a>ET : @foreach ($product->getProductEts as $value_et)
                                {{$value_et->et_name}},
                                @endforeach</a>
                        </div>
                        <div class="product-text">
                            <a>ขนาด :</a>
                        </div>
                        <div class="product-text">
                            <div class="flex items-center crl7WW">
                                <input type="hidden" name="result_size" id="result_size">
                                @foreach ($product->getProductSizes_frontend as $key => $item)
                                <button class="product-variation btn_size" type="button" value="{{$item->size_id}}">{{$item->size_diameter}}x{{$item->size_width}}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="product-quantity mb-5" id="pq">
                            <div class="product-quantity-subtract">
                                <svg class="svg-inline--fa fa-minus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg><!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
                            </div>
                            <div>
                                <input type="text" id="product-quantity-input" placeholder="0" value="0">
                            </div>
                            <div class="product-quantity-add">
                                <svg class="svg-inline--fa fa-plus fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg><!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                            </div>
                        </div>
                    </div>
                    @if (auth('customer')->user() != null)
                    <div class="col-lg-3 col-md-3">
                        <button type="button" class="btn btn-black rounded-0" onclick="addtoCart()" style="color: #fff;" id="lk"> ใส่ตะกร้าสินค้า</button>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3  images-mar">
                        <img src="{{asset('smb-frontend/images/products-detail/delivery.jpg')}}">
                    </div>
                    <div class="col-lg-3  col-md-3 images-mar">
                        <img src="{{asset('smb-frontend/images/products-detail/payment.jpg')}}">
                    </div>
                    <div class="col-lg-3  col-md-3 images-mar">
                        <img src="{{asset('smb-frontend/images/products-detail/unk.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <ul id="tabs" class="nav nav-tabs hide3" role="tablist" style="background-color: #fff!important;border-bottom: 5px solid #ff8200 !important;color: #fff!important;">
            <li class="nav-item">
                <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">รายละเอียดสินค้า</a>
            </li>
            <li class="nav-item">
                <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">คุณสมบัติ</a>
            </li>
            <li class="nav-item">
                <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">แกลลอรี่สินค้า</a>
            </li>
            <li class="nav-item">
                <a id="tab-D" href="#pane-D" class="nav-link" data-toggle="tab" role="tab">การรับประกัน</a>
            </li>
        </ul>
        <div id="content" class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade show active mt-3 mb-5" role="tabpanel" aria-labelledby="tab-A">
                <!-- Note: New place of `data-parent` -->
                <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                    <div class="card-body">
                        <img src="{{asset('smb-frontend/images/products-detail/list.jpg')}}"><a style="font-size: 18px;font-weight: 500;"> รายละเอียดสินค้า</a>
                        <br>
                        <b>{{$product->product_detail}}</b>
                    </div>
                    <div class="card-body">
                        <img src="{{asset('smb-frontend/images/products-detail/list.jpg')}}"><a style="font-size: 18px;font-weight: 500;"> คุณสมบัติ</a>
                        <br>
                        <b>{{$product->product_property}}</b>
                    </div>
                    <div class="card-body">
                        <img src="{{asset('smb-frontend/images/products-detail/gal.jpg')}}"><a style="font-size: 18px;font-weight: 500;"> แกลลอรี่สินค้า</a>
                        <div class="container py-5">
                            <div id="news" class="carousel" data-ride="carousel">
                                <div class="owl-news loop owl-carousel owl-theme my-3" data-aos="fade-up">
                                    @foreach ($product->getProductImgGallerys as $item)
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <img class="card-img-top box-homenew-2" src="{{asset('local/storage/app/productgallery/'.$item->product_gallery_name.'')}}" alt="Card image">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="{{asset('smb-frontend/images/products-detail/warranty.jpg')}}"><a style="font-size: 18px;font-weight: 500;"> การรับประกัน</a>
                        <br>
                        <br>
                        <h6>MAINTAINING YOUR ALLOY WHEELS</h6>
                        <b>{{$product->product_warranty}}</b>
                    </div>
                </div>
            </div>

            <div id="pane-B" class="card tab-pane fade mt-3" role="tabpanel" aria-labelledby="tab-B">
                <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                    <div class="card-body">
                        <img src="{{asset('smb-frontend/images/products-detail/list.jpg')}}"><a style="font-size: 18px;font-weight: 500;"> คุณสมบัติ</a>
                        <br>
                        <b>{{$product->product_property}}</b>
                    </div>
                </div>
            </div>

            <div id="pane-C" class="card tab-pane fade mt-3" role="tabpanel" aria-labelledby="tab-C">
                <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                    <div class="card-body">
                        <img src="{{asset('smb-frontend/images/products-detail/gal.jpg')}}"><a style="font-size: 18px;font-weight: 500;"> แกลลอรี่สินค้า</a>
                        <div class="container py-5">
                            <div id="news" class="carousel" data-ride="carousel">
                                <div class="owl-news loop owl-carousel owl-theme my-3" data-aos="fade-up">
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <img class="card-img-top box-homenew-2" src="{{asset('smb-frontend/images/products-detail/s1.jpg')}}" alt="Card image">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <img class="card-img-top" src="{{asset('smb-frontend/images/products-detail/s2.jpg')}}" alt="Card image">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <img class="card-img-top" src="{{asset('smb-frontend/images/products-detail/s3.jpg')}}" alt="Card image">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <img class="card-img-top box-homenew-2" src="{{asset('smb-frontend/images/products-detail/s1.jpg')}}" alt="Card image">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <img class="card-img-top" src="{{asset('smb-frontend/images/products-detail/s2.jpg')}}" alt="Card image">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card newsIndex">
                                            <img class="card-img-top" src="{{asset('smb-frontend/images/products-detail/s3.jpg')}}" alt="Card image">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pane-D" class="card tab-pane fade mt-3" role="tabpanel" aria-labelledby="tab-d">
                <div id="collapse-D" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-D">
                    <div class="card-body">
                        <img src="{{asset('smb-frontend/images/products-detail/warranty.jpg')}}"><a style="font-size: 18px;font-weight: 500;"> การรับประกัน</a>
                        <br>
                        <br>
                        <h6>MAINTAINING YOUR ALLOY WHEELS</h6>
                        <b>Proper maintenance will prevent damage to the wheel finish and keep the wheel finish warranty from being
                            voided. Before installation, apply a coat of non abrasive car wax to the wheels which will help protect the
                            finish and make it easier to clean them. Clean your wheels often using mild soap and water and a soft sponge
                            or cotton cloth to clean them. Reapply a coat of wax at least once per season. Do not use abrasive cleaners,
                            pads or polishing compounds on your wheels. Do not wash your wheels when they are hot as it will damage
                            the finish.</b>
                    </div>
                    <div class="card-body">
                        <br>
                        <h6>LIMITED WARRANTY</h6>
                        <b>The seller warrants that the wheels will be free from cosmetic defects for one (1) year or three (3) years from
                            the date of purchase. The seller also warrants that its wheels will be free from structural defects for as long
                            as the purchaser owns the product. The seller’s obligation under this warranty will be limited to the repair or
                            replacement of any wheel(s) which is (are) considered to be defective. The seller will inspect all warranty
                            returns. Wheels covered by our warranty will be repaired or replaced. </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

        $('.btn_size').click(function () {
            var sizeid = $(this).val();
            if (sizeid != null) {
                $('#result_size').val(sizeid);
            }
        });

        function addtoCart() {
            var amountProduct = $('#product-quantity-input').val();
            var sizeid = $('#result_size').val();
            var ProductName = $('#textproducTss_name').text();
            var ProductPrice = $('#orange14').text();
            if (sizeid == 0) {
                alert('กรุณาเลือกขนาด');
            }
            if (amountProduct == 0) {
                alert('กรุณาเลือกจำนวน');
            }
            if (sizeid != null && amountProduct != null) {
                $.ajax({
                    url: '{{url('AddtoCart')}}',
                    type: 'GET',
                    data: {
                        amountProduct: amountProduct,
                        ProductName: ProductName,
                        ProductPrice: ProductPrice,
                        sizeid: sizeid,
                    },
                }).done(function (data) {
                    window.location.href = '{{url('cart')}}';
                });
            }
        }
    </script>



    <!--
    <script>
        $(window).on("load", function() {
            // The slider being synced must be initialized first
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 50,
                itemMargin: 5,
                minItems: 2,
                maxItems: 4,

                asNavFor: '#slider'

            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,

                sync: "#carousel"
            });
        });

    </script>
-->
    <script>
        //Reduce quantity by 1 if clicked
        $(document).on("click", ".product-quantity-subtract", function(e) {
            var value = $("#product-quantity-input").val();
            //console.log(value);
            var newValue = parseInt(value) - 1;
            if (newValue < 0) newValue = 0;
            $("#product-quantity-input").val(newValue);
            CalcPrice(newValue);
        });

        //Increase quantity by 1 if clicked
        $(document).on("click", ".product-quantity-add", function(e) {
            var value = $("#product-quantity-input").val();
            //console.log(value);
            var newValue = parseInt(value) + 1;
            $("#product-quantity-input").val(newValue);
            CalcPrice(newValue);
        });

        $(document).on("blur", "#product-quantity-input", function(e) {
            var value = $("#product-quantity-input").val();
            //console.log(value);
            CalcPrice(value);
        });


        function AddToCart(e) {
            e.preventDefault();
            var qty = $("#product-quantity-input").val();
            if (qty === '0') {
                return;
            }
            var toast = '<div class="toast toast-success">Added ' + qty + ' to cart.</div>';
            $("body").append(toast);
            setTimeout(function() {
                $(".toast").addClass("toast-transition");
            }, 100);
            setTimeout(function() {
                $(".toast").remove();
            }, 3500);
        }

    </script>
    <script>
        $(document).ready(function() {
            $('.btn_menu').click(function(event) {
                if ($(".mainmenu").is(":hidden")) {
                    $(this).addClass("active");
                    $(".mainmenu").slideDown();
                } else {
                    $(this).removeClass("active");
                    $(".mainmenu").slideUp();
                    $('.submenu').slideUp();
                }
                event.stopPropagation();
            });
            $('html').click(function(event) {});

            $('.mainmenu .hassub > a').click(function(event) {
                if ($(this).siblings(".submenu").is(":hidden")) {
                    $(this).siblings(".submenu").slideDown();
                } else {
                    $(this).siblings('.submenu').slideUp();
                }
                event.preventDefault();
            });

        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

    </script>
    <script src="{{asset('smb-frontend/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.owl-zero').owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.owl-three').owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $('.owl-news').owlCarousel({
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                navText: ['&nbsp;', '&nbsp;'],
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                        nav: false
                    },
                    640: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });

    </script>
    <!--End Sidebar Script-->
    @include('frontend.footer')
</body>
</html>
