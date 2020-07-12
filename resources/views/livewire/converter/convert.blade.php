<div>
        <div class="container">
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading"><h2>Convert Sql -> Lara DB Query Builder (Draft)</h2></div>
        <div class="panel-body">
            <div class="row flex-row">
                <div class="col-lg-5">
                    <div class="form-group">
                        <h3><span class="label label-info">Sql</span></h3>
                        <textarea class="form-control" rows="8" id="sqlData"></textarea>
                    </div>
                </div>
                <div class="col-lg-2 text-center" >

                    <div class="btn-group-vertical">
                        <button type="button" class="btn btn-primary" onclick="convert()">Convert</button>

                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <h3><span class="label label-success">Result</span></h3>
                        <textarea class="form-control" rows="8">{{ $res }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        function convert(){
            let data = document.getElementById("sqlData").value;
            @this.set('SqlData', data);
            @this.call('doConvert');
        }
        </script>
    @endpush
</div>
