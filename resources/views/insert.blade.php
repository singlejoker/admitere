@extends('master')

@section('content')

        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Inserare date</div>
                <div class="panel-body">
                    <form class="textforma" method="post" action="store">
                        Nume:<br>
                        <input type="text" name="nume" required="required"><br>
                        Prenume:<br>
                        <input type="text" name="prenume" required="required"><br>
                        Media:<br>
                        <input type="text" name="media" required="required"><br>
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                        <input type="submit" name="Insert" >
                        
                    </form>
                    
                        
            </div>
                </div>
            </div>
@endsection