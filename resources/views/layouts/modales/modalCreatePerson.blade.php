<div class="modal fade" id="createPerson">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col">
                        <h3><span class="fa fa-user"></span> 
                            New Person
                        </h3>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                            <a href="#" id='clear' class='text-white'><i class="fas fa-eraser"></i></a>
                        </div>
                    </div>
                    <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" method="POST" action="#">
                    
                    {{ csrf_field() }}

                    <input class='d-none' value='0' name='working'>
                    <input class='d-none' value='0000-00-00' name='last_login'>
                    <!-- email -->
                   <div class="form-group{{ $errors->has('email_id') ? ' has-error' : '' }}">
                       <select id="email_id" class='form-control' value='0' name="email_id" size='1'>       
                            <option value="0">Email</option>
                            @foreach($email as $emails)
                                @if($emails->status_id==7)
                                <option value="{{$emails->id}}">{{$emails->id}}-{{$emails->name}}</option>
                                @endif
                            @endforeach                   
                        </select>
                    </div>
                    <!-- gender -->
                    <div class="form-group{{$errors->has('gender_id') ? 'has-error' : ''}}">
                        <select id="gender_id" class='form-control' value='0' name="gender_id" size='1'>       
                            <option value="0">Genders</option>
                            @foreach($gender as $genders)
                                <option value="{{$genders->id}}">{{$genders->gender}}</option>                    
                            @endforeach                   
                        </select>
                    </div>
                    
                    <!-- hijos -->
                    <label>This Son?</label>
                    <div class="form-group">
                        <label class='content-input'>
                            Not
                            <input type="radio" id='no'  name='radios' class="custom-radio">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class='content-input'>
                            Yes
                                <input type="radio" id='yes' name='radios'  class="minimal">
                        </label>
                    </div>
                    <div class="form-group" id="sonDiv">
                        <div class="input-group input-group-sm">
                            <input id="numberSon" name='son' type="number" class="d-none form-control" placeholder="number son" value="0" required autofocus>
                            <span class="input-group-btn">
                                 <a href="#" class="btn btn-info btn-flat d-none" id="aSon">sons</a>
                            </span>
                        </div>
                        <div id="hijos"></div>
                    </div>
                    
                    <!-- statu -->
                    <div class="form-group{{ $errors->has('status_id') ? ' has-error' : '' }}">
                       <select id="status_id" class='form-control' value='0' name="status_id" size='1'>       
                            <option value="0">Status</option>
                            @foreach($statu as $status)
                                <option value="{{$status->id}}">{{$status->statu}}</option>                    
                            @endforeach                   
                        </select>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="form-group{{ $errors->has('brith') ? ' has-error' : '' }}">
                        <input id="brith" type="date" placeholder="brith" class="form-control" name="brith" autofocus required>
                        @if ($errors->has('brith'))
                            <span class="help-block">
                                <strong>{{ $errors->first('brith') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- location -->
                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                        <select id='location' class='form-control' value='0' size='1'>        
                            <option value='0'>Location</option>
                            @foreach($location as $locations)
                                <option value="{{$locations->id}}">{{$locations->location}}</option>                    
                            @endforeach                   
                        </select>
                    </div>
                    <!-- city -->
                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <select id="city" name='city_id' class='form-control d-none' value='0' size='1'>       
                            <option value="0">Cities</option>
                            @foreach($city as $cities)
                                <option value="{{$cities->id}}">{{$cities->city}}</option>                    
                            @endforeach                   
                        </select>
                    </div>
                    <!-- street -->
                    <div class="form-group{{$errors->has('street_id') ? 'has-error' : ''}}">
                        <input id="street" type="text" placeholder="Street" class="d-none form-control" name="street_id" autofocus required>
                        @if ($errors->has('street_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('street_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- code postal -->
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <input id="code" type="text" placeholder="Code Postal" class="form-control" name="code" autofocus required>
                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('cookiesP') ? ' has-error' : '' }}">
                        <textarea id="cookiesP" type="text" placeholder="Cookies" class="form-control" name="cookiesP" autofocus required cols="30" rows="10"></textarea>
                        @if ($errors->has('cookies'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cookies') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('seregins') ? ' has-error' : '' }}">
                        <textarea  id="seregins" type="text" placeholder="Seregins" class="form-control" name="seregins" autofocus required cols="10" rows="5"></textarea>
                        @if ($errors->has('seregins'))
                            <span class="help-block">
                                <strong>{{ $errors->first('seregins') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="modal-footer"> 
                    <div class='container'>
                        <div class="row">        
                            <div class="col-12">
                                 <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                            </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>