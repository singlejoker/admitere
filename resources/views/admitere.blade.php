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
                            <label for="data" class="col-md-4 control-label">Data nasterii</label>
                            <div class="col-md-6">
                                <input id="data" type="text" class="form-control" name="data">
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
                            <label for="raion" class="col-md-4 control-label">Raion</label>
                            <div class="col-md-6">
                                <select id="raion" name="raion" class="form-control">
                                <option value="000">Selectați raionul</option>
                                <option value="7">Cahul</option>
                                <option value="8">Cantemir</option>
                                <option value="5">Basarabeasca</option>
                                <option value="35">Găgăuzia</option>
                                <option value="1">Chișinău</option>
                                <option value="2">Bălți</option>
                                <option value="3">Bender</option>
                                <option value="4">Anenii Noi</option>
                                <option value="6">Briceni</option>
                                <option value="9">Călărași</option>
                                <option value="10">Căușeni</option>
                                <option value="11">Cimișlia</option>
                                <option value="12">Criuleni</option>
                                <option value="13">Dondușeni</option>
                                <option value="14">Drochia</option>
                                <option value="15">Edineț</option>
                                <option value="16">Fălești</option>
                                <option value="17">Florești</option>
                                <option value="18">Glodeni</option>
                                <option value="19">Hâncești</option>
                                <option value="20">Ialoveni</option>
                                <option value="21">Leova</option>
                                <option value="22">Nisporeni</option>
                                <option value="23">Ocnița</option>
                                <option value="24">Orhei</option>
                                <option value="25">Rezina</option>
                                <option value="26">Râșcani</option>
                                <option value="27">Sangerei</option>
                                <option value="28">Soroca</option>
                                <option value="29">Strașeni</option>
                                <option value="30">Șoldanești</option>
                                <option value="31">Ștefan Vodă</option>
                                <option value="32">Taraclia</option>
                                <option value="33">Telenești</option>
                                <option value="34">Ungheni</option>
                                <option value="36">Stânga Nistrului</option>
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
                           
                  <!-- <div class="capitol-form" style="width: 100%; float:left; ">
                        Datele despre studii
                    </div> -->
                  
                     <div class="form-group">
                            <label for="inst_abs   " class="col-md-4 control-label">Instituția absolvita</label>
                            <div class="col-md-6">
                                <input id="num_inst" type="text" class="form-control" name="num_inst" >
                                  </div>
                     </div>
                     <div class="form-group">
                            <label for="inst_abs   " class="col-md-4 control-label">Anul absolvirii</label>
                            <div class="col-md-6">
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
@endsection
