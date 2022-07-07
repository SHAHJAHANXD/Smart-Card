@if(session('message'))

                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                            <div class="mt-4 alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                {{session('message')}}
                                            </div>
                                            </div>
                                            </div>
@endif

@if(session('error'))

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<div class="mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                {{session('error')}}
                                            </div>
                                        </div>
                                    </div>


@endif

