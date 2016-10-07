@extends('master')

@section('content')

        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Admitere</div>
                <div class="panel-body">
  
                         
                        <form class="admitere" action="store" method="POST">
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nume</label>
                             <div class="col-md-6">
                                 <input id="nume" type="text" class="form-control" name="name" required autofocus>
                             </div>
                     </div>   
                     <div class="form-group">
                            <label for="prenume" class="col-md-4 control-label">Preume</label>
                            <div class="col-md-6">
                                <input id="prenume" type="text" class="form-control" name="prenume" >
                                  </div>
                     </div>   
                     <div class="form-group">
                            <label for="patronim" class="col-md-4 control-label">Patronim</label>
                            <div class="col-md-6">
                                <input id="patronim" type="text" class="form-control" name="patronim">
                                  </div>
                     </div>
                     <div class="form-group">
                            <label for="sex" class="col-md-4 control-label">Sex</label>
                            <div class="col-md-6">
                                <select id="lib_inst" name="lib_inst" class="form-control">
                                        <option value="1">Masculin</option>
                                        <option value="2">Feminin</option>
                                    </select>
                                  </div>
                     </div>
                       <select id="nationalitate" name="natia" class="form-control">
                                <option value="67">Afgan</option>
                                <option value="21">Albanez</option>
                                <option value="92">Algerian</option>
                                <option value="41">American</option>
                                <option value="106">Angolez</option>
                                <option value="115" selected="">Moldovean</option>
                                    </select>
                                                                    </div>      
</form>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                </div>
            </div>
        </div>
@endsection
