@extends('master')

@section('content')

        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Admitere</div>
                <div class="panel-body">
  
                    
                        <form class="textforma" action="store" method="POST">
                            <div class="capitol-form">
                        Datele personale
                    </div>
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
                        <div class="form-group">
                            <label for="natiune" class="col-md-4 control-label">Nationalitate</label>
                                 <div class="col-md-6">
                            <select id="nationalitate" name="natia" class="form-control">
                                <option value="115" selected="">Moldoveană</option>
                                <option value="67">Rusă</option>
                                <option value="21">Bulgară</option>
                            </select>
                                </div> 
                        </div>
                           
                   <div class="capitol-form" style="width: 100%; float:left;">
                        Datele despre studii
                    </div> 
                  
                     <div class="form-group">
                            <label for="inst_abs   " class="col-md-4 control-label">Denumirea și localul instituției absolvite</label>
                            <div class="col-md-6 form-group">
                                <input id="prenume" type="text" class="form-control" name="prenume" >
                                  </div>
                     </div>
                     <div class="form-group">
                            <label for="inst_abs   " class="col-md-4 control-label">Anul absolvirii</label>
                            <div class="col-md-6 form-group">
                                <input id="an_abs" type="text" class="form-control" name="an_abs" >
                                  </div>
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
@endsection
