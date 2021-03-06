@extends('softAdmin.master')

@section('content')
        <!--Start Dashboard-->
        <section class="panel">
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                            </div>
            
                            <h2 class="panel-title">Create Designation</h2>
                        </header>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal form-bordered" action="{{route('admin.saveDesignation')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="designation">Designation</label>
                                    <div class="col-md-6">
                                        <input type="text" name="designation" class="form-control" placeholder="eg.: Software Engineering" id="designation" required/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="submit" class="btn btn-primary" id="submit_btn">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <a href="{{route('admin.designation')}}" class="btn btn-default">Back to List</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- end Dashboard -->
    </section>            
@endsection

