@extends('program.crud.headeradd')
@section('add')
<title>Add Program</title>
<div class="container py-3">
{{--    <form action="{{ route('addtask') }}" method="POST">--}}
{{--        @csrf--}}
    <label for="Form1">Judul KPI's</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form1" value="ini judul kpi" readonly>
    </div>
    <label for="Form2">Judul</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form2" placeholder="Masukkan Judul Program">
    </div>

{{--    <select class="form-select" aria-label="Select multiple options" multiple>--}}
{{--        <option value="1">One</option>--}}
{{--        <option value="2">Two</option>--}}
{{--        <option value="3">Three</option>--}}
{{--    </select>--}}
{{--    <div class=" col-md-6 offset-md-3 form-group">--}}
        <h6 class="pt-2">PJ:</h6>
        <select class="tags form-control"
                id="tags"
                name="tags[]"
                multiple="multiple"
        ></select>
{{--    </div>--}}

    <br/>
        <div>Submit Program & Tambah Kegiatan</div>
    <button class="btn btn-primary" type="submit">Submit</button>
{{--    </form>--}}

</div>

    <script>

        $(document).ready(function(){
            $('.tags').select2({
                placeholder:'select',
                allowClear:true,
            });

            $("#tags").select2({
                ajax:{
                    url:"{{ route('getUser') }}",
                    type:"post",
                    delay:250,
                    dataType:'json',
                    data: function (params){
                        return{
                            name:params.term,
                            "_token":"{{ csrf_token() }}",
                        };
                    },

                    processResults:function(data){
                        return{
                            results: $.map(data, function (item){
                                return{
                                    id:item.id,
                                    name:item.name
                                }
                            })
                        };
                    },
                },
            });
        });
    </script>
@endsection
