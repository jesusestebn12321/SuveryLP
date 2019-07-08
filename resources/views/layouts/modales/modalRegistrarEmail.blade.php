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

                    <input class='d-none' value='7' name='status_id'>
                    <!-- name -->
                    <div class="form-group{{$errors->has('name') ? 'has-error' : ''}}">
                        <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" autofocus required>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>   
                    <!-- lastname -->
                    <div class="form-group{{$errors->has('lastname') ? 'has-error' : '' }}">
                        <input id="lastname" type="text" placeholder="Lastaname" class="form-control" name="lastname" autofocus required>
                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
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
                    <!-- email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" autofocus required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- passLP -->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="text" placeholder="Password" class="form-control" name="password" autofocus required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
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