<div class="modal fade" id="createPay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3><span class="fa fa-credit-card"></span> 
                        New Pay
                    </h3>
                    <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{route('Pays.store')}}">
                    
                    {{ csrf_field() }}  
                    <input value="{{rand()}}" class="d-none" name="GC" required>
                    <input value='6' class="d-none" name="status_id" required>

                    <!-- statu -->
                    <div class="form-group{{ $errors->has('person_id') ? ' has-error' : '' }}">
                       <select id="person_id" class='form-control' value='0' name="person_id" size='1'>       
                            <option value="0">People</option>
                            @foreach($person as $people)
                                <option value="{{$people->id}}">{{$people->id}} - {{$people->name}} {{$people->lastname}}</option>                    
                            @endforeach               
                        </select>
                    </div>
                    <!-- fecha de pedido -->
                    <div class="form-group{{ $errors->has('pedido') ? ' has-error' : '' }}">
                        <input id="pedido" type="date" placeholder="pedido" class="form-control" name="pedido" autofocus required>
                        @if ($errors->has('pedido'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pedido') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- fecha de retiro-->
                    
                    <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                        <input id="valor" type="number" placeholder="$$" class="form-control" name="valor" autofocus required>
                        @if ($errors->has('valor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('valor') }}</strong>
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