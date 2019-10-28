@if($enabled)
    <script nonce="{{ get_nonce() }}">
        window.dataLayer = window.dataLayer || []
        @if(!empty($dataLayer->toArray()))
            dataLayer = [{!! $dataLayer->toJson() !!}];
        @endif
        @foreach($pushData as $item)
        dataLayer.push({!! $item->toJson() !!});
        @endforeach
    </script>

    <!-- Google Tag Manager -->
    <script nonce="{{ get_nonce() }}">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth={{ $envAuth }}&gtm_preview={{ $envPreview }}&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ $id }}');</script>
    <!-- End Google Tag Manager -->
@endif
