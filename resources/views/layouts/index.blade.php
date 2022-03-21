<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}">
    <style>
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url('s/opensans/v18/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url('s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url('s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhp.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0b.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('s/playfairdisplay/v21/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvXDXbtM.woff2') format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

    </style>
    <style>.sticky {
        position: fixed;
        z-index: 9999;
        width: 100%;
      }</style>
    @yield('css')
    <link href="{{ asset('assets/css_3_0/minified/08082021011458_home.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <x-header></x-header>
    @yield('content')
    <x-footer></x-footer>
    <script src="{{asset('js/15062021012530_home.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: "{{'all-courses'}}",
                dataType:'json',
                context: document.body,
                data: { kvcArray : arrayfromjs},
                success: function(data){
                    console.log(data.course_categories);
                }
            });
        });
    </script>
    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>
    @yield('script')
</body>

</html>
