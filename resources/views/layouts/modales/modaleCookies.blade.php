<div class="modal fade" id="mCookies">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class='row'>
                        <div class="col">
                            <h5 class="text-uppercase text-muted mb-0">Cookies</h5>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                <a href="#!" id='editCookies' class='text-white'><i class="fas fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                    <button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class='row' id='divCookies'>
                        <div class="col-12" >
                            <kbd id='kbdCookies'></kbd>
                        </div>
                        <div class="col-12">
                            <button data-clipboard-text="align-center" class='btn btn-success bg-primary tect-white btn-icon-clipboard ' title="Copy Cookies">Copy Cookies</button>
                        </div>
                    </div>
                <form class="form-horizontal d-none" id='formCookies' method="POST" action="#">
                    {{ csrf_field() }}
                    <div class="form-group{{$errors->has('cookies') ? 'has-error' : ''}}">
                        <textarea id="cookies" type="text" class="form-control" placeholder="New Cookies" name="cookies" value="{{ old('cookies') }}" autofocus required cols="30" rows="10"></textarea>
                        @if ($errors->has('cookies'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cookies') }}</strong>
                            </span>
                        @endif
                    </div>   
                </div>
                <div class="modal-footer d-none" id='footerCookies'> 
                    <div class='container'>
                        <div class="row">        
                            <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">New Cookies</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>