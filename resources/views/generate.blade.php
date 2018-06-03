@extends('app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <form id="filter-form">
            {{ csrf_field() }}
            <div class="col-sm-4 col-xs-12">
                <select name="lesson" class="form-control">
                    @foreach(config('constant.lessons') as $value => $item)
                        <option value="{{ $value }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-8 col-xs-12 text-center">
                <a class="btn btn-default" onclick="generate()">Сгенерировать</a>
                <a id="show-eng" class="btn btn-primary" style="display: none" onclick="$('#generate-english').show()">Ответ</a>
            </div>
        </form>

        <span class="clearfix"></span>

        <div id="generate-russian"></div>

        <div id="generate-english" style="display: none"></div>
    </div>

    <script>
        function generate() {
            var data = $('#filter-form').serialize();

            $('#show-eng').show();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: 'post',
                url: "{{ route('ajax.generate') }}",
                data: data,
                dataType: 'json',
                success: function (data) {
                    $('#generate-english').hide();
                    $('#generate-russian').html(data['russian']);
                    $('#generate-english').html(data['english']);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    </script>
@endsection