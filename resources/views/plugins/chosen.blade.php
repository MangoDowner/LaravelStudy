
@section('head_css')
    @parent
    <link rel="stylesheet" href="{{asset('plugins/chosen/css/chosen.min.css')}}">
    <style>
        .chosen-container-single .chosen-search input[type=text]{background:0 0;border-radius:0;line-height:28px;height:28px}
    </style>
@endsection


@section('js-content')
    @parent
    <script src="{{asset('plugins/chosen/js/chosen.jquery.min.js')}}"></script>
    <script>
        $(function(){
            var config = {
                '.chosen-select'           : {width:'50%'},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:'95%'}
            };
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
        })
    </script>
@endsection
